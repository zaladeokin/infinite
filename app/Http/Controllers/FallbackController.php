<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallbackController extends Controller
{
    //Response for all unmatch routes. THis will have only one method __invoke()
    public function __invoke(){
        return '<strong> This route is not found. </strong><br> Create view for this later.';
    }
}
