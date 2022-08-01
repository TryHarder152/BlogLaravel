<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\BaseController;

class IndexController extends BaseController {

    public function __invoke() {

        $template = 'admin';

        return view('admin.main.index', compact('template'));
    }
}
