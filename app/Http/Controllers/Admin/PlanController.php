<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Bpuig\Subby\Models\Plan;
use Illuminate\Support\Facades\View;


class PlanController extends Controller
{
    public function __construct()
    {
        $table = ucfirst( ( new Plan() )->getTable() );
        View::share( 'title', $table );
    }

    public function index()
    {
        $plans = Plan::query()->get();

        return view( 'admin.plans.index', [
            'plans' => $plans,
        ] );
    }
}
