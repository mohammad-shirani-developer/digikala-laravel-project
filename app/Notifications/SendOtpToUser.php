<?php

namespace App\Notifications;

use Carbon\Carbon;
use Ghasedak\DataTransferObjects\Request\InputDTO;
use Ghasedak\DataTransferObjects\Request\ReceptorDTO;
use Ghasedaksms\GhasedaksmsLaravel\Message\GhasedaksmsVerifyLookUp;
use Ghasedaksms\GhasedaksmsLaravel\Notification\GhasedaksmsBaseNotification;
use Illuminate\Bus\Queueable;

class SendOtpToUser extends GhasedaksmsBaseNotification
{
    use Queueable;
    protected $activeCode;

    public function __construct($activeCode)
    {
        $this->activeCode = $activeCode;
    }

    public function toGhasedaksms($notifiable): GhasedaksmsVerifyLookUp
    {

        $message = new GhasedaksmsVerifyLookUp();
        $message->setSendDate(Carbon::now());
        $message->setReceptors([new ReceptorDTO($notifiable->mobile, env('GHASEDAK_SMS_API_KEY'))]);
        $message->setTemplateName('Ghasedak');
        $message->setInputs([new InputDTO('code', $this->activeCode)]);
        return $message;
    }
}
