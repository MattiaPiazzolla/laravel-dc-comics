@extends('layouts.app')
@section('content')
    <div class="jumbo">
        <div class="container position-relative h-100">
            <div class="img_title_section img-fluid"><img src="{{ $comics->thumb }}" alt=""></div>
        </div>
    </div>
    <div class="mini_banner"></div>
    <div class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-7 p-0 mt-5">
                    <h3 class=" text-uppercase m-0 p-0">{{ $comics->title }}</h3>
                    <div class="row g-0">
                        <div class=" mt-3 col-12 bg-custom-green py-1 px-3">
                            <div class="d-flex text-light justify-content-between align-items-center">
                                <p class="m-0">U.S. Price: ${{ $comics->price }}</p>
                                <div class="avilable_section d-flex align-items-center">
                                    <p class="m-0 text-uppercase opacity-50 fw-bold me-4">Available</p>
                                    <div class="btn_avilability">
                                        <div class="dropdown">
                                            <button class="btn text-light ms-2 dropdown-toggle" type="button"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                Check
                                                Availability
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <p>{{ $comics->description }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-5 mt-5 d-flex flex-column justify-content-end">
                    <p class="py-1 m-0 text-end">ADVERTISEMENT</p>
                    <img src="{{ Vite::asset('resources/images/adv.jpg') }}" class="w-75 ms-auto" alt="adv">
                </div>
            </div>
        </div>
        <div class="bg_custom_grey">
            <div class="container">
                <div class="row">
                    <div class="col-6 mt-4">
                        <h4 class="">Talent</h4>
                        <hr class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p>Art by:</p>
                            </div>
                            <div class="col-8">
                                <p>{{ $comics->artists }}</p>
                                {{-- come posso rendere più elegante? --}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <p>Written by:</p>
                            </div>
                            <div class="col-8">
                                <p>{{ $comics->writers }}</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-6 mt-4">
                        <h4 class="">Talent</h4>
                        <hr class="mt-4">
                        <div class="row">
                            <div class="col-4">
                                <p>Series:</p>
                            </div>
                            <div class="col-8">
                                <p>{{ $comics->series }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <p>U.S. Price:</p>
                            </div>
                            <div class="col-8">
                                <p>${{ $comics->price }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <p>On Sale Date:</p>
                            </div>
                            <div class="col-8">
                                <p>{{ $comics->sale_date }}</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
            <hr class=" m_custom_hr mb-0">
            <div class="container">
                <div class="row g-0">
                    <div class="col-3">
                        <div class="icons_final_section_comic border-1">
                            <p>DIGITAL COMICS</p>
                            <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icons_final_section_comic border-1">
                            <p>SHOP DC</p>
                            <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icons_final_section_comic border-1">
                            <p>COMIC SHOP LOCATOR</p>
                            <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="icons_final_section_comic border-1">
                            <p>SUBSCRIPTIONS</p>
                            <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
