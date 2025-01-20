<?php

namespace App\Livewire\Admin\Slider;

use App\Models\Slider;
use App\Repositories\Admin\AdminSliderRepositoryInterface;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination, WithFileUploads;

    public $image;
    public $link;
    public $title;


    private $repository;


    public function boot(AdminSliderRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function submit($formData)
    {

        if ($this->image) {
            $formData['image'] = $this->image;
        }


        $validator = Validator::make($formData, [
            'title' => 'required|string|max:50',
            'link' => 'required|url',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:1024', //1MB

        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            'image.mimes' => 'فرمت های مجاز تصویر : jpg,jpeg,png,webp !',
            'image.max' => 'سایز تصویر حداکثر : ! 1MB',

        ]);

        $validator->validate();
        $this->resetValidation();
        $this->repository->submit($formData, $this->image);
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
        $this->reset();
    }

    public function delete(Slider $slider)
    {
        $this->repository->delete($slider);

        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد');
    }

    public function changeStatus(Slider $slider)
    {
        $this->repository->changeStatus($slider);

        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function render()
    {
        $sliders = Slider::query()->paginate(10);
        return view('livewire.admin.slider.index', [
            'sliders' => $sliders
        ])->layout('layouts.admin.app');;
    }
}
