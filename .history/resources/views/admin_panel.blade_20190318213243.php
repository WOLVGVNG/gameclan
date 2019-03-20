@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    @for($user as $key => $users)
        <p>{{$user->name}}
    @endfor
</div>
@endsection