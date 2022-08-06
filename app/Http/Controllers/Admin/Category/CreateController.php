<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\BaseController;

class CreateController extends BaseController {

    public function __invoke() {

        $template = 'admin';


        return view('admin.categories.create', compact('template'));
    }
}
