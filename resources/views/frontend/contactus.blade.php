@extends('frontmaster.master')
@section('title','Alliance | Contact Us')
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

        <div class="col-lg-4 col-md-4 col-12">

           <div class="contactbox">

              <i class="fas fa-map-marker-alt"></i>

              <h3>ADDRESS</h3>

              <p>12 King Street, Melbourne 3000, AUstralia</p>

            </div>

        </div><!--./col-lg-4-->



        <div class="col-lg-4 col-md-4 col-12">

           <div class="contactbox">

              <i class="fas fa-phone"></i>

              <h3>PHONE</h3>

              <p>+61 3 8376 6284</p>

            </div>

        </div><!--./col-lg-4-->



        <div class="col-lg-4 col-md-4 col-12">

           <div class="contactbox">

              <i class="fas fa-envelope"></i>

              <h3>EMAIL</h3>

              <p>contact_us@alliance.com</p>

            </div>

        </div><!--./col-lg-4-->



      </div><!--./row-->

    </div><!--./container-->  

  </section>



  <section class="bggray spacet80 spaceb80" id="enquiry">

    <div class="container">

      <div class="row">

        <div class="col-lg-12">

          <div class="contact-wrap">

            <h4>FOR ENQUIRY</h4>

            <form action="#">

              <div class="row">

                  <div class="col-sm-6 col-12">

                      <input type="text" class="form-control" placeholder="First Name*">

                  </div>



                  <div class="col-sm-6 col-12">

                      <input type="text" class="form-control" placeholder="Last Name*">

                  </div>

                  <div class="col-sm-6 col-12">

                      <input type="email" class="form-control" placeholder="Email Address*">

                  </div>

                  <div class="col-sm-6 col-12">

                    <input type="text" class="form-control" placeholder="Phone Number*">

                  </div>

                  <div class="col-sm-6 col-12">

                      <input type="text" class="form-control" placeholder="City">

                  </div>

                   <div class="col-sm-6 col-12">

                                    <select class="form-control">

                                      <option value="" class="">Select State</option>

                                      <option value="0">Not Applicable</option><option value="1">Alaska</option><option value="2">Alabama</option><option value="3">Arkansas</option><option value="4">Arizona</option><option value="5">California</option><option value="6">Colorado</option><option value="7">Connecticut</option><option value="8">District Of Columbia</option><option value="9">Delaware</option><option value="10">Florida</option><option value="11">Georgia</option><option value="12">Hawaii</option><option value="13">Iowa</option><option value="14">Idaho</option><option value="15">Illinois</option><option value="16">Indiana</option><option value="17">Kansas</option><option value="18">Kentucky</option><option value="19">Louisiana</option><option value="20">Massachusetts</option><option value="21">Maryland</option><option value="22">Maine</option><option value="23">Michigan</option><option value="24">Minnesota</option><option value="25">Missouri</option><option value="26">Mississippi</option><option value="27">Montana</option><option value="28">North Carolina</option><option value="29">North Dakota</option><option value="30">Nebraska</option><option value="31">New Hampshire</option><option value="32">New Jersey</option><option value="33">New Mexico</option><option value="34">Nevada</option><option value="35">New York</option><option value="36">Ohio</option><option value="37">Oklahoma</option><option value="38">Oregon</option><option value="39">Pennsylvania</option><option value="40">Rhode Island</option><option value="41">South Carolina</option><option value="42">South Dakota</option><option value="43">Tennessee</option><option value="44">Texas</option><option value="45">Utah</option><option value="46">Virginia</option><option value="47">Vermont</option><option value="48">Washington</option><option value="49">Wisconsin</option><option value="50">West Virginia</option><option value="51">Wyoming</option></select>

                                    </select>

                                </div>

                                <div class="col-sm-6 col-12">

                                    <select class="form-control">

                                      <option value="" class="">How Did You Hear About Us? *</option>

                                      <option value="0">LinkedIn</option>

                                      <option value="1">Indeed</option>

                                      <option value="2">Glassdoor</option>

                                      <option value="3">Handshake</option>

                                      <option value="4">Built In Chicago</option>

                                      <option value="5">Employee</option>

                                      <option value="6">Career Fair</option>

                                      <option value="7">University Career Site</option>

                                      <option value="8">Recruitment Agency</option>

                                      <option value="9">Other</option>

                                    </select>

                                </div>

                      <div class="col-sm-6">

                        <input type="text" class="form-control" placeholder="Other">

                      </div>

                       <div class="col-sm-6">

                        <textarea class="form-control" placeholder="Message"></textarea>

                        <!-- <input type="text" class="form-control" placeholder="Message"> -->

                      </div>

                      <div class="col-sm-6">

                        <div class="input-group">

                            <input type="text" class="form-control file-upload-text" placeholder="Upload Resume" />

                            <span class="input-group-btn">

                                <button type="button" class="btn btn-default file-upload-btn btnupload">

                                     <i class="fa fa-upload"></i> Upload 

                                    <input type="file" class="file-upload" name="myFile" />

                                </button>

                            </span>

                        </div><!--./input-group-->

                      </div><!--./col-sm-6-->        

                      <div class="col-sm-12">

                        <button style="border:0" href="#" type="submit" class="btn2 btngray btn--border btn--center btn--border-lightgrey mt-3"> <span class="btn-text">Send Message</span> <span class="btn-arrow"> <i class="fa fa-arrow-right"></i></span></button>

                    </div>

                </div>

              </form>

            </div>

          </div><!--./col-lg-12-->            

       </div><!--./row-->

     </div><!--./container-->  

  </section>



  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.724176445409!2d144.9552295159043!3d-37.81992914217038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d52763e4c89%3A0x6459d97ded6ec855!2s12+King+St%2C+Melbourne+VIC+3000%2C+Australia!5e0!3m2!1sen!2sin!4v1551770164889" width="100%" height="500" frameborder="0" style="border:0; display: block;" allowfullscreen></iframe>



 @stop