<div class="col-md-4">

    <div class="statbox widget box box-shadow">
        <div class="widget-header">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                    <h4>مدیریت ادمین ها</h4>
                </div>
            </div>
        </div>
        <div class="widget-content widget-content-area">

            <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="name" class="form-label">نام ادمین</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name"
                            >
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="email" class="form-label">ایمیل</label>
                        <input type="text" class="form-control" id="email" placeholder="" name="email"
                            >
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="mobile" class="form-label">موبایل</label>
                        <input type="text" class="form-control" id="mobile" placeholder="" name="mobile"
                            >
                    </div>
                </div>
                @error('mobile')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                        wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg> ...</svg>
                        </button>
                        <strong>خطا !</strong> {{ $message }}.</button>
                    </div>
                @enderror

                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="roles" class="form-label">انتخاب نقش</label>
                        <select id="roles" class="form-control" placeholder=" انتخاب نقش .."
                            name="parentId" wire:ignore wire:model='selectedRoles' autocomplete="off" multiple>
                            @foreach ($roles as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                @error('selectedRoles')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                        wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg> ...</svg>
                        </button>
                        <strong>خطا !</strong> {{ $message }}.</button>
                    </div>
                @enderror
                <div class="row mb-4">
                    <div class="col-sm-12">
                        <label for="permissions" class="form-label">دسترسی ها</label>
                        <select id="permissions" class="form-control" placeholder="انتخاب دسترسی .."
                            name="parentId" wire:ignore wire:model='selectedPermissions' autocomplete="off" multiple>
                            @foreach ($permissions as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                @error('selectedPermissions')
                    <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                        wire:loading.remove>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            <svg> ...</svg>
                        </button>
                        <strong>خطا !</strong> {{ $message }}.</button>
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary _effect--ripple waves-effect waves-light">
                    <span wire:loading.remove>ثبت</span>
                    <div class="spinner-border text-white me-2 align-self-center loader-sm " wire:loading></div>
                </button>
            </form>


        </div>
    </div>

</div>
