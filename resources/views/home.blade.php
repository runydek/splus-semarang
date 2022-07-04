@extends('layouts.app')

@section('content')
@include('layouts.navbar')
<div id="main-content">
    <section class="section">
        @if (session()->has('success'))
        <div class="alert alert-info text-center">{{ session()->get('success') }}</div>
        @endif
        <div class="card">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card-header">
                        <h4 class="text-center">S-Plus Semarang</h4>
                    </div>
                    <div class="card-body">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/images/samples/banana.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/images/samples/bg-mountain.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </a>
                        </div>
                        <h6 class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, nulla alias! Iure cumque, aliquam impedit fugiat, minima molestiae aperiam corrupti dolore porro necessitatibus eligendi architecto cum obcaecati! Soluta, sed perspiciatis.</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-start">
                <p>2021 &copy; Mazer</p>
            </div>
            <div class="float-end">
                <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                        href="http://ahmadsaugi.com">A. Saugi</a></p>
            </div>
        </div>
    </footer>
</div>

@endsection