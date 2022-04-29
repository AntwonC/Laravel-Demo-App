<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function store() {
        
        error_log(request('name'));
        error_log(request('type'));

        return redirect('/');
    }
}
