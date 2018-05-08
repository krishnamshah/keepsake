<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/11/2018
 * Time: 2:27 PM
 */

namespace App\Http\Controllers\Backend\Admin;
use App\Http\Controllers\Controller;

class dashboardController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth');

    }

    public function index(){
        return view('Backend.Admin.dashboard');
    }
}