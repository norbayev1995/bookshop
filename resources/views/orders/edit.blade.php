@extends('layout')
@section('content')
    <div class="col-md-10 ml-auto mt-3">
        <div class="card">
            <div class="card-header">
                <h5 class="title">{{__('lang.edit')}}</h5>
{{--                @dump($errors->all())--}}
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('orders.update', ['order'=>$order])}}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.user')}}</label>
                                <select name="user_id" class="form-control">
                                    @foreach($user as $users)
                                        <option value="{{$users->id}}">{{$users->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.book')}}</label>
                                <select name="book_id" class="form-control">
                                    @foreach($book as $books)
                                        <option value="{{$books->id}}">{{$books->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.client')}}</label>
                                <select name="employee_id" class="form-control">
                                    @foreach($client as $clients)
                                        <option value="{{$clients->id}}">{{$clients->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.ordered_by')}}</label>
                                <input type="date" max="2100-01-01" min="2022-01-01" class="form-control" name="ordered_by" value="{{$order->ordered_by}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.expiry_date')}}</label>
                                <input type="date" max="2100-01-01" min="2022-01-01" class="form-control" name="expiry_date" value="{{$order->expiry_date}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.status')}}</label>
                                <select name="status" class="form-control">
                                    <option value="1" @if($order->status == '1') selected @endif>{{__('lang.active')}}</option>
                                    <option value="0" @if($order->status == '0') selected @endif>{{__('lang.disabled')}}</option>
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

