<div class="statbox widget box box-shadow">
    <form wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
        @foreach ($features as $feature)
            <div class="row">
                <div class="col-md-2">
                    <h6>{{ $feature->name }}</h6>
                </div>

                <div class=" col-md-6 ">
                    <select class="form-select mb-3" id="featureValueId" name="featureValue[{{ $loop->index }}]">
                        @foreach ($feature->values as $value)
                            <option value="{{ $feature->id }}_{{ $value->id }}">{{ $value->value }}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>
        @endforeach

        @error('featureValue.*')
            <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                wire:loading.remove>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <svg> ...</svg>
                </button>
                <strong>خطا !</strong> {{ $message }}.</button>
            </div>
        @enderror

        <div class="col-sm-12 text-left">
            <button class="btn btn-success ">
                <span wire:loading.remove>ذخیره</span>
                <div class="spinner-border text-white me-2 align-self-center loader-sm " wire:loading></div>
            </button>
        </div>
    </form>


</div>
