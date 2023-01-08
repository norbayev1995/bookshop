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
                                        <p class="mb-0">{{__('lang.user')}} :</p>
                                        <b style="font-size: 20px; !important;">{{$order->user->name}}</b>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p class="mb-0">{{__('lang.client')}} :</p>
                                        <b style="font-size: 20px; !important;">{{$order->clients->name}}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p class="mb-0">{{__('lang.role')}} :</p>
                                        <b style="font-size: 20px; !important;">{{$order->book->name}}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p class="mb-0">{{__('lang.ordered_by')}} :</p>
                                        <b style="font-size: 20px; !important;">{{$order->ordered_by}}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p class="mb-0">{{__('lang.expiry_date')}} :</p>
                                        <b style="font-size: 20px; !important;">{{$order->expiry_date}}</b>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <p class="mb-0">{{__('lang.status')}} :</p>
                                        @if($order->status == true)
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
