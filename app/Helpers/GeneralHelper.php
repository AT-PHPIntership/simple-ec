<?php
    
namespace App\Helpers;

use Flash;
use Illuminate\Mail\Message;

class GeneralHelper{

	/**
     * Set flash messags
     * @param $status Status check for flash
     * @param $messages Message send
     * @param $uri_redirect Url redirect
     */
    public static function setMessage($status, $messages, $uri_redirect = null)
    {
        if ($status) {
            Flash::success($messages['success']);
        } else {
            Flash::error($messages['error']);
        }
        
        if ($uri_redirect != null) {
            return redirect($uri_redirect);
        }
    }

}
