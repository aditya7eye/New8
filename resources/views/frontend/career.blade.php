@extends('frontmaster.master')
@section('title','Alliance | Career')
@section('content')
    @php
        $header = \App\HeaderModel::find(3);
        $careers = \App\Careers::where(['is_active'=>1])->get();
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

                @foreach($careers as $career)
                    <div class="col-lg-12 col-md-12 col-12">

                        <div class="careermain">

                            <a style="cursor:none;">

                                <h3>{{$career->designation}}</h3>

                                <h5>{{$career->title}}</h5>

                                <p><i class="fas fa-map-marker-alt"></i>{{$career->location}}</p>

                            </a>

                        </div><!--./careermain-->

                    </div><!--./col-lg-6-->
                @endforeach

                {{--<div class="col-lg-12 col-md-12 col-12">--}}

                    {{--<div class="careermain">--}}

                        {{--<a href="contact.html#enquiry">--}}

                            {{--<h3>Software Development</h3>--}}

                            {{--<h5>Senior C++ Developer</h5>--}}

                            {{--<p><i class="fas fa-map-marker-alt"></i>Chicago, Illinois</p>--}}

                        {{--</a>--}}

                    {{--</div><!--./careermain-->--}}

                {{--</div><!--./col-lg-6-->--}}

                {{--<div class="col-lg-12 col-md-12 col-12">--}}

                    {{--<div class="careermain">--}}

                        {{--<a href="contact.html#enquiry">--}}

                            {{--<h3>Web Development</h3>--}}

                            {{--<h5>Quantitative Risk Intern - Spring 2019</h5>--}}

                            {{--<p><i class="fas fa-map-marker-alt"></i>Chicago, Illinois</p>--}}

                        {{--</a>--}}

                    {{--</div><!--./careermain-->--}}

                {{--</div><!--./col-lg-6-->--}}

                {{--<div class="col-lg-12 col-md-12 col-12">--}}

                    {{--<div class="careermain">--}}

                        {{--<a href="contact.html#enquiry">--}}

                            {{--<h3>Trading</h3>--}}

                            {{--<h5>Discretionary Trader</h5>--}}

                            {{--<p><i class="fas fa-map-marker-alt"></i>Dubin, Ireland</p>--}}

                            {{--<h5>Junior Trader</h5>--}}

                            {{--<p><i class="fas fa-map-marker-alt"></i>Dubin, Ireland</p>--}}

                            {{--<h5>Quantitative Trader</h5>--}}

                            {{--<p><i class="fas fa-map-marker-alt"></i>Dubin, Ireland</p>--}}

                        {{--</a>--}}

                    {{--</div><!--./careermain-->--}}

                {{--</div><!--./col-lg-6-->--}}

            </div><!--./row-->

        </div><!--./container-->

    </section>

@stop