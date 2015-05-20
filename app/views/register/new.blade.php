@extends('layout.index')
@section('register_content')

	<h1>Register Page</h1>

	@include('common.register_member_error')

	{{ Form::open(array('url'=>'register/create','Method'=>'POST')) }}
	{{ Form::token() }}

	<p> {{ Form::label('name','Name: ') }}<br />
		{{ Form::text('name',Input::old('name'))}}
	</p>
	<p> {{ Form::label('email','Email: ') }} <br />
		{{ Form::text('email',Input::old('email')) }}
	</p>
	<p> {{ Form::label('description','Description: ') }} <br /> 
		{{ Form::textarea('description',Input::old('description')) }}
	</p>
	<p> {{ Form::submit('Submit',array('class'=>'button')) }} </p>

	{{ Form::close() }}
@endsection