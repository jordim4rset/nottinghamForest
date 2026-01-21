<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LegalController extends Controller
{
    public function privacyPolice():View
    {
        return view('legal.privacyPolice');
    }

    public function termsCondition():View
    {
        return view('legal.termsConditions');
    }
}
