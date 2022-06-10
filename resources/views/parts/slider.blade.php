   <!-- Slider-->
   <section class="section swiper-container swiper-slider swiper_style-2 swiper-controls-modern" data-loop="true" data-autoplay="3500" data-simulate-touch="false">
    <div class="swiper-wrapper">
        @foreach ( $sliders as $slider )
        <div class="swiper-slide bg-image-dark" data-slide-bg="{{ Storage::url($slider->image) }}">
          <div class="swiper-slide-caption">
            <div class="swiper-slide-decoration" data-caption-animate="scaleInY"><span></span></div>
            <div class="container">
              <h1 data-caption-animate="fadeInUpSmall">{{$slider->title1}}</h1>
              <div class="group group-md group-middle" data-caption-animate="fadeInUpSmall" data-caption-delay="100">
                <div class="group-item">
                  <div class="group group-sm group-middle">
                    <p class="text-column">{{$slider->title2}}</p>
                    <h1>{{$slider->title3}}</h1>
                  </div>
                </div><a class="button button-lg button-primary button-ujarak" href="{{$slider->url}}">Ver más</a>
              </div>
              <p class="text-style-2" data-caption-animate="fadeInUpSmall" data-caption-delay="200">{{$slider->title4}}</p>
            </div>
          </div>
        </div>
        @endforeach




    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </section>

  <!-- Fin del slider-->