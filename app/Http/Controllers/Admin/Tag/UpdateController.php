<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;
use App\Http\Requests\Admin\Tag\UpdateRequest;

class UpdateController extends BaseController {

    public function __invoke(UpdateRequest $request, Tag $tag) {
        $data = $request->validated();

        $tag->update($data);

        return redirect()->route('admin.tags.show', $tag);
    }
}
