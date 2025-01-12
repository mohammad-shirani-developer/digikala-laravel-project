<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\ProductImage;

interface ProductRepositoryInterface
{
    public function submit($FormData, $productId, $photos, $coverIndex);

    public function submitToProduct($FormData, $productId);

    public function submitToSeoItem($FormData, $productId);

    public function submitToProductImage($photos, $productId, $coverIndex);

    public function saveImages($productId, $photos);

    public function generateProductCode();

    public function removeProduct(Product $product);

    public function submitProductContent($FormData, $productId);

    public function removeOldPhoto(ProductImage $productImage, $productId);

    public function setCoverOldImage($photoId, $productId);
}