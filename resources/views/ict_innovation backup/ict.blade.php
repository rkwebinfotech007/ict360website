@extends('layouts.master')
@section('title','MBX-ICT')
@section('content')
<!--====== BANNER PART START ======-->
<section class="page-banner mt-88">
    <div class="page-banner-cont">
        <div class="page-banner-ele">
            <h1 class="text-uppercase text-right">
                Age relevant projects, aligned with curriculum, using appropriate tools and technology as per the
                guidelines of nep 2020
            </h1>
        </div>
    </div>
</section>
<!--====== BANNER PART END ======-->
<!--====== Explore How Can We Help You START ======-->
<section class="explore_sec">
    <h1>Explore How Can We Help You</h1>
    <div class="d-flex justify-content-center">
        <div class="explore">
            <div class="card">
                <img src="{{('public/images/Innovation lab.png')}}" alt="Innovation lab">
                <h2>INNOVATION LAB</h2>
                <div class="advance_card">
                    <div>
                        <h3>CREATIVITY AND DESIGN LAB
                        </h3>
                        <div class="mt-4 text-center">
                            <a href="{{route('innovation')}}" class="explore_btn">Explore</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="explore">
            <div class="card">
                <img src="{{('public/images/ict/Ict 2.0.png')}}" alt="innovation">
                <h2>ICT 2.0</h2>
                <div class="advance_card">
                    <div>
                        <h3>ADVANCED ICT LEARNING FOR EDUCATORS AND STUDENTS
                        </h3>
                        <div class="mt-4 text-center">
                            <a href="{{route('ict')}}" class="explore_btn">Explore</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="explore">
            <div class="card">
                <img src="{{('public/images/Live-Class.jpg')}}">
                <h2>ONLINE 1:1 LIVE CLASS</h2>
                <div class="advance_card">
                    <div>
                        <h3>DIRECT2HOME LEARNING
                        </h3>
                        <div class="mt-4 text-center">
                            <a href="https://mbxd2h.in/" class="explore_btn">Explore</a>
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
        <h1 class="text-center text-uppercase mt-5 mb-4">ICT 2.0</h1>
    </div>
    <!-- <div class="col-md-12 p-0 pera">
            <div class="innovation_position">
           
        </div> -->
    </div>
</section>
<section class="innovation_slider_sec">
    <div class="innovation_slider ict_slider">
        <div class="video_iframe ict_video">
            <video width="100%" height="450" controls>
                <source src="{{('public/images/videos/ict.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
    </div>
</section>
<!--====== INNOVATION LAB END ======-->
<!--====== OUR PROGRAMS START ======-->
<section class="our_programs_sec">
    <h1 class="text-center text-uppercase">
        the next level of ict learning
    </h1>
    <p>With the new guidelines of nep 2020, and future skills, ICT 2.0 curriculum designed by Mindbox is a unique
        program which takes ICT to the next level by seamlessly combining the subject knowledge of ICT with the
        development of the 21st Century skills , using Project | Design Based Pedagogy and advanced technologies as
        a tool to enable students to become Innovators, Collaborators, and Problem-Solvers.</p>
</section>
<!--====== OUR PROGRAMS END ======-->
<!--====== WHY MINDBOX SECTION START ======-->
<section class="innovation mindbox_sec digital_sec">
    <h1 class="text-uppercase">Our curriculum</h1>
    <div class="row">
        <div class="col-md-6">
            <h2 class="text-center text-uppercase">Primary (grades 1 to 5)</h2>
            <ul class="tree horizontal">
                <li>
                    <div>Digital Citizenship</div>
                    <ul>
                        <li>
                            <div>Ethics & Ergonomics</div>
                        </li>
                        <li>
                            <div>Cyber Security</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="tree horizontal">
                <li>
                    <div>Computer Literacy</div>
                    <ul>
                        <li>
                            <div>Computer Basics</div>
                        </li>
                        <li>
                            <div>Internet & Networking</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="tree horizontal">
                <li>
                    <div>Information Literacy</div>
                    <ul>
                        <li>
                            <div>Documentation</div>
                        </li>
                        <li>
                            <div>Data Analysis</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="sec_tree tree horizontal">
                <li>
                    <div>Life Skills</div>
                    <ul>
                        <li>
                            <div>Effective Presentation</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="tree horizontal">
                <li>
                    <div>Media Literacy</div>
                    <ul>
                        <li>
                            <div>Multimedia</div>
                        </li>
                        <li>
                            <div>Image Processing</div>
                        </li>
                        <li>
                            <div>Digital Painting</div>
                        </li>
                        <li>
                            <div>Visualization & Animation</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="sec_tree tree horizontal">
                <li>
                    <div>Computational Thinking</div>
                    <ul>
                        <li>
                            <div>Visual Programming</div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-6">
            <h2 class="text-center text-uppercase">Secondary (grades 6 to 8)</h2>
            <ul class="pri_tree tree horizontal">
                <li>
                    <div>Computational Thinking</div>
                    <ul>
                        <li>
                            <div>Visual Programming</div>
                        </li>
                        <li>
                            <div>App Design</div>
                        </li>
                        <li>
                            <div>Object Oriented Programming(OOP)</div>
                        </li>
                        <li>
                            <div>Data Science and Analysis</div>
                        </li>
                        <li>
                            <div>Game Design</div>
                        </li>
                        <li>
                            <div>Web Design</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="sec_tree tree horizontal">
                <li>
                    <div>Media Literacy</div>
                    <ul>
                        <li>
                            <div>Visualization & Animation</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="tree horizontal">
                <li>
                    <div>Life Skills</div>
                    <ul>
                        <li>
                            <div>Project Management</div>
                        </li>
                        <li>
                            <div>Entrepreneurship</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="tree horizontal">
                <li>
                    <div>Design Thinking</div>
                    <ul>
                        <li>
                            <div>Computer Aided Design (CAD)</div>
                        </li>
                        <li>
                            <div>3D Digital Design</div>
                        </li>
                        <li>
                            <div>Graphics Design</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="tree horizontal">
                <li>
                    <div>Digital Citizenship</div>
                    <ul>
                        <li>
                            <div>Social Networks</div>
                        </li>
                        <li>
                            <div>Troubleshooting</div>
                        </li>
                    </ul>
                </li>
            </ul>
            <ul class="tree horizontal">
                <li>
                    <div>Future Technologies</div>
                    <ul>
                        <li>
                            <div>Virtual Reality & Augmented Reality(VR,AR)</div>
                        </li>
                        <li>
                            <div>Artificial intelligence (AI)</div>
                        </li>
                        <li>
                            <div>Cloud Computing</div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--====== WHY MINDBOX SECTION END ======-->
<!--====== ICT 2.0 IS DESIGNED SECTION FOR DEVELOPING SECTION START ======-->
<section class="ict_developing_sec">
    <h1 class="text-uppercase text-dark">ICT 2.0 IS designed for developing</h1>
    <p class="text-uppercase font-17 text-center">TPACK (Technology, pedagogy and content knowledge) |
        interdisciplinary learning</p>
    <div class="d-flex justify-content-center">
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/21st.png')}}" alt="21st century skills">
            </div>
            <h3 class="text-uppercase">21st century skills
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/TS.png')}}" alt="technical skills">
            </div>
            <h3 class="text-uppercase">technical skills
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/Science skill.png')}}" alt="science skills">
            </div>
            <h3 class="text-uppercase">science skills
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/Ms.png')}}" alt="Mathmatical skills">
            </div>
            <h3 class="text-uppercase">Mathmatical skills
            </h3>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/AS.png')}}" alt="art skills">
            </div>
            <h3 class="text-uppercase">art skills
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/TCS.png')}}" alt="technology skills">
            </div>
            <h3 class="text-uppercase">technology skills
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/ES.png')}}" alt="Engineering skills">
            </div>
            <h3 class="text-uppercase">Engineering skills
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/AI.png')}}" alt="Artificial intelligence">
            </div>
            <h3 class="text-uppercase">Artificial intelligence
            </h3>
        </div>
    </div>
