<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 12:34 PM
 */

namespace App\Http\Controllers\Backend\Pages;


use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class pagesController extends Controller
{
    public function index()
    {
        $booking = '';
        $pages=Pages::all();
        return view('Backend.Pages.index', ['booking' => $booking,'pages' => $pages]
        );
    }

    public function list()
    {
        $pages=Pages::all();
        return view('Backend.Pages.index', ['pages' => $pages]);
    }
    public function createPages(Request $request){

        $this->validate($request, [
            'page_title' => 'required',
            'page_description' => '',
            'page_parent_page' =>'',
            'page_slug' =>'',
        ]);

        $page = new Pages();
        $page->title = $request->input('page_title');
        $page->description = $request->input('page_description');
        $page->parent_page= $request->input('page_parent_page');
        $page->slug = $request->input('page_slug');
        $page->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }
    public function search(Request $request)
    {

        $data['tag']=$request->input('page_tag');
        $data['no_of_people']=$request->input('no_of_people');
        $data['start_date']=$request->input('start_date');
        $data['end_date']=$request->input('end_date');

        $search=Pages::where('tag','like','%'.$data['tag'].'%')->get();

        return view('Backend.Pages.pagesearchResult',['search'=>$search,'data'=>$data]);
    }
    public function edit($id)
    {
        $page=Pages::findorFail($id);
        return view('Backend.Pages.edit',['page' => $page]);
    }
    public function updatePages(Request $request,$id)
    {


        $page = Pages::findorfail($id);
        $page->title = $request->input('page_title');
        $page->description = $request->input('page_description');
        $page->parent_page = $request->input('page_parent_page');
        $page->slug = $request->input('page_slug');
        $page->save();
        return redirect()->route('pages.list')->with(['success' => 'Updated Successfully']);
    }
    public function viewDetails($id)
    {
        $page = Pages::findorfail($id);
        return view('Backend.Pages.pageDetails', ['page' => $page]);
    }
    public function activatePage($id)
    {
        $page = pages::findorfail($id);
        $user = User::findorfail($page->user_id);
        $user->activation_token = null;
        $user->status = 'active';
        $user->update();
        return redirect()->route('organization')->with(['success' => 'Successfully changed']);
    }

    public function deactivatePage($id)
    {
        $page = pages::findorfail($id);
        $user = User::findorfail($page->user_id);
        $user->status = 'disable';
        $user->update();
        return redirect()->route('organization')->with(['success' => 'Successfully changed']);
    }


}