<div class="col-xxl-12 col-xl-4 col-lg-4 col-md-5 mt-4">
    <div class="widget-content widget-content-area ecommerce-create-section">
        <div class="row">
            <div class="col-sm-12 mb-4">
                <label for="discount">درصد تخفیف</label>
                <input type="text" class="form-control" id="discount" name="discount" value="{{ @$product->discount }}">
            </div>
            @error('discount')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                    wire:loading.remove>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg> ...</svg>
                    </button>
                    <strong>خطا !</strong> {{ $message }}.</button>
                </div>
            @enderror

            <div class="col-sm-12 mb-4">
                <label for="discount_duration">تاریخ انقضا</label>
                <input type="date" class="form-control" id="discount_duration" name="discount_duration"
                    value="{{ @$product->discount_duration }}" />
            </div>
            @error('discount_duration')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                    wire:loading.remove>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg> ...</svg>
                    </button>
                    <strong>خطا !</strong> {{ $message }}.</button>
                </div>
            @enderror
            <div class="col-sm-12 mb-4">
                <div class="switch form-switch-custom switch-inline form-switch-danger">
                    <input class="switch-input" type="checkbox" role="switch" id="featured" name="featured"
                        {{ @$product->featured == true ? 'checked' : '' }}>
                    <label class="switch-label" for="featured">ویژه</label>
                </div>
            </div>
            @error('featured')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mb-4" role="alert"
                    wire:loading.remove>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg> ...</svg>
                    </button>
                    <strong>خطا !</strong> {{ $message }}.</button>
                </div>
            @enderror
            <div class="col-sm-12">
                <button class="btn btn-success w-100">
                    <span wire:loading.remove>ذخیره</span>
                    <div class="spinner-border text-white me-2 align-self-center loader-sm " wire:loading></div>
                </button>
            </div>
        </div>
    </div>
</div>
