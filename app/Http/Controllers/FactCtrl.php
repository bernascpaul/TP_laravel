<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Model\Usine;

class FactCtrl extends BaseController {

    function createBrand($type) {

        $brand = $type;

        $new = Usine::createBrand($brand);

        return view('factory', [
            'title' => 'Factory',
            'new' => $new,
        ]);
    }
}