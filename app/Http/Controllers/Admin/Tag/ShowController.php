<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;

class ShowController extends BaseController {

    public function __invoke(Tag $tag) {

        $template = 'admin';


        return view('admin.tags.show', compact('template', 'tag'));
    }
}
