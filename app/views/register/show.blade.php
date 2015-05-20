@extends('layout.index')
@section('register_content')
<h1>User Profile</h1>
<p>UserName: {{ e($list->username) }}</p>
<p>Email: {{ HTML::entities($list->email) }}</p>
<p>Description: {{ HTML::entities($list->description) }}</p>

	{{ link_to_route('user_account','User Account') }} |
@endsection

