<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\BaseController;
use App\Models\Category;

class ShowController extends BaseController {

    public function __invoke(Category $category) {

        $template = 'admin';


        return view('admin.categories.show', compact('template', 'category'));
    }
}
