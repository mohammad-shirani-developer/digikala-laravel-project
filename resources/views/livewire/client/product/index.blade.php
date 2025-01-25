<div>
    @push('style')
        <link rel="stylesheet" href="/client/css/product.css" />
    @endpush
    <!-- === mobile add to card === -->
    <div class="fixed-bottom bg-white d-lg-none border-top bg-danger py-4 px-3">
        <!-- text slider -->
        <div class="slider">
            <p class="active text-danger fs-9 fw-medium">❤️ ۵۰۰+ نفر به این کالا علاقه دارند</p>
            <p class="text-success fs-9 fw-medium">🤩 بهترین قیمت در ۳۰ روز گذشته</p>
            <p class="text-success fs-9 fw-medium">🧺 در سبد خرید ۱۰۰۰+ نفر</p>
        </div>
        <div class="d-flex align-items-center justify-content-between">
            <button class="btn btn-danger py-2 fs-9">افزودن به سبر خرید</button>
            <div class="d-flex align-items-center justify-content-end">
                <button type="button" class="bg-transparent border-0" data-bs-toggle="tooltip" data-bs-placement="left"
                    title="این کالا توسط فروشنده آن قیمت گذاری شده">
                    <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-secondary">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                    </svg>
                </button>
                <p class="fs-9">20,430,000</p>
                <p class="fs-9 fw-light me-1">تومان</p>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="breadcrumb fs-8 text-secondary d-flex align-items-center gap-2">
        <a href="#" class="text-secondary">دیجی کالا</a>
        <p>/</p>
        <a href="#" class="text-secondary">کالای دیجیتال</a>
        <p>/</p>
        <a href="#" class="text-secondary">ساعت هوشمند</a>
    </div>

    <!-- ====== Product Detail ====== -->
    <section class="my-lg-5 row mx-lg-5">
        <!-- === Picture === -->
        <livewire:client.product.gallery :coverImage='$product->coverImage' :productId='$product->id' :images='$product->images' />

        <!-- === Title & Details === -->
        <livewire:client.product.details :name='$product->name' />

        <!-- === Seller Detail === -->
        <livewire:client.product.buy-box :productId='$product->id' :price='$product->price' :discount='$product->discount' :finalPrice='$product->finalPrice' />

    </section>

    <!-- ====== Product Options ====== -->
    <section class="container my-lg-5 mx-auto d-flex align-items-center justify-content-center gap-md-5 options">
        <a href="#" class="text-secondary d-flex flex-wrap align-items-center justify-content-center gap-2">
            <img src="/client/assets/Product/express-delivery.svg" alt="express-delivery" />
            <p class="fs-8">امکان تحویل اکسپرس</p>
        </a>
        <a href="#" class="text-secondary d-flex flex-wrap align-items-center justify-content-center gap-2">
            <img src="/client/assets/Product/support.svg" alt="express-delivery" />
            <p class="fs-8">24 ساعته، 7 روز هفته</p>
        </a>
        <a href="#" class="text-secondary d-flex flex-wrap align-items-center justify-content-center gap-2">
            <img src="/client/assets/Product/cash-on-delivery.svg" alt="express-delivery" />
            <p class="fs-8">امکان پرداخت در محل</p>
        </a>
        <a href="#" class="text-secondary d-flex flex-wrap align-items-center justify-content-center gap-2">
            <img src="/client/assets/Product/days-return.svg" alt="express-delivery" />
            <p class="fs-8">هفت روز ضمانت بازگشت کالا</p>
        </a>
        <a href="#" class="text-secondary d-flex flex-wrap align-items-center justify-content-center gap-2">
            <img src="/client/assets/Product/original-products.svg" alt="express-delivery" />
            <p class="fs-8">ضمانت اصل بودن کالا</p>
        </a>
    </section>

    <!-- ====== Seller ====== -->
    <livewire:client.product.sellers />


    <!-- ====== Banner ====== -->
    <section class="my-5 container-lg container-fluid">
        <img src="/client/assets/Product/banner.jpg" alt="banner" class="w-100 rounded-3" />
    </section>

    <!-- ====== Product more Details ====== -->
    <livewire:client.product.tabs :productId='$product->id' :name='$product->name' />


    <!-- ====== Bought next to it ====== -->
    <section class="my-5 border rounded-3 p-3">
        <div class="d-flex flex-column mb-3">
            <h6>در کنارش خریداری شده</h6>
            <div class="border-title"></div>
        </div>
        <!-- products -->
        <div class="d-flex align-items-center overflow-x-scroll">
            <!-- has SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/SpecialSell.svg" alt="special sell" />
                <img src="/client/assets/Product/special sell/1.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مانستر مدل TNT مناسب برای گوشی موبایل ناتینگ فون 1</p>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="text-white bg-danger rounded-5 px-2 py-1 fs-9">9%</p>
                    <div class="d-flex align-items-center gap-2">
                        <div class="fs-8">
                            <p class="fw-bold mb-3">150,000</p>
                            <del class="text-secondary opacity-50">165,000</del>
                        </div>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has't SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/2.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مدل kapsooli مناسب برای گوشی موبایل ناتینگ Phone 1</p>
                <p class="fs-9 text-danger mb-3">تنها 3 عدد در انبار باقی مانده</p>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center gap-2">
                        <p class="fw-bold fs-8">150,000</p>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has't SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/3.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور هوکو مدل Capsule مناسب برای گوشی موبایل ناتینگ Nothing Phone 2</p>
                <p class="fs-9 text-danger mb-3">تنها 3 عدد در انبار باقی مانده</p>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center gap-2">
                        <p class="fw-bold fs-8">150,000</p>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/SpecialSell.svg" alt="special sell" />
                <img src="/client/assets/Product/special sell/1.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مانستر مدل TNT مناسب برای گوشی موبایل ناتینگ فون 1</p>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="text-white bg-danger rounded-5 px-2 py-1 fs-9">9%</p>
                    <div class="d-flex align-items-center gap-2">
                        <div class="fs-8">
                            <p class="fw-bold mb-3">150,000</p>
                            <del class="text-secondary opacity-50">165,000</del>
                        </div>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has't SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/2.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مدل kapsooli مناسب برای گوشی موبایل ناتینگ Phone 1</p>
                <p class="fs-9 text-danger mb-3">تنها 3 عدد در انبار باقی مانده</p>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center gap-2">
                        <p class="fw-bold fs-8">150,000</p>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has't SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/3.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور هوکو مدل Capsule مناسب برای گوشی موبایل ناتینگ Nothing Phone 2</p>
                <p class="fs-9 text-danger mb-3">تنها 3 عدد در انبار باقی مانده</p>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center gap-2">
                        <p class="fw-bold fs-8">150,000</p>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/SpecialSell.svg" alt="special sell" />
                <img src="/client/assets/Product/special sell/1.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مانستر مدل TNT مناسب برای گوشی موبایل ناتینگ فون 1</p>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="text-white bg-danger rounded-5 px-2 py-1 fs-9">9%</p>
                    <div class="d-flex align-items-center gap-2">
                        <div class="fs-8">
                            <p class="fw-bold mb-3">150,000</p>
                            <del class="text-secondary opacity-50">165,000</del>
                        </div>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has't SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/3.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور هوکو مدل Capsule مناسب برای گوشی موبایل ناتینگ Nothing Phone 2</p>
                <p class="fs-9 text-danger mb-3">تنها 3 عدد در انبار باقی مانده</p>
                <div class="d-flex align-items-center justify-content-end">
                    <div class="d-flex align-items-center gap-2">
                        <p class="fw-bold fs-8">150,000</p>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
            <!-- has SpecialSell -->
            <div class="border-start px-4">
                <img src="/client/assets/Product/special sell/SpecialSell.svg" alt="special sell" />
                <img src="/client/assets/Product/special sell/1.webp" alt="" width="150" />
                <p class="fs-8 my-3">کاور مانستر مدل TNT مناسب برای گوشی موبایل ناتینگ فون 1</p>
                <div class="d-flex align-items-center justify-content-between">
                    <p class="text-white bg-danger rounded-5 px-2 py-1 fs-9">9%</p>
                    <div class="d-flex align-items-center gap-2">
                        <div class="fs-8">
                            <p class="fw-bold mb-3">150,000</p>
                            <del class="text-secondary opacity-50">165,000</del>
                        </div>
                        <p class="fs-9">تومان</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('script')
        <script src="/client/js/product.js"></script>
    @endpush
</div>
