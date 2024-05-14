@extends('layouts.main')
@section('container')
    <section class="hero h-full d-flex align-items-center mb-4" style="margin: 5rem 0 !important;">
        <div class="container">
            <div class="hero-text d-flex align-items-center justify-content-center">
                <div class="text-center hero-content">
                    <img src="{{ asset('img/avatar.png') }}" alt="" width="300px" style="margin-bottom: 1rem;">
                    <h1 class="mb-4 fw-bold greeting">Hello, <span class="text-primary">I am</span> Muhammad Ahib Ibrilli
                    </h1>
                    <p class="text-gray greeting-desc">I am a Front End Developer based in Semarang, Indonesia. I have
                        experience in
                        building web
                        applications using NextJS, TailwindCSS and TypeScript.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="project" style="margin-bottom: 4rem;">
        <div class="container">
            <div class="heading-section">
                <h2 class="fw-bolder font-big">🚀 Highlighted Projects</h2>
                <p class="font-base text-gray fw-semibold">Here are some of my projects that I have worked on recently. Want
                    to see more?</p>
            </div>

            <div class="list-project">
                <div class="card border mb-4">
                    <div class="card-body">
                        <div class="card-judul d-flex gap-2 mb-3 h-full align-items-center d-flex">
                            <img src="https://noviantodev.vercel.app/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdastat880%2Fimage%2Fupload%2Fv1703496094%2Ficon-ideabox_1_ywblnm.png&w=48&q=75"
                                alt="" width="50px">
                            <h2 class="fw-bold font-big">Ideabox Multitenant</h2>
                        </div>
                        <p class="font-base text-gray fw-semibold">Ideabox Multitenant is a Crowdsourcing Idea Platform
                            designed to develop an Innovation Ecosystem and foster an Innovation Culture through the
                            submission and collaboration of innovative ideas. This enhanced version supports multiple
                            tenants or users, providing improved scalability and performance.</p>
                        <div class="preview-project d-flex gap-4">
                            <div class="project-card">
                                <img class="project-img"
                                    src="https://noviantodev.vercel.app/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdastat880%2Fimage%2Fupload%2Fv1703495573%2Fcreate-idea_werkge.png&w=1200&q=75"
                                    alt="">
                            </div>
                            <div class="project-card">
                                <img class="project-img"
                                    src="https://noviantodev.vercel.app/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdastat880%2Fimage%2Fupload%2Fv1703495573%2Fcreate-idea_werkge.png&w=1200&q=75"
                                    alt="">
                            </div>
                            <div class="project-card">
                                <img class="project-img"
                                    src="https://noviantodev.vercel.app/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdastat880%2Fimage%2Fupload%2Fv1703495573%2Fcreate-idea_werkge.png&w=1200&q=75"
                                    alt="">
                            </div>
                            <div class="project-card">
                                <img class="project-img"
                                    src="https://noviantodev.vercel.app/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdastat880%2Fimage%2Fupload%2Fv1703495573%2Fcreate-idea_werkge.png&w=1200&q=75"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border">
                    <div class="card-body">
                        <div class="card-judul d-flex gap-2 mb-3 h-full align-items-center d-flex">
                            <img src="https://noviantodev.vercel.app/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdastat880%2Fimage%2Fupload%2Fv1703496094%2Ficon-ideabox_1_ywblnm.png&w=48&q=75"
                                alt="" width="50px">
                            <h2 class="fw-bold font-big">Ideabox Multitenant</h2>
                        </div>
                        <p class="font-base text-gray fw-semibold">Ideabox Multitenant is a Crowdsourcing Idea Platform
                            designed to develop an Innovation Ecosystem and foster an Innovation Culture through the
                            submission and collaboration of innovative ideas. This enhanced version supports multiple
                            tenants or users, providing improved scalability and performance.</p>
                        <div class="preview-project d-flex gap-4">
                            <div class="project-card">
                                <img class="project-img"
                                    src="https://noviantodev.vercel.app/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdastat880%2Fimage%2Fupload%2Fv1703495573%2Fcreate-idea_werkge.png&w=1200&q=75"
                                    alt="">
                            </div>
                            <div class="project-card">
                                <img class="project-img"
                                    src="https://noviantodev.vercel.app/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdastat880%2Fimage%2Fupload%2Fv1703495573%2Fcreate-idea_werkge.png&w=1200&q=75"
                                    alt="">
                            </div>
                            <div class="project-card">
                                <img class="project-img"
                                    src="https://noviantodev.vercel.app/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdastat880%2Fimage%2Fupload%2Fv1703495573%2Fcreate-idea_werkge.png&w=1200&q=75"
                                    alt="">
                            </div>
                            <div class="project-card">
                                <img class="project-img"
                                    src="https://noviantodev.vercel.app/_next/image?url=https%3A%2F%2Fres.cloudinary.com%2Fdastat880%2Fimage%2Fupload%2Fv1703495573%2Fcreate-idea_werkge.png&w=1200&q=75"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="heading-section">
                <h2 class="fw-bolder font-big">✍️ My Latest Writings</h2>
                <p class="font-base text-gray fw-semibold ">Here are some of my recent posts. Want to see more?</p>
            </div>

            <div class="list-blog">
                <div class="list-blog-container row">
                    @foreach ($posts as $post)
                        <div class="col-lg-3 mb-4">
                            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                                <div class="card" style="border: none;">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt=""
                                            class="img-fluid rounded-2" style="height: 210px; object-fit: cover;">
                                    @else
                                        <img src="{{ asset('img/dummy-img.png') }}" alt=""
                                            class="img-fluid rounded-top-1" style="height: 210px; object-fit: cover;">
                                    @endif
                                    <div class="card-body p-0">
                                        <div class="category bg-primary rounded-pill d-inline-block mb-2 mt-3">
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
