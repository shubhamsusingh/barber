@extends('layouts.main')
@section('content')
    <section class="services-section section-padding" id="section_3">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-12">
                    <h2 class="mb-5">Services</h2>
                </div>

                <div class="col-lg-6 col-12 mb-4">
                    <div class="services-thumb">
                        <img src="{{ asset('assets/images/services/woman-cutting-hair-man-salon.jpg') }}"
                            class="services-image img-fluid" alt="">
                        <div class="services-info d-flex align-items-end">
                            <h4 class="mb-0">Hair cut</h4>

                            <strong class="services-thumb-price">₹80.00</strong>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mb-4">
                    <div class="services-thumb">
                        <img src="{{ asset('assets/images/services/hairdresser-grooming-their-client.jpg') }}"
                            class="services-image img-fluid" alt="">
                        <div class="services-info d-flex align-items-end">
                            <h4 class="mb-0">Washing</h4>

                            <strong class="services-thumb-price">₹50.00</strong>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                    <div class="services-thumb">
                        <img src="{{ asset('assets/images/services/hairdresser-grooming-client.jpg') }}"
                            class="services-image img-fluid" alt="">

                        <div class="services-info d-flex align-items-end">
                            <h4 class="mb-0">Shaves</h4>

                            <strong class="services-thumb-price">₹30.00</strong>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12">
                    <div class="services-thumb">
                        <img src="{{ asset('assets/images/services/boy-getting-haircut-salon-front-view.jpg') }}"
                            class="services-image img-fluid" alt="">

                        <div class="services-info d-flex align-items-end">
                            <h4 class="mb-0">Kids</h4>

                            <strong class="services-thumb-price">₹50.00</strong>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
