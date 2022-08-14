<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;

class EditController extends BaseController {

    public function __invoke(Tag $tag) {

        $template = 'admin';

        return view('admin.tags.edit', compact('template', 'tag'));
    }
}
