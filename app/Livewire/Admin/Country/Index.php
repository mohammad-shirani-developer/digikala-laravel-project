<?php

namespace App\Livewire\Admin\Country;

use App\Models\Country;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;

    public function submit($FormData, Country $country)
    {

        $validator = Validator::make($FormData, [
            'name' => 'required|string|max:30',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
        ]);
        $validator->validate();
        $country->submit($FormData);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function render()
    {
        $countries = Country::all();
        return view('livewire.admin.country.index', [
            'countries' => $countries
        ])->layout('layouts.admin.app');
    }
}
