<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;

class StoreController extends BaseController {

    public function __invoke(StoreRequest $request) {

        $data = $request->validated();

        Category::firstOrCreate($data);


        return redirect()->route('admin.categories.index');
    }
}
