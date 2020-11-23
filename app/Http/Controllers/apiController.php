<?php

namespace App\Http\Controllers;

use App\DogHome;
use Illuminate\Http\Request;


class apiController extends Controller
{
    public function home()
    {
        $dogInfo = DogHome::select('dog_img', 'dog_name', 'dog_old')->get();
        return json_encode(['statusCode' => 200, 'message' => 'success', 'data' => $dogInfo]);
    }

    public function postPhoto()
    {
    }
}
