<?php

namespace App\Repositories\Admin;



interface AdminSliderRepositoryInterface
{
    public function submit($formData, $image);

    public function delete($slider);

    public function changeStatus($slider);
}
