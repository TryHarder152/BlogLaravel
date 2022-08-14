<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use PostService;

class BaseController extends Controller {

    public $service;

    public function __construct(PostService $service) {
        $this->service = $service;
    }
}
