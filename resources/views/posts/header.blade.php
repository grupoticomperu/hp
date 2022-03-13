        <header class="container-flex space-between">
          <div class="date">
            <span class="c-gray-1">{{ optional($post->published_at)->format('M d')  }} / {{ $post->owner->name}}</span>
          
          </div>

          @if($post->category)
          <div class="post-category">
            <span class="category text-capitalize">

              <a href="{{ route('categories.showp',$post->category)}}">{{ $post->category->name}}</a>
            </span>
            <!-- category se creo en el modelo Post, es la relacion belongsto -->
            <!-- si le das var_dump($post->category) te muestra lo que tiene y si no hay data te muestra NULL -->
          </div>
          @endif

        </header>
        