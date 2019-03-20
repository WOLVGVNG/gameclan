@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    @foreach($users as $user)
    <table class='table'>
        <tr>
            <th>id<th>
            <th>active<th>
            <th>banned<th>
            <th>notifiable_email<th>
            <th>user_name<th>
            <th>email<th>
            <th>email_verified_at<th>
            <th>password<th>
            <th>remember_token<th>
            <th>avatar<th>
            <th>points<th>
            <th>steam_id<th>
            <th>facebook_id<th>
            <th>google_id<th>
            <th>geo<th>
            <th>lang<th>
            <th>ref<th>
            <th>ref_status<th>
            <th>ref_code<th>
            <th>delted_at<th>
            <th>created_at<th>
            <th>updated<th>
        </tr>
    </table>
    @endforeach
</div>
@endsection