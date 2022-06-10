@extends('layout')


@section('meta-title')
{{ $pagescontacts->title }}
@stop


@section('contenido')

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url({{ Storage::url($pagescontacts->imagen) }});">
          <div class="container">
            <h2 class="breadcrumbs-custom__title">Contactenos</h2>
          </div>
        </div>
        <div class="breadcrumbs-custom__main bg-gray-light">
          <div class="container">
            <ul class="breadcrumbs-custom__path">
              <li><a href="/">Home</a></li>
              <li class="active">Contáctenos</li>
            </ul>
          </div>
        </div>
      </section>




            <!-- Contact Form-->
            <section class="section section-md bg-white" id="contacts">
                <div class="container container_bigger">
                  <div class="row justify-content-md-center justify-content-xl-between row-2-columns-bordered row-50">
                    <div class="col-md-10 col-lg-5">
                      <h3>{{ $pagescontacts->title1 }}</h3>
                      <ul class="list-creative">
                        <li>
                          <dl class="list-terms-medium list-terms-medium_secondary">
                            <dt>Dirección</dt>
                            <dd><a href="#">{{ $configurations->address }}</a></dd>
                          </dl>
                        </li>
                        <li>
                          <dl class="list-terms-medium">
                            <dt>Teléfonos</dt>
                            <dd>
                              <ul class="list-comma">
                                <li><a href="tel:#">{{ $configurations->telephono}}</a></li>
                                <li><a href="tel:#">{{ $configurations->movil}}</a></li>
                              </ul>
                            </dd>
                          </dl>
                        </li>
                        <li>
                          <dl class="list-terms-medium list-terms-medium_tertiary">
                            <dt>E-mails</dt>
                            <dd>
                              <ul class="list-comma">
                                <li><a href="mailto:#">{{ $configurations->email}}</a></li>
                               
                              </ul>
                            </dd>
                          </dl>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-10 col-lg-7 col-xl-6">
                      <h3 class="text-center">{{ $pagescontacts->title2 }}</h3>
                      <!-- RD Mailform-->
                      @if(session()->has('flash'))
                      <div class="alert alert-success "><mark>{{ session('flash') }}</mark></div>
                      @endif


                      
                      <form method="post" action="{{ route('contacts.store') }}">
                        {{ csrf_field() }}
                        <div class="row align-items-md-end row-20 row-md-30">
                          <div class="col-md-12">
                            <div class="form-wrap">
                                <label >Nombres y Apellidos</label>
                              <input class="form-control" id="contact-name" type="text" name="nombres" value="{{old('nombres')}}" required data-constraints="@Required">
                              
                              {!! $errors->first('nombres', '<span class=error>:message</span>')!!}
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-wrap">
                                <label> Celular o Telefono </label>
                              <input class="form-control" id="contact-phone" type="text" name="celular" value="{{old('celular')}}" required data-constraints="@PhoneNumber @Required">
                              {!! $errors->first('celular', '<span class=error>:message</span>')!!}
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-wrap">
                              <label>Mensaje</label>
                              <textarea class="form-control" rows= "5" id="contact-message" name="mensaje" required data-constraints="@Required"> {{old('mensaje')}} </textarea>
                              
                              @error('mensaje')
                              <mark> {{$message}} </mark>
                             @enderror
                              
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-wrap">
                                <label for="contact-email">E-mail</label>
                              <input class="form-control" id="contact-email" type="email" name="email" value="{{old('email')}}" required data-constraints="@Email @Required">
                              
                              {!! $errors->first('email', '<span class=error>:message</span>')!!}
                            </div>
                          </div>
                          <div class="col-md-12">
                            <button class="button button-block button-secondary button-ujarak" type="submit">Enviar mensaje</button>
                          </div>
                        </div>
                      </form>
                    </div>

                  </div>
                </div>
            </section>



@stop      