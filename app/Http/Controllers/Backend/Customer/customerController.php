<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 2/28/2018
 * Time: 12:18 PM
 */

namespace App\Http\Controllers\Backend\Customer;


use App\Http\Controllers\Controller;
use App\Models\Customers;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class customerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $customer=Customers::all();
        return view('Backend.Customer.index',['customers'=>$customer]);
    }


    public function viewDetails($id)
    {
        $customer = Customers::findorfail($id);
        return view('Backend.Customer.customerDetails', ['customer' => $customer]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required',
            'customer_id_no' => 'required',
            'customer_id_type'=>'required',
            'customer_id_isued_by' => 'required',
            'customer_country' => 'required',
            'customer_city' => 'required',
            'customer_resident_no' => 'required',
            'customer_cell' => 'required',
            'customer_email' => 'required',
            'validate_email' => 'required',
            'validate_password' => 'required',
            'customer_image' => '',
            'customer_id_doc' => '',

        ]);
        $customer = new Customers();
        $customer->name = $request->input('customer_name');
        $customer->id_no = $request->input('customer_id_no');
        $customer->id_type = $request->input('customer_id_type');
        $customer->issued_by = $request->input('customer_id_isued_by');
        $customer->country = $request->input('customer_country');
        $customer->city = $request->input('customer_city');
        $customer->resident_no = $request->input('customer_resident_no');
        $customer->cell = $request->input('customer_cell');
        $customer->email = $request->input('customer_email');
        $customer->image = $request->input('customer_image');
        $customer->id_doc = $request->input('customer_id_doc');

        $user = new User();
        $user->email = $request->input('validate_email');
        $user->password = $request->input('validate_password');
        $user->type = 'member';

        if ($request->file('customer_image')) {
            $customer_company_logo=$request->file('customer_image');

            $img = Image::make($customer_company_logo);

            $fileName = 'customers'.'/'.date("Y-m-d-H-i-s") .'_customer__'. $customer_company_logo->getClientOriginalName();
            $img->fit(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $customer->image=$fileName;
        }
        if ($request->file('customer_id_doc')) {
            $customer_company_logo=$request->file('customer_id_doc');

            $img = Image::make($customer_company_logo);

            $fileName = 'customer'.'/'.date("Y-m-d-H-i-s") .'customer_id_doc_'. $customer_company_logo->getClientOriginalName();
            $img->fit(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $customer->id_doc=$fileName;
        }
        $user->save();
        $customer->user()->associate($user);
        $customer->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);

    }

    public function update($id)
    {

        $customer = Customers::findorfail($id);
        return view('Backend.Customer.edit', ['customer' => $customer]);

    }

    public function saveUpdate(Request $request, $id)
    {
        $customer_id = Customers::findorfail($id);
        $this->validate($request, [
            'customer_name' => 'required',
            'customer_id_no' => 'required',
            'customer_id_type'=>'required',
            'customer_id_isued_by' => 'required',
            'customer_country' => 'required',
            'customer_city' => 'required',
            'customer_resident_no' => 'required',
            'customer_cell' => 'required',
            'customer_email' => 'required',
            'validate_email' => 'required',
            'validate_password' => 'required',
            'customer_image' => '',
            'customer_id_doc' => '',

        ]);
        $customer = new Customers();
        $customer->name = $request->input('customer_name');
        $customer->id_no = $request->input('customer_id_no');
        $customer->id_type = $request->input('customer_id_type');
        $customer->issued_by = $request->input('customer_id_isued_by');
        $customer->country = $request->input('customer_country');
        $customer->city = $request->input('customer_city');
        $customer->resident_no = $request->input('customer_resident_no');
        $customer->cell = $request->input('customer_cell');
        $customer->email = $request->input('customer_email');
        $customer->image = $request->input('customer_image');
        $customer->id_doc = $request->input('customer_id_doc');

        if ($request->file('customer_image')) {
            $customer_company_logo=$request->file('customer_image');

            $img = Image::make($customer_company_logo);

            $fileName = 'customers'.'/'.date("Y-m-d-H-i-s") .'_customer__'. $customer_company_logo->getClientOriginalName();
            $img->fit(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $customer->image=$fileName;
        }
        if ($request->file('customer_id_doc')) {
            $customer_company_logo=$request->file('customer_id_doc');

            $img = Image::make($customer_company_logo);

            $fileName = 'customer'.'/'.date("Y-m-d-H-i-s") .'customer_id_doc_'. $customer_company_logo->getClientOriginalName();
            $img->fit(600, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $customer->id_doc=$fileName;
        }
          $customer->update();
        return redirect()->route('customer')->with(['success' => 'Successfully changed']);
    }

    public function delete($id)
    {


    }

    public function activateAgent($id)
    {
        $customer = Customers::findorfail($id);
        $user = User::findorfail($customer->user_id);
        $user->activation_token = null;
        $user->status = 'active';
        $user->update();
        return redirect()->route('customer')->with(['success' => 'Successfully changed']);
    }

    public function deactivateAgent($id)
    {
        $customer = Customers::findorfail($id);
        $user = User::findorfail($customer->user_id);
        $user->status = 'disable';
        $user->update();
        return redirect()->route('customer')->with(['success' => 'Successfully changed']);
    }
    public function getFile($filename){

        return Image::make(storage_path($filename))->response();
    }


}