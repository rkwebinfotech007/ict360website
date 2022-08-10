@extends('layouts.master')
@section('title','MBX-ICT')
@section('content')
<section class="page-banner mt-88">
    <div class="page-banner-cont">
        <div class="page-banner-ele">
            <h1 class="text-uppercase text-right">
                21ST century skills, using project | design based pedagogy and advanced technologies as a tool to enable students to become innovators, collaborators, and problem-solvers. 
            </h1>
        </div>
    </div>
</section>
<!--====== BANNER PART END ======-->
<!--====== Explore How Can We Help You START ======-->
<section class="explore_sec">
    <h1>Explore How Can We Help You</h1>
    <div class="d-flex justify-content-center flex-wrap">
        <div class="explore">
            <div class="card ex_innovation">
                <div class="flip_card_inner">
                    <div class="card_front card_front_innovation">
                        <!-- <img src="{{('public/images/Innovation lab.png')}}"> -->
                        <h2>INNOVATION LAB</h2>
                    </div>
                    <div class="advance_card">
                        <div>
                            <h3>CREATIVITY AND DESIGN LAB
                            </h3>
                            <div class="mt-4 text-center">
                                <a href="{{route('innovation')}}" target="_blank" class="explore_btn innovation_explore">Explore</a>
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
                        <!-- <img src="{{('public/images/ict/Ict 2.0.png')}}"> -->
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
                        <!-- <img src="{{('public/images/D2h.png')}}"> -->
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
</section>
<!--====== Explore How Can We Help You END ======-->
   <!--====== INNOVATION LAB START ======-->
   <section class="innovation_lab iframe_sec">
         <div class="col-md-12">
             <h1 class="text-center text-uppercase mt-4 mb-2">Innovation lab</h1>
         </div>
     </section>
     <section class="innovation_slider_sec">
         <div class="innovation_slider">
             <div class="video_iframe">
                 <iframe width="100%" height="500" src="https://www.youtube.com/embed/281vjSc03k4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
             </div>
         </div>
     </section>
     <!--====== INNOVATION LAB END ======-->
     <!--====== OUR PROGRAMS START ======-->
     <section class="inno_prog our_programs_sec">
         <h1 class="text-center text-uppercase">our programs</h1>
         <p>At MindBox, we partner with schools to offer age/grade-appropriate programs across India. These programs are designed to empower students to con- nect learnings of school curriculum with the experiential/technology driven curriculum offered by us.</p>
     </section>
     <!--====== OUR PROGRAMS END ======-->
     <!--====== WHY MINDBOX SECTION START ======-->
     <section class="innovation mindbox_sec digital_sec primary_program">
         <h1 class="text-uppercase">primary programs</h1>
         <p>
             Our Primary Programs cater to the skill development of students from Grade 1-5. With our interdisciplinary projects across Science, Technology, Re- search, Engineering, Art, & Mathematics (STREAM), students learn by solving problems, reflecting on experiences, engaging in Do-It-Yourself activities.
         </p>
         <div class="d-flex p_slider justify-content-center flex-wrap">
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/digital_art.png')}}" alt="digital_art">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Tools by which they learn to create visuals, designs and express ideas using digital technology.</p>
                         </div>

                     </div>
                 </div>
                 <h3>Digital Art
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/visual-storytelling.png')}}" alt="visual-storytelling">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program that encourages a child’s interest in storytelling which enables them to create & communicate ideas using Stop Motion Animation. </p>
                         </div>

                     </div>
                 </div>
                 <h3>Visual Storytelling
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/mechatronics-design.png')}}" alt="mechatronics-design">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program that introduces child to the world of Design, Construction and application of Engineering aiming to boost the ability to innovate.</p>
                         </div>

                     </div>
                 </div>
                 <h3>Mechatronics Design
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/interactive-media-design.png')}}" alt="interactive-media-design">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Child learns to analyse, develop interactive content such as games, apps, and animations that respond to user’s action using simple programming.</p>
                         </div>

                     </div>
                 </div>
                 <h3>Interective Media Design
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/media-design.png')}}" alt="media-design">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program designed to enhance the ability of expressing stories and ideas more effectively through the medium of pictures.</p>
                         </div>

                     </div>
                 </div>
                 <h3>media design
                 </h3>
             </div>
         </div>
         <div class="d-flex primary_slider justify-content-center">
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/digital_art.png')}}" alt="digital_art">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Tools by which they learn to create visuals, designs and express ideas using digital technology.</p>
                         </div>

                     </div>
                 </div>
                 <h3>Digital Art
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/visual-storytelling.png')}}" alt="visual-storytelling">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program that encourages a child’s interest in storytelling which enables them to create & communicate ideas using Stop Motion Animation. </p>
                         </div>

                     </div>
                 </div>
                 <h3>Visual Storytelling
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/mechatronics-design.png')}}" alt="mechatronics-design">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program that introduces child to the world of Design, Construction and application of Engineering aiming to boost the ability to innovate.</p>
                         </div>

                     </div>
                 </div>
                 <h3>Mechatronics Design
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/interactive-media-design.png')}}" alt="interactive-media-design">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Child learns to analyse, develop interactive content such as games, apps, and animations that respond to user’s action using simple programming.</p>
                         </div>

                     </div>
                 </div>
                 <h3>Interective Media Design
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/media-design.png')}}" alt="media-design">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program designed to enhance the ability of expressing stories and ideas more effectively through the medium of pictures.</p>
                         </div>

                     </div>
                 </div>
                 <h3>media design
                 </h3>
             </div>
         </div>
     </section>
     <section class="innovation mindbox_sec digital_sec secondry_program">
         <h1 class="text-uppercase">secondary programs</h1>
         <p>Our Secondary Programs cater to the skill development of students from Grade 6-10. They learn to connect content knowledge to real-world applications and explore their highest capability. These programs empower students to become creators, thinkers, innovators and problem-solvers.
         </p>
         <div class="d-flex s_slider justify-content-center flex-wrap">
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/communication-design.png')}}" alt="communication-design">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program revolves around design and develops visual communication skills of a child by making them proficient in Visual Language and Applied Art. </p>
                         </div>

                     </div>
                 </div>
                 <h3>COMMUNICATION DESIGN
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/mechatronics-design-2.png')}}" alt="mechatronics-design-2">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program that introduces a child to the world of Design, Construction and application of Engineering aiming to optimize the synergy to innovate.</p>
                         </div>

                     </div>
                 </div>
                 <h3>MECHATRONICS DESIGN
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/digital-design.png')}}" alt="digital-design">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program that enhances the creative capability of a child to express their imagination & transform ideas into Three-Dimensional Reality.</p>
                         </div>

                     </div>
                 </div>
                 <h3>DEGITAL DESIGN
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/interactive-media-design-2.png')}}" alt="interactive-media-design-2">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Child learns to analyse, develop interactive content such as games, apps, and websites that respond to user’s action using simple programming.</p>
                         </div>

                     </div>
                 </div>
                 <h3>INTERACTIVE MEDIA DESIGN
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/digital-design-CAD.png')}}" alt="digital-design-CAD">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program that enhances the creative capability of a child to express their imagination & transform ideas into Three-Dimensional Reality.</p>
                         </div>

                     </div>
                 </div>
                 <h3>DIGITAL DESIGN CAD
                 </h3>
             </div>
         </div>
         <div class="d-flex secondry_slider justify-content-center">
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/communication-design.png')}}" alt="communication-design">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program revolves around design and develops visual communication skills of a child by making them proficient in Visual Language and Applied Art. </p>
                         </div>

                     </div>
                 </div>
                 <h3>COMMUNICATION DESIGN
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/mechatronics-design-2.png')}}" alt="mechatronics-design-2">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program that introduces a child to the world of Design, Construction and application of Engineering aiming to optimize the synergy to innovate.</p>
                         </div>

                     </div>
                 </div>
                 <h3>MECHATRONICS DESIGN
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/digital-design.png')}}" alt="digital-design">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program that enhances the creative capability of a child to express their imagination & transform ideas into Three-Dimensional Reality.</p>
                         </div>

                     </div>
                 </div>
                 <h3>DEGITAL DESIGN
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/interactive-media-design-2.png')}}" alt="interactive-media-design-2">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Child learns to analyse, develop interactive content such as games, apps, and websites that respond to user’s action using simple programming.</p>
                         </div>

                     </div>
                 </div>
                 <h3>INTERACTIVE MEDIA DESIGN
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/innovation/digital-design-CAD.png')}}" alt="digital-design-CAD">
                     <div class="hover_overlay">
                         <div class="gallery_info">
                             <p class="">Program that enhances the creative capability of a child to express their imagination & transform ideas into Three-Dimensional Reality.</p>
                         </div>

                     </div>
                 </div>
                 <h3>DIGITAL DESIGN CAD
                 </h3>
             </div>
         </div>
     </section>
     <!--====== WHY MINDBOX SECTION END ======-->
     <!--====== OUR PRESENCE SECTION START ======-->
     <section class="innovation_presence presence_sec">
         <h1 class="text-uppercase">OUR Approach</h1>
         <p class="text-left">Our teaching methodology is in line with NEP 2020 that deploys Design Thinking and Coding curriculum, Interdisciplinary & Project-based Learning to equip children & educators with 21st Century skills that will help them thrive in the digital future.
         </p>
         <h2 class="text-dark text-left">Skill Development Framework</h2>
         <p class="text-left">In today's world, the skills that are essential to do well and help in problem solving, decision making, and innovation are called 21st Century Skills. These skills are broadly categorised into four areas: Critical thinking, Creativity, Communication,
             Let us understand how these skills play a part in the life of a 21st Century citizen:
         </p>
         <div class="position-relative">
             <div class="d-flex justify-content-center presence_ab flex-wrap">
                 <div class="p-4 approachwidth">
                     <img src="{{asset('public/images/innovation/1.png')}}">
                 </div>
                 <div class="p-4 approachwidth">
                     <img src="{{asset('public/images/innovation/2.png')}}">
                 </div>
                 <div class="p-4 approachwidth">
                     <img src="{{asset('public/images/innovation/3.png')}}">
                 </div>
             </div>
         </div>
     </section>
     <!--====== OUR PRESENCE SECTION END ======-->
     <!--====== DIGITAL FOOTPRINT START ======-->
     <section class="innovation_presence digital_sec">
         <p class="text-left">At MindBox we understand that the need of the hour is the 21st Century Skills. Through our Project and Design based learning approach, we create an environment for your child to learn and develop these 21st Century Skills.
         </p>
         <p class="text-left">
             To develop these skills effectively, we have mapped our program to match the age appropriate developmental stages of your child. We call this the Skill Development Framework.
         </p>
         <p class="text-left">
             The purpose of this framework is to observe, explore, identify, evaluate, and support the development of 21st Century Skills in your child based on the 'nascent, emerging, and developed' level of your child because we do not want to.
         </p>
         <div class="d-flex justify-content-center flex-wrap flex-sm-nowrap">
             <div class="p-4">
                 <div class="pre_card">
                     <img src="{{asset('public/images/innovation/Nacent.png')}}">
                 </div>
             </div>
             <div class="p-4">
                 <div class="pre_card">
                     <img src="{{asset('public/images/innovation/Emerging.png')}}">
                 </div>
             </div>
             <div class="p-4">
                 <div class="pre_card">
                     <img src="{{asset('public/images/innovation/Developed.png')}}">
                 </div>
             </div>
         </div>
     </section>
     <!--====== DIGITAL FOOTPRINT END ======-->
     <!--====== COMPETITIONS START ======-->
     <section class="competition_sec p-0">
         <div class="student_project mt-5">
             <div>
                 <img src="{{asset('public/images/innovation/Student Project/1.png')}}" alt="Student Project">
             </div>
             <div>
                 <img src="{{asset('public/images/innovation/Student Project/2.png')}}" alt="Student Project">
             </div>
             <div>
                 <img src="{{asset('public/images/innovation/Student Project/3.png')}}" alt="Student Project">
             </div>
             <div>
                 <img src="{{asset('public/images/innovation/Student Project/4.png')}}" alt="Student Project">
             </div>
             <div>
                 <img src="{{asset('public/images/innovation/Student Project/5.png')}}" alt="Student Project">
             </div>
         </div>
     </section>
     <!--====== COMPETITIONS END ======-->
     <!--====== TESTIMONIALs SECTION START ======-->
     <section class="mindbox_sec digital_sec">
         <h1>WHAT STUDENTS SAY ABOUT US
         </h1>
         <div class="testimonial mt-3 text-center">
             <div>
                 <div>
                     <img src="{{asset('public/images/boy.jpg')}}" alt="linaashar">
                 </div>
                 <div>
                     <h3>
                         "MindBox courses are apt and relevant to enable
                         your child for the world of tomorrow."
                     </h3>
                     <h4 class="pt-3 float-left w-100">Student Name</h4>
                     <p>
                         Age : 6 Years<br>
                         School Name
                     </p>
                 </div>
             </div>
             <div>
                 <div>
                     <img src="{{asset('public/images/boy.jpg')}}" alt="linaashar">
                 </div>
                 <div>
                     <h3>
                         "MindBox courses are apt and relevant to enable
                         your child for the world of tomorrow."
                     </h3>
                     <h4 class="pt-3 float-left w-100">Student Name</h4>
                     <p>
                         Age : 6 Years<br>
                         School Name
                     </p>
                 </div>
             </div>
         </div>
     </section>
<!--====== CONTACT US PART START ======-->
<section id="contact" class="contact_sec">
    @include('common.contact-us')
</section>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        // $('.student_project').slick({
        //     slidesToShow: 4,
        //     slidesToScroll: 1,
        //     autoplay: false,
        //     autoplaySpeed: 3000,
        //     dots: true,
        //     arrows: false,
        //     responsive: [{
        //             breakpoint: 1024,
        //             settings: {
        //                 slidesToShow: 4,
        //                 slidesToScroll: 3,
        //                 infinite: true,
        //                 dots: false
        //             }
        //         },
        //         {
        //             breakpoint: 600,
        //             settings: {
        //                 slidesToShow: 1,
        //                 slidesToScroll: 2
        //             }
        //         },
        //         {
        //             breakpoint: 480,
        //             settings: {
        //                 slidesToShow: 1,
        //                 slidesToScroll: 1
        //             }
        //         }
        //     ]
        // });
        $('.innovation_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false,
            arrows: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
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
        $('.autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false,
            arrows: true,
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
        $('.testimonial').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false,
            arrows: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
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
        $('.holistic_slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 3000,
            dots: false,
            arrows: true,
            responsive: [{
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
        $('.primary_slider').slick({
            slidesToShow: 3,
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
                        dots: true
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
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }
            ]
        });
        $('.secondry_slider').slick({
            slidesToShow: 3,
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
                        dots: true
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
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    })
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