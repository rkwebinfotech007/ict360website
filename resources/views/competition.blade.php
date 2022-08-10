@extends('layouts.master')
@section('title','MBX-ICT')
@section('content')
<section class="about iframe_sec mt-88">
    <div class="col-md-12 h_400px mt-2">
        <h1 class="text-uppercase">COMPETITION</h1>
    </div>
    <div class="col-md-12 p-0 pera yellow_gradient">
        <div class="competition_frame">
            <div class="video_iframe comp_vedio_iframe">
                <iframe style="background-image:url(public/images/ipad.png); background-size: cover;" class="comp_iframe" src="https://www.youtube.com/embed/xI_EEDSYklo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <h2 class="text-dark text-uppercase">DESIGN CHAMPIONSHIP</h2>
        <p class="text-dark pb-0">Design Championship is an initiative for school students who want to showcase their talent and encourages students to think out of the box.
        </p>
        <p class="text-dark pb-0">Design Championship presents an opportunity for students to reignite their creative side and introduces them to life skills that will make them future ready.</p>
    </div>
    <div class="d-flex justify-content-center">
        <div class="p-4">
            <img src="{{('public/images/competition/DC.png')}}" width="120">
        </div>
    </div>
    <h2 class="text-uppercase text-center">Categories</h2>
    <div class="d-flex justify-content-center flex-wrap pad_samll-15">
        <div class="p-sm-4 p-2">
            <div class="card card_img categories">
                <img src="{{('public/images/Movie.png')}}" width="140" class="img-fluid">
                <div class="categories_hover_overlay  yellow_gradient">
                    <div class="gallery_info">
                        <p class="">Explore your skills in the innovative world of Movie Making. Unleash your inner artist and capture your imagination on camera. If you have kindle an interest in Movie Making, then this competition is an ideal platform for you.</p>
                    </div>

                </div>
            </div>
            <h3 class="text-uppercase text-center mt-3">Movie Making</h3>
        </div>
        <div class="p-sm-4 p-2">
            <div class="card card_img categories">
                <img src="{{('public/images/App-Design.png')}}" width="140" class="img-fluid">
                <div class="categories_hover_overlay blue_gredient">
                    <div class="gallery_info">
                        <p class="">Creating a mobile app doesn’t always require programming skills. Beyond having to acquire vital and transferable skills (commonly called “soft skills”), it involves graphic design, research, editing, and unique writing skills.</p>
                    </div>

                </div>
            </div>
            <h3 class="text-uppercase text-center mt-3">App Design</h3>
        </div>
        <div class="p-sm-4 p-2">
            <div class="card card_img categories">
                <img src="{{('public/images/Graphic-Design.png')}}" width="140" class="img-fluid">
                <div class="categories_hover_overlay red_gradient">
                    <div class="gallery_info">
                        <p class="">Convey your message by unleashing your creativity with visual communication. Express yourself with graphics by combining design and information. Graphic design is the process of visual communication, and problem-solving through the correct use of typography, space, image and colour.</p>
                    </div>

                </div>
            </div>
            <h3 class="text-uppercase text-center mt-3">Graphic Design</h3>
        </div>
        <div class="p-sm-4 p-2">
            <div class="card card_img categories">
                <img src="{{('public/images/Industrial.png')}}" width="140" class="img-fluid">
                <div class="categories_hover_overlay lignt_blue_gradient">
                    <div class="gallery_info">
                        <p class="">A design is a working solution to a problem or a requirement. If you are strong at ideating and developing new concepts on products, then this is an opportunity to prove your talent.</p>
                    </div>

                </div>
            </div>
            <h3 class="text-uppercase text-center mt-3">Industrial Design</h3>
        </div>
        <div class="p-sm-4 p-2">
            <div class="card card_img categories">
                <img src="{{('public/images/Game.png')}}" width="140" class="img-fluid">
                <div class="categories_hover_overlay blue_gredient">
                    <div class="gallery_info">
                        <p class="">Transform your passion of playing games into creating games. The competition offers you the platform to design your own game and empower yourself with visual design skills, programming skills, UI design skills and more.</p>
                    </div>

                </div>
            </div>
            <h3 class="text-uppercase text-center mt-3">Game Design</h3>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="https://designchampionship.in/home" target="_blank" class="theme-btn mt-4 mb-4 yellow_gradient text-white">www.designchampionship.in</a>
    </div>
</section>
<!--====== OUR ASPIRATIONS END ======-->
<!--====== championship START ======-->
<section class="championship about iframe_sec">
    <div class="col-md-12 p-0">
        <div class="championship_sec blue_gredient">
            <h1 class="text-uppercase text-white">VEX INDIA CHAMPIONSHIP</h1>
            <p>VEX India Championship is the national league of the International VEX Robotics World Championship which will take place in the U.S. In this competition, several teams of young students, and their mentors, from different cities of India will compete against each other to earn the Title of VEX India Champion. Teams will play the game of Annual Challenge set by VEX Team using VEX IQ Robotics Kits. This competition encourages teamwork, leadership and problem solving among groups of students.</p>
            <p class="p-0-40">The VEX India Championship is one of our initiatives of MindBox aimed at facilitating Creative Design Thinking with the help of 21st Century Technology as a Tool.</p>
        </div>
    </div>
    <div class="col-md-12 p-0">
        <div class="competition_frame_vax">
            <div class="video_iframe comp_vedio_iframe">
            <iframe style="background-image:url(public/images/ipad.png); background-size: cover;" src="https://www.youtube.com/embed/5V3q2oxKC2U" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center pt-330">
        <div class="p-4">
            <img src="{{('public/images/Vex.png')}}" width="200">
        </div>
    </div>
    <h2 class="text-uppercase text-center">Categories</h2>
    <div class="d-flex justify-content-center flex-wrap vex_wrap">
        <div class="pl-7 pr-7 pt-4">
            <div class="card card_img">
                <img src="{{('public/images/VEX_IQ.png')}}" class="img-fluid">
            </div>
            <h3 class="text-uppercase text-center mt-3">VEX IQ</h3>
        </div>
        <div class="pl-7 pr-7 pt-4">
            <div class="card card_img">
                <img src="{{('public/images/Vex 2.png')}}" class="img-fluid">
            </div>
            <h3 class="text-uppercase text-center mt-3">VEX EDR</h3>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="https://vexindia.com/" target="_blank" class="theme-btn yellow_gradient text-white mt-5 mb-4">www.vexindia.com</a>
    </div>
</section>
<!--====== championship END ======-->
<!--====== CONTACT US PART START ======-->
<section id="contact" class="contact_sec">
    @include('common.contact-us')
</section>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.autoplay').slick({
            slidesToShow: 7,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            arrows: false,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    })
</script>
@endsection