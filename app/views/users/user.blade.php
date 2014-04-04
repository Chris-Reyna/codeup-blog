@extends('layouts.master')

@section('content')
						<!--add a comma and the class or id after postcontroller for styling-->
{{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
	

	<div>
		{{ Form::label('firstname', 'Firstname') }}
		{{ Form::text('firstname') }}
		{{ Form::label('lastname', 'Lastname') }}
		{{ Form::text('lasttname') }}
	</div>
	<div>
		{{ Form::label('email', 'Email') }}
		{{ Form::text('email') }}
	</div>
	<div>
		
	</div>
	<br>
	<div>
		{{ Form::submit('Update Info')}}
	</div>

{{ Form::close() }}

@stop