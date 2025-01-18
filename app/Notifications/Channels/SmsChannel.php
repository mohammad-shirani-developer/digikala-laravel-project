<?php

namespace App\Notifications\Channels;

use Carbon\Carbon;
use Ghasedak\DataTransferObjects\Request\InputDTO;
use Ghasedak\DataTransferObjects\Request\ReceptorDTO;
use Ghasedaksms\GhasedaksmsLaravel\Message\GhasedaksmsVerifyLookUp;
use Illuminate\Notifications\Notification;

class SmsChannel
{
    public function send($notifiable, Notification $notification)
    {
        $message = new GhasedaksmsVerifyLookUp();
        $message->setSendDate(Carbon::now());
        $message->setReceptors([new ReceptorDTO($notifiable->mobile, 'client referenceId')]);
        $message->setTemplateName('Ghasedak');
        $activeCode = mt_rand(1000, 9999);
        $message->setInputs([new InputDTO('code', $activeCode)]);
        return $message;
    }
}
