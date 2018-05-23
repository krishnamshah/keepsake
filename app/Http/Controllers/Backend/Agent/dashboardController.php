<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/11/2018
 * Time: 2:28 PM
 */

namespace App\Http\Controllers\Backend\Agent;

use App\Http\Controllers\Controller;
class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return ('This is agent Dashboard');
    }
}