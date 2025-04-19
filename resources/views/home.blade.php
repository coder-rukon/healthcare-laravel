@extends('layouts.master')
@section('content')

<section class="slider">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/banner-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/banner-2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<div class="box_links_section">
    <div class="container">
        <div class="row">
            <div class="colx-xs-12 col-sm-6">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <a href="#" class="box_link_item">
                            <div class="box_link_text">
                                <h2>Book an <br/>Appointment</h2>
                                <p>With country's leading experts</p>
                            </div>
                            <div class="box_link_image">
                                <img src="assets/images/book-appoinment-icon.jpg" alt="Link 1">
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href="#" class="box_link_item green">
                            <div class="box_link_text">
                                <h2>Hospitals</h2>
                                <p>Health needs under one roof</p>
                            </div>
                            <div class="box_link_image">
                                <img src="assets/images/hospital-icon.jpg" alt="Link 1">
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href="#" class="box_link_item purple">
                            <div class="box_link_text">
                                <h2>Specialities</h2>
                                <p>Our expertise in Healthcare</p>
                            </div>
                            <div class="box_link_image">
                                <img src="assets/images/special-icon.jpg" alt="Link 1">
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href="#" class="box_link_item pink">
                            <div class="box_link_text">
                                <h2>Doctors</h2>
                                <p>Top exports for your health</p>
                            </div>
                            <div class="box_link_image">
                                <img src="assets/images/doctors-icon.jpg" alt="Link 1">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="colx-xs-12 col-sm-6">
                <h2 class="section_title">We can help you book</h2>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <a href="#" class="box_item_2">
                            <img src="assets/images/doctor-2.jpg" alt="Health Checkups">
                            <h2>Health Checkups</h2>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <a href="#" class="box_item_2">
                            <img src="assets/images/hospital-2.jpg" alt="Health Checkups">
                            <h2>Tests & Services</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</div>
<div class="our_servies">
    <div class="container">
        <h2 class="section_title">OUR SERVICES</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="service_item">
                    <img src="assets/images/service-3.jpg" alt="Service 1">
                    <h2>Diagnostics</h2>
                    <ul>
                        <li>Lab Tests</li>
                        <li>Radiology</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="service_item">
                    <img src="assets/images/service-2.jpg" alt="Service 1">
                    <h2>Outpatient Services</h2>
                    <ul>
                        <li>Consultation</li>
                        <li>Lab Test</li>
                        <li>Diagnosis</li>
                        <li>Radiology</li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="service_item">
                    <img src="assets/images/service-1.jpg" alt="Service 1">
                    <h2>Day Care Services</h2>
                    <ul>
                        <li>Endoscopy</li>
                        <li>Colonoscopy</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="expert_video_testimoinal">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h2 class="section_title">Expert Videos</h2>
                <a href="#" class="video_item">
                    <img src="assets/images/xpert-video-thumbnail.jpg" alt="Video 1">
                </a>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h2 class="section_title">Patient Testimonials</h2>
                <a href="#" class="patient_item">
                    <img src="assets/images/testimonial-thumbnail.jpg" alt="Video 1">
                </a>
            </div>
        </div>
        
    </div>
</div>



<div class="blog_section">
    <div class="container">
        <h2 class="section_title">Our Blogs</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <a href="#" class="blog_item">
                    <img src="assets/images/blog-1.jpg" alt="Blog 1">
                    <h2>CBS and Its prevention</h2>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3">
                <a href="#" class="blog_item">
                    <img src="assets/images/blog-2.jpg" alt="Blog 1">
                    <h2>Deal with brain stroke</h2>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3">
                <a href="#" class="blog_item">
                    <img src="assets/images/blog-3.jpg" alt="Blog 1">
                    <h2>Live a healthy life</h2>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3">
                <a href="#" class="blog_item">
                    <img src="assets/images/blog-4.jpg" alt="Blog 1">
                    <h2>Prevent Heart Attact</h2>
                </a>
            </div>
        </div>
    </div>
</div>

<section class="partner_center_section">
    <div class="container">
        <h2 class="section_title">Partner center</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <a href="#" class="partner_item">
                   <img class="p_logo" src="assets/images/partner-1.jpg" alt="Partner 1">
                   <h2>Dedicated Neuro Care Center</h2>
                   <p><img src="assets/images/location-icon.jpg" alt="AGC Bose RD"> AGC Bose RD</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3">
                <a href="#" class="partner_item">
                   <img class="p_logo" src="assets/images/partner-2.jpg" alt="Partner 1">
                   <h2>Dedicated Neuro Care Center</h2>
                   <p><img src="assets/images/location-icon.jpg" alt="AGC Bose RD">AGC Bose RD</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3">
                <a href="#" class="partner_item">
                   <img class="p_logo" src="assets/images/partnert-3.jpg" alt="Partner 1">
                   <h2>Dedicated Neuro Care Center</h2>
                   <p><img src="assets/images/location-icon.jpg" alt="AGC Bose RD">AGC Bose RD</p>
                </a>
            </div>
            <div class="col-xs-12 col-sm-3">
                <a href="#" class="partner_item">
                   <img class="p_logo" src="assets/images/partner-4.jpg" alt="Partner 1">
                   <h2>Dedicated Neuro Care Center</h2>
                   <p><img src="assets/images/location-icon.jpg" alt="AGC Bose RD">AGC Bose RD</p>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection