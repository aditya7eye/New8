@extends('frontmaster.master')
@section('title', $obj->title )
@section('content')
<section class="about_bg">

        <div class="container">
  
            <div class="row">
  
                <div class="col-lg-10 offset-lg-1 text-center">
  
                    {{-- <p class="colorblack">— OUR CULTURE —</p> --}}
  
                    <h2 class="service_title">{{ $obj->title }}</span></h2>
  
                    <p class="font18 mb-4"></p>
  
                    {!! $obj->description !!}
                    @if(isset($slider))
                     <a href="{{ url('').'/'.$slider->link.'/'.base64_encode($obj->id).'/@' }}" class="btn2 btngray btn--border btn--center btn--border-lightgrey mt-3"> <span class="btn-text">What We Do</span> <span class="btn-arrow"> <i class="fa fa-arrow-right"></i></span></a>
                      @endif
  
                </div><!--./col-lg-10-->
  
            </div><!--./row-->
  
        </div><!--./container-->  
  
    </section>
@stop