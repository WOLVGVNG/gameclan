@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    @foreach($users as $user)
    <table class='table'>
        <tr>
            <th>{{$user->user_name}}<th>
            <th>{{$user->email}}<th>
        </tr>
    </table>
    @endforeach
</div>
@endsection