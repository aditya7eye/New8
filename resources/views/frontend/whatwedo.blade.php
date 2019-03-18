@extends('frontmaster.master')
@section('title','Alliance | What We Do')
@section('content')
@php
    $whatwedo = \App\WhatwedoModel::whereis_del(0)->get();
    $header = \App\HeaderModel::find(1);
@endphp

  <section class="innerabout">

    <div class="container">

        <div class="row">

            <div class="col-lg-10 offset-lg-1">

              <h1>{{ $header->heading }}</h1>

              <p>{{ $header->description }}</p>

           </div><!--./col-lg-12--> 

       </div><!--./row-->

    </div><!--./container-->  

  </section><!-- #intro -->



  <section class="about_bg ">

      <div class="container">

          <div class="row">
@foreach ($whatwedo as $object)
<div class="col-lg-3 col-md-6 col-12">

    <div class="single-service">

      {{-- <div class="single-service-icon"><i class="fas fa-desktop"></i></div> --}}
      <div class="single-service-icon"><img style="height: 40px;" src="{{ url('whatwedo').'/'.$object->image }}" alt=""></div>

       <h6>{{ $object->heading }}</h6>

      <a href="#{{ $object->id  }}" class="btn2 btngray btn--border btn--center btn--border-lightgrey page-scroll"> <span class="btn-text">Read More</span> <span class="btn-arrow"> <i class="fa fa-arrow-right"></i></span></a>

    </div><!--./services-->  

  </div>
@endforeach
              {{-- <div class="col-lg-3 col-md-6 col-12">

                <div class="single-service">

                  <div class="single-service-icon"><i class="fas fa-desktop"></i></div>

                   <h6>TECHNOLOGY</h6>

                  <a href="#technology" class="btn2 btngray btn--border btn--center btn--border-lightgrey page-scroll"> <span class="btn-text">Read More</span> <span class="btn-arrow"> <i class="fa fa-arrow-right"></i></span></a>

                </div><!--./services-->  

              </div><!--./col-lg-3-->

              <div class="col-lg-3 col-md-6 col-12">

                <div class="single-service">

                  <div class="single-service-icon"><i class="fas fa-headset"></i></div>

                   <h6>TRADE SUPPORT</h6>

                  <a href="#Tradesupport" class="btn2 btngray btn--border btn--center btn--border-lightgrey page-scroll"> <span class="btn-text">Read More</span> <span class="btn-arrow"> <i class="fa fa-arrow-right"></i></span></a>

                </div><!--./services-->  

              </div><!--./col-lg-3-->

              <div class="col-lg-3 col-md-6 col-12">

                <div class="single-service">

                  <div class="single-service-icon"><i class="fas fa-database"></i></div>

                   <h6>DATA SCIENCE</h6>

                  <a href="#Datascience" class="btn2 btngray btn--border btn--center btn--border-lightgrey page-scroll"> <span class="btn-text">Read More</span> <span class="btn-arrow"> <i class="fa fa-arrow-right"></i></span></a>

                </div><!--./services-->  

              </div><!--./col-lg-3-->

              <div class="col-lg-3 col-md-6 col-12">

                <div class="single-service">

                  <div class="single-service-icon"><i class="far fa-clone"></i></div>

                   <h6>Risk management</h6>

                  <a href="#Riskmanagement" class="btn2 btngray btn--border btn--center btn--border-lightgrey page-scroll"> <span class="btn-text">Read More</span> <span class="btn-arrow"> <i class="fa fa-arrow-right"></i></span></a>

                </div><!--./services-->  

              </div><!--./col-lg-3--> --}}

          </div><!--./row-->

      </div><!--./container-->  

  </section>
  @foreach ($whatwedo as $object)
  <section class="bggray spacet80 spaceb80" id="{{ $object->id }}">

    <div class="container">

      <div class="row">

         <div class="col-lg-10 offset-lg-1 text-center spaceb30">

            <h2 class="service_title">{{ $object->heading  }}</h2>

            <p><b>{{ $object->description  }}</b></p>

          </div><!--./col-lg-10-->

      </div><!--./row-->

    </div><!--./container-->  

  </section>

  @endforeach


  {{-- <section class="bggray spacet80 spaceb80" id="technology">

    <div class="container">

      <div class="row">

         <div class="col-lg-10 offset-lg-1 text-center spaceb30">

            <h2 class="service_title">TECHNOLOGY</h2>

            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null.</p>

            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null.</p>

          </div><!--./col-lg-10-->

      </div><!--./row-->

    </div><!--./container-->  

  </section>



  <section class="about_bg" id="Tradesupport">

    <div class="container">

      <div class="row">

        <div class="col-lg-10 offset-lg-1 text-center spaceb30">

            <h2 class="service_title">TRADE <span>SUPPORT</span></h2>

            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null.</p>

            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null.</p>

          </div><!--./col-lg-10-->

      </div><!--./row-->

    </div><!--./container-->  

  </section>



  <section class="bggray spacet80 spaceb80" id="Datascience">

    <div class="container">

      <div class="row">

         <div class="col-lg-10 offset-lg-1 text-center spaceb30">

            <h2 class="service_title">Data <span>SCIENCE</span></h2>

            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null.</p>

            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null.</p>

          </div><!--./col-lg-10-->

      </div><!--./row-->

    </div><!--./container-->  

  </section>



  <section class="about_bg" id="Riskmanagement">

    <div class="container">

      <div class="row">

        <div class="col-lg-10 offset-lg-1 text-center spaceb30">

            <h2 class="service_title">RISK <span>MANAGEMENT</span></h2>

            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null.</p>

            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null.</p>

          </div><!--./col-lg-10-->

      </div><!--./row-->

    </div><!--./container-->  

  </section> --}}



  <section class="testimonial-area">

     <div class="container">

        <div class="row">

            <div class="col-lg-10 offset-lg-1 text-center spaceb30">

                <h2 class="service_title color-white">A Happy Client Is All We Need</h2>

            </div><!--./col-lg-10-->

           <div class="col-lg-8 offset-lg-2">  

            <div class="owl-carousel testimonials-carousel">

              <div class="testimonial-item">

                <img src="images/member2.jpg" class="testimonial-img" alt="">

                <h5>Antonio Conte</h5>

                <h6>CEO of Barbara</h6>

                <p>Always Speak the trouth vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent per conubia nostra. "</p>



              </div><!--./testimonial-item-->

              <div class="testimonial-item">

                <img src="images/member2.jpg" class="testimonial-img" alt="">

                <h5>Antonio Conte</h5>

                <h6>CEO of Barbara</h6>

                <p>Always Speak the trouth vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent per conubia nostra. "</p>



              </div><!--./testimonial-item-->

           </div><!--./testimonials-carousel-->

          </div><!--./col-lg-8--> 

        </div><!--./row-->

    </div><!--./container-->  

  </section>



 @stop