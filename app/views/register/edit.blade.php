@extends('layout.index')
@section('register_content')

	<h1>Editing the {{ e($list->username) }}</h1>

	@include('common.register_member_error')

	{{ Form::open(array('url'=>'register/update','method'=>'PUT')) }}
	{{ Form::token() }}

	<p> 
		{{ Form::label('name','Name: ') }}<br />
		{{ Form::text('name',$list->username) }}
	</p>

	<p> 
		{{ Form::label('email','Email: ') }}<br />
		{{ Form::text('email',$list->email) }}
	</p>
	<p> 
		{{ Form::label('description','Description: ') }}<br />
		{{ Form::textarea('description',$list->description) }}
	</p>
		{{ Form::hidden('id',$list->id) }}

	<p>{{ Form::submit('Update',array('class'=>'button')) }}</p>
	   {{ Form::close() }}
@endsection
@stop