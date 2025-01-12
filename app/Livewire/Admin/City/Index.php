<?php

namespace App\Livewire\Admin\City;

use App\Models\City;
use App\Models\State;
use App\Repositories\Admin\AdminCityRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $staes = [];
    public $name;
    public $cityId;
    public $stateId;

    private $repository;


    public function boot(AdminCityRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    public function mount()
    {
        $this->staes = State::all();
    }

    public function submit($FormData)
    {


        $validator = Validator::make($FormData, [
            'name' => 'required|string|max:30',
            'stateId' => 'required|exists:countries,id',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
            'stateId.exists' => 'کشور نامعتبر است.'
        ]);
        $validator->validate();
        $this->resetValidation();
        $this->repository->submit($FormData, $this->cityId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function edit($city_id)
    {
        $city = City::query()->where('id', $city_id)->first();
        if ($city) {
            $this->name = $city->name;
            $this->cityId = $city->id;
            $this->stateId = $city->state_id;
        }
    }

    public function delete($city_id)
    {
        City::query()->where('id', $city_id)->delete();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد');
    }

    public function render()
    {
        $cities = City::query()->with('state')->paginate(10);
        return view('livewire.admin.city.index', [
            'cities' => $cities
        ])->layout('layouts.admin.app');
    }
}
