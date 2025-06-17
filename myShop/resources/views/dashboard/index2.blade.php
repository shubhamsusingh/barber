 @extends('layouts.main')
 @section('content')
     <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">

         <div class="container">
             <div class="row">

                 <div class="col-lg-8 col-12">
                     <h1 class="text-white mb-lg-3 mb-4"><strong>Barber <em>Shop</em></strong></h1>
                     <p class="text-black">Get the most professional haircut for you</p>
                     <br>
                     <a class="btn custom-btn custom-border-btn custom-btn-bg-white smoothscroll me-2 mb-2"
                         href="#section_2">About Us</a>

                     <a class="btn custom-btn smoothscroll mb-2" href="#section_3">What we do</a>
                 </div>
             </div>
         </div>

         <div class="custom-block d-lg-flex flex-column justify-content-center align-items-center">
             <img src="{{ asset('assets/images/vintage-chair-barbershop.jpg') }}" class="custom-block-image img-fluid"
                 alt="">

             <h4><strong class="text-white">Hurry Up! Get good haircut.</strong></h4>

             <a href="#booking-section" class="smoothscroll btn custom-btn custom-btn-italic mt-3">Book a
                 seat</a>
         </div>
     </section>

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

     <section class="featured-section section-padding">
         <div class="section-overlay"></div>

         <div class="container">
             <div class="row">

                 <div class="col-lg-10 col-12 mx-auto">
                     <h2 class="mb-3">Get 32% Discount</h2>

                     <p>on every second week of the month</p>

                     <strong>Promo Code: BarBerMo</strong>
                 </div>

             </div>
         </div>
     </section>

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

     <section class="booking-section section-padding" id="booking-section">
         <div class="container">
             <div class="row">

                 <div class="col-lg-10 col-12 mx-auto">
                     <form action="{{ route('contactform') }}" method="POST" class="custom-form booking-form"
                         id="bb-booking-form" role="form">
                         @csrf
                         <div class="text-center mb-5">
                             <h2 class="mb-1">Book a seat</h2>

                             <p>Please fill out the form and we get back to you</p>
                         </div>

                         <div class="booking-form-body">
                             <div class="row">

                                 <div class="col-lg-6 col-12">
                                     <input type="text" name="name" id="bb-name" class="form-control"
                                         placeholder="Full name" required>
                                 </div>

                                 <div class="col-lg-6 col-12">
                                     <input type="tel" class="form-control" name="bb-phone"
                                         placeholder="Mobile 010-020-0340" required="">
                                 </div>

                                 <div class="col-lg-6 col-12">
                                     <input class="form-control" type="time" name="bb-time" value="18:30" />
                                 </div>

                                 <div class="col-lg-6 col-12">
                                     <select class="form-select form-control" name="bb-branch" id="bb-branch"
                                         aria-label="Default select example">
                                         <option selected="">Select Branches</option>
                                         <option value="Grünberger">Grünberger</option>
                                         <option value="Behrenstraße">Behrenstraße</option>
                                         <option value="Weinbergsweg">Weinbergsweg</option>
                                     </select>

                                 </div>
                                 <div class="col-lg-6 col-12">
                                     <input type="date" name="bb-date" id="bb-date" class="form-control"
                                         placeholder="Date" required>
                                 </div>

                                 <div class="col-lg-6 col-12">
                                     <input type="number" name="bb-number" id="bb-number" class="form-control"
                                         placeholder="Number of People" required>
                                 </div>
                             </div>

                             <textarea name="bb-message" rows="3" class="form-control" id="bb-message" placeholder="Comment (Optionals)"></textarea>

                             <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                 <button type="submit" class="form-control">Submit</button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
     </section>

     <section class="price-list-section section-padding" id="section_4">
         <div class="container">
             <div class="row">

                 <div class="col-lg-8 col-12">
                     <div class="price-list-thumb-wrap">
                         <div class="mb-4">
                             <h2 class="mb-2">Price List</h2>

                             <strong>Starting at ₹50</strong>
                         </div>

                         <div class="price-list-thumb">
                             <h6 class="d-flex">
                                 Haircut
                                 <span class="price-list-thumb-divider"></span>

                                 <strong>₹80</strong>
                             </h6>
                         </div>

                         <div class="price-list-thumb">
                             <h6 class="d-flex">
                                 Beard Trim
                                 <span class="price-list-thumb-divider"></span>

                                 <strong>₹50.00</strong>
                             </h6>
                         </div>

                         <div class="price-list-thumb">
                             <h6 class="d-flex">
                                 Razor Cut
                                 <span class="price-list-thumb-divider"></span>

                                 <strong>₹30.00</strong>
                             </h6>
                         </div>

                         <div class="price-list-thumb">
                             <h6 class="d-flex">
                                 Shaves
                                 <span class="price-list-thumb-divider"></span>

                                 <strong>₹30.00</strong>
                             </h6>
                         </div>

                         <div class="price-list-thumb">
                             <h6 class="d-flex">
                                 Styling / Color
                                 <span class="price-list-thumb-divider"></span>

                                 <strong>₹100.00</strong>
                             </h6>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-12 custom-block-bg-overlay-wrap mt-5 mb-5 mb-lg-0 mt-lg-0 pt-3 pt-lg-0">
                     <img src="{{ asset('assets/images/vintage-chair-barbershop.jpg') }}"
                         class="custom-block-bg-overlay-image img-fluid" alt="">

                 </div>

             </div>
         </div>
     </section>

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
     {{-- <h2>Leaflet Map Example</h2> --}}
     {{-- <div id="map"></div> --}}
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
