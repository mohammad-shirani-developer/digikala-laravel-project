<?php

namespace App\Repositories\client\product;


interface ClientProductRepositoryInterface
{
    public function getSingleProduct($pCode);

    public function checkProductInCart($productId);

    public function addToCart($productId);

    public function getProductFeatures($productId);

    public function ProductReviews($productId);

    public function createProductReview($FormData,$positiveItems,$negativeItems,$productId);

    public function setVote($status,$reviewId);


}
