<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;

class IndexController extends BaseController {

    public function __invoke() {

        $template = 'admin';

        $tags = Tag::paginate(10);


        return view('admin.tags.index', compact('template', 'tags'));
    }
}
