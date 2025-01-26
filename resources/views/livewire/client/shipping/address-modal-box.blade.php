<div id="addressModal" class="modal addressModal">
    <div class="modal-content">
        <div class=" modal-header d-flex align-items-center justify-content-between pb-2">
            <h2>ویرایش آدرس</h2>
            <span class="close-btn">&times;</span>
        </div>
        <form id="addressForm">
            <div class="field-wrapper">
                <label for="address">نشانی پستی</label>
                <textarea name="address" id="address" rows="3"></textarea>
            </div>
            <hr>
            <div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 field-wrapper">
                        <label for="province">خیابان:</label>
                        <select id="province" name="province">
                            <option>آذربایجان غربی</option>
                            <option>آذربایجان شرقی</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 field-wrapper">
                        <label for="city">شهر:</label>
                        <select id="city" name="city">
                            <option>ارومیه</option>
                            <option>تبریز</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 col-sm-12 field-wrapper">
                        <label for="number">پلاک:</label>
                        <input type="text" id="number" name="number" required>
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-12 field-wrapper">
                        <label for="floor">واحد:</label>
                        <input type="text" id="floor" name="floor" required>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 field-wrapper">
                        <label for="postalCode">کدپستی:</label>
                        <input type="text" id="postalCode" name="postalCode" required>
                    </div>
                </div>

            </div>

            <button class="addToBasket-btn w-100 p-2 fs-5 mt-2">
                ثبت آدرس
            </button>
        </form>
    </div>
</div>
