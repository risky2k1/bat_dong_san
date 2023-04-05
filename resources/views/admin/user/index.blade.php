@extends('admin.layout.master')

@section('content')
    <table class="table table-striped table-centered mb-0">
        <thead>
        <tr>
            <th>User Information</th>
            <th>Role</th>
            <th>Balance</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td class="table-user">
                <span>{{$user->name}}</span>
                <br>
                <a href="mailto:{{$user->email}}">{{$user->email}}</a>
                <br>
                <p><a href="{{$user->phone}}">{{$user->phone}}</a></p>
            </td>
            <td>
                <span>{{$user->role}}</span>
            </td>
            <td>

            </td>
            <td class="table-action">
                <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection
