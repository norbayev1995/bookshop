@extends('layout')
@section('content')
    <div class="col-md-10 ml-auto mt-3">
        <div class="card">
            <div class="card-header">
                <h5 class="title">{{__('lang.edit_profile')}}</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('users.update', ['user'=>$user])}}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.name')}}</label>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                            </div>
                        </div>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.email')}}</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                            </div>
                        </div>
                    </div>
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.role')}}</label>
                                <select name="role_id" class="form-control">
                                    @foreach($role as $roles)
                                        <option value="{{$roles->id}}">{{$roles->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.status')}}</label>
                                <select name="status" class="form-control">
                                    <option value="1" @if($user->status == '1') selected @endif>{{__('lang.active')}}</option>
                                    <option value="0" @if($user->status == '0') selected @endif>{{__('lang.disabled')}}</option>
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

