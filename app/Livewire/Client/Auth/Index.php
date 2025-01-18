<?php

namespace App\Livewire\Client\Auth;

use App\Models\User;
use App\Notifications\Channels\SmsChannel;
use App\Notifications\SendOtpToUser;
use App\Notifications\SendSmsNotification;
use App\Repositories\client\ClientAuthRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;
use PhpParser\Node\Stmt\TryCatch;

class Index extends Component
{

    public $submitCodeView = false;
    public $sendSmsError = '';
    public $userMobile;
    public $otpCode;
    public $loginToekn;
    public $codeErrorMasage = '';


    public function sendSms($FormData)
    {
        $validator = Validator::make($FormData, [
            'mobile' => ['required', 'regex:/^09\d{9}$/'],
        ], [
            'required' => 'شماره موبایل الزامیست',
            'regex' => 'شماره موبایل نامعتبر است'
        ]);
        $validator->validate();
        $this->resetValidation();

        $this->userMobile = $FormData['mobile'];
        $user = User::query()->where('mobile', $this->userMobile)->first();
        $this->otpCode = mt_rand(1000, 9999);
        $this->loginToekn = Hash::make('nfvsjnfsjsc||142');

        try {

            // $user->notify(new SendOtpToUser($this->otpCode));
            $this->submitCodeView = true;
            $userData = [
                'login_token' => $this->loginToekn,
                'otp_code' => $this->otpCode
            ];

            $user = User::query()->updateOrCreate(
                ['mobile' => $this->userMobile],
                $userData
            );
            // $user->notify(new SendOtpToUser($this->otpCode));
            $this->submitCodeView = true;
        } catch (\Exception $e) {
            $this->sendSmsError = ':متسفانه پامک ارسال نشد خطا' . $e->getMessage();
        }
    }

    public function submitUser($FormData)
    {
        $this->codeErrorMasage = false;
        $validator = Validator::make($FormData, [
            'code' => ['required', 'numeric', 'digits:4'],
        ], [
            'required' => 'شماره کد الزامیست',
            'digits' => 'کد باید چار رقمی باشد'
        ]);
        $validator->validate();
        $this->resetValidation();

        if ($FormData['code'] != $this->otpCode) {
            $this->codeErrorMasage = 'کد نامعتبر است!';
            return;
        }
        $user = User::query()->where('login_token', $this->loginToekn)->first();
        if (!$user) {
            $this->codeErrorMasage = 'کد نامعتبر است!';
            return;
        }
        Auth::login($user, true);
        return redirect()->route('client.home');
    }


    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handelProviderCallback()
    {
        $repository = new ClientAuthRepository();
        $gmailUser = Socialite::driver('google')->stateless()->user();
        $repository->checkUser($gmailUser);
        return redirect()->route('client.home');
    }

    public function render()
    {
        return view('livewire.client.auth.index')->layout('layouts.client.app');
    }
}
