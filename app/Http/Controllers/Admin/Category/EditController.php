<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;

class EditController extends BaseController {

    public function __invoke(Category $category) {

        $template = 'admin';

        return view('admin.categories.edit', compact('template', 'category'));
    }
}
