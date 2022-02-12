<?php

namespace App\Http\Controllers;

use Iguid\Router\Route;
use Iguid\View\Viewer;

class ExampleController extends Controller
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
        return view('welcome');
        // new Viewer('welcome');
    }
}
