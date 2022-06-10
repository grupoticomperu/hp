@extends('layout')





@section('contenido')

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom__aside bg-image context-dark" >
          <div class="container">
            <h2 class="breadcrumbs-custom__title">proyecto</h2>
          </div>
        </div>
        <div class="breadcrumbs-custom__main bg-gray-light">
          <div class="container">
            <ul class="breadcrumbs-custom__path">
              <li><a href="/">Home</a></li>
              <li class="active">Proyecto</li>
            </ul>
          </div>
        </div>
      </section>


      <section class="section section-lg bg-white">
        <div class="container">
          <article class="blog-layout">
            <div class="blog-layout__main">
              <article class="post-single">

     
                <h4 class="post-single__title">{{ $work->title }}</h4>
                
                <img src="{{ Storage::url($work->image)  }}" alt="{{ $work->title }}" width="250" />
                <p>{!! $work->longdescription !!}</p>
                <span> ver web : </span> <a href="{{ $work->website }}">{{ $work->customer }}</a>

              </article>
     
     
            </div>


            <div class="blog-layout__aside">
    

              <div class="blog-layout__aside-item blog-layout__aside-item_bordered">

                <a class="nav-link active button button-secondary button-ujarak" href="{{ route('pages.proyecto') }}" >Ver Todos </a>
                <p class="custom-heading-line heading-8"></p>

                <p class="custom-heading-line heading-8">Últimos Clientes</p>
                <ul class="list-posts">

                  @foreach ($works->take(10) as $work )
                  <li>
                    <!-- Post Line-->
                    <article class="post-line">
                      <time class="post-line__time" datetime="2019"><span class="post-line__time-day"></span><span class="post-line__time-month">2022</span></time>
                      <div class="post-line__title"><a href="{{ route('proyecto.showp', $work) }}">{{ $work->customer }}</a></div>
                    </article>
                  </li>
                  @endforeach
                 
    
                </ul>
              </div>
    
              
    
            </div>
          </article>
        </div>
      </section>     



@stop







