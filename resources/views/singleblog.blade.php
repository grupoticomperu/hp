@extends('layout')


@section('meta-title')
{{ $blogs->title }}
@stop


@section('contenido')

      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom">
        <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url({{ Storage::url($blogs->image) }});">
          <div class="container">
            <h2 class="breadcrumbs-custom__title">Blog</h2>
          </div>
        </div>
        <div class="breadcrumbs-custom__main bg-gray-light">
          <div class="container">
            <ul class="breadcrumbs-custom__path">
              <li><a href="/">Home</a></li>
              <li class="active">Blog</li>
            </ul>
          </div>
        </div>
      </section>


      <section class="section section-lg bg-white">
        <div class="container">
          <article class="blog-layout">
            <div class="blog-layout__main">
              <article class="post-single">
                <div class="post-single__header">
                  <ul class="post-single__meta">
                    <li><span class="icon mdi mdi-comment-outline"></span><a href="#">3</a></li>
                    <li><span class="icon mdi mdi-thumb-up-outline"></span><a href="#">12</a></li>
                  </ul>
                  <ul class="post-single__meta">
                    <li><span class="icon mdi icon mdi mdi-account"></span><span>by</span><a href="#">Sam Wilson</a></li>
                  </ul>
                </div>
                <div class="post-single__time-wrap">
                  <time class="post-single__time" datetime="2019"><span class="post-single__time-day">25</span><span class="post-single__time-month">June</span></time>
                </div>
                <h4 class="post-single__title">{{ $post->title }}</h4>
                <p>{!! $post->body !!}</p>


                 <img src="{{ $post->photos->first()->url }}" alt="" width="715" height="417"/>






                

{{--                 @include('partials.social-links',['description'=>$post->title])

                 --}}
    
                 @include('posts.tags')
              </article>
     
     
            </div>


            <div class="blog-layout__aside">
    
              <div class="blog-layout__aside-item blog-layout__aside-item_bordered">
                <p class="custom-heading-line heading-8">Categorias</p>
                <ul class="list-categories">
                    @foreach ($categories as $category)
                    <li><a href="{{ route('categories.showp', $category)}}">{{ $category->name }}</a><span class="count"></span></li>
                    @endforeach
                </ul>
              </div>
              <div class="blog-layout__aside-item blog-layout__aside-item_bordered">
                <p class="custom-heading-line heading-8">Latest Posts</p>
                <ul class="list-posts">
                  <li>
                    <!-- Post Line-->
                    <article class="post-line">
                      <time class="post-line__time" datetime="2019"><span class="post-line__time-day">29</span><span class="post-line__time-month">April</span></time>
                      <div class="post-line__title"><a href="blog-post.html">5 Ways to Design Your Website for Mobile Speed</a></div>
                    </article>
                  </li>
                  <li>
                    <!-- Post Line-->
                    <article class="post-line">
                      <time class="post-line__time" datetime="2019"><span class="post-line__time-day">15</span><span class="post-line__time-month">May</span></time>
                      <div class="post-line__title"><a href="blog-post.html">Creating and Managing an Advertising Campaign</a></div>
                    </article>
                  </li>
                  <li>
                    <!-- Post Line-->
                    <article class="post-line">
                      <time class="post-line__time" datetime="2019"><span class="post-line__time-day">06</span><span class="post-line__time-month">June</span></time>
                      <div class="post-line__title"><a href="blog-post.html">Creating an Appealing Brand Identity</a></div>
                    </article>
                  </li>
                </ul>
              </div>
    
              
    
            </div>
          </article>
        </div>
      </section>     



@stop







