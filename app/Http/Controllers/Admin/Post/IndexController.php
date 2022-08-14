<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;

class IndexController extends BaseController {

    public function __invoke() {

        $template = 'admin';

        $posts = post::paginate(10);


        return view('admin.posts.index', compact('template', 'posts'));
    }
}
