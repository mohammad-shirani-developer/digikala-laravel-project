<div x-intersect='initializeSwiper'>
    <section class="container-fluid p-0">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach ($sliders as $item)
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="{{ $loop->index }}"
                        class="active" aria-current="true" aria-label="Slide {{ $loop->index + 1 }}"></button>
                @endforeach

            </div>
            <div class="carousel-inner">
                @foreach ($sliders as $item)
                    <div class="carousel-item {{ $loop->index == 0 ? 'active' : '' }}" data-bs-interval="2000">
                        <img src="sliders/{{ $item->image }}" class="d-block w-100" alt="{{ $item->title }}"
                            title="{{ $item->title }}" />
                    </div>
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- mobile supermarket banner -->
    <div class="container rounded-3 mt-4 d-block d-md-none">
        <img src="/client/assets/slider/supermarket.png" alt="banner" class="w-100" />
    </div>
</div>
