@extends('layout')
@section('content')
    <div class="main-panel" id="main-panel">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="card-header">
                            <h4>{{__('lang.users')}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6 pl-1">
                        <div class="">
                            <a href="{{ route('users.create') }}" class="btn btn-primary" style="margin-top: 50px; !important; margin-left: 500px; !important;">
                                {{__('lang.create')}}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>ID</th>
                            <th>{{__('lang.name')}}</th>
                            <th>{{__('lang.email')}}</th>
                            <th>{{__('lang.role')}}</th>
                            <th>{{__('lang.status')}}</th>
                            <th class="text-right">{{__('lang.action')}}</th>
                            </thead>

                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->role->name}}</td>
                                    <td>
                                        @if($user->status == 1)
                                            <div class="alert alert-success text-white">
                                                {{__('lang.active')}}
                                            </div>
                                        @else
                                            <div class="alert alert-danger text-white">
                                                {{__('lang.disabled')}}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <a class="btn btn-warning" href="{{ route('users.show', ['user'=>$user]) }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-success" href="{{ route('users.edit', ['user'=>$user]) }}">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <form style="display: contents;" method="POST" action="{{route('users.destroy', ['user' => $user])}}">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--                        {{$admins->links('vendor.pagination.bootstrap-5')}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
