<?php

namespace App\Http\Controllers\api\v3;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class testController extends Controller
{
    public function index(){

        class bye{
            public function saybye(){
                echo"bye everyone";
            }
            }

            function tests(bye $cla){
            $cla->saybye();


            }

            $test = new bye();
            tests($test);

}
}
