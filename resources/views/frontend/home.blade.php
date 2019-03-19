@extends('frontmaster.master')
@section('title','Alliance | Home')
@section('content')
    @php
        $sliderdata = \App\SliderModel::whereis_del(0)->get();
    @endphp
    <section class="relative intro">

        <div class="intro-container">

            <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">


                <ol class="carousel-indicators"></ol>


                <div class="carousel-inner" role="listbox">


                    @foreach ($sliderdata as $index =>  $item)
                        @if($index == 0)
                            <div class="carousel-item active">

                                <div class="carousel-background"><img src="{{ url('slider').'/'.$item->image }}" alt="">
                                </div>

                                <div class="carousel-container">

                                    <div class="carousel-content">

                                        <h1>{{ $item->heading }}</h1>

                                        <p>{{ $item->description }}</p>

                                        <a href="{{ url('what-we-do') }}"
                                           class="btn2 btn--border btn--center btn--border-lightgrey"><span
                                                    class="btn-text">Learn More About Us</span> <span class="btn-arrow"> <i
                                                        class="far fa-arrow-alt-circle-right"></i></span></a>


                                    </div>

                                </div>

                            </div>
                        @else
                            <div class="carousel-item">

                                <div class="carousel-background"><img src="{{ url('slider').'/'.$item->image }}" alt="">
                                </div>

                                <div class="carousel-container">

                                    <div class="carousel-content">

                                        <h1>{{ $item->heading }}</h1>

                                        <p>{{ $item->description }}</p>

                                        <a href="{{ url('what-we-do') }}"
                                           class="btn2 btn--border btn--center btn--border-lightgrey"><span
                                                    class="btn-text">Learn More About Us</span> <span class="btn-arrow"> <i
                                                        class="far fa-arrow-alt-circle-right"></i></span></a>


                                    </div>

                                </div>

                            </div>
                        @endif
                    @endforeach
                    {{-- <div class="carousel-item active">

                      <div class="carousel-background"><img src="images/slider1.jpg" alt=""></div>

                      <div class="carousel-container">

                        <div class="carousel-content">

                          <h1>INSPIRING INNOVATION</h1>

                          <p>Ne homero prompta constituam provtim omnis porro eu, iusto deserunt incorrupte sea ad. Aliquam compre hensam definitionem eam ea ius facete nominaviId vim laudem nusquamtion.</p>

                          <a href="whoweare.html" class="btn2 btn--border btn--center btn--border-lightgrey"><span class="btn-text">Learn More About Us</span> <span class="btn-arrow"> <i class="far fa-arrow-alt-circle-right"></i></span></a>



                        </div>

                      </div>

                    </div> --}}



                    {{-- <div class="carousel-item">

                     <div class="carousel-background"><img src="images/2.jpg" alt=""></div>

                      <div class="carousel-container">

                        <div class="carousel-content">

                          <h1>At vero eos et accusamus</h1>

                          <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut.</p>

                          <a href="whatwedo.html" class="btn2 btn--border btn--center btn--border-lightgrey"> <span class="btn-text">See What We Do</span> <span class="btn-arrow"> <i class="far fa-arrow-alt-circle-right"></i></span></a>

                        </div>

                      </div>

                    </div> --}}

                </div>


                <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">

                    <span class="carousel-control-prev-icon fas fa-long-arrow-alt-left" aria-hidden="true"></span>

                    <span class="sr-only">Previous</span>

                </a>


                <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">

                    <span class="carousel-control-next-icon fas fa-long-arrow-alt-right" aria-hidden="true"></span>

                    <span class="sr-only">Next</span>

                </a>


            </div>

        </div>

    </section><!-- #intro -->






    @foreach ($homepage as $obj)
        @php
            $slider = \App\PagemenuModel::wherepage_id($obj->id)->whereis_active(1)->whereis_del(0)->first();
            // echo $slider;
        @endphp

        @if(isset($obj->image))
            <section class="bggray spacet80 spaceb80">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-10 offset-lg-1 text-center spaceb30">

                            <h2 class="service_title">{{ $obj->title }}</h2>

                        </div><!--./col-lg-10-->

                        <div class="col-lg-6 col-md-12 col-12">

                            <div class="features-item-2">

                                <div class="features-single">

                                    <div class="features-img">

                                        <img src="{{ url('dynamic_page_image').'/'.$obj->image }}" alt="">

                                    </div>

                                </div>

                            </div>

                        </div><!--./col-lg-6-->

                        <div class="col-lg-6 col-md-12 col-12">

                            <div class="aboutright">

                                {!! $obj->description !!}
                                @if(isset($slider))
                                    <a href="{{ url('').'/'.$slider->link.'/'.base64_encode($obj->id).'/@' }}"
                                       class="btn2 btngray btn--border btn--center btn--border-lightgrey mt-3"> <span
                                                class="btn-text">See More</span> <span class="btn-arrow"> <i
                                                    class="fa fa-arrow-right"></i></span></a>
                                @endif

                            </div><!--./aboutright-->

                        </div><!--./col-lg-6-->

                    </div><!--./row-->

                </div><!--./container-->

            </section>
        @else
            <section class="about_bg">

                <div class="container">

                    <div class="row">

                        <div class="col-lg-10 offset-lg-1 text-center">

                            {{-- <p class="colorblack">— OUR CULTURE —</p> --}}

                            <h2 class="service_title"><span>{{ $obj->title }}</span></h2>

                            <p class="font18 mb-4"></p>

                            {!! $obj->description !!}
                            @if(isset($slider))
                                <a href="{{ url('').'/'.$slider->link.'/'.base64_encode($obj->id).'/@' }}"
                                   class="btn2 btngray btn--border btn--center btn--border-lightgrey mt-3"> <span
                                            class="btn-text">See More</span> <span class="btn-arrow"> <i
                                                class="fa fa-arrow-right"></i></span></a>
                            @endif

                        </div><!--./col-lg-10-->

                    </div><!--./row-->

                </div><!--./container-->

            </section>
        @endif
    @endforeach





@stop