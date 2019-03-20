@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    @foreach($users as $user)
        <p>{{$user->name}}
    @endforeach
</div>
@endsection