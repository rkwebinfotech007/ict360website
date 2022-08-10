<!doctype html>
<html lang="en">

<head>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>New Age Technology Curriculum for your School, Teachers & Students</title>
    <meta name="keywords" content="Join 100,000+ Parents. Online Coding Classes for Kids | Website Design | App Design & Coding | Game Design & Coding | Graphics Design | 3D Design & Animation. Book FREE class." />
    <meta name="Description" content="Join 100,000+ Parents. Online Coding Classes for Kids | Website Design | App Design & Coding | Game Design & Coding | Graphics Design | 3D Design & Animation. Book FREE class." />
    
    <meta property="og:title" content="New Age Technology Curriculum for your School, Teachers & Students" />

@php
$current_url = request()->segment(1);
$current_url1 = request()->segment(2);
@endphp
@if($current_url == 'newsletter' && $current_url1 != '')
    <meta property="og:image" content="https://www.ict360.com/public{{$newsletter->file_path}}"/>

@elseif($current_url == 'blog' && $current_url1 != '')
    <meta property="og:image" content="https://www.ict360.com/public{{$blog->file_path}}"/>

@else
    <meta property="og:image" content="https://www.ict360.com/public/images/fav-icon.png"/>
    @endif
    <!--====== Title ======-->
    <!-- <title>@yield('title')</title> -->
    @include('layouts.header-links')
    
</head>

<body>
    <!--====== HEADER PART START ======-->
    @include('layouts.header')
    <!--====== HEADER PART ENDS ======-->

    <!--====== BANNER PART START ======-->
    @yield('content')
    <!--====== CONTACT US PART END ======-->

    <!--====== FOOTER PART START ======-->
    @include('layouts.footer')
    <!--====== FOOTER PART ENDS ======-->
    <a href="#" id="scroll_up" class=""></a>
    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            //>=, not <=
            if (scroll >= 500) {
                $("#scroll_up").addClass("active");
                $("#scroll_up").style("top","5px");
            }
        });
    </script>
    @yield('script')

</body>

</html>