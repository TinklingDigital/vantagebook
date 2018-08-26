@extends('layouts.appFLAT')

@section('content')      
	  <div class="jumbotron text-center">
		<h1>Welcome to {{$site->name}}</h1>
		<h4>This mini site would be designed for {{$site->name}} owned by {{$site->vendor->firstname.' '.$site->vendor->lastname}} since {{$site->created_at->diffForHumans()}}</h4>
        </div>
@endsection