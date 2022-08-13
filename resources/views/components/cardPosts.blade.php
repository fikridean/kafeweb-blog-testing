<div class="card shadow bg-light text-dark" 

@if (@isset($img))
  style="height: 550px"
@else
  style="height: 250px"
@endif >

  {{-- Image --}}
  @isset($category) @isset($img)
    <img src="{{ $img }}" class="card-img-top w-100" alt="{{ $category }}" style="height: 200px">
  @endisset @endisset
  
  <div class="card-body">
    
    {{-- Post Title --}}
    @isset($title)
      <h5>
        <a class="text-decoration-none text-dark" @isset($slug) href="/posts/{{ $slug }}" @endisset>
          @if (strlen($title) > 30)
            @php
                echo mb_strimwidth($title, 0, 30, "...");
            @endphp
          @else
            {{ $title }}
          @endif
        </a>
      </h5>
    @endisset

    {{-- Author and Category --}}
    @isset($author)
      <p class="card-text fw-semibold">
        <a href="/posts?author={{ $author }}" class="text-decoration-none">@_{{ $author }}</a> in <a class="text-decoration-none" href="/posts?category={{ $categories }}">{{ $category }}</a>
      </p>
    @endisset

    <div>
      <hr>
    </div>

    {{-- Excerpt --}}
    <p class="card-text fw-regular text-justify">
      @if (strlen($excerpt) > 70)
        @php
            echo mb_strimwidth($excerpt, 0, 70, "...");
        @endphp
      @else
        {{ $excerpt }}
      @endif
    </p>

  </div>

  {{-- Link to Post --}}
  <a href="/posts/{{ $slug }}" class="btn btn-primary m-3"><span>View Post</span></a>
</div>