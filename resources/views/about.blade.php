@extends('layout')

@section('title')
{{ $abouts->title }}
@stop

@section('meta-title')
{{ $abouts->title }}
@stop

@section('meta-description')
{{ $abouts->description }}
@stop

@section('keywords')
{{ $abouts->keywords }}
@stop

@section('contenido')

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url({{ Storage::url($abouts->imagen1) }});">
          <div class="container">
            <h2 class="breadcrumbs-custom__title">Nosotros</h2>
          </div>
        </div>
        <div class="breadcrumbs-custom__main bg-gray-light">
          <div class="container">
            <ul class="breadcrumbs-custom__path">
              <li><a href="/">Home</a></li>
              <li class="active">Nosotros</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- General Info-->
      <section class="section section-lg bg-white" id="about">
        <div class="container">
          <div class="row row-50 justify-content-md-center justify-content-lg-start">
            <div class="col-md-10 col-lg-6">
              <div class="image-custom-1"><img src="{{ Storage::url($abouts->imagen2) }}" alt="" width="601" height="359"/>
              </div>
            </div>
            <div class="col-md-10 col-lg-6">
              <div class="box-inset-1">
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-corporate tabs-corporate_left" id="tabs-about">
                  <!-- Nav tabs-->
                  <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#tabs-about-1" data-toggle="tab">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tabs-about-2" data-toggle="tab">Misión</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tabs-about-3" data-toggle="tab">Visión</a></li>
                  </ul>
                  <!-- Tab panes-->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-about-1">
                      <h4>DISEÑO WEB TICOM</h4>
                      <p>{!! $abouts->our !!}</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-about-2">
                      <h4>Nuestra Misión</h4>
                      <p>{{ $abouts->mission }}</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-about-3">
                      <h4>Nuestra Visión</h4>
                      <p>{{ $abouts->vission }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Team-->
      <section class="section section-lg bg-gray-lighter text-center" id="team">
        <div class="container">
          <h2>Nuestro Equipo</h2>

          <div class="row row-50">

          @foreach ($teams as $team )
            
       
            <div class="col-md-6 col-lg-4">
              <!-- Card Creative-->
              <article class="card-creative">
                <div class="card-creative__inner">
                  <figure class="card-creative__media"><img src="{{ Storage::url($team->image) }}" alt="{{ $team->name }}" width="230" height="211"/>
                  </figure>
                  <p class="card-creative__title">{{ $team->name }}</p>
                  <p class="card-creative__subtitle">{{ $team->rol }}</p>
                  <div class="card-creative__divider"></div>
                  <div class="card-creative__aside">
                    <ul class="list-inline list-inline-md">
                      <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-facebook" href="{{ $team->facebook }}"></a></li>
                      <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-twitter" href="{{ $team->twitter }}"></a></li>
                      <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-google-plus" href="{{ $team->youtube }}"></a></li>
                      <li><a class="icon icon-xs icon-darker icon-style-brand fa fa-pinterest-p" href="{{ $team->instagram }}"></a></li>
                    </ul>
                  </div>
                </div>
              </article>
              
            </div>

          @endforeach  

            


           
          </div>
        </div>
      </section>
	


      <section class="section-lg bg-default text-center">
        <div class="container">
          <h2>Trabajos Realizados</h2>
          <div class="row row-30 row-md-50">

          @foreach ($works->take(3) as $work )
            
            <div class="col-md-6 col-xl-4">
              <!-- Post classic-->
              <article class="post-minimal"><a class="post-minimal-figure-link" href="blog-post.html"><img src="{{ Storage::url($work->image) }}" alt="{{ $work->title }}" width="418" height="315"/></a>
                <div class="post-classic-title">
                  <h5><a href="{{ route('proyecto.showp', $work) }}">{{ $work->title }}</a></h5>
                  
                </div>
                
              </article>
            </div>
          @endforeach




          </div>
        </div>

        <a class="nav-link active button button-secondary button-ujarak" href="{{ route('pages.proyecto') }}" >Ver más</a>

      </section>






@stop
