<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Http\Requests\Admin\Post\UpdateRequest;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController {

    public function __invoke(UpdateRequest $request, Post $post) {
        $data = $request->validated();

        $post = $this->service->update($post, $data);


        return redirect()->route('admin.posts.show', $post);
    }
}
