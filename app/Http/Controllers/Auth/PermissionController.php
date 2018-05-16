<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Permission;
use DB;
use Session;
use Illuminate\Support\Facades\Hash;
use Input;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $permissions = Permission::all();
      return view('Backend.Admin.permissions.index')->withPermissions($permissions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Backend.Admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request, [
          'display_name' => 'required|max:255',
          'name' => 'required|max:255|alphadash|unique:permissions,name',
          'description' => 'sometimes|max:255'
        ]);

         $cruds="create,read,update,delete";

        $crud = explode(',', $cruds);
        if (count($crud) > 0) {
            foreach ($crud as $x) {
                $slug = strtolower($x) . '-' . strtolower($request->resource);
                $display_name = ucwords($x . " " . $request->resource);
                $description = "Allows a user to " . strtoupper($x) . ' a ' . ucwords($request->resource);

                $permission = new Permission();
                $permission->name = $slug;
                $permission->display_name = $display_name;
                $permission->description = $description;
                $permission->save();
            }
            Session::flash('success', 'Permissions were all successfully added');
            return redirect()->route('permissions.index');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $permission = Permission::findOrFail($id);
      return view('Backend.Admin.permissions.show')->withPermission($permission);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $permission = Permission::findOrFail($id);
      return view('Backend.Admin.permissions.edit')->withPermission($permission);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'display_name' => 'required|max:255',
        'description' => 'sometimes|max:255'
      ]);
      $permission = Permission::findOrFail($id);
      $permission->display_name = $request->display_name;
      $permission->description = $request->description;
      $permission->save();

      Session::flash('success', 'Updated the '. $permission->display_name . ' permission.');
      return redirect()->route('permissions.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
