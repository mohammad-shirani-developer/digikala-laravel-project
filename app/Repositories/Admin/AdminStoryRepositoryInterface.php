<?php

namespace App\Repositories\Admin;



interface AdminStoryRepositoryInterface
{
    public function submit($formData, $thumbnail, $story);

    public function delete($story);

    public function changeStatus($story);
}
