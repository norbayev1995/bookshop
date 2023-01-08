@extends('layout')
@section('content')
    <div class="col-md-10 ml-auto mt-3">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Edit</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('role.update', ['role'=>$role])}}">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>{{__('lang.name')}}</label>
                                <input type="text" class="form-control" name="name" value="{{$role->name}}">
                            </div>
                        </div>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
