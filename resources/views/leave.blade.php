@extends('layouts.app')

@section('content')
	<h1>Leave</h1>
	{!! Form::open(['url' => 'leave/submit']) !!}
		<div class="form-group">
			{{Form::label('name', 'Name')}}
			{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
		</div>
		<div class="form-group">
			{{Form::label('eid', 'eId')}}
			{{Form::text('eid', '', ['class' => 'form-control', 'placeholder' => 'Enter Your Employee Id'] )}}
		</div>
		<div class="form-group">
			{{Form::label('email', 'E-Mail Address')}}
			{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
		</div>
		<div class="form-group">
			{{Form::label('message', 'Message')}}
			{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Describe your Issue'])}}
		</div>
		<div>
			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
		</div>
	{!! Form::close() !!}
@endsection
