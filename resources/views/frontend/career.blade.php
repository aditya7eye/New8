@extends('frontmaster.master')
@section('title','Alliance | Career')
@section('content')
@php
    $header = \App\HeaderModel::find(3);
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



  

  <section class="">

    <div class="container spacet80 spaceb50">

      <div class="row">

        <div class="col-lg-10 offset-lg-1 text-center spaceb50">

          <p>— CURRENT OPPORTUNITIES —</p>

        </div><!--./col-lg-10-->

        <div class="col-lg-12 col-md-12 col-12">

          <div class="careermain">

            <a href="contact.html#enquiry">

              <h3>Internssips</h3>

              <h5>Quantitative Risk Intern - Spring 2019</h5>

              <p><i class="fas fa-map-marker-alt"></i>Chicago, Illinois</p>

            </a>  

          </div><!--./careermain-->

        </div><!--./col-lg-6-->

        <div class="col-lg-12 col-md-12 col-12">

          <div class="careermain">

            <a href="contact.html#enquiry">

              <h3>Software Development</h3>

              <h5>Senior C++ Developer</h5>

              <p><i class="fas fa-map-marker-alt"></i>Chicago, Illinois</p>

            </a>  

          </div><!--./careermain-->

        </div><!--./col-lg-6-->

        <div class="col-lg-12 col-md-12 col-12">

          <div class="careermain">

            <a href="contact.html#enquiry">

              <h3>Web Development</h3>

              <h5>Quantitative Risk Intern - Spring 2019</h5>

              <p><i class="fas fa-map-marker-alt"></i>Chicago, Illinois</p>

            </a>  

          </div><!--./careermain-->

        </div><!--./col-lg-6-->

        <div class="col-lg-12 col-md-12 col-12">

          <div class="careermain">

            <a href="contact.html#enquiry">

              <h3>Trading</h3>

              <h5>Discretionary Trader</h5>

              <p><i class="fas fa-map-marker-alt"></i>Dubin, Ireland</p>

              <h5>Junior Trader</h5>

              <p><i class="fas fa-map-marker-alt"></i>Dubin, Ireland</p>

              <h5>Quantitative Trader</h5>

              <p><i class="fas fa-map-marker-alt"></i>Dubin, Ireland</p>

            </a>  

          </div><!--./careermain-->

        </div><!--./col-lg-6-->

      </div><!--./row-->

    </div><!--./container-->  

  </section>



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