<?php

namespace App\Http\Controllers\Admin\Tag;

class CreateController extends BaseController {

    public function __invoke() {

        $template = 'admin';


        return view('admin.tags.create', compact('template'));
    }
}
