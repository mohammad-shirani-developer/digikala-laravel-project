<div>
    @push('link')
    <link rel="stylesheet" href="/client/assets-v2/css/shipping.css" />
        
    @endpush
    <section class="shipping">
        <div class="mb-3 shipping-top d-flex align-items-center ">
            <span class="d-flex align-items-center">
                <i class="fa-light fa-arrow-right ml-2"></i>
                آدرس و زمان ارسال
            </span>
            <div class="logo">
                <img src="/client/assets-v2/images/full-horizontal.svg" alt="" />
            </div>
        </div>
        <div class="shipping-content d-flex">
            <div class="shipping-right">
                <div class="shipping-address mb-3">
                    <div class="d-flex mb-3 align-items-center justify-content-between pr-2 pl-1">
                        <span class="fs-5 fw-bold">
                            آدرس های شما :
                        </span>
                        <div class="add-new-address d-flex justify-content-end">
                            <button class="d-flex align-items-center  openModalBtn ">
                                <i class="fa fa-plus ml-2"></i>
                                افزودن آدرس جدید

                            </button>
                        </div>
                    </div>
                    <div class="shipping-address__item d-flex align-items-center active">
                        <i class="fa-light fa-location-dot ml-3 fs-4"></i>
                        <div class="shipping-address__details">
                            <span class="d-block">
                                ارسال به آدرس انتخاب شده
                            </span>
                            <span>
                                بلوار بهداری خیابان سنگی کوچه ۱۰ پلاک ۷ درب سمت چپ
                            </span>
                            <button class="address-edit__btn d-flex align-items-center openModalBtn ">
                                ویرایش آدرس
                                <i class="fa fa-chevron-left mr-2"></i>
                            </button>
                        </div>
                    </div>
                    <div class="shipping-address__item d-flex align-items-center">
                        <i class="fa-light fa-location-dot ml-3 fs-4"></i>
                        <div class="shipping-address__details">
                            <span class="d-block">
                                ارسال به آدرس انتخاب شده
                            </span>
                            <span>
                                بلوار بهداری خیابان سنگی کوچه ۱۰ پلاک ۷ درب سمت چپ
                            </span>
                            <button class="address-edit__btn d-flex align-items-center">
                                ویرایش آدرس
                                <i class="fa fa-chevron-left mr-2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="shipping-type ">
                    <span class="fs-5 fw-bold mb-3 d-block">
                        نحوه ارسال :
                    </span>
                    <div class="shipping-type__item d-flex align-items-center active">
                        <i class="fa fa-truck ml-3"></i>
                        <div class="">
                            پست پیشتاز
                            <span class="shipping-type__price">
                                1,200
                                تومان
                            </span>
                        </div>

                    </div>
                    <div class="shipping-type__item d-flex align-items-center">
                        <i class="fa fa-truck ml-3"></i>
                        <div class="">
                            پست سفارشی
                            <span class="shipping-type__price">
                                27.000
                                تومان
                            </span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="shipping-left">
                <div class="final-invoice">
                    <form class="discount-code mb-3">
                        <span class="mb-1 d-block">کد تحفیف</span>
                        <div class=" d-flex justify-content-between">
                            <input type="text" name="code">
                            <button>ثبت</button>
                        </div>

                    </form>
                    <div class="d-flex align-items-center mb-3 justify-content-between">
                        <span>
                            قیمت کالاها (۱)
                        </span>
                        <span>
                            ۱,۶۵۶,۰۰۰
                            تومان

                        </span>
                    </div>
                    <div class="d-flex align-items-center mb-3 justify-content-between">
                        <span>
                            هزینه ارسال
                        </span>
                        <span>
                            ۵۹,۰۰۰
                            تومان

                        </span>
                    </div>
                    <div class="d-flex  align-items-center mb-3 justify-content-between">
                        <span>
                            سود شما از خرید


                        </span>
                        <span>
                            (۵٪)
                            ۱۵۶,۰۰۰

                            تومان

                        </span>
                    </div>
                    <div class="d-flex df align-items-center mb-3 justify-content-between">
                        <span>
                            قابل پرداخت

                        </span>
                        <span>
                            ۱,۷۱۵,۰۰۰
                            تومان

                        </span>
                    </div>
                    <button class="addToBasket-btn w-100 p-2 fs-6 mt-2">
                        ثبت سفارش
                    </button>
                </div>

            </div>
        </div>

    </section>
    <!-- Add address modal box -->

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

    @push('script')
    <script src="/client/assets-v2/js/jquery.min.js"></script>
    <script src="/client/assets-v2/js/shipping.js"></script>
    @endpush
</div>
