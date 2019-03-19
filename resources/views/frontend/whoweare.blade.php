@extends('frontmaster.master')
@section('title','Alliance | Who We Are')
@section('content')
    @php
        $success = \App\SuccessStory::where(['is_active'=>1])->get();
        $success_years = \App\SuccessYears::where(['is_active'=>1])->orderBy('year','asc')->get();
        $teams = \App\Team::where(['is_active'=>1])->get();
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

                    @foreach($success as $succes)
                        <h2 class="service_title">{{$succes->title}}</h2>
                        {!! $succes->description !!}
                    @endforeach

                </div><!--./col-lg-10-->

            </div><!--./row-->

        </div><!--./container-->

    </section>



    <section class="bggray spacet80 spaceb80">

        <div class="container">

            <div class="row">

                <div class="owl-carousel timeline-carousel">
                    @foreach($success_years as $year)
                        <div class="col-lg-12">

                            <div class="timeline">

                                <div class="year">{{$year->year}}</div>

                                <p class="time-title">{!! $year->title !!}</p>

                                <p>{!! $year->description !!}</p>

                            </div><!--./timeline-->

                        </div><!--./col-lg-4-->
                    @endforeach
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

                @foreach($teams as $team)
                    @if($team->type == 'senior_management')
                        <div class="col-lg-3 col-md-6">

                            <div class="single-member">

                                <div class="member-image">

                                    <img src="{{url('').'/'.$team->image}}" alt="">

                                    <div class="member-name">

                                        <h4>{{$team->name}}</h4>

                                    </div>

                                </div>

                                <div class="member-caption">

                                    <h5>{{$team->designation}}</h5>

                                    <p>{{$team->about}}</p>

                                </div>

                            </div><!--./single-member-->

                        </div><!--./col-lg-3-->
                    @endif
                @endforeach

                <div class="col-lg-10 offset-lg-1 text-center spacet80 spaceb30">

                    <p>— BOARD OF MANAGERS —</p>

                </div><!--./col-lg-10-->

                @foreach($teams as $team)
                    @if($team->type == 'board_of_managers')
                        <div class="col-lg-3 col-md-6">

                            <div class="single-member">

                                <div class="member-image">

                                    <img src="{{url('').'/'.$team->image}}" alt="">

                                    <div class="member-name">

                                        <h4>{{$team->name}}</h4>

                                    </div>

                                </div>

                            </div><!--./single-member-->

                        </div><!--./col-lg-3-->
                    @endif
                @endforeach

            </div><!--./row-->

        </div><!--./container-->

    </section>

@stop