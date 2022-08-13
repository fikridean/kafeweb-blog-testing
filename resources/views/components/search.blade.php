<form action="/posts">
  <div class="input-group mb-3">
    @if(request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
    @endif

    @if(request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
    @endif

    <input type="text" class="form-control rounded-start bg-light text-dark" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="search-input" value="{{ request('search-input') }}" autofocus>
    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
  </div>
</form>
