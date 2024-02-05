@php
  $tags = explode(',', $resource['tags']);
@endphp

<li>
  <div class="general-card">
    <a href="/resources/{{ $resource['id']}}" class="card border-0 text-decoration-none">
      <img src="{{ Str::contains($resource['img-path'], 'thumbnail/') ? asset('storage/' . $resource['img-path']) : $resource['img-path']}}" class="card-img-top card-img-blog" alt="...">
      <div class="card-body pt-5 px-0">
        <div class="tags d-flex align-items-center mb-4">
          <h5 class="mb-0 weight-700">Tags :</h5>
          <ul class="list-unstyled d-flex align-items-center mb-0">
            @foreach($tags as $tag)
            <li><input type="checkbox" id="tags-02" checked readonly /><label for="tags-02">{{ $tag }}</label></li>
            @endforeach
          </ul>
        </div>
        <h2 class="title title-lg color-primary-neutral-100 my-3 h-auto d-block overflow-visible">{{ $resource['title'] }}</h2>
        <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">{{ $resource['date'] }}</span></p>
        <p class="mb-0 mb-4 text-wrap border-0 info">
          @if (preg_match("/<p class='mb-4'>(.*?)<\/p>/s", $resource['content'], $matches))
            @php
                $content = strip_tags($matches[0]); // Extract content within <p> tags and remove HTML tags
                $trimmed_content = mb_substr($content, 0, 285); // Trim content to 285 characters
                $display_content = strlen($trimmed_content) < 285 ? $trimmed_content : rtrim($trimmed_content) . '...'; // Add ellipsis if content is longer
            @endphp
            {!! $display_content !!}
        @endif
        </p>
        <div class="d-flex justify-content-between">
          <span class="title-sm weight-700">Read More <img src="{{asset('img/icon/arrow-right-block.svg')}}"></span>
        </div>
      </div>
    </a>
    <div class="mt-2">
      <input type="email" class="form-control" id="" aria-describedby="" placeholder="Leave a comment...">
    </div>
  </div>
</li>