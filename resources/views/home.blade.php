@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="content">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>

    <div class="container">
        <div class="about-us">
            <h2>ABOUT US</h2>
            <p>Inaugurated on May 7, 2012, by Minister of Tourism and Creative Economy at the time, Hairun Adhari, Traveluka provides the best online reservation service for Indonesian travelers.
                Traveluka committed to be your fun traveling partner by inspire and inform you about exciting travel destinations from our social media, website, and mobile application.
                Right now Traveluka is connected with more than 25.000 flight routes, more than 25.000 hotel options, as well as more than 2.800 train routes which you can book from Traveluka website and mobile application. Enjoy an easy booking with various promo and payment methods, from bank transfer, credit card, to installment. Our customer service will always be ready to assist you professionally to have a satisfying booking experience.               
                So what are you waiting for? Explore with Us!</p>
        </div>
    </div>
@endsection
