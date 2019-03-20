@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    @foreach($user in $users)
        <p>{{$user->name}}
    @endfor
</div>
@endsection