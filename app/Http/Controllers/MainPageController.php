<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MainPageController extends BaseController
{
    public function index()
    {
        return view('v1.pages.main-page')->with(compact('products', 'categories'));
    }
}
