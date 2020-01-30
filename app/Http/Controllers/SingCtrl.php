<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Model\Singleton;

class SingCtrl extends BaseController {

    function show() {

        $a = Singleton::getInstance();
        $b = Singleton::getInstance();

        $a->increment();
        $compteur = $b->increment();

        return view('singleton', [
            'title' => 'Hello world !',
            'singleton' => $a,
            'instance' => $b
        ]);
    }
}