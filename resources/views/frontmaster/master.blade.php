<!DOCTYPE html>

<html class="no-js" lang="en-US">

<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
    {{--<title>Alliance</title> --}}
    <title>@yield('title')</title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="{{ url('images/favicon.png') }}"/>

    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

    <link href="{{ url('css/owl.carousel.min.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    {{-------Notification--------}}
    <link rel="stylesheet" href="{{ url('css/lobibox.min.css') }}">
    <script src="{{url('js/notification.min.js')}}"></script>
    <script src="{{url('js/notification-custom-script.js')}}"></script>
    {{-------Notification--------}}

</head>

<body>

<header id="sticky-header">

    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('images/logo.png') }}" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"><i class="fa fa-bars navfa"></i></span>

            </button>
            @php
                $all_links = \App\PagemenuModel::where(['is_active' => 1 , 'is_del' => 0])->get();
            @endphp
            <div class="collapse navbar-collapse" id="navbarResponsive">

                <ul class="navbar-nav ml-auto nav-menu navborder">


                    @php
                        $count = 3;
                    @endphp
                    @foreach ($all_links as $index=>$page)
                        @if($index <= $count)
                            @if($page->type==0)
                                <li class="nav-item"><a class="nav-link" href="{{ url('').'/'.$page->link }}"
                                                        align="center"><b>{{ $page->page_name }}</b> </a></li>
                            @else
                                <li class="nav-item"><a class="nav-link" target="_blank" href="{{ $page->link }}"
                                                        align="center"><b>{{ $page->page_name }}</b> </a></li>
                            @endif
                        @else
                            @if($page->type==0)
                                <li class="nav-item"><a class="nav-link"
                                                        href="{{ url('').'/'.$page->link.'/'.base64_encode($page->page_id).'/@' }}"
                                                        align="center"><b>{{ $page->page_name }}</b> </a></li>
                            @else
                                <li class="nav-item"><a class="nav-link" target="_blank" href="{{ $page->link }}"
                                                        align="center"><b>{{ $page->page_name }}</b> </a></li>
                            @endif
                        @endif
                    @endforeach






                    {{-- <li class="nav-item"><a class="nav-link" href="{{ url('what-we-do') }}">What We Do</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('who-we-are') }}">Who We are</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('careers') }}">Careers</a></li>

                    <li class="nav-item"><a class="nav-link" href="{{ url('contact-us') }}">Contact Us</a></li> --}}

                </ul>

                @php
                    $facebook = \App\SocialLink::find(1);
                    $twitter = \App\SocialLink::find(2);
                    $linkedin = \App\SocialLink::find(3);
                    $youtube = \App\SocialLink::find(4);
                    $google_plus = \App\SocialLink::find(5);
                    $pinterest = \App\SocialLink::find(6);
                    $instagram = \App\SocialLink::find(7);
                @endphp
                <ul class="top-social">
                    @if($facebook->is_active == 1)
                        <li><a href="{{$facebook->link}}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    @endif
                    @if($twitter->is_active == 1)
                        <li><a href="{{$twitter->link}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    @endif
                    @if($linkedin->is_active == 1)
                        <li><a href="{{$linkedin->link}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    @endif
                    @if($youtube->is_active == 1)
                        <li><a href="{{$youtube->link}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    @endif
                    @if($google_plus->is_active == 1)
                        <li><a href="{{$google_plus->link}}" target="_blank"><i class="fab fa-google-plus"></i></a></li>
                    @endif
                    @if($pinterest->is_active == 1)
                        <li><a href="{{$pinterest->link}}" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                    @endif
                    @if($instagram->is_active == 1)
                        <li><a href="{{$instagram->link}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    @endif


                </ul>

            </div>

        </div>

    </nav>

</header>
@yield('content')
@php
    $clients = \App\HappyclientModel::whereis_del(0)->get();
@endphp
<section class="testimonial-area">

    <div class="container">

        <div class="row">

            <div class="col-lg-10 offset-lg-1 text-center spaceb30">

                <h2 class="service_title color-white">A Happy Client Is All We Need</h2>

            </div><!--./col-lg-10-->

            <div class="col-lg-8 offset-lg-2">

                <div class="owl-carousel testimonials-carousel">

                    @foreach ($clients as $object)
                        <div class="testimonial-item">

                            <img src="{{ url('client_image').'/'.$object->image }}" class="testimonial-img" alt="">

                            <h5>{{ $object->name }}</h5>

                            <h6>{{ $object->designation }}</h6>

                            <p>{{ $object->message }}</p>


                        </div>
                    @endforeach
                <!--./testimonial-item-->

                    {{-- <div class="testimonial-item">

                      <img src="images/member2.jpg" class="testimonial-img" alt="">

                      <h5>Antonio Conte</h5>

                      <h6>CEO of Barbara</h6>

                      <p>Always Speak the trouth vel tincidunt sed euismod nibh Quisque volutpat condimentum velit class aptent taciti sociosqu ad litora torquent per conubia nostra. "</p>



                    </div><!--./testimonial-item--> --}}

                </div><!--./testimonials-carousel-->

            </div><!--./col-lg-8-->

        </div><!--./row-->

    </div><!--./container-->

</section>

<section class="checkout_bg">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="checktext text-center">
                    <h1>CHECK US OUT</h1>

                    <div class="getan"><a href="#"><img src="{{ url('images/getan.png') }}"/></a></div>

                </div>

            </div>
            <!--./col-lg-12-->

        </div>
        <!--./row-->

    </div>
    <!--./container-->

</section>


<footer>

    <div class="container">

        <div class="row">

            <div class="col-lg-12 spaceb50">

                <h2 class="service_title">Alliance</h2>


                <ul class="top-social fo-social mb-4">
                    @if($facebook->is_active == 1)
                        <li><a href="{{$facebook->link}}" target="_blank"><i class="fab fa-facebook"></i></a></li>
                    @endif
                    @if($twitter->is_active == 1)
                        <li><a href="{{$twitter->link}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    @endif
                    @if($linkedin->is_active == 1)
                        <li><a href="{{$linkedin->link}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    @endif
                    @if($youtube->is_active == 1)
                        <li><a href="{{$youtube->link}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                    @endif
                    @if($google_plus->is_active == 1)
                        <li><a href="{{$google_plus->link}}" target="_blank"><i class="fab fa-google-plus"></i></a></li>
                    @endif
                    @if($pinterest->is_active == 1)
                        <li><a href="{{$pinterest->link}}" target="_blank"><i class="fab fa-pinterest"></i></a></li>
                    @endif
                    @if($instagram->is_active == 1)
                        <li><a href="{{$instagram->link}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    @endif


                </ul>


                <ul class="f1-list">
                    @php
                        $count = 3;
                    @endphp
                    @foreach ($all_links as $index=>$page)
                        @if($index <= $count)
                            @if($page->type==0)
                                <li><a href="{{ url('').'/'.$page->link }}"
                                       align="center"><b>{{ $page->page_name }}</b> </a></li>
                            @else
                                <li><a target="_blank" href="{{ $page->link }}"
                                       align="center"><b>{{ $page->page_name }}</b> </a></li>
                            @endif
                        @else
                            @if($page->type==0)
                                <li><a href="{{ url('').'/'.$page->link.'/'.base64_encode($page->page_id).'/@' }}"
                                       align="center"><b>{{ $page->page_name }}</b> </a></li>
                            @else
                                <li><a target="_blank" href="{{ $page->link }}"
                                       align="center"><b>{{ $page->page_name }}</b> </a></li>
                            @endif
                        @endif
                    @endforeach

                    {{-- @if($page->type==0)
                    <li class="nav-item"><a class="nav-link" href="{{ url('').'/'.$page->link }}"><b>{{ $page->page_name }}</b> </a></li>
                    @else
                    <li class="nav-item"><a class="nav-link" target="_blank" href="{{ $page->link }}"><b>{{ $page->page_name }}</b> </a></li>
                    @endif
                    @endforeach --}}










                    {{-- <li><a href="{{ url('who-we-are') }}">Who We are</a></li>

                    <li><a href="{{ url('careers') }}">Careers</a></li>

                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>  --}}

                </ul>

            </div>
            <!--./col-lg-12-->

        </div>
        <!--./row-->

    </div>
    <!--./container-->

    <div class="copyright">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12">

                    Copyright © 2019 Alliance. All rights reserved.

                </div>
                <!--./col-lg-12-->

            </div>
            <!--./row-->

        </div>
        <!--./container-->

    </div>

    <a class="back-to-top" href="#"><i class="fas fa-long-arrow-alt-up"></i></a>

</footer>
@if(session()->has('message'))
    <script type="text/javascript">
        success_noti("{{ session()->get('message') }}");
    </script>
@endif
@if(session()->has('errmessage'))
    <script type="text/javascript">
        warning_noti("{{ session()->get('errmessage') }}");
    </script>
@endif


<script src="{{ url('js/jquery.min.js') }}"></script>

<script src="{{ url('js/popper.min.js') }}"></script>

<script src="{{ url('js/bootstrap.min.js') }}"></script>

<script src="{{ url('js/easing.min.js') }}"></script>

<script src="{{ url('js/owl.carousel.min.js') }}"></script>

<script src="{{ url('js/main.js') }}"></script>

</body>

</html>