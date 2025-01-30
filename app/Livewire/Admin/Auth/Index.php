<?php

namespace App\Livewire\Admin\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public function submit($FormData)
    {
        $validator = Validator::make($FormData, [
            'email' => 'required|exists:admins,email',
            'password' => 'required',
        ], [
            '*.required' => 'فیلد ضروری است.',
            'email.exists' => 'ایمیل نامعتبر است.'
        ]);
        $validator->validate();
        $this->resetValidation();

        $credentials=['email'=>$FormData['email'],'password'=>$FormData['password']];

        $admin=Auth::guard('admin');

        if($admin->attempt($credentials)){
            return redirect()->route('admin.dashboard.index');
        }else{
            session()->flash('message','ایمیل یا رمز عبور نامعتبر است');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::guard('admin')->logout();
        return redirect()->route('admin.auth.login');
    }


    public function render()
    {
        return view('livewire.admin.auth.index')->layout('layouts.admin.auth');
    }
}
