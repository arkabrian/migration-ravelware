@extends('layout')

@section('content')
<br>
<br>
<br>
<br>
<br>

<form method="POST" action="/cs-posting" >
  @csrf

  <div class="mb-6">
    <label for="title" class="inline-block text-lg mb-2">Title</label><br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{old('title')}}" />

    @error('title')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label for="thumbnail" class="inline-block text-lg mb-2">Thumbnail</label><br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="thumbnail" value="{{old('thumbnail')}}" />

    @error('thumbnail')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label for="img-path" class="inline-block text-lg mb-2">Images</label><br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="img-path" value="{{old('img-path')}}" />

    @error('img-path')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label for="overview" class="inline-block text-lg mb-2">Overview</label><br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="overview" value="{{old('overview')}}" />

    @error('overview')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label for="issue" class="inline-block text-lg mb-2">Issue</label><br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="issue" value="{{old('issue')}}" />

    @error('issue')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label for="solution" class="inline-block text-lg mb-2">Solution</label><br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="solution" value="{{old('solution')}}" />

    @error('solution')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <button type="submit" class="text-white rounded py-2 px-4 hover:bg-black">
      Add Case Study
    </button>
  </div>
</form>

@endsection