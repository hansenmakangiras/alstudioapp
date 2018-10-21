<?php

namespace App\Http\Controllers;

use App\Permission;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:Superadmin');
//        $this->middleware('permission:Administer Roles & Users');
//        $this->middleware('permission:Manage Permissions');
//        $this->middleware('permission:editPermission')->only(['update','edit']);
//        $this->middleware('permission:deletePermission');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $permissions = DB::table('permissions')->latest()->paginate(10);
        $roles = Role::get(); //Get all roles
        $selectRoles = Role::pluck('name','id')->all();
        return view('permissions.index',compact('permissions','roles','selectRoles'))
            ->with('i', ($request->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get(); //Get all roles
        $selectRoles = Role::pluck('name','id')->all();
        return view('permissions.create',compact('roles','selectRoles'));
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
            'name'=>'required|max:40|unique:permissions',
            'roles' => 'required',
        ]);

        $permission = new Permission();
        $permission->name = $request->name;
        $permission->save();

        if ($request->roles <> '') {
            foreach ($request->roles as $key=>$value) {
                $role = Role::find($value);
                $role->permissions()->attach($permission);
            }
        }
        return redirect()->route('permissions.index')->with('Sukses','Permission added Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::find($id);
        return view('permissions.show', compact('id','permission'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $this->validate($request, [
            'name'=>'required',
        ]);
        $permission->name=$request->name;
        $permission->save();
        return redirect()->route('permissions.index')
            ->with('Sukses',
                'Permission'. $permission->name.' updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index')
            ->with('Sukses',
                'Permission deleted Successfully!');
    }
}
