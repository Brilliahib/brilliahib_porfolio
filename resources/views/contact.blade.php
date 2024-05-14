@extends('layouts.main')
@section('container')
    <section class="project" style="margin: 2rem 0;">
        <div class="container">
            <div class="contact-content row">
                <div class="col-lg-6">
                    <div class="contact-details">
                        <div class="heading-contact" style="margin-bottom: 3rem;">
                            <h2 class="font-big text-black fw-bold">📞 My Contact</h2>
                            <p class="font-base text-gray">I'm glad to receive a message from you, I'm waiting for it.</p>
                        </div>
                        <div class="contact-main">
                            <div class="d-block">
                                <div class="email-group d-flex h-full align-items-center gap-3 mb-4">
                                    <div class="p-3 bg-primary d-inline-block rounded-circle">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#fff"
                                            class="bi bi-envelope-at" viewBox="0 0 16 16">
                                            <path
                                                d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z" />
                                            <path
                                                d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h2 class="fw-bold font-base mb-1">Email</h2>
                                        <p>brilliahib21@gmail.com</p>
                                    </div>
                                </div>
                                <div class="d-block">
                                    <div class="call-group d-flex h-full align-items-center gap-3">
                                        <div class="p-3 bg-primary d-inline-block rounded-circle">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                fill="#fff" class="bi bi-telephone" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                            </svg>
                                        </div>
                                        <div>
                                            <h2 class="fw-bold font-base mb-1">Contact</h2>
                                            <p>+6281327059189</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form class="card border p-4" method="post" action="/contact" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-4">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Message</label>
                                <textarea type="text" class="form-control" id="message" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn bg-primary text-white fw-semibold">Send</button>
                        </form>
                        @if (session()->has('success'))
                            <div class="overlay">
                                <div class="card border p-4 card-succes" style="width: 600px;">
                                    <div class="card-body">
                                        <div class="check-container">
                                            <div class="d-flex justify-content-center mb-4">
                                                <div class="p-4 rounded-circle d-inline-block check-circle ">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                                                        fill="#a4dc86" class="bi bi-check2" viewBox="0 0 16 16">
                                                        <path
                                                            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0" />
                                                    </svg>
                                                </div>
                                            </div>

                                            <h1 class="text-center fw-bold font-big mb-2">Thank You!</h1>
                                        </div>
                                        <p class="text-center">{{ session('success') }}</p>
                                        <div class="button-close d-flex justify-content-center" style="margin-top: 2rem;">
                                            <button class="close-button fw-bold font-base" onclick="closePopup()">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function closePopup() {
            document.querySelector('.overlay').style.display = 'none';
        }
    </script>
@endsection
