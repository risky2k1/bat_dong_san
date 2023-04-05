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
        $this->table= ucfirst((new User())->getTable());
        View::share('title',$this->table);
    }

    public function index()
    {
        $users=User::query()->paginate();
        return view('admin.user.index',[
            'users'=>$users,
        ]);
    }
}
