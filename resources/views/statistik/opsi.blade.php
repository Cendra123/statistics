@extends('templates.unapp')

@section('css')
<style type="text/css">
	.transparent {
		background-color: rgba(255,255,255,0.75);
		border-radius: 20px;
		padding: 20px 20px 20px 20px;
	}
	body{
		background-image: url("{{ asset('img/background-img.png') }}");
		background-repeat: no-repeat;
		height: 100vh;
		width: 100%;
		background-size: cover;
		background-position: center;
	}

</style>
@stop

@section('js')
@stop

@section('menu')
<!-- MENU -->
<div class="col-md-10 text-right menu-1">
	<ul>
		<li class="active"><a href="{{url('home')}}">Home</a></li>
		<li><a href="{{url('about')}}">About</a></li>
	</ul>
</div>
<!-- END MENU -->
@stop

@section('content')
<div class="colorlib-intro">
	<div class="container transparent">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 text-center colorlib-heading animate-box">
				<h2 ><b style="font-size: 60px;">{{$method->name ?? ""}}</b></h2>
				<p>{{$method->description ?? ""}}</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 animate-box">
				<span class="play text-center">
					<!-- <a href="https://www.youtube.com/watch?v=6DeaSFAnEqs" class="popup-vimeo"><i class="icon-play4"></i></a> -->
					<a href="{{$method->url ?? ''}}" class="popup-vimeo" style="background-color: transparent;">
						<img src="{{ asset('img/play-button.png') }}" style="height: 100px;width: auto;">
					</a>
				</span>
			</div>
		</div>
		<div class="row animate-box text-center" style="margin-top: 60px;">
			<!--
			<div class="col-md-1"></div>
			<div class="col-xs-12 col-md-4">
				<a href="{{ url('home/' . $role->if_yes ?? "") }}" class="col-xs-12 btn --DB--">YA</a>
			</div>
			<div class="col-md-2"></div>
			<div class="col-xs-12 col-md-4">
				<a href="{{ url('home/' . $role->if_no ?? '') }}" class="col-xs-12 btn --db--">TIDAK</a>
			</div>
			<div class="col-md-1"></div>
			-->
			@foreach($option as $option_item)
			<div class="col-xs-12 col-md-{{12/count($option)}}">
				<a href="{{ url('home/' . $option_item->id_role_then) }}" class='col-xs-12 btn {{$option_item->class}}'><b style="font-size: 25px;">{{$option_item->text}}<b></a>
			</div>
			@endforeach
		</div>
	</div>
</div>
@stop