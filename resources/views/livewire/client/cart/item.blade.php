<div class="cart-right">
    @foreach ($cartItems as $item)
        <div class="cart-item">
            <!-- cart product -->
            <div class="cart-item__product d-flex">
                <div class="cart-item__img">
                    <img src="/products/{{ $item->product->id }}/large/{{ $item->product->coverImage->path }}"
                        alt="" />
                </div>
                <div class="cart-item__details">
                    <h3 class="cart-item__title">
                        {{ $item->product->name }}
                    </h3>
                    <ul class="cart-item__info">
                        <li class="cart-item__info-item d-flex align-items-start">
                            <span style="background: #000"></span>
                            مشکی
                        </li>
                        <li class="cart-item__info-item d-flex align-items-start">
                            <i class="fs-6 ml-2 fa fa-shield-check"></i>
                            گارانتی
                        </li>
                        <li class="cart-item__info-item d-flex align-items-start">
                            <i class="fs-6 ml-2 fa fa-truck"></i>
                            ارسال با دیجی کالا
                        </li>
                        <li class="cart-item__info-item d-flex align-items-start">
                            <i class="fs-6 ml-2 fa fa-store"></i>
                            فروشنده : دیجی کالا
                        </li>
                    </ul>
                </div>
            </div>
            <!-- cart-counter & price -->
            <div class="cart-item__footer d-flex align-items-center mt-3">
                <!-- counter -->
                <div class="cart-counter">
                    <button {{ $outOfStock ? 'disable' : '' }}
                        class=" {{ $outOfStock ? 'btn-disable' : '' }} cart-counter__add">
                        <i class="fa fa-plus" wire:click='updateCartQuantity({{ $item->id }},"increment")'></i>
                    </button>

                    <span class="cart-counter__number">{{ $item->quantity }}</span>

                    @if ($item->quantity == 1)
                        <button class="cart-counter__remove">
                            <i class="fa fa-trash" wire:click='updateCartQuantity({{ $item->id }},"decrement")'></i>
                        </button>
                    @else
                        <button class="cart-counter__remove">
                            <i class="fa fa-dash" wire:click='updateCartQuantity({{ $item->id }},"decrement")'></i>
                        </button>
                    @endif

                </div>
                <!-- product price -->
                <div class="cart-item__footer-price">
                    <span class="cart-item__footer-discounted-price">
                        {{ number_format($item->discounAmoun) }} تخفیف تومان
                    </span>
                    <span class="cart-item__footer-new-price">{{ number_format($item->discountedPrice) }}</span>
                    تومان
                </div>
            </div>
        </div>
    @endforeach


</div>
