<?php

namespace App\Http\Controllers\Admin\Main;

class IndexController extends BaseController {

    public function __invoke() {

        $template = 'admin';

        return view('admin.main.index', compact('template'));
    }
}
