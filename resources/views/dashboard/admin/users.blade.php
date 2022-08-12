  
@extends('dashboard.layouts.main')

@section('container')
<div class=" pt-3 pb-2 mb-3">
  <h1 class="h2">Manage Users</h1>

  <hr />

  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  <div class="table-responsive col-lg-8">
    <table class="table table-sm">
      <thead>
        <tr class="bg-dark text-light">
          <th scope="col">No</th>
          <th scope="col">User</th>
          <th scope="col">Number of Posts</th>
          <th scope="col">Administrator Access</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
          <tr class="bg-dark text-light">
            <td>{{ $loop->iteration }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->posts->count() }}</td>
            <td>{{ $user->is_admin }}</td>
            <td class="d-flex flex-wrap">
              <form action="/dashboard/users/{{ $user->username }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm m-1"><span data-feather="trash-2" class="align-text-bottom"></span></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection

