<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\BaseController;
use App\Models\Category;

class IndexController extends BaseController {

    public function __invoke() {

        $template = 'admin';

        $categories = Category::all();


        return view('admin.categories.index', compact('template', 'categories'));
    }
}
