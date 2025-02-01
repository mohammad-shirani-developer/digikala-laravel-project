<?php

namespace App\Livewire\Admin\AdminUser;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    use WithPagination;

    public $roles = [];
    public $permissions = [];
    public $selectedRoles = [];
    public $selectedPermissions = [];

    public function mount()
    {
        $this->roles = Role::all();
        $this->permissions = Permission::all();
    }

    public function submit($FormData)
    {

        $FormData['selectedRoles'] = $this->selectedRoles;
        $FormData['selectedPermissions'] = $this->selectedPermissions;

        $validator = Validator::make($FormData, [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'mobile' => 'required|regex:/^09[0-9]{9}$/|unique:admins,mobile',
            'selectedRoles' => 'required|array',
            'selectedRoles.*' => 'exists:roles,id',
            'selectedPermissions' => 'required|array',
            'selectedPermissions.*' => 'exists:permissions,id',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
            'stateId.exists' => 'کشور نامعتبر است.'
        ]);
        $validator->validate();
        $this->resetValidation();

        $password = $this->generatePassword();

        $admin=Admin::query()->create([
            'name'=>$FormData['name'],
            'email'=>$FormData['email'],
            'mobile'=>$FormData['mobile'],
            'password'=>Hash::make($password),
        ]);

        $admin->roles()->sync($this->selectedRoles);
        $admin->permissions()->sync($this->selectedPermissions);

        session()->flash('message'," ادمین با موفقیت اضافه شد پسورد".$password);

    }

    public function generatePassword($length = 12)
    {
        //کاراکتر های مختلف
        $numbers = '0123456789';
        $lowercase = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $symbole = '@#$%^&*()_+=-[]{}<>?,.';

        //حداقل یک حرف بزرگ ویک حرف کوچک و یک سمبول و یک عدد به پسسورد اضافه میکنیم
        $password = [
            $numbers[random_int(0, strlen($numbers) - 1)],
            $lowercase[random_int(0, strlen($lowercase) - 1)],
            $uppercase[random_int(0, strlen($uppercase) - 1)],
            $symbole[random_int(0, strlen($symbole) - 1)],
        ];

        $allcharacters = $numbers . $lowercase . $uppercase . $symbole;
        

        while (count($password) < $length) {
            $char = $allcharacters[random_int(0, strlen($allcharacters) - 1)];

            //بررسی عدم تکرار کاکترهای پشت سر هم
            if (count($password) > 0 && $password[count($password) - 1] == $char) {
                continue;
            }
            $password[] = $char;
        }

        //مخلوط کردن کاراکتر ها
        shuffle($password);

        return implode('', $password);
    }

    public function render()
    {
        $admins = Admin::query()->with('roles.permissions')->paginate(10);

        return view('livewire.admin.admin-user.index', [
            'admins' => $admins
        ])->layout('layouts.admin.app');
    }
}
