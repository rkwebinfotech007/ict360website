@extends('layouts.master')
@section('title','MBX-ICT')
@section('content')
<!-- <section class="page-banner mt-88">
    <div class="page-banner-cont">
        <div class="page-banner-ele">
            <h1 class="text-right">
            DESIGN THINKING & MULTIDISCIPLINARY APPROACH ENABLE STUDENTS TO BECOME CREATORS AND PROBLEM SOLVERS 
            </h1>
        </div>
    </div>
</section> -->
<!--====== BANNER PART END ======-->
<!--====== Explore How Can We Help You START ======-->
<!-- <section class="explore_sec">
     <h1>Explore How Can We Help You</h1>
     <div class="d-flex justify-content-center flex-wrap">
         <div class="explore">
             <div class="card ex_innovation">
                 <div class="flip_card_inner">
                     <div class="card_front card_front_innovation">
                         <h2>INNOVATION LAB</h2>
                     </div>
                     <div class="advance_card">
                         <div>
                             <h3>CREATIVITY AND DESIGN LAB
                             </h3>
                             <div class="mt-4 text-center">
                                 <a  href="{{route('innovation')}}" target="_blank" class="explore_btn innovation_explore">Explore</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="explore">
             <div class="card ex_ict">
                 <div class="flip_card_inner">
                     <div class="card_front card_front_ict">
                         <h2>ICT 2.0</h2>
                     </div>
                     <div class="advance_card">
                         <div>
                             <h3>ADVANCED ICT LEARNING FOR EDUCATORS AND STUDENTS
                             </h3>
                             <div class="mt-4 text-center">
                                 <a class="explore_btn ict_explore" href="{{route('ict')}}" target="_blank">Explore</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="explore">
             <div class="card ex_online">
                 <div class="flip_card_inner">
                     <div class="card_front card_front_online">
                         <h2>ONLINE 1:1 LIVE CLASS</h2>
                     </div>
                     <div class="advance_card">
                         <div>
                             <h3>DIRECT2HOME LEARNING
                             </h3>
                             <div class="mt-4 text-center">
                                 <a href="https://mbxd2h.in/" target="_blank" class="explore_btn online_explore">Explore</a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section> -->
<!--====== Explore How Can We Help You END ======-->
<!--====== OUR ASPIRATIONS START ======-->
<section class="about iframe_sec mt-88">
    <div class="col-md-12 h_400px h_200px">
        <h1>About Us</h1>
    </div>
    <div class="col-md-12 p-0 pera  yellow_gradient our_aspiration">
        <div class="aboutus_slider">
            <div class="video_iframe about_us_video p-0">
                <video  controls poster="{{('public/images/About-Us-thumbnail.jpg')}}">
                    <source src="{{('public/images/videos/about-us.mp4')}}" type="video/mp4">
                </video>
                <!-- <div class="video_play_area wow zoomIn wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="video_play_button" id="video"> <a href="{{('public/images/videos/about-us.mp4')}}" class="video_btn"><i aria-hidden="true"></i></a> </div>
              </div>      -->
            </div>
        </div>
        <h2 class="text-white text-uppercase">OUR ASPIRATIONS</h2>
        <p class="pb-0">We aim to build functional literacy in students and empower them with the 21st Century skills. We use interdisciplinary and experiential learning approach to teach Design and Creative Thinking, Visual Communication, Technology and Digital Skills.
        </p>
        <p class="pt-3">Our objective is to prepare every student from Consumer to Creator, Problem Mindset to Solution Mindset and a Doing Mind to Thinking Mind and in the process, obtain their overall physical, social, emotional, moral and creative development.</p>
    </div>

</section>
<!--====== OUR ASPIRATIONS END ======-->

<!--====== OUR LINEAGE OF THE ENTERTAINMENT INDUSTRY START ======-->
<section class="about holistic_sec">
    <h1>OUR LINEAGE OF THE ENTERTAINMENT INDUSTRY</h1>
    <p>Our parent company, ARK Infosolutions Pvt. Ltd. is the largest player for Technology Products in India for the Media & Entertainment Industry segments like Animation, Gaming, Film Visual Effects (VFX), Graphic Design, Broadcast Channels, and OTT Players like Netflix, Amazon, Hotstar, etc
    </p>
    <div class="d-flex justify-content-center holistic_flex countersec">
        <div class="digi_card">
            <h3><span class="counter">300</span>+</h3>
            <p>Man Years in Experience
            </p>
        </div>
        <div class="digi_card">
            <h3><span class="counter">20</span>+</h3>
            <p>Years in the Creative Media Industry
            </p>
        </div>
        <div class="digi_card">
            <h3><span class="counter">90</span>%</h3>
            <p>Market Share in
3D Animation Industry
            </p>
        </div>
        <div class="digi_card">
            <h3><span class="counter">80000</span>+
            </h3>
            <p>Customers</p>
        </div>
    </div>
</section>
<!--====== OUR LINEAGE OF THE ENTERTAINMENT INDUSTRY END ======-->
<!--====== SMALL SLIDER SECTION START ======-->

<section class="slider_sec">
    <div class="col-md-12 p-0">
        <div class="autoplay_smallslider red_gradient">
            <div>
                <img src="{{('public/images/logos/aja.png')}}" style="width:100px" alt="aja">
            </div>
            <div>
                <img src="{{('public/images/logos/ansys.png')}}" style="width:100px" alt="ansys">
            </div>
            <div>
                <img src="{{('public/images/logos/autodesk.png')}}" alt="autodesk">
            </div>
            <div>
                <img src="{{('public/images/logos/aver-media.png')}}" alt="aver-media">
            </div>
            <div>
                <img src="{{('public/images/logos/bentley.png')}}" alt="bentley">
            </div>
            <div>
                <img src="{{('public/images/logos/chaos.png')}}" alt="chaos">
            </div>
            <div>
                <img src="{{('public/images/logos/colorfront.png')}}" alt="colorfront">
            </div>
            <div>
                <img src="{{('public/images/logos/dolby.png')}}" style="width:100px" alt="dolby">
            </div>
            <div>
                <img src="{{('public/images/logos/epaln.png')}}" style="width:100px" alt="epaln">
            </div>
            <div>
                <img src="{{('public/images/logos/etap.png')}}" style="width:100px" alt="etap">
            </div>
            <div>
                <img src="{{('public/images/logos/foundry.png')}}" style="width:100px" alt="foundry">
            </div>
            <div>
                <img src="{{('public/images/logos/harman.png')}}" style="width:100px" alt="harman">
            </div>
            <div>
                <img src="{{('public/images/logos/lacia.reverse.png')}}" style="width:100px" alt="lacia.reverse">
            </div>
            <div>
                <img src="{{('public/images/logos/live-u.png')}}" style="width:90px" alt="live-u">
            </div>
            <div>
                <img src="{{('public/images/logos/makerbot.png')}}" alt="makerbot">
            </div>
            <div>
                <img src="{{('public/images/logos/mantis-vision.png')}}" alt="mantis-vision">
            </div>
            <div>
                <img src="{{('public/images/logos/sketch-up.png')}}" alt="sketch-up">
            </div>
            <div>
                <img src="{{('public/images/logos/tv-logic.png')}}" style="width:100px" alt="tv-logic">
            </div>
            <div>
                <img src="{{('public/images/logos/unity.png')}}" style="width:100px" alt="unity">
            </div>
            <div>
                <img src="{{('public/images/logos/vex-robotic.png')}}" style="width:100px" alt="vex-robotic">
            </div>
            <div>
                <img src="{{('public/images/logos/zeiss.png2.png')}}" style="width:100px" alt="zeiss">
            </div>
        </div>
    </div>
</section>
<!--====== SMALL SLIDER SECTION END ======-->
<!--====== OUR FOUNDER START ======-->
<section class="founder_sec aos-init aos-animate" data-aos="fade-up">
    <div class="row m-0">
        <div class="col-md-6 p-0 md_height">
            <!-- <div class="img"></div> -->
        </div>
        <div class="col-md-6 p-0 content_height">
            <div class="content-box blue_gredient ">
                <h2 class="elementor-heading-title">Our Founder</h2>
                <p>To address the quintessential question, “why empower & improve as many lives as possible”, Rishi Khemka had a light bulb moment after an intense session with his life coach. This made him think about improving the way kids learn today looking at his own school experience. And our ICT platform was born with a vision to bring the context of learning for school students as they go through their school life.
                </p>
                <p>Our ICT platform offers Creative Education Programs which provide Context-Based Experiential Learning and expand Creative, Digital & Life Skills of Students using Design Thinking, STREAM, and Skill Development Framework to develop a solution mindset among students.
                </p>
                <p>Our Innovation Lab Curriculum supplements the ICT piece in a School with the curriculum being aligned to all boards including CBSE, ICSE, IGCSE, IB & all State Boards. Currently, the program gets delivered inside 50+ schools across India with a student outreach of over 100,000+ in Grades 1st -10th.
                </p>
                <p>To successfully implement the new National Education Policy (NEP) 2020, we partner with schools in India to deliver ICT 360 Program – the next generation of ICT curriculum. It aims to upskill educators and prepare students for future careers through Intensive Teacher Training Program, Design Thinking & Coding curriculum, Learning Management System, real-world projects, and the use of advanced technologies. 
                </p>
                <p>With a strong focus on building competencies in children which will be based on Knowledge, Skills, and Attitudes, Rishi expects to not only touch millions of lives but to transform them.
                </p>
                
            </div>
        </div>
    </div>
</section>
<!--====== OUR FOUNDER END ======-->

<!--====== CONTACT US PART START ======-->
<section id="contact" class="contact_sec">
    @include('common.contact-us')
</section>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.autoplay_smallslider').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            infinite:false,
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
<!-- Coundown js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  -->
<!-- Counterup and Waypoint js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
<script>
    $(document).ready(function() {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
        $('.counter').addClass('animated fadeInDownBig');
        $('h3').addClass('animated fadeIn');
    });
    $(".explore_btn.innovation_explore").on("click", function() {
         $(".card_front.card_front_innovation").addClass("active");
         $(".card_front.card_front_ict").removeClass("active");
         $(".card_front.card_front_online").removeClass("active");
     });
     $(".explore_btn.ict_explore").on("click", function() {
         $(".card_front.card_front_innovation").removeClass("active");
         $(".card_front.card_front_ict").addClass("active");
         $(".card_front.card_front_online").removeClass("active");
     });
     $(".explore_btn.online_explore").on("click", function() {
         $(".card_front.card_front_innovation").removeClass("active");
         $(".card_front.card_front_ict").removeClass("active");
         $(".card_front.card_front_online").addClass("active");
     });
</script>

@endsection