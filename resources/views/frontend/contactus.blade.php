@extends('frontmaster.master')
@section('title','Alliance | Contact Us')
@section('content')
    @php
        $header = \App\HeaderModel::find(4);
        $contact_us = \App\ContactUs::find(1);
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

                        <p>{{$contact_us->address}}</p>

                    </div>

                </div><!--./col-lg-4-->


                <div class="col-lg-4 col-md-4 col-12">

                    <div class="contactbox">

                        <i class="fas fa-phone"></i>

                        <h3>PHONE</h3>

                        <p>{{$contact_us->contact}}</p>

                    </div>

                </div><!--./col-lg-4-->


                <div class="col-lg-4 col-md-4 col-12">

                    <div class="contactbox">

                        <i class="fas fa-envelope"></i>

                        <h3>EMAIL</h3>

                        <p>{{$contact_us->email}}</p>

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

                        <form action="{{url('store_enq')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-sm-6 col-12">

                                    <input type="text" class="form-control" name="fname" placeholder="First Name*"
                                           required>

                                </div>


                                <div class="col-sm-6 col-12">

                                    <input type="text" class="form-control" name="lname" placeholder="Last Name*"
                                           required>

                                </div>

                                <div class="col-sm-6 col-12">

                                    <input type="email" class="form-control" name="email" placeholder="Email Address*"
                                           required>

                                </div>

                                <div class="col-sm-6 col-12">

                                    <input type="text" class="form-control" name="contact" placeholder="Phone Number*"
                                           required>

                                </div>

                                <div class="col-sm-6 col-12">

                                    <input type="text" class="form-control" name="city" placeholder="City">

                                </div>

                                <div class="col-sm-6 col-12">

                                    <select class="form-control">

                                        <option value="" name="state" class="">Select State</option>

                                        <option>Not Applicable</option>
                                        <option>Alaska</option>
                                        <option>Alabama</option>
                                        <option>Arkansas</option>
                                        <option>Arizona</option>
                                        <option>California</option>
                                        <option>Colorado</option>
                                        <option>Connecticut</option>
                                        <option>District Of Columbia</option>
                                        <option>Delaware</option>
                                        <option>Florida</option>
                                        <option>Georgia</option>
                                        <option>Hawaii</option>
                                        <option>Iowa</option>
                                        <option>Idaho</option>
                                        <option>Illinois</option>
                                        <option>Indiana</option>
                                        <option>Kansas</option>
                                        <option>Kentucky</option>
                                        <option>Louisiana</option>
                                        <option>Massachusetts</option>
                                        <option>Maryland</option>
                                        <option>Maine</option>
                                        <option>Michigan</option>
                                        <option>Minnesota</option>
                                        <option>Missouri</option>
                                        <option>Mississippi</option>
                                        <option>Montana</option>
                                        <option>North Carolina</option>
                                        <option>North Dakota</option>
                                        <option>Nebraska</option>
                                        <option>New Hampshire</option>
                                        <option>New Jersey</option>
                                        <option>New Mexico</option>
                                        <option>Nevada</option>
                                        <option>New York</option>
                                        <option>Ohio</option>
                                        <option>Oklahoma</option>
                                        <option>Oregon</option>
                                        <option>Pennsylvania</option>
                                        <option>Rhode Island</option>
                                        <option>South Carolina</option>
                                        <option>South Dakota</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Utah</option>
                                        <option>Virginia</option>
                                        <option>Vermont</option>
                                        <option>Washington</option>
                                        <option>Wisconsin</option>
                                        <option>West Virginia</option>
                                        <option>Wyoming</option>
                                    </select>


                                </div>

                                <div class="col-sm-6 col-12">

                                    <select class="form-control" name="hear_about" required>

                                        <option value="" class="">How Did You Hear About Us? *</option>
                                        <option>LinkedIn</option>
                                        <option>Indeed</option>
                                        <option>Glassdoor</option>
                                        <option>Handshake</option>
                                        <option>Built In Chicago</option>
                                        <option>Employee</option>
                                        <option>Career Fair</option>
                                        <option>University Career Site</option>
                                        <option>Recruitment Agency</option>
                                        <option>Other</option>
                                    </select>

                                </div>

                                <div class="col-sm-6">

                                    <input type="text" name="other" class="form-control" placeholder="Other">

                                </div>

                                <div class="col-sm-6">

                                    <textarea class="form-control" name="message" placeholder="Message"></textarea>

                                    <!-- <input type="text" class="form-control" placeholder="Message"> -->

                                </div>

                                <div class="col-sm-6">

                                    <div class="input-group">

                                        <input type="text" class="form-control file-upload-text"
                                               placeholder="Upload Resume"/>

                                        <span class="input-group-btn">

                                <button type="button" class="btn btn-default file-upload-btn btnupload">

                                     <i class="fa fa-upload"></i> Upload 

                                    <input type="file" name="resume" class="file-upload"/>

                                </button>

                            </span>

                                    </div><!--./input-group-->

                                </div><!--./col-sm-6-->

                                <div class="col-sm-12">

                                    <button style="border:0" href="#" type="submit"
                                            class="btn2 btngray btn--border btn--center btn--border-lightgrey mt-3">
                                        <span class="btn-text">Send Message</span> <span class="btn-arrow"> <i
                                                    class="fa fa-arrow-right"></i></span></button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div><!--./col-lg-12-->

            </div><!--./row-->

        </div><!--./container-->

    </section>



    <iframe src="{{$contact_us->map_url}}" width="100%" height="500" frameborder="0" style="border:0; display: block;"
            allowfullscreen></iframe>



@stop