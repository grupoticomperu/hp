@extends('layout')


@section('title')
{{ $service->title }}
@stop

@section('meta-title')
{{ $service->title }}
@stop

@section('meta-description')
{{ $service->shortdescription }}
@stop

@section('keywords')
{{ $service->shortdescription }}
@stop


@section('contenido')


      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom">
            <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url({{ Storage::disk("s3")->url($service->imagen1) }});">
              <div class="container">
                <h2 class="breadcrumbs-custom__title">{{ $service->title }}</h2>
              </div>
            </div>
            <div class="breadcrumbs-custom__main bg-gray-light">
              <div class="container">
                <ul class="breadcrumbs-custom__path">
                  <li><a href="/">Inicio</a></li>
                  <li class="active">Servicios</li>
                </ul>
              </div>
            </div>
      </section>


      <section class="section section-sm bg-white text-center">
        <div class="container">
          <h2>¿ porque Nosotros ?</h2>
          <div class="row row-30">
{{-- 
            @foreach ($whies as $why)
              <div class="col-md-6 col-lg-4">
                            <!-- Box Alice-->
                            <article class="box-alice">
                              <div class="box-alice__inner">
                                <div class="box-alice__aside">
                                  <div class="box-alice__icon-outer"><span class="box-alice__icon {{$why->image}}"></span></div>
                                </div>
                                <div class="box-alice__main">
                                  <h5 class="box-alice__title">{{$why->title}}</h5>
                                  <p>{{$why->description}}</p>
                                </div>
                              </div>
                            </article>
              </div>
           @endforeach --}}
          </div>
        </div>
      </section>
       


      



      <section class="bg-gray-lighter object-wrap">
            <div class="section-xxl">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5">
                    {!! $service->shortdescription !!}
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image" style="background-image: url({{ Storage::disk("s3")->url($service->imagen2) }})"></div>
    
          </section>



          <section class="section-xl bg-default">
            <div class="container">

    
              <div class="row justify-content-md-center flex-lg-row-reverse align-items-lg-center justify-content-lg-between row-50">
                <div class="col-md-9 col-lg-5">
                  {!! $service->longdescription !!}
                </div>
                <div class="col-md-9 col-lg-6"><img src="{{ Storage::disk("s3")->url($service->imagen3) }}" alt="" width="652" height="491"/>
                </div>
              </div>
    
            </div>
          </section>


          <section class="section parallax-container bg-gray-darker" data-parallax-img="{{ Storage::disk("s3")->url($service->imagen4) }}">
            <div class="parallax-content">
              <div class="container section-xxl text-center">
                <h2>{{ $service->titlemarket }}</h2>
                <p>{{ $service->descriptionmarket }}</p><a class="button button-primary" href="{{ route('pagecontacs.index')}}">{{ $service->urlmarket }}</a>
              </div>
            </div>
          </section>

          




	
@stop
