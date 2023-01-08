@extends('layout')
@section('content')
    <div class="main-panel" id="main-panel">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="row">
                    <div class="col-md-6 pr-1">
                        <div class="card-header">
                            <h4>{{__('lang.role')}}</h4>
                        </div>
                    </div>
                    <div class="col-md-6 pl-1">
                        <div class="">
                            <a href="{{ route('role.create') }}" class="btn btn-primary" style="margin-top: 50px; !important; margin-left: 500px; !important;">
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
                            <th>{{__('lang.role')}}</th>
                            <th class="text-right">{{__('lang.action')}}</th>
                            </thead>

                            <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <td>{{$role->name}}</td>
                                    <td class="text-right">
                                        <a class="btn btn-warning" href="{{ route('role.show', ['role'=>$role]) }}">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <a class="btn btn-success" href="{{ route('role.edit', ['role'=>$role]) }}">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <form style="display: contents;" method="POST" action="{{route('role.destroy', ['role' => $role])}}">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty

                            @endforelse
                            </tbody>
                        </table>
                        {{--                        {{$admins->links('vendor.pagination.bootstrap-5')}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