</section>
<!--====== ICT 2.0 IS DESIGNED SECTION FOR DEVELOPING SECTION END ======-->
<!--====== OUR OFFERING TO UPSKILL SECTION START ======-->
<section class="educator mindbox_sec digital_sec">
    <h1 class="text-uppercase">OUR OFFERING TO UPSKILL Educators and students</h1>
    <div class="d-flex justify-content-center upskill1">
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/iD.png')}}" alt="digital_art">
            </div>
            <h3 class="text-uppercase">integrated design and advanced tech curriculum
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/PBL.png')}}" alt="visual-storytelling">
            </div>
            <h3 class="text-uppercase">steam-project based learning methodology
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/GWRT.png')}}" alt="mechatronics-design">
            </div>
            <h3 class="text-uppercase">grade-wise reference textbook and reflective journal
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/TTT.png')}}" alt="interactive-media-design">
            </div>
            <h3 class="text-uppercase">train-the-teacher program
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/PAE.png')}}" alt="media-design">
            </div>
            <h3 class="text-uppercase">periodic assessments, evaluation and ANALYTICS report
            </h3>
        </div>
    </div>
    <div class="d-flex justify-content-center upskill2">
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/Gamification.png')}}" alt="digital_art">
            </div>
            <h3 class="text-uppercase">GAMIFICATION
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/Mindbox Portal.png')}}" alt="visual-storytelling">
            </div>
            <h3 class="text-uppercase">login to mindbox portal for student, teacher, and school
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/Mindbox Lms.png')}}" alt="mechatronics-design">
            </div>
            <h3 class="text-uppercase">mindbox lms for students and teachers for synchronous and ashynchronous
                learning
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/SPER.png')}}" alt="interactive-media-design">
            </div>
            <h3 class="text-uppercase">skill progression evaluation report and digital PORTFOLIO
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/LE.png')}}" alt="media-design">
            </div>
            <h3 class="text-uppercase">legal educational licenses of software wherever applicable
            </h3>
        </div>
    </div>
    <div class="d-flex justify-content-center upskill_slider">
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/iD.png')}}" alt="digital_art">
            </div>
            <h3 class="text-uppercase">integrated design and advanced tech curriculum
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/PBL.png')}}" alt="visual-storytelling">
            </div>
            <h3 class="text-uppercase">steam-project based learning methodology
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/GWRT.png')}}" alt="mechatronics-design">
            </div>
            <h3 class="text-uppercase">grade-wise reference textbook and reflective journal
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/TTT.png')}}" alt="interactive-media-design">
            </div>
            <h3 class="text-uppercase">train-the-teacher program
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/PAE.png')}}" alt="media-design">
            </div>
            <h3 class="text-uppercase">periodic assessments, evaluation and ANALYTICS report
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/Gamification.png')}}" alt="digital_art">
            </div>
            <h3 class="text-uppercase">GAMIFICATION
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/Mindbox Portal.png')}}" alt="visual-storytelling">
            </div>
            <h3 class="text-uppercase">login to mindbox portal for student, teacher, and school
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/Mindbox Lms.png')}}" alt="mechatronics-design">
            </div>
            <h3 class="text-uppercase">mindbox lms for students and teachers for synchronous and ashynchronous
                learning
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/SPER.png')}}" alt="interactive-media-design">
            </div>
            <h3 class="text-uppercase">skill progression evaluation report and digital PORTFOLIO
            </h3>
        </div>
        <div class="digi_card">
            <div class="card">
                <img src="{{asset('public/images/ict/LE.png')}}" alt="media-design">
            </div>
            <h3 class="text-uppercase">legal educational licenses of software wherever applicable
            </h3>
        </div>
    </div>
</section>
<!--====== OUR OFFERING TO UPSKILL END ======-->
<!--====== FLEXIBLE PRICING PLANS SECTION START ======-->
<section class="pricing_sec">
    <div class="row">
        <div class="col-md-6">
            <h1 class="text-uppercase mb-4">flexible pricing plans</h1>
            <p class="dash">The ultimate plateform to connect your entire school community and bring all your EdTech
                into one place.</p>
            <p class="dash">Enhance teaching and learning to improve student outcomes.</p>
            <p>NEP 2020 - Design Thinking and Coading curriculum</p>
            <p>Project and Design Thinking based Learning</p>
            <p>Interdisciplinary</p>
            <p>Integrated - Computational Thinking</p>
        </div>
        <div class="col-md-6">
            <div class="d-flex justify-content-center">
                <div class="enquiry">
                    <div class="content">
                        <ul>
                            <li>Platform License
                                <img src="{{('public/images/check.png')}}" alt="check">
                            </li>
                            <li>Student Licenses
                                <img src="{{('public/images/check.png')}}" alt="check">
                            </li>
                            <li>
                                Text Books
                                <img src="{{('public/images/check.png')}}" alt="check">
                            </li>
                            <li>Teacher Training
                                <img src="{{('public/images/check.png')}}" alt="check">
                            </li>
                            <li>Curriculum
                                <img src="{{('public/images/check.png')}}" alt="check">
                            </li>
                            <li>Content
                                <img src="{{('public/images/check.png')}}" alt="check">
                            </li>
                            <li>Portfolio
                                <img src="{{('public/images/check.png')}}" alt="check">
                            </li>
                            <li>Competition
                                <img src="{{('public/images/check.png')}}" alt="check">
                            </li>
                            <li class="mt-4">
                                <button class="enquiry_btn">enquiry now</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="enquiry">
                    <div class="content">
                        <ul>
                            <li>Platform License
                                <img src="{{('public/images/check.png')}}">
                            </li>
                            <li>Student Licenses
                                <img src="{{('public/images/check.png')}}">
                            </li>
                            <li>
                                Text Books
                                <img src="{{('public/images/check.png')}}">
                            </li>
                            <li>Teacher Training
                                <img src="{{('public/images/check.png')}}">
                            </li>
                            <li>Curriculum
                                <img src="{{('public/images/check.png')}}">
                            </li>
                            <li>Content
                                <img src="{{('public/images/check.png')}}">
                            </li>
                            <li>Portfolio
                                <img src="{{('public/images/check.png')}}">
                            </li>
                            <li>Competition
                                <img src="{{('public/images/check.png')}}">
                            </li>
                            <li class="mt-4">
                                <button class="enquiry_btn">enquiry now</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--====== TESTIMONIALs SECTION END ======-->
<!--====== CONTACT US PART START ======-->
<section id="contact" class="contact_sec">
    @include('common.contact-us')
</section>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $('.upskill_slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
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
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    })
</script>
@endsection