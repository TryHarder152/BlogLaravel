<?php

namespace App\Http\Controllers\Admin\Tag;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\Tag\StoreRequest;
use App\Models\Tag;

class StoreController extends BaseController {

    public function __invoke(StoreRequest $request) {

        $data = $request->validated();

        Tag::firstOrCreate($data);


        return redirect()->route('admin.tags.index');
    }
}
