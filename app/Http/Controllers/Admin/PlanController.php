<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Bpuig\Subby\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::query()->get();

        return view('admin.plans.index',[
            'plans'=>$plans,
        ]);
    }
}
