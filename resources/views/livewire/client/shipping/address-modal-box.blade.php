<div id="addressModal" class="modal addressModal" wire:ignore.self>
    <div class="modal-content">
        <div class=" modal-header d-flex align-items-center justify-content-between pb-2">
            <h2>ویرایش آدرس</h2>
            <span class="close-btn">&times;</span>
        </div>
        <form id="addressForm" wire:submit="submit(Object.fromEntries(new FormData($event.target)))">
            <div class="field-wrapper">
                <label for="address">نشانی پستی</label>
                <textarea name="address" id="address" rows="3" wire:model='address'></textarea>
                @error('address')
                    <span class="validation-error"> {{ $message }}. </span>
                @enderror
            </div>
            <hr>
            <div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 field-wrapper">
                        <label for="province">استان:</label>
                        <select id="province" name="province" wire:change="getCity($event.target.value)"
                            wire:model='province'>
                            @foreach ($provinces as $item)
                                <option {{ $province== $item->id ? 'selected' : '' }} value="{{ $item->id }}">
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('province')
                            <span class="validation-error"> {{ $message }}. </span>
                        @enderror
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 field-wrapper">
                        <label for="city">شهر:</label>
                        <select id="city" name="city" wire:model='city'>
                            @foreach ($cities as $item)
                                <option {{ $city== $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('city')
                            <span class="validation-error"> {{ $message }}. </span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 field-wrapper">
                        <label for="postalCode">کدپستی:</label>
                        <input type="text" id="postalCode" name="postalCode" wire:model='postalCode'>
                        @error('postalCode')
                            <span class="validation-error"> {{ $message }}. </span>
                        @enderror
                    </div>

                    <div class="col-md-6 col-lg-6 col-sm-12 field-wrapper">
                        <label for="mobile">موبایل:</label>
                        <input wire:model="mobile" type="text" id="mobile" name="mobile" placeholder="09******"
                            wire:model='mobile'>
                        @error('mobile')
                            <span class="validation-error"> {{ $message }}. </span>
                        @enderror
                    </div>
                </div>

            </div>

            <button class="addToBasket-btn w-100 p-2 fs-5 mt-2">
                ثبت آدرس
            </button>
        </form>
    </div>
</div>
