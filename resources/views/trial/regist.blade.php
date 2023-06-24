@extends('component.navbar')
@section('content')
<head>
    <style>
        .form-signin {
        width: 100%;
        max-width: 550px;
        padding: 15px;
        margin: auto;
        }

        .form-signin .checkbox {
        font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
        z-index: 2;
        }

        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }
        .pass{
          margin-top: -8px;
        }

    </style>
</head>
  <body class="text-center">
    
<main class="form-signin mt-5">
  <form action="/register" method="POST">
    @csrf
    <img src="img/reg.png" alt="" width="120">
    <h1 class="h3 mb-3 fw-normal">Register</h1>
    <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong!')" oninput="setCustomValidity('')" value="{{ old('name') }}">
        <label for="name">Name</label>
        {{-- jika ada error dari namenya maka akan menampilkan script dibawah--}}
        @error('name')
        <div class="invalid-feedback text-start">
          {{ $message }}
        </div>  
        @enderror
    </div>

    <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required oninvalid="this.setCustomValidity('Username Tidak Boleh Kosong!')" oninput="setCustomValidity('')" value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback text-start">
          {{ $message }}
        </div>  
        @enderror
    </div>

    <div class="form-floating">
      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required oninvalid="this.setCustomValidity('Email Tidak Boleh Kosong!')" oninput="setCustomValidity('')" value="{{ old('email') }}">
      <label for="email">Email address</label>
      @error('email')
        <div class="invalid-feedback text-start">
          {{ $message }}
        </div>  
        @enderror
    </div>
    
    <div class="form-floating">
      <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required oninvalid="this.setCustomValidity('Password Tidak Boleh Kosong!')" oninput="setCustomValidity('')">
      <label for="password">Password</label>
      @error('password')
        <div class="invalid-feedback pass text-start">
          {{ $message }}
        </div>  
        @enderror
    </div>
    
    
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
    <p class="mt-2 mb-3 text-muted">&copy; POPCORN TO GO</p>
  </form>
</main>
@endsection