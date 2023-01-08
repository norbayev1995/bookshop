<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Http\Resources\ClientResource;
use App\Http\Resources\ClientSingleResource;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $client = Client::all();
        return ClientResource::collection($client);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreClientRequest $request)
    {
        $status = Client::create($request->all());
        if ($status){
            return response()->json(['message' => 'Client created successfully']);
        }return response()->json(['message' => 'Error', 500]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return ClientSingleResource
     */
    public function show(Client $client)
    {
        return new ClientSingleResource($client);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        $status = $client->update($request->all());
        if ($status){
            return response()->json(['message' => 'Client updated successfully']);
        }return response()->json(['message' => 'Error', 500]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Client $client)
    {
        $orders = Order::all();
        foreach ($orders as $order){
            if ($order->client_id == $client->id){
                return response()->json(['message' => 'Error']);
            }
        }
        $status = $client->delete();
        if ($status){
            return response()->json(['message' => 'Client deleted successfully']);
        }return response()->json(['message' => 'Error', 500]);
    }
}
