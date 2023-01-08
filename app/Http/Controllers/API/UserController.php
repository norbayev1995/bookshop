<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Http\Resources\UserSingleResource;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $user = User::all();
        return UserResource::collection($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $status = User::create($request->all());
        if ($status){
            return response()->json(['message' => 'User created successfully']);
        }return response()->json(['message' => 'Error', 500]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return UserSingleResource
     */
    public function show(User $user)
    {
        return new UserSingleResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, User $user)
    {
        $status = $user->update($request->all());
        if ($status){
            return response()->json(['message' => 'User updated successfully']);
        }return response()->json(['message' => 'Error', 500]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(User $user)
    {
        $orders = Order::all();
        foreach ($orders as $order){
            if ($order->user_id == $user->id){
                return response()->json(['message' => 'Error']);
            }
        }
        $status = $user->delete();
        if ($status){
            return response()->json(['message' => 'User deleted successfully']);
        }return response()->json(['message' => 'Error', 500]);
    }
}
