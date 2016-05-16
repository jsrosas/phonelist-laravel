@extends('layouts.app')

@section('content')
 <h1>Edit Profile</h1>
{{Form::model($user->profile, ['route'=>['profile.update', $user->name]])}}
<div class="form-group">
	{{Form::label('localtion', 'Location:')}}
	{{Form::text('location', null, ['class'=>'form-control'])}}
</div>

<div class="form-group">
	{{Form::label('bio', 'Bio:')}}
	{{Form::textarea('bio', null, ['class'=>'form-control'])}}
</div>
<div class="form-group">
	
	{{Form::submit('Update Profile',['class'=>'btn btn-primary'])}}
</div>
 
@stop