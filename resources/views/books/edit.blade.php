@extends('layout')
@section('content')
    <div class="col-md-10 ml-auto mt-3">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Edit Profile</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('books.update', ['book'=>$book])}}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.name')}}</label>
                                <input type="text" class="form-control" name="name" value="{{$book->name}}">
                            </div>
                        </div>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.description')}}</label>
                                <input type="text" class="form-control" name="description" value="{{$book->description}}">
                            </div>
                        </div>
                    </div>
                    @error('passport_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.quantity')}}</label>
                                <input type="number" class="form-control" name="quantity" value="{{$book->quantity}}">
                            </div>
                        </div>
                    </div>
                    @error('quantity')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.current_quantity')}}</label>
                                <input type="number" class="form-control" name="current_quantity" value="{{$book->current_quantity}}">
                            </div>
                        </div>
                    </div>
                    @error('current_quantity')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.status')}}</label>
                                <select name="status" class="form-control">
                                    <option value="1" @if($book->status == '1') selected @endif>{{__('lang.active')}}</option>
                                    <option value="0" @if($book->status == '0') selected @endif>{{__('lang.disabled')}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button class="btn btn-success" style="border-radius:30px; !important" type="submit">{{__('lang.save')}}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
