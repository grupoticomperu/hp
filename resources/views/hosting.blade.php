@extends('layout')

@section('title')
{{ $title }}
@stop

@section('meta-title')
{{ $title }}
@stop

@section('meta-description')
{{ $subcategoryhosting->description }}
@stop

@section('keywords')
{{ $subcategoryhosting->keywords }}
@stop

@section('contenido')



      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url({{ Storage::url($image) }});">
          <div class="container">
            <h2 class="breadcrumbs-custom__title">{{ $title }}</h2>
          </div>
        </div>
        <div class="breadcrumbs-custom__main bg-gray-light">
          <div class="container">
            <ul class="breadcrumbs-custom__path">
              <li><a href="/">Home</a></li>
              <li><a href="#">Hosting</a></li>
              <li class="active">{{ $title }}</li>
            </ul>
          </div>
        </div>
      </section>

      <!-- Pricing Tables-->
      <section class="section section-md bg-white text-center">
        <div class="container">

          <div class="row row-30 justify-content-md-center">

            @foreach ($hostings as $hosting)
            <div class="col-md-6 col-lg-4">
              <!-- Pricing table item-->
              
                <article class="pricing-table__item pricing-table-modern__item pricing-table-modern__item_prefered">

                <div class="pricing-table__item-header">
                  <div class="pricing-table__item-header-bg">
                    <div class="pricing-table__item-header-bg-inner"></div>
                  </div>
                  <p class="pricing-table__item-title">{{ $hosting->title }}</p>
                </div>

                <div class="pricing-table__item-main">
                  <div class="pricing-table__item-price"><span class="pricing-table__item-price-currency">$</span><span class="pricing-table__item-price-value">{{ $hosting->price}}</span>
                    <div class="pricing-table__item-price-aside"><span class="top">99</span></div>
                  </div>
                  <div class="pricing-table__item-divider"></div>
                  <ul class="pricing-table__item-features">
                    <li><span class="pricing-table__item-title">Espacio:</span> {{ $hosting->storage }}</li>
                    <li><span class="pricing-table__item-title">Ancho de Banda:</span> {{ $hosting->bandwidth }}</li>
                    <li><span class="pricing-table__item-title">Cpanel:</span> {{ $hosting->cpanel }}</li>
                    <li><span class="pricing-table__item-title">Correos:</span> {{ $hosting->emails }}</li>
                    <li><span class="pricing-table__item-title">Base de datos:</span> {{ $hosting->bd }}</li>
                  </ul>
                  <div class="pricing-table__item-control"><a class="button button-default button-ujarak" href="{{ route('hostingss.show', $hosting) }}">Ver Más</a></div>
                </div>
              </article>
            </div>
            @endforeach


          </div>

        </div>
      </section>
      <!-- Why Choose Us-->



      <section class="section section-sm bg-white text-center">
        <div class="container">
          <h2>Nuestro Hosting</h2>
          <div class="row row-30">

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
           @endforeach
          </div>
        </div>
      </section>


      <!-- Your Questions-->

      <section class="section section-md bg-gray-light text-center">
        <div class="container">
          <h2>Preguntas Frecuentes</h2>
          <!-- Bootstrap collapse-->
          <div class="card-group card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="true">
            <div class="row row-30">

            

              <div class="col-md-12">
                      <!-- Bootstrap card-->
                      <?php $i=0 ?>
                  @foreach ($questions as $question)
                      
                      <?php $i=$i+1 ?>
                      <div class="card card-custom card-corporate">
                        <div class="card-heading" id="accordion1Heading{{ $i }}" role="tab">
                          <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse{{ $i }}" aria-controls="accordion1Collapse{{ $i }}" >
                            {{ $question->title}}
                              <div class="card-arrow"></div></a>
                          </div>
                        </div>
                        <div class="card-collapse collapse show" id="accordion1Collapse{{ $i }}" role="tabpanel" aria-labelledby="accordion1Heading{{ $i }}">
                          <div class="card-body">
                            <p>{{ $question->description }} </p>
                          </div>
                        </div>
                      </div>
                  @endforeach


              </div>
            

            </div>
          </div>
        </div>
      </section>






	
@stop
