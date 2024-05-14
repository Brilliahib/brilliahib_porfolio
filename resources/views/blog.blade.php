@extends('layouts.main')
@section('container')
    <section class="project" style="margin: 2rem 0;">
        <div class="container">
            <div class="heading-section">
                <h2 class="fw-bolder font-big">✍️ My Latest Writings</h2>
                <p class="font-base text-gray fw-semibold ">Here are some of my recent posts. Want to see more?</p>
            </div>

            <div class="list-blog">
                <div class="list-blog-container row">
                    @foreach ($posts as $post)
                        <div class="col-lg-4 mb-4">
                            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                                <div class="card" style="border: none;">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt=""
                                            class="img-fluid rounded-3" style="height: 210px; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('img/dummy-img.png') }}" alt=""
                                            class="img-fluid rounded-3" style="height: 210px; object-fit: cover;">
                                    @endif
                                    <div class="card-body p-0 mt-2">
                                        <div class="category bg-primary rounded-pill d-inline-block mb-2">
                                            <p class="font-xs text-white mb-0 fw-semibold">{{ $post->category->name }}</p>
                                        </div>
                                        <h2 class="font-base text-black fw-bold"
                                            style="display: -webkit-box;
                             -webkit-line-clamp: 1; 
                            -webkit-box-orient: vertical;
                            overflow: hidden; text-align:left">
                                            {{ $post->title }}</h2>
                                        <p class="font-xs text-gray mb-0">
                                            {{ \Carbon\Carbon::parse($post->created_at)->formatLocalized('%d %B %Y') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
