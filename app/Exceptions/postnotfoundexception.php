<?php

namespace App\Exceptions;

use Exception;

class postnotfoundexception extends Exception
{
    function report(){

    }
    function render(){
        return view('user');

    }


}
