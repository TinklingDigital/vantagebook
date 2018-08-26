@extends('layouts.appLHS')

@section('lhs')
	<ul class="list-group">
			<h4>Shop</h4>
			<li class="list-group-item">Products</li>
			<li class="list-group-item">Orders</li>
			<li class="list-group-item">Sales</li>
			<h4>Site</h4>
			<li class="list-group-item">Edit Bussiness Info</li>
			<li class="list-group-item">Edit Site Appearance</li>
			<li class="list-group-item">Upgrade plans</li>
			<h4>Vendor <span style="font-size: 14px" class="help-text">({{$vendor->firstname.' '.$vendor->lastname}})</span></h4>
			<li class="list-group-item">Edit Bussiness Info</li>
			<li class="list-group-item">Edit Site Appearance</li>
			<li class="list-group-item">Upgrade plan</li>
	</ul>
@endsection
@section('content')      
	  <div class="jumbotron text-center">
		<h4>Dashboard for</h4>
		<h1>{{$vendor->site->name}} <span style="font-size: 18px" class="help-text">{{'@'.$vendor->site->slug}}</span></h1>
        <p>Owned by {{$vendor->firstname.' '.$vendor->lastname}} {{$vendor->created_at->diffForHumans()}}</p>
		</div>
@endsection