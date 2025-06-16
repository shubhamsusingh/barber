@extends('layouts.main')
@section('content')
    <section class="contact-section" id="section_5">
        <div class="section-padding section-bg">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12 mx-auto">
                        <h2 class="text-center">Say hello</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h5 class="mb-3"><strong>Contact</strong> Information</h5>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 120-240-3600" class="site-footer-link">
                                (+49)
                                120-240-3600
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:info@yourgmail.com" class="site-footer-link">
                                hello@barber.beauty
                            </a>
                        </p>

                        <ul class="social-icon">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-facebook">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-twitter">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-instagram">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-youtube">
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link bi-whatsapp">
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-12 contact-block-wrap mt-5 mt-lg-0 pt-4 pt-lg-0 mx-auto">
                        <div class="contact-block">
                            <h6 class="mb-0">
                                <i class="custom-icon bi-shop me-3"></i>

                                <strong>Open Daily</strong>

                                <span class="ms-auto">10:00 AM - 8:00 PM</span>
                            </h6>
                        </div>
                    </div>

                    <div class="col-lg-12 col-12 mx-auto mt-5 pt-5" id="map">
                        {{-- <div id="map"></div> --}}
                        <select class="map-view-select" id="mapLayer"
                            style="position: absolute;z-index:1000;top: 10px; right: 10px;">
                            <option value="google">Google</option>
                            <option value="satellite">Satellite</option>
                        </select>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            // Initialize map
            var map = L.map('map').setView([24.8505250, 84.4314900], 13); // New Delhi
            setMapLayer();
            // Add OpenStreetMap tile layer
            function setMapLayer(view = "google") {
                if (view === "google") {
                    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        attribution: '&copy; OpenStreetMap contributors'
                    }).addTo(map);

                } else {
                    L.tileLayer("https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}", {
                        maxZoom: 50,
                        subdomains: ["mt0", "mt1", "mt2", "mt3"],
                    }).addTo(map);
                }
            }
            $(document).on("change", "#mapLayer", function() {
                const layer = $(this).val();
                setMapLayer(layer);
            });
            // Add a marker
            L.marker([24.8505250, 84.4314900]).addTo(map)
                .bindPopup('sohraiya')
                .openPopup();
        </script>
    @endpush
@endsection
