<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;
use View;

class RouteController extends Controller
{
    /*
    *
    * Direct User based on platform
    *
    */

    private function agent()
    {
        return Agent::isPhone();
    }

    public function direct(Request $request)
    {
        switch ($request->getPathInfo()) {
            case '/': {
                    if ($this->agent() == 0) {
                        return view('d_main');
                    } else return view('m_main');
                }
        }
    }
}
