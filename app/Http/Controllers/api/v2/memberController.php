<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
class memberController extends Controller
{
    public function index(){

       $data = Member::all();
       return $data;

    }
}
