@extends('front.layouts.layout')
@section('content')
    <div class="banner-section page-header-section style-1 login-section padding-tb">
    <div class="contact-section">
        @foreach($setting  as $row)
        <div class="contact-top padding-tb aside-bg padding-b">

            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="contact-form-wrapper">
                            <div class="contact-form">
                                <h4>Nous contacter</h4>
                                <form action="{{route('front.store')}}" method="POST"  enctype="multipart/form-data" id="commentform" class="comment-form">
                                    @csrf
                                    <input type="text" name="name" class="" placeholder="Nom*" required>
                                    <input type="email" name="email" class="" placeholder="E-mail*"required>
                                    <input type="text" name="sub" class="" placeholder="Matière*"required>
                                    <input type="text" name="number" class="" placeholder="Mobile Number*"required>
                                    <textarea name="text"  cols="30" rows="8" placeholder="Message*" required></textarea>
                                    <button type="submit" class="lab-btn">
                                        <span>Envoyez notre message</span>
                                    </button>
                                </form>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-info-wrapper">
                            <div class="contact-info-content">
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="{{asset('assets/images/contact/01.png')}}" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Adresse de bureau</span>
                                            <p>{{$row->address}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="assets/images/contact/02.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Numéro de téléphone</span>
                                            <p>{{$row->phone}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="assets/images/contact/03.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Envoyer un mail</span>
                                            <p>{{$row->email}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="contact-info-inner">
                                        <div class="contact-info-thumb">
                                            <img src="assets/images/contact/04.png" alt="address">
                                        </div>
                                        <div class="contact-info-details">
                                            <span class="fw-bold">Notre site Web</span>
                                            <p>www.darting.com</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="contact-bottom">
            <div class="contac-bottom">
                <div class="row justify-content-center g-0">
                    <div class="col-12">
                        <div class="location-map">
                            <div id="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228225.89119998863!2d-82.1359357856101!3d26.64753629985287!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88db44a7e78016f5%3A0xafd1a4163a9b6ff2!2sCape%20Coral%2C%20FL%2C%20USA!5e0!3m2!1sen!2sbd!4v1616562014411!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
