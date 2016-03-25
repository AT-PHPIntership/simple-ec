<?php

/**
 * @uses    Containner functions use for system.
 * @author  Binhdq <binhdq92@gmail.com>
 */

namespace App\Helpers;

use Flash;

class GeneralHelper{

	/**
     * Set flash message
     * 
     * @param $status
     * @param $messages
     * @param $uri_redirect
     */
    public static function setMessage($status, $messages, $uri_redirect=null)
    {
        if($status) {
            Flash::success($messages['success']);
        }else{
            Flash::error($messages['error']);
        }
        
        if($uri_redirect != null){
            return redirect($uri_redirect);
        }
    }

}