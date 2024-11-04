<?php

namespace App\Http\Controllers;

use Model\Http\Request;
use Illuminante\Http\Request;

class categoryController extends Controller
{
    public function create(request $request): void{
    Category::create(attributes: [
        'title' => $request->title,
        'desription' => $request->desription,
    ]);
    }
}
