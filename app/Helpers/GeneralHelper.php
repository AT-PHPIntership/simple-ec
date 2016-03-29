<?php

namespace App\Helpers;

use Flash;
use Illuminate\Mail\Message;

class GeneralHelper
{
    /**
     * Using flash message when submit form.
     *
     * @param boolean $status      check messages for success or error.
     * @param array   $messages    messages show.
     * @param string  $urlRedirect url redirect.
     *
     * @return string URL redirect
     */
    public static function setMessage($status, $messages, $urlRedirect = null)
    {
        if ($status) {
            Flash::success($messages['success']);
        } else {
            Flash::error($messages['error']);
        }
        
        if (null != $urlRedirect) {
            return redirect($urlRedirect);
        }
    }
}
