<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/11/2018
 * Time: 2:48 PM
 */

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class homeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Auth::logout();
        $slider=Slider::limit(5)->get();
        $trendy=null;
        $hot=null;
        $special=null;
        return view('Frontend.home',['slider'=>$slider,'trendy'=>$trendy,'hot'=>$hot,'special'=>$special]);
    }





}
