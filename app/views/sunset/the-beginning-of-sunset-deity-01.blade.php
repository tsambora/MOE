@extends('layouts.sunset.the-beginning-of-sunset-deity')

@section('head-data')
	{{ HTML::script('js/sunset/the-beginning-of-sunset-deity-01.js'); }}
	{{ HTML::style('css/sunset/the-beginning-of-sunset-deity-01.css'); }}
@stop

@section('tab-title')
	<title>The Beginning of Sunset Deity: 01</title>
@stop

@section('content')
	<div class="horizon scroll">
		<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/titik-titik.png')}}">
	</div>
	<div class="middle scroll" id = "lights">
		<div class="element02 page">   
			<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/cahaya.png')}}">
		</div>
		<div class="element03 page">
			<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/nameless.png')}}">
		</div>
	</div>
	<div class="front scroll">
		<div class="element01 page">
			<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/teks 1.png')}}">
		</div>
		<div class="element04 page">
			<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/teks 2.png')}}">
		</div>
		<div class="element05 page">
			<img alt="" src="{{asset('images/sunset/the-beginning-of-sunset-deity-01/teks 3.png')}}">
		</div>
	</div>
@stop

