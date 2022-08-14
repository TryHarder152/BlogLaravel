<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\Post\StoreRequest;

class StoreController extends BaseController {

    public function __invoke(StoreRequest $request) {

        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.posts.index');
    }
}
