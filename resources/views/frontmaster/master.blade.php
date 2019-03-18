<!DOCTYPE html>

<html class="no-js" lang="en-US">

<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">
     {{--<title>Alliance</title> --}}
    <title>@yield('title')</title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/png" href="{{ url('images/favicon.png') }}" />

    <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ url('css/style.css') }}">

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

    <link href="{{ url('css/owl.carousel.min.css') }}" rel="stylesheet">

</head>

<body>

    <header id="sticky-header">

        <nav class="navbar navbar-expand-lg navbar-dark">

            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('images/logo.png') }}" alt=""></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
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
        <li class="nav-item"><a class="nav-link" href="{{ url('').'/'.$page->link }}" align="center"><b>{{ $page->page_name }}</b> </a></li> 
       @else
    <li class="nav-item"><a class="nav-link" target="_blank" href="{{ $page->link }}" align="center"><b>{{ $page->page_name }}</b> </a></li> 
        @endif
        @else 
        @if($page->type==0)
        <li class="nav-item"><a class="nav-link" href="{{ url('').'/'.$page->link.'/'.base64_encode($page->page_id).'/@' }}" align="center"><b>{{ $page->page_name }}</b> </a></li> 
       @else
    <li class="nav-item"><a class="nav-link" target="_blank" href="{{ $page->link }}" align="center"><b>{{ $page->page_name }}</b> </a></li> 
        @endif
        @endif
@endforeach






                        {{-- <li class="nav-item"><a class="nav-link" href="{{ url('what-we-do') }}">What We Do</a></li>

                        <li class="nav-item"><a class="nav-link" href="{{ url('who-we-are') }}">Who We are</a></li>

                        <li class="nav-item"><a class="nav-link" href="{{ url('careers') }}">Careers</a></li>

                        <li class="nav-item"><a class="nav-link" href="{{ url('contact-us') }}">Contact Us</a></li> --}}

                    </ul>

                    <ul class="top-social">

                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>

                    </ul>

                </div>

            </div>

        </nav>

    </header>
    @yield('content')

    <section class="checkout_bg">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="checktext text-center">
                        <h1>CHECK US OUT</h1>

                        <div class="getan"><a href="#"><img src="{{ url('images/getan.png') }}" /></a></div>

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

                        <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                        <li><a href="" target="_blank"><i class="fab fa-twitter"></i></a></li>

                    </ul>
                    
                    
                    <ul class="f1-list">
                        
                        @foreach ($all_links as $page)
                        @if($page->type==0)
                        <li><a href="{{ url('').'/'.$page->link }}"><b>{{ $page->page_name }}</b></a></li>
                        @else     
                        <li><a target="_blank" href="{{ $page->link }}"><b>{{ $page->page_name }}</b></a></li>
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



    <script src="{{ url('js/jquery.min.js') }}"></script>

    <script src="{{ url('js/popper.min.js') }}"></script>

    <script src="{{ url('js/bootstrap.min.js') }}"></script>

    <script src="{{ url('js/easing.min.js') }}"></script>

    <script src="{{ url('js/owl.carousel.min.js') }}"></script>

    <script src="{{ url('js/main.js') }}"></script>

</body>

</html>