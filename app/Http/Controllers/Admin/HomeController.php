<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __construct()
    {
        $home = 'Dashboard';
        View::share( 'title', $home );
    }

    public function index(): \Illuminate\Contracts\View\View|Factory|Application
    {
        return \view( 'admin.layout.dashboard' );
    }
}
