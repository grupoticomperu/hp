@extends('layout')

@section('title')
{{ $hosting->title }}
@stop

@section('meta-title')
{{ $hosting->title }}
@stop

@section('meta-description')
{{ $hosting->shortdescription }}
@stop

@section('keywords')
{{ $hosting->shortdescription }}
@stop

@section('contenido')

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url({{ Storage::url($hosting->imagen2) }});">
          <div class="container">
            <h2 class="breadcrumbs-custom__title">Hosting {{ $hosting->title }}</h2>
          </div>
        </div>
        
        <div class="breadcrumbs-custom__main bg-gray-light">
          <div class="container">
            <ul class="breadcrumbs-custom__path">
              <li><a href="/">Home</a></li>
              <li><a href="/">Hostings</a></li>
              <li class="active">{{ $hosting->title }}</li>
            </ul>
          </div>
        </div>
      </section>






      <!-- General Info-->
      <section class="section section-lg bg-white" id="about">

        <div class="container">
      
          <div class="row row-30 justify-content-md-center">


            <div class="col-md-8 col-lg-6">
              <!-- Pricing table item-->
              <article class="pricing-table__item pricing-table-modern__item pricing-table-modern__item_prefered">
                <div class="pricing-table__item-header">
                  <div class="pricing-table__item-header-bg">
                    <div class="pricing-table__item-header-bg-inner"></div>
                  </div>
                  <p class="pricing-table__item-title">{{ $hosting->title }}</p>
                </div>
                <div class="pricing-table__item-main">
                  <div class="pricing-table__item-price"><span class="pricing-table__item-price-currency">US$</span><span class="pricing-table__item-price-value">{{ $hosting->price }}</span>
                    <div class="pricing-table__item-price-aside"><span class="top"></span></div>
                  </div>
                  <div class="pricing-table__item-divider"></div>
                  <ul class="pricing-table__item-features">
                    <li><span class="pricing-table__item-title">Espacio:</span> {{ $hosting->storage }}</li>
                    <li><span class="pricing-table__item-title">Ancho de Banda:</span> {{ $hosting->bandwidth }}</li>
                    <li><span class="pricing-table__item-title">Cpanel:</span> {{ $hosting->cpanel }}</li>
                    <li><span class="pricing-table__item-title">Correos:</span> {{ $hosting->emails }}</li>
                    <li><span class="pricing-table__item-title">Base de datos:</span> {{ $hosting->bd }}</li>
                  </ul>
                  <div class="mt-3 d-flex flex-row justify-content-center"">
                    <div class="mr-2"><a class="button button-primary button-ujarak" href="#">Comprar Ahora</a></div>
                    <div class=""><a class="button button-primary button-ujarak" href="#">Contactar Ahora</a></div>
                  </div>
                </div>
              </article>
            </div>

 
          </div>
        </div>






        <div class="container">
          <div class="row row-50 justify-content-md-center justify-content-lg-start">
            <div class="col-md-10 col-lg-6">
              <div class="image-custom-1"><img src="{{ Storage::url($hosting->imagen) }}" alt="" width="601" height="359"/>
              </div>
            </div>
            <div class="col-md-10 col-lg-6">
              <div class="box-inset-1">
                <!-- Bootstrap tabs-->
                <div class="tabs-custom tabs-horizontal tabs-corporate tabs-corporate_left" id="tabs-about">
                  <!-- Nav tabs-->
   
                  <!-- Tab panes-->
                  <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-about-1">
                      <h4>{{ $hosting->title }}</h4>
                      <p>{!! $hosting->longdescription !!}</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



      </section>

      <!-- Team-->


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
