@foreach ($homeservices as $homeservice)
  @if ($homeservice->ubication == 'derecha' )
  <section class="bg-gray-lighter object-wrap">

    
      <div class="section-xxl">
        <div class="container">

          <div class="row">
            <div class="col-lg-5">
              <h2>{{$homeservice->title}}</h2>
              <p>{{$homeservice->description}}</p><a class="button button-default button-ujarak" href="{{$homeservice->url}}">{{$homeservice->texto}}</a>
            </div>
          </div>

        </div>
      </div>
      
      <div class="object-wrap__body object-wrap__body-sizing-1 object-wrap__body-md-right bg-image" style="background-image: url({{ Storage::url($homeservice->image) }})"></div> 
    </section>
    @else

    <section class="section-xl bg-default">
      <div class="container">
        <div class="row justify-content-md-center flex-lg-row-reverse align-items-lg-center justify-content-lg-between row-50">
          <div class="col-md-9 col-lg-5">
            <h3>{{$homeservice->title}}</h3>
            <p>{{$homeservice->description}}</p>
            <a class="button button-default button-ujarak" href="{{$homeservice->url}}">{{$homeservice->texto}}</a>
          </div>
          <div class="col-md-9 col-lg-6"><img src="{{ Storage::url($homeservice->image) }}" alt="" width="652" height="491"/>
          </div>
        </div>
      </div>
    </section>

    
    @endif

@endforeach