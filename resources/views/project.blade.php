@extends('layouts.main')
@section('container')
    <section class="project" style="margin: 2rem 0;">
        <div class="container">
            <div class="heading-section">
                <h2 class="fw-bolder font-big">🚀 My Projects</h2>
                <p class="font-base text-gray fw-semibold">Here are some of my projects that I have worked on recently. Want
                    to see more?</p>
            </div>

            <div class="list-project">
                @foreach ($projects as $project)
                    <div class="card border mb-4">
                        <div class="card-body">
                            <div class="card-judul d-flex gap-3 mb-3 h-full align-items-center d-flex">
                                <img src="{{asset('storage/' . $project->logo)}}"
                                    alt="" width="30px" loading="lazy">
                                <h2 class="fw-bolder font-big">{{ $project->nama }}</h2>
                            </div>
                            <p class="font-base text-gray fw-semibold">{!! $project->deskripsi !!}</p>
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
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
