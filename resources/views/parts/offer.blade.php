<section class="section section-lg bg-white text-center">
    <div class="container">
      <h2>Soluciones Web Profesionales</h2>
      <h6 class="text-default">Más de 20 años brindando apoyo técnologico para tu éxito.</h6>

      <div class="row row-30 justify-content-md-center">

      @foreach ($offers as $offer )
        <div class="col-md-6 col-lg-4">
          <!-- Box Chloe-->
          <article class="box-chloe box-chloe_primary">
            <div class="box-chloe__icon {{ $offer->image }}"></div>
            <div class="box-chloe__main">
              <h4 class="box-chloe__title">{{$offer->title}}</h4>
              <p>{{ $offer->description}}.</p>
              <a class="button button-sm button-default button-ujarak" href="{{ $offer->url}}">{{ $offer->texto}}</a>
            </div>
          </article>
        </div>
      @endforeach  
        



      </div>
    </div>
  </section>