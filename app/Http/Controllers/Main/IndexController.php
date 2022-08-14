<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends BaseController {

    public function __invoke() {

        $template = 'main';


        return view('main.index', compact('template'));
    }
}
