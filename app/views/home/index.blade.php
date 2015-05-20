@extends('layout.index')

@section('register_content')
	<h1>Home Page</h1>
	@if(Session::has('message'))
		<p style="color:green;"> {{ Session::get('message') }}</p>
	@endif
	
@endsection
