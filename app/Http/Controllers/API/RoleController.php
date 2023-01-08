<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\RoleResource;
use App\Http\Resources\RoleSingleResource;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $role = Role::all();
        return RoleResource::collection($role);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $status = Role::create($request->all());
        if ($status){
            return response()->json(['message' => 'Role created successfully']);
        }return response()->json(['message' => 'Error', 500]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Role  $role
     * @return RoleSingleResource
     */
    public function show(Role $role)
    {
        return new RoleSingleResource($role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Role $role)
    {
        $status = $role->update($request->all());
        if ($status){
            return response()->json(['message' => 'Role updated successfully']);
        }return response()->json(['message' => 'Error', 500]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Role $role)
    {
        $status = $role->delete();
        if ($status){
            return response()->json(['message' => 'Role deleted successfully']);
        }return response()->json(['message' => 'Error', 500]);
    }
}
