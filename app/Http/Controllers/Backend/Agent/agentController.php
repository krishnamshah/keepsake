<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/28/2018
 * Time: 11:37 AM
 */

namespace App\Http\Controllers\Backend\Agent;


use App\Http\Controllers\Controller;
use App\Models\Agents;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class agentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $agents = Agents::all();
        return view('Backend.Agents.index', ['agents' => $agents]);
    }

    public function viewDetails($id)
    {
        $agents = Agents::findorfail($id);
        return view('Backend.Agents.agentDetails', ['agent' => $agents]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'agent_name' => 'required',
            'agent_pan_no' => 'required',
            'agent_pan_holder' => 'required',
            'agent_url' => 'required',
            'agent_country' => 'required',
            'agent_city' => 'required',
            'agent_office_no' => 'required',
            'agent_office_fax' => 'required',
            'agent_office_email' => 'required',
            'agent_contact_person' => 'required',
            'agent_contact_person_position' => 'required',
            'agent_contact_person_phone' => 'required',
            'agent_contact_person_email' => 'required',
            'validate_email' => 'required',
            'validate_password' => 'required',
            'agent_company_logo' => '',
            'agent_company_pan_doc' => '',
            'agent_company_reg_doc' => '',
        ]);
        $agent = new Agents();
        $agent->name = $request->input('agent_name');
        $agent->pan_no = $request->input('agent_pan_no');
        $agent->pan_holder_name = $request->input('agent_pan_holder');
        $agent->website = $request->input('agent_url');
        $agent->country = $request->input('agent_country');
        $agent->city = $request->input('agent_city');
        $agent->office_no = $request->input('agent_office_no');
        $agent->fax = $request->input('agent_office_fax');
        $agent->company_email = $request->input('agent_office_email');
        $agent->name_of_person = $request->input('agent_contact_person');
        $agent->postion_of_person = $request->input('agent_contact_person_position');
        $agent->contact_person_pho = $request->input('agent_contact_person_phone');
        $agent->contact_person_email = $request->input('agent_contact_person_email');
        $agent->company_logo = $request->input('agent_company_logo');
        $agent->pan_doc = $request->input('agent_company_pan_doc');
        $agent->company_doc = $request->input('agent_company_reg_doc');
        $agent->other_details = $request->input('agent_othere_details');
        $agent->company_details = $request->input('agent_description');

        $agent_company_pan_doc = $request->file('agent_company_pan_doc');
        $agent_company_reg_doc = $request->file('agent_company_reg_doc');
        $user = new User();
        $user->email = $request->input('validate_email');
        $user->password = $request->input('validate_password');
        $user->type = 'agent';

        if ($request->file('agent_company_logo')) {
            $agent_company_logo=$request->file('agent_company_logo');

            $img = Image::make($agent_company_logo);

            $fileName = 'agents'.'/'.date("Y-m-d-H-i-s") .'_agent_company_logo_'. $agent_company_logo->getClientOriginalName();
            $img->fit(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $agent->company_logo=$fileName;
        }
        if ($request->file('agent_company_pan_doc')) {
            $agent_company_pan_doc=$request->file('agent_company_pan_doc');

            $img = Image::make($agent_company_pan_doc);

            $fileName = 'agents'.'/'.date("Y-m-d-H-i-s") .'agent_company_pan_doc_'. $agent_company_pan_doc->getClientOriginalName();
            $img->fit(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $agent->agent_company_pan_doc=$fileName;
        }
        if ($request->file('agent_company_reg_doc')) {
            $agent_company_reg_doc=$request->file('agent_company_reg_doc');

            $img = Image::make($agent_company_reg_doc);

            $fileName = 'agents'.'/'.date("Y-m-d-H-i-s") .'agent_company_reg_doc_'. $agent_company_reg_doc->getClientOriginalName();
            $img->fit(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $agent->agent_company_reg_doc=$fileName;
        }
//        $new->status = $request['status'];
//        $category = Category::where('id', $request['category'])->first();
//        $user = Auth::user();
        $user->save();
        $agent->user()->associate($user);
        $agent->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);

    }

    public function update($id)
    {

        $agent = Agents::findorfail($id);
        return view('Backend.Agents.edit', ['agent' => $agent]);

    }

    public function saveUpdate(Request $request, $id)
    {
        $agent = Agents::findorfail($id);
        $agent->name = $request->input('agent_name');
        $agent->pan_no = $request->input('agent_pan_no');
        $agent->pan_holder_name = $request->input('agent_pan_holder');
        $agent->website = $request->input('agent_url');
        $agent->country = $request->input('agent_country');
        $agent->city = $request->input('agent_city');
        $agent->office_no = $request->input('agent_office_no');
        $agent->fax = $request->input('agent_office_fax');
        $agent->company_email = $request->input('agent_office_email');
        $agent->name_of_person = $request->input('agent_contact_person');
        $agent->postion_of_person = $request->input('agent_contact_person_position');
        $agent->contact_person_pho = $request->input('agent_contact_person_phone');
        $agent->contact_person_email = $request->input('agent_contact_person_email');
        $agent->company_logo = $request->input('agent_company_logo');
        $agent->pan_doc = $request->input('agent_company_pan_doc');
        $agent->company_doc = $request->input('agent_company_reg_doc');
        $agent->other_details = $request->input('agent_othere_details');
        $agent->company_details = $request->input('agent_description');
        $agent_company_logo = $request->file('agent_company_logo');
        $agent_company_pan_doc = $request->file('agent_company_pan_doc');
        $agent_company_reg_doc = $request->file('agent_company_reg_doc');
        $agent->update();
        return redirect()->route('organization')->with(['success' => 'Successfully changed']);
    }

    public function delete($id)
    {


    }

    public function activateAgent($id)
    {
        $agent = Agents::findorfail($id);
        $user = User::findorfail($agent->user_id);
        $user->activation_token = null;
        $user->status = 'active';
        $user->update();
        return redirect()->route('organization')->with(['success' => 'Successfully changed']);
    }

    public function deactivateAgent($id)
    {
        $agent = Agents::findorfail($id);
        $user = User::findorfail($agent->user_id);
        $user->status = 'disable';
        $user->update();
        return redirect()->route('organization')->with(['success' => 'Successfully changed']);
    }
    public function getFile($filename){

        return Image::make(storage_path($filename))->response();
    }

}