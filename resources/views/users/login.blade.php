@extends('layout')

@section('content')
<br>
<br>
<br>
<br>
<br>

<center>
<form method="POST" action="/users/authenticate">
  @csrf
  <div class="mb-6">
    <label for="email" class="inline-block text-lg mb-2">Email</label>
    <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />

    @error('email')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label for="password" class="inline-block text-lg mb-2">
      Password
    </label>
    <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
      value="{{old('password')}}" />

    @error('password')
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <button type="submit" class="bg-laravel rounded py-2 px-4 hover:bg-black">
      Sign In
    </button>
  </div>

  <div class="mt-8">
    <p>
      Don't have an account?
      <a href="/admin-register" class="text-laravel">Register</a>
    </p>
  </div>
</form>
</center>
@endsection