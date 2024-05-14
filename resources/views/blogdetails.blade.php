@extends('layouts.main')
@section('container')
    <section class="project" style="margin: 2rem 0;">
        <div class="container">
            <div class="list-blog">
                <div class="list-blog-container row">
                    <div class="col-lg-12 mb-4">
                        <div class="card" style="border: none;">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid rounded-3"
                                style="max-height: 500px; object-fit: cover;">
                            <div class="card-body p-0 mt-4">
                                <h2 class="font-semibig text-black fw-bold text-center">
                                    {{ $post->title }}</h2>
                                <p class="font-base text-gray mb-0 text-center">
                                    {{ \Carbon\Carbon::parse($post->created_at)->formatLocalized('%d %B %Y') }}</p>
                                <p class="font-base text-gray" style="line-height: 1.75; text-align:justify">
                                    {!! $post->content !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
