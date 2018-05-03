<?php
/**
 * Created by PhpStorm.
 * User: Chandra
 * Date: 3/8/2018
 * Time: 12:34 PM
 */

namespace App\Http\Controllers\Backend\Vehicles;


use App\Http\Controllers\Controller;
use App\Models\Vehicles;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class vehiclesController extends Controller
{
    public function index()
    {
        $booking = '';
        return view('Backend.Tours.index', ['booking' => $booking]
        );
    }

    public function list()
    {
        $vehicles=Vehicles::all();
        return view('Backend.Vehicles.index', ['vehicles' => $vehicles]
        );
    }
    public function createVehicle(Request $request){

        $this->validate($request, [
            'vehicle_name' => 'required',
            'vehicle_locations' =>'',
            'vehicle_description' => '',
            'vehicle_type' =>'',
            'no_of_people' =>'',
            'gare' =>'',
            'price' =>'',
            'cost_include_excludes' =>'',
            'group_size' =>'',
            'vehicle_image' => '',
        ]);
        $vehicle = new Vehicles();
        $vehicle->name = $request->input('vehicle_name');
        $vehicle->locations = $request->input('vehicle_locations');
        $vehicle->description = $request->input('vehicle_description');
        $vehicle->type = $request->input('vehicle_type');
        $vehicle->no_of_People = $request->input('vehicle_no_of_people');
        $vehicle->gare = $request->input('gare');
        $vehicle->driving_option = $request->input('driving_option');
        $vehicle->fule_option = $request->input('fule_option');
        $vehicle->diving_option = $request->input('diving_option');
        $vehicle->sit_pattern = $request->input('sit_pattern');
        $vehicle->rate_perday = $request->input('rate_perday');

        $vehicle->cost_includes_excludes = $request->input('vehicle_cost_include_excludes');



        if ($request->file('vehicle_image')) {
            $vehicle_image=$request->file('vehicle_image');

            $img = Image::make($vehicle_image);

            $fileName = 'vehicles'.'/'.date("Y-m-d-H-i-s") .'_vehicles__'. $vehicle_image->getClientOriginalName();
            $img->fit(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $vehicle->image=$fileName;        }


        $vehicle->save();
        return redirect()->back()->with(['success' => 'Created Successfully']);
    }

    public function editVehicle($id)
    {
        $vehicle=Vehicles::findorFail($id);
        return view('Backend.Vehicles.edit',['vehicle' => $vehicle]);
    }


    public function storeVehicle(Request $request){

        $this->validate($request, [
            'vehicle_name' => 'required',
            'vehicle_locations' =>'',
            'vehicle_description' => '',
            'vehicle_type' =>'',
            'no_of_people' =>'',
            'gare' =>'',
            'price' =>'',
            'cost_include_excludes' =>'',
            'group_size' =>'',
            'vehicle_image' => '',
        ]);
        $vehicle = new Vehicles();
        $vehicle->name = $request->input('vehicle_name');
        $vehicle->locations = $request->input('vehicle_locations');
        $vehicle->description = $request->input('vehicle_description');
        $vehicle->type = $request->input('vehicle_type');
        $vehicle->no_of_People = $request->input('vehicle_no_of_people');
        $vehicle->gare = $request->input('gare');
        $vehicle->driving_option = $request->input('driving_option');
        $vehicle->fule_option = $request->input('fule_option');
        $vehicle->diving_option = $request->input('diving_option');
        $vehicle->sit_pattern = $request->input('sit_pattern');
        $vehicle->rate_perday = $request->input('rate_perday');

        $vehicle->cost_includes_excludes = $request->input('vehicle_cost_include_excludes');



        if ($request->file('vehicle_image')) {
            $vehicle_image=$request->file('vehicle_image');

            $img = Image::make($vehicle_image);

            $fileName = 'vehicles'.'/'.date("Y-m-d-H-i-s") .'_vehicles__'. $vehicle_image->getClientOriginalName();
            $img->fit(400, 400, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });

            Storage::disk('public')->put($fileName,$img->stream());
            $vehicle->image=$fileName;
        }


        $vehicle->save();
        return redirect()->back()->with(['success' => 'Edited Successfully']);
    }
    public function search(Request $request){

//        $search=new TourPackageSearches();
        $date['vehicle_id']=$request->input('vehicle_id');
        $data['locations']=$request->input('locations');
        $data['no_of_People']=$request->input('no_of_People');
        $data['start_date']=$request->input('start_date');
        $data['end_date']=$request->input('end_date');

        $search=Vehicles::where('locations','like','%'.$data['locations'].'%')->get();

        return view('Backend.Vehicles.vehiclesearchResult',['search'=>$search,'data'=>$data]);
    }
    public function createBooking($vehicle_id, $locations, $no_of_People,$start_date,$end_date)
    {

        return view('Backend.Vehicles.Bookings.create', [
            'vehicle_id' => $vehicle_id,
            'locations' => $locations,
            'no_of_People' => $no_of_People,
            'start_date' => $start_date,
            'end_date' => $end_date
        ]);
    }

    public function viewDetails($id)
    {
        $vehicle = Vehicles::findorfail($id);
        return view('Backend.Vehicles.vehicleDetails', ['vehicle' => $vehicle]);
    }
    public function activateVehicle($id)
    {
        $vehicle = vehicles::findorfail($id);
        $user = User::findorfail($vehicle->user_id);
        $user->activation_token = null;
        $user->status = 'active';
        $user->update();
        return redirect()->route('vehicles.list')->with(['success' => 'Successfully changed']);
    }

    public function deactivateVehicle($id)
    {
        $vehicle = vehicles::findorfail($id);
        $user = User::findorfail($vehicle->user_id);
        $user->status = 'disable';
        $user->update();
        return redirect()->route('vehicles.list')->with(['success' => 'Successfully changed']);
    }




}