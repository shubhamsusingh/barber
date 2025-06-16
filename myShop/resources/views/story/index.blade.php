@extends('layouts.main')
@section('content')
    <section class="about-section section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12 mx-auto">
                    <h2 class="mb-4">Best hairdressers</h2>

                    <div class="border-bottom pb-3 mb-5">
                        <p>Welcome to MYShop, where style meets tradition. We offer top-quality haircuts, beard
                            trims, and grooming services in a clean, comfortable, and modern setting. Whether you're
                            looking for a fresh fade, a classic cut, or a sharp beard lineup, our skilled barbers are here
                            to help you look and feel your best. Walk-ins are always welcome—come experience the
                            difference!</p>
                    </div>
                </div>

                <h6 class="mb-5">Meet Babers</h6>

                <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap me-lg-5 mb-5 mb-lg-0">
                    <img src="{{ asset('assets/images/barber/portrait-male-hairdresser-with-scissors.jpg') }}"
                        class="custom-block-bg-overlay-image img-fluid" alt="">


                    <div class="team-info d-flex align-items-center flex-wrap">
                        <p class="mb-0">Redo</p>

                        <ul class="social-icon ms-auto">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-12 custom-block-bg-overlay-wrap mt-4 mt-lg-0 mb-5 mb-lg-0">
                    <img src="{{ asset('assets/images/barber/portrait-mid-adult-bearded-male-barber-with-folded-arms.jpg') }}"
                        class="custom-block-bg-overlay-image img-fluid" alt="">


                    <div class="team-info d-flex align-items-center flex-wrap">
                        <p class="mb-0">Sam</p>

                        <ul class="social-icon ms-auto">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
