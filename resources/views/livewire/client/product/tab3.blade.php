<div id="detail-content" class="content-div mx-lg-5 {{ $activeTab == 3 ? 'active' : '' }}">
    <div class="d-flex flex-column mb-3">
        <h5>مشخصات</h5>
        <div class="border-title"></div>
    </div>
    <div class="content-section">
        <div class="d-flex justify-content-between justify-content-lg-start me-5 gap-5">

            <div class="content-section">
                <div class="d-flex align-items-center flex-wrap gap-5">
                    @foreach ($productFeatures as $item)
                        <div class="d-flex flex-row gap-4 fs-8 text-secondary w-100">
                            <p class="w-25">{{ $item->categoryFeature->name }}</p>
                            <p class="text-secondary w-75">{{ $item->categoryFeatureValue->value }}</p>
                        </div>
                    @endforeach

                </div>
                <div class="more-content"></div>
            </div>
        </div>
        <button class="toggle-btn fs-8 text-info mt-2">
            بیشتر
            <svg width="15" height="15" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </button>
    </div>
</div>
