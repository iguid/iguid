<?php

namespace App\Http\Controllers;

use Iguid\Router\Route;
use Iguid\View\Viewer;

class TestController extends Controller
{

    public function test($id)
    {
        return [
            'id' => $id,
            'name' => 'Hothaifa Jaber'
        ];
    }

    public function app()
    {
        dd((new Viewer('welcome'))->render());
    }
}
