<div class="col-md-4 ps-5">
  <h2 class="mb-4 title title-lg color-primary-neutral-100 weight-700 d-flex align-items-center">Recent Post</h2>
  <ul class="list-unstyled mb-0 list-recent-post">
    @foreach($resources as $resource)
    <li>
      <div class="general-card">
        <a href="resources/{{ $resource['id']}}" class="card border-0 text-decoration-none">
          <div class="card-body p-0">
            <p class="mb-4 text-wrap border-0">Posted on <span class="color-accent-1-base ms-2">{{ $resource['date'] }}</span></p>
            <h2 class="title title-md color-primary-neutral-100 my-3 h-auto">{{ $resource['title'] }}</h2>
          </div>
        </a>
      </div>
    </li>
    @endforeach
  </ul>
</div>