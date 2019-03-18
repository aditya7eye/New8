@extends('frontmaster.master')
@section('title','Alliance | Dynamic')
@section('content')
<section class="bggray spacet80 spaceb80">

        <div class="container">
  
          <div class="row">
  
              <div class="col-lg-10 offset-lg-1 text-center spaceb30">
  
                  <h2 class="service_title">{{ $data->title }}</h2>
  
              </div><!--./col-lg-10-->
  
              <div class="col-lg-6 col-md-12 col-12">
  
                  <div class="features-item-2">
  
                      <div class="features-single">
  
                          <div class="features-img">
  
                              <img style="height:384px ; width:auto;" src="{{ url('dynamic_page_image').'/'.$data->image }}" alt="">
  
                          </div>           
  
                      </div>
  
                  </div>
           
              </div><!--./col-lg-6-->
  
              <div class="col-lg-6 col-md-12 col-12">
  
                  <div class="aboutright">
  
                      {{-- <h4>Locally Grown with International Success</h4> --}}
  <br>
                      <p class="pitalic"><b>{!! $data->description !!}</b></p>
  
                       {{-- <a href="whatwedo.html" class="btn2 btngray btn--border btn--center btn--border-lightgrey mt-3"> <span class="btn-text">What We Do</span> <span class="btn-arrow"> <i class="fa fa-arrow-right"></i></span></a> --}}
  
                  </div><!--./aboutright-->
  
              </div><!--./col-lg-6-->
  
          </div><!--./row-->
  
      </div><!--./container-->  
  
    </section>
@stop