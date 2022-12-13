<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Eloquent\RelationNotFoundException;
class PostController extends Controller
{
    public function getData()
    {
        try{
          $data =  Post::where('email','harry@gmal.com')->firstOrFail();
          $data ->load('project');
          return $data;
        }

        catch(ModelNotFoundException $exception){
            return response()->json(['error' => $exception->getMessage()]);
        }
        catch(RelationNotFoundException $exception){
            return response()->json(['error' =>$exception->getMessage()]);
        }
    }
}
