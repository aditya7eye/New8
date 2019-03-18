@extends('frontmaster.master')
@section('title','Alliance | Who We Are')
@section('content')
@php
 
    $header = \App\HeaderModel::find(2);
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



  

  <section class="about_bg">

    <div class="container">

      <div class="row">

        <div class="col-lg-10 offset-lg-1 text-center spaceb30">

            <p>— SUCCESS STORIES —</p>

            <h2 class="service_title">A HISTORY OF  <span>SUCCESS</span></h2>

            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null.</p>

            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat null.</p>

          </div><!--./col-lg-10-->

      </div><!--./row-->

    </div><!--./container-->  

  </section>



  <section class="bggray spacet80 spaceb80">

    <div class="container">

      <div class="row">

        <div class="owl-carousel timeline-carousel">

        <div class="col-lg-12">

          <div class="timeline">

            <div class="year">2017</div>

            <p class="time-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquam excepturi perspiciatis.</p>

            <p>Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque</p>

          </div><!--./timeline-->  

        </div><!--./col-lg-4-->

        <div class="col-lg-12">

          <div class="timeline">

            <div class="year">2018</div>

            <p class="time-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquam excepturi perspiciatis.</p>

            <p>Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque</p>

          </div><!--./timeline-->  

        </div><!--./col-lg-4-->

        <div class="col-lg-12">

          <div class="timeline">

            <div class="year">2019</div>

            <p class="time-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquam excepturi perspiciatis.</p>

            <p>Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque</p>

          </div><!--./timeline-->  

        </div><!--./col-lg-4-->



         <div class="col-lg-12">

          <div class="timeline">

            <div class="year">Today</div>

            <p class="time-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquam excepturi perspiciatis.</p>

            <p>Lorem ipsum dolor sit ameectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque</p>

          </div><!--./timeline-->  

        </div><!--./col-lg-4-->

       </div><!--./timeline-carousel--> 

      </div><!--./row-->

    </div><!--./container-->  

  </section>



  <section class="about_bg" id="Riskmanagement">

    <div class="container">

      <div class="row">

        <div class="col-lg-10 offset-lg-1 text-center spaceb30">

            <h2 class="service_title">Team <span>Member</span></h2>

            <p>— SENIOR MANAGEMENT TEAM —</p>

          </div><!--./col-lg-10-->

        <div class="col-lg-3 col-md-6">

          <div class="single-member">

              <div class="member-image">

                <img src="images/team1.jpg" alt="">

                <div class="member-name">

                  <h4>Rob Creamer</h4>

                </div>

              </div>

              <div class="member-caption">

                <h5>President & CEO</h5>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquam excepturi perspiciatis.</p>

              </div>

            </div><!--./single-member-->

        </div><!--./col-lg-3-->



        <div class="col-lg-3 col-md-6">

          <div class="single-member">

              <div class="member-image">

                <img src="images/team1.jpg" alt="">

                <div class="member-name">

                  <h4>Christopher McNulty</h4>

                </div>

              </div>

              <div class="member-caption">

                <h5>Managing Director</h5>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquam excepturi perspiciatis.</p>

              </div>

            </div><!--./single-member-->

        </div><!--./col-lg-3-->



        <div class="col-lg-3 col-md-6">

          <div class="single-member">

              <div class="member-image">

                <img src="images/team1.jpg" alt="">

                <div class="member-name">

                  <h4>Rob Creamer</h4>

                </div>

              </div>

              <div class="member-caption">

                <h5>President & CEO</h5>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquam excepturi perspiciatis.</p>

              </div>

            </div><!--./single-member-->

        </div><!--./col-lg-3-->



        <div class="col-lg-3 col-md-6">

          <div class="single-member">

              <div class="member-image">

                <img src="images/team1.jpg" alt="">

                <div class="member-name">

                  <h4>Rob Creamer</h4>

                </div>

              </div>

              <div class="member-caption">

                <h5>President & CEO</h5>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur aliquam excepturi perspiciatis.</p>

              </div>

            </div><!--./single-member-->

        </div><!--./col-lg-3-->  



        <div class="col-lg-10 offset-lg-1 text-center spacet80 spaceb30">

            <p>— BOARD OF MANAGERS —</p>

          </div><!--./col-lg-10-->

         <div class="col-lg-3 col-md-6">

          <div class="single-member">

              <div class="member-image">

                <img src="images/team1.jpg" alt="">

                <div class="member-name">

                  <h4>H. Arthur Brereton</h4>

                </div>

              </div>

            </div><!--./single-member-->

        </div><!--./col-lg-3-->

         <div class="col-lg-3 col-md-6">

          <div class="single-member">

              <div class="member-image">

                <img src="images/team1.jpg" alt="">

                <div class="member-name">

                  <h4>H. Arthur Brereton</h4>

                </div>

              </div>

            </div><!--./single-member-->

        </div><!--./col-lg-3--> 

         <div class="col-lg-3 col-md-6">

          <div class="single-member">

              <div class="member-image">

                <img src="images/team1.jpg" alt="">

                <div class="member-name">

                  <h4>H. Arthur Brereton</h4>

                </div>

              </div>

            </div><!--./single-member-->

        </div><!--./col-lg-3--> 

         <div class="col-lg-3 col-md-6">

          <div class="single-member">

              <div class="member-image">

                <img src="images/team1.jpg" alt="">

                <div class="member-name">

                  <h4>H. Arthur Brereton</h4>

                </div>

              </div>

            </div><!--./single-member-->

        </div><!--./col-lg-3-->   

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

                <p>Always Speak the trouth vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent per conubia nostra."</p>

              </div><!--./testimonial-item-->

           </div><!--./testimonials-carousel-->

          </div><!--./col-lg-8--> 

        </div><!--./row-->

    </div><!--./container-->  

  </section>

  @stop