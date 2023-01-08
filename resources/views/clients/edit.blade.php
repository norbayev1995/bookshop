@extends('layout')
@section('content')
    <div class="col-md-10 ml-auto mt-3">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Edit Profile</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('clients.update', ['client'=>$client])}}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.name')}}</label>
                                <input type="text" class="form-control" name="name" value="{{$client->name}}">
                            </div>
                        </div>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.passport_number')}}</label>
                                <input type="text" class="form-control" name="passport_number" value="{{$client->passport_number}}">
                            </div>
                        </div>
                    </div>
                    @error('passport_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.phone_number')}}</label>
                                <input type="text" class="form-control" name="phone_number" value="{{$client->phone_number}}">
                            </div>
                        </div>
                    </div>
                    @error('phone_number')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.birth_date')}}</label>
                                <input type="date" class="form-control" name="birth_date" value="{{$client->birth_date}}">
                            </div>
                        </div>
                    </div>
                    @error('birth_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.status')}}</label>
                                <select name="status" class="form-control">
                                    <option value="1" @if($client->status == '1') selected @endif>{{__('lang.active')}}</option>
                                    <option value="0" @if($client->status == '0') selected @endif>{{__('lang.disabled')}}</option>
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
