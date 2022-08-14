<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Category;
use App\Models\Tag;

class CreateController extends BaseController {

    public function __invoke() {

        $template = 'admin';

        $categories = Category::all();

        $tags = Tag::all();


        return view('admin.posts.create', compact('template', 'categories', 'tags'));
    }
}
