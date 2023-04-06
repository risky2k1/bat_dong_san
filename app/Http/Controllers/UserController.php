<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    public function __construct()
    {
        //get table name
        $table= ucfirst((new User())->getTable());
        View::share('title',$table);
    }

    public function index()
    {
        $users=User::query()->paginate();
        return view('admin.user.index',[
            'users'=>$users,
        ]);
    }
}
