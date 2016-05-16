@extends('layouts.app')

@section('content')
  <h1>{{$user->name}} | <small>{{$user->profile->location}}</small></h1>
  <div>
  	<p>
  		{{$user->profile->bio}}
    </p>
  </div>
  @if (Auth::user()->id == $user->id)
  {{link_to_route('profile.edit', 'Edit your Profile', $user->name)}}
  @endif
@stop