@extends('layout.index')
@section('register_content')

<h2>User Account Page</h2>
@if(Session::has('message'))
		<p style="color:green;"> {{ Session::get('message') }}</p>
@endif
<ul>
	@foreach($registers as $list)
		<li>{{ link_to_route('account',$list->username,array($list->id)) }} | {{ link_to_route('register_edit','Edit',array($list->id)) }}
			| {{ Form::open(array('url'=>'register/delete','method'=>'Delete','style'=>'display:inline;')) }}
			{{ Form::token() }}
			{{ Form::hidden('id',$list->id) }}
			{{ Form::submit('Delete',array('class'=>'s_button'))}}
			{{ Form::close() }}
		</li>

	@endforeach
	
</ul>
		
@endsection
@stop