<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class ShowController extends BaseController {

    public function __invoke(Post $post) {

        $template = 'admin';

        $category = $post->category;

        $tags = '';


        return view('admin.posts.show', compact('template', 'post', 'category', 'tags'));
    }
}
