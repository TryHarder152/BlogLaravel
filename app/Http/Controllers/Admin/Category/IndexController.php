<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;

class IndexController extends BaseController {

    public function __invoke() {

        $template = 'admin';

        $categories = Category::paginate(2);


        return view('admin.categories.index', compact('template', 'categories'));
    }
}
