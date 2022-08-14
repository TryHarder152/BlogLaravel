<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class EditController extends BaseController {

    public function __invoke(Post $post) {

        $template = 'admin';

        $categories = Category::all();

        $tags = Tag::all();

        return view('admin.posts.edit', compact('template', 'post', 'categories', 'tags'));
    }
}
