<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BookResource;
use App\Http\Resources\BookSingleResource;
use App\Models\Book;
use App\Models\Order;
use http\Env\Response;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $book = Book::all();
        return BookResource::collection($book);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(StoreBookRequest $request)
    {
        $status = Book::create($request->all());
        if ($status){
            return response()->json(['message' => 'Book created successfully']);
        }return response()->json(['message' => 'Error', 500]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return BookSingleResource
     */
    public function show(Book $book)
    {
        return new BookSingleResource($book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        $status = $book->update($request->all());
        if ($status){
            return response()->json(['message' => 'Book updated successfully']);
        }return response()->json(['message' => 'Error', 500]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Book $book)
    {
        $orders = Order::all();
        foreach ($orders as $order){
            if ($order->book_id == $book->id){
                return response()->json(['message' => 'Error']);
            }
        }
        $status = $book->delete();
        if ($status){
            return response()->json(['message' => 'Book deleted successfully']);
        }return response()->json(['message' => 'Error', 500]);
    }
}
