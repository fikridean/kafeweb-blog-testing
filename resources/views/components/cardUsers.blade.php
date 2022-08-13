<div class="card shadow-sm" style="min-height: 350px">

  <div class="card-header">
    @isset($username)
        @_{{ $username }}
    @endisset
  </div>

  <div class="card-body">
    @isset($img)
      {{ $img }}
    @endisset

    @isset($name)
      <h5 class="card-title mt-4">{{ $name }}</h5>
    @endisset

    @isset($since)
      <p class="card-text">{{ $since }}</p>
    @endisset

  </div>

  @isset($username)
    <a href="/users/{{ $username }}" class="btn btn-secondary m-3">See Profile</a>
  @endisset

</div>