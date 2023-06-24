@extends('component.navbar')
@section('content')
<body class="text-center">
  <div class="row justify-content-center">
    <div class="col-md-4">
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-4">
      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
    </div>
  </div>

<center>
<main class="col-md-4 form-signin mt-5">
  <form action="/login" method="POST">
    @csrf
    <img class="mb-2" src="img/Login-Unknown.png" alt="" width="120">
    <h1 class="h3 mb-3 fw-normal">Sign In</h1>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
      <label for="email">Email address</label>
      @error('email')
        <div class="invalid-feedback text-start">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <small>Belum Mempunyai Akun? <a class="daftar" href="/register">Daftar Sekarang!</a></small>
    <p class="mt-2 mb-3 text-muted">&copy; POPCORN TO GO</p>
  </form>
</main>
</center>
@endsection