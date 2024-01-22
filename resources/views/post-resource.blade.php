@extends('layout')

@section('content')
<br>
<br>
<br>
<br>
<br>

<form method="POST" action="/ngeposting" >
  @csrf

  <div class="mb-6">
    <label for="type" class="inline-block text-lg mb-2">Type(article/news)</label><br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="type" value="{{old('type')}}" />

    @error('type')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label for="title" class="inline-block text-lg mb-2">Title</label><br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" value="{{old('title')}}" />

    @error('title')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  {{-- <div class="mb-6">
    <label for="img-path" class="inline-block text-lg mb-2">Image (link)</label><br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="img-path" value="{{old('img-path')}}" />

    @error('img-path')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div> --}}

  <div class="mb-6">
    <label for="img-path" class="inline-block text-lg mb-2">Image</label><br>
    <input type="file" class="border border-gray-200 rounded p-2 w-full" name="thumbnail" value="{{old('img-path')}}" />

    @error('img-path')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label for="tags" class="inline-block text-lg mb-2">Tags</label><br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" value="{{old('tags')}}" />

    @error('tags')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label for="date" class="inline-block text-lg mb-2">Date</label><br>
    <input type="text" class="border border-gray-200 rounded p-2 w-full" name="date" value="{{old('date')}}" />

    @error('date')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <label for="content" class="inline-block text-lg mb-2">Content</label><br>
    <textarea name="content" class="border border-gray-200 rounded p-2 w-full">{{old('content')}}</textarea>

    @error('content')
      <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
  </div>

  <div class="mb-6">
    <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
      Add Resource
    </button>
  </div>
</form>

@endsection