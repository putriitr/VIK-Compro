@php
$compro = \App\Models\CompanyParameter::first();
$brand = \App\Models\BrandPartner::where('type', 'brand', 'nama')->get();
@endphp

<!-- Footer Start -->
<div id="footer" class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">{{ __('messages.contact_info') }}</h4>
                    @if(!empty($compro->alamat))
                        <a href="#"><i class="fa fa-map-marker-alt me-2"></i> {{ $compro->alamat }}</a>
                    @else
                        <p><i class="fa fa-map-marker-alt me-2"></i> {{ __('messages.address_not_available') }}</p>
                    @endif
                    <a href=""><i class="fas fa-envelope me-2"></i> business@vik.co.id</a>
                    <a href=""><i class="fas fa-phone me-2"></i> (021) 23951673</a><br>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-secondary me-2"></i>
                        <a class="btn mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn mx-1" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">{{ __('messages.opening_time') }}</h4>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">{{ __('messages.mon_fri') }} :</h6>
                        <p class="text-white mb-0">{{ __('messages.mon_fri1') }}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">{{ __('messages.sat') }} :</h6>
                        <p class="text-white mb-0">{{ __('messages.sat1') }}</p>
                    </div>
                    <div class="mb-3">
                        <h6 class="text-muted mb-0">{{ __('messages.vacation') }} :</h6>
                        <p class="text-white mb-0">{{ __('messages.vacation1') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-secondary mb-4">{{ __('messages.quick_access') }}</h4>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> {{ __('messages.home') }}</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> {{ __('messages.about') }}</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> {{ __('messages.products') }}</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> {{ __('messages.activity') }}</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> {{ __('messages.portal') }}</a>
                    <a href="#" class=""><i class="fas fa-angle-right me-2"></i> {{ __('messages.contact_us') }}</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item">
                    <h4 class="text-secondary mb-4">{{ __('messages.location') }}</h4>
                    <p class="text-white mb-3">{{ __('messages.location_desc') }}</p>
                    <iframe class="rounded w-100" style="height: 200px;"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3160.8915155125464!2d106.84145537499018!3d-6.183059193804441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5425a168055%3A0xc1d79fd15a17dd56!2sPT.%20Virtual%20Inter%20Komunika!5e1!3m2!1sid!2sid!4v1729498268321!5m2!1sid!2sid"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-white"><a href="#" class="text-white"><i
                            class="fas fa-copyright text-light me-2"></i> 2024</a></span>
            </div>
            <div class="col-md-6 text-center text-md-end text-white">
                Designed By <a class="border-bottom text-white" href=""> PT Virtual Inter Komunika</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/Member/lib/wow/wow.min.js')}}"></script>
<script src="{{ asset('assets/Member/lib/easing/easing.min.js')}}"></script>
<script src="{{ asset('assets/Member/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{ asset('assets/Member/lib/counterup/counterup.min.js')}}"></script>
<script src="{{ asset('assets/Member/lib/owlcarousel/owl.carousel.min.js')}}"></script>


<!-- Template Javascript -->
<script src="{{ asset('assets/Member/js/main.js')}}"></script>
</body>

</html>
