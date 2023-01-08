@extends('layout')
@section('content')
    <div class="main-panel" id="main-panel">

        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title">{{__('lang.information')}}</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p class="mb-0">{{__('lang.name')}} :</p>
                                        <b style="font-size: 20px; !important;">{{$clients->name}}</b>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p class="mb-0">{{__('lang.passport_number')}} :</p>
                                        <b style="font-size: 20px; !important;">{{$clients->passport_number}}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p class="mb-0">{{__('lang.phone_number')}} :</p>
                                        <b style="font-size: 20px; !important;">{{$clients->phone_number}}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p class="mb-0">{{__('lang.birth_date')}} :</p>
                                        <b style="font-size: 20px; !important;">{{$clients->birth_date}}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p class="mb-0">{{__('lang.status')}} :</p>
                                        @if($clients->status == true)
                                            <div class="alert alert-success text-white">
                                                {{__('lang.active')}}
                                            </div>
                                        @else
                                            <div class="alert alert-danger text-white">
                                                {{__('lang.disabled')}}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
