@extends('layouts.main')

@section('container')

@if($posts->count())
  <div class="card mb-3">
        @if ($posts[0]->image)
        <div style="max-height: 350px; overflow: hidden;">
          <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid">
        </div>
        @else
          <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
    <div class="card-body text-center">
      <h3 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
      <p>
        <small class="text-muted">
        By. <a class="text-decoration-none" href="/posts?author={{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
      </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>

      <a class="text-decoration-none btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more..</a>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6 col-sm-6">
      <div class="card mb-3 mt-3">
        <div class="row g-0">
          <div class="col-md-4">
            @if ($posts[1]->image)
            <div style="max-height: 350px; overflow: hidden;">
              <img src="{{ asset('storage/' . $posts[1]->image) }}" alt="{{ $posts[1]->category->name }}" class="img-fluid">
            </div>
            @else
              <img src="https://source.unsplash.com/500x400?{{ $posts[1]->category->name }}" class="card-img-top" alt="{{ $posts[1]->category->name }}">
            @endif
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <strong class="d-inline-block mb-2 text-primary">{{ $posts[1]->category->name }}</strong>
              <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[1]->slug }}">{{ $posts[1]->title }}</a></h5>              
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text">{{ $posts[1]->excerpt }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-6">
      <div class="card mb-3 mt-3">
        <div class="row g-0">
          <div class="col-md-4">
            @if ($posts[2]->image)
            <div style="max-height: 350px; overflow: hidden;">
              <img src="{{ asset('storage/' . $posts[2]->image) }}" alt="{{ $posts[2]->category->name }}" class="img-fluid">
            </div>
            @else
              <img src="https://source.unsplash.com/500x400?{{ $posts[2]->category->name }}" class="card-img-top" alt="{{ $posts[2]->category->name }}">
            @endif
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <strong class="d-inline-block mb-2 text-primary">{{ $posts[2]->category->name }}</strong>
              <h5 class="card-title"><a class="text-decoration-none text-dark" href="/posts/{{ $posts[2]->slug }}">{{ $posts[2]->title }}</a></h5>              
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text">{{ $posts[2]->excerpt }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="row g-5">
    <div class="col-md-8">
      <h1 class="mb-3">{{ $title }}</h1>
      <div class="row mb-3 border-bottom">
        <div class="col-md-6">
          <form action="/posts">
            @if (request('category')) 
              <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            @if (request('author')) 
              <input type="hidden" name="author" value="{{ request('author') }}">
            @endif
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
              <button class="btn btn-danger" type="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-3">
        @foreach ($posts->skip(1) as $post)
        <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <div style="background-color:rgba(0, 0, 0, 0.7)" class="position-absolute px-3 py-2">
              <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
            </div>

            @if ($post->image)
              <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
            @else
              <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p>
                  <small class="text-muted">
                  By. <a class="text-decoration-none" href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
                  </small>
                </p>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">

        <!-- Category -->
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">Category</h4>
          <ul class="list-unstyled mb-0">
            <li><p><a href="" class="link-dark">Animation</a></p></li>
            <li><a href="" class="link-dark">Documentary</a></li>
            <li><a href="" class="link-dark">Family</a></li>
          </ul>
        </div> <!-- End of Category -->

      </div>
    </div> <!-- End of Sidebar -->
  </div>

@else
  <p class="text-center fs-4">No Post Found.</p>
@endif

<div class="d-flex justify-content-center">
  {{ $posts->links() }}
</div>

@endsection
