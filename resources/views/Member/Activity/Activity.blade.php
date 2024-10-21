@extends('layouts.Member.master')

@section('content')
    <div class="container-fluid country overflow-hidden py-5">
        <div class="container py-5">
            <div class="section-title text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-bottom: 100px;">
                <div class="sub-style">
                    <h5 class="sub-title text-primary px-3">COMPANY ACTIVITIES</h5>
                </div>
                <h1 class="display-5 mb-4">Our Company Activity</h1>
                <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque
                    sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam
                    necessitatibus saepe in ab? Repellat!</p>
            </div>
            <div class="row mb-4" style="margin-top: 50px; margin-bottom: 50px;">
                <!-- Showing X-Y of Z -->
                <div class="col-md-4 d-flex align-items-center">
                    <p class="mb-0">Menampilkan 1 - 4 dari 10 </p>
                    <p class="mb-0"> </p>
                </div>
                <!-- Show per Page and Sort By -->
                <div class="col-md-8 d-flex justify-content-end align-items-center">
                    <div class="d-flex align-items-center">
                        <label for="sort-by" class="mb-0 me-4" style="display: inline-block; white-space: nowrap;">
                            Urut berdasarkan :
                        </label>
                        <select id="sort-by" class="form-select form-select-sm">
                            <option value="newest">Terbaru</option>
                            <option value="latest">Terlama</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row g-4 text-center mb-4" style="margin-top: 50px; margin-bottom: 50px;">
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-lg-6 col-xl-3 mb-5 mb-xl-0 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="country-item">
                            <div class="rounded overflow-hidden">
                                <img src="{{ asset('storage/company_2.jpg') }}" class="img-fluid w-100 rounded" alt="Image">
                            </div>
                            <div class="country-flag">
                                <img src="{{ asset('storage/company_1.jpg') }}" class="img-fluid rounded-circle" alt="Image">
                            </div>
                            <div class="country-name">
                                <a href="#" class="text-white fs-4">Brazil</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
