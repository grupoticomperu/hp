@extends('layout')

@section('title')
{{ $configurations->metatitle }}
@stop

@section('meta-title')
{{ $configurations->metatitle }}
@stop

@section('meta-description')
{{ $configurations->metadescription }}
@stop

@section('keywords')
{{ $configurations->keywords }}
@stop




@section('contenido')

	@include('parts.slider')
	@include('parts.offer')
	@include('parts.toolkit')
	
@stop

