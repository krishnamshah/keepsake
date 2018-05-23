<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/11/2018
 * Time: 2:27 PM
 */
namespace App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Permission;
Use DB;
use Illuminate\Support\Facades\Auth;
class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id=Auth::User()->id;
        $user_role_name= DB::table('role_user')
            ->join('roles','roles.id','=','role_user.role_id')
            ->where('role_user.user_id','=',$id)
            ->first();
        if($user_role_name->name!='superadministrator')
        {
            $user = DB::table('users')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->where('roles.name', '!=', 'superadministrator')
                ->Where('roles.name', '!=', 'administrator')
                ->get();
        }
        else{
            $user = DB::table('users')
                ->join('role_user', 'users.id', '=', 'role_user.user_id')
                ->join('roles', 'role_user.role_id', '=', 'roles.id')
                ->where('roles.name', '!=', 'superadministrator')
                ->get();
        }
//        dd($user);
        return view('Backend.Admin.dashboard',['users'=>$user]);
    }
}