 @extends('layouts.master')
 @section('title','MBX-ICT')
  <meta property="og:image" content="https://www.ict360.com/public/images/fav-icon.png"/>
 @section('content')
 <!--====== BANNER PART START ======-->
 <!-- <section class="page-banner">
     <div class="page-banner-cont">
         <div class="page-banner-ele">
             <h1 class="text-right default_content">
                 EQUIPPING STUDENTS AND TEACHERS WITH 21ST CENTURY SKILLS FOR A DIGITAL FUTURE 
             </h1>
             <h1 class="ict_content text-right">AGE RELEVANT PROJECTS, ALIGNED WITH CURRICULUM, USING APPROPRIATE TOOLS AND TECHNOLOGY AS PER THE GUIDELINES OF NEP 2020</h1>
         </div>
     </div>
 </section>
 <section class="page-banner-innovation mt-88">
     <div class="page-banner-cont">
         <div class="page-banner-ele">
             <h1 class="text-right">
                 21ST CENTURY SKILLS, USING PROJECT | DESIGN BASED PEDAGOGY AND ADVANCED TECHNOLOGIES AS A TOOL TO ENABLE STUDENTS TO BECOME INNOVATORS, COLLABORATORS, AND PROBLEM-SOLVERS.
             </h1>
         </div>
     </div>
 </section> -->

<section class='banner-section'>
 <div id="banner-slide" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner">
  <div class="carousel-item active">
  <img  src="{{('public/images/Banner.png')}}" class="d-block w-100">
  <div class="carousel-caption  d-md-block">
    <h3>Equipping Students And Teachers</h3>
    <h3>With 21st Century Skills For A Digital Future</h3>
</div>
</div>
<!--<div class="carousel-item">
  <img src="{{('public/images/Banner.png')}}" class="d-block w-100">
  <div class="carousel-caption  d-md-block">
    <h3>Equipping Students And Teachers</h3>
    <h3>With 21st Century Skills For A Digital Future</h3>
</div>
</div>-->

  </div>
  <!--<a class="carousel-control-prev" href="#banner-slide" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><i class='fa fa-angle-left'></i></span>
    <span class=""></span>
  </a>
  <a class="carousel-control-next" href="#banner-slide" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class='fa fa-angle-right'></i></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>
</section>

<!-- 

 <section class="slider_banner banner_bg_img">
     <div class='slider'>
     <div class="banner_text mt-3 text-center ">
         <div>
             <div>
             <h3>Equipping Students And Teachers 
                 </h3>
                 <h3>With 21st Century Skills For A Digital Future</h3>
                
                 
             </div>
         </div>
         <div>
             <div>
             <h3>Equipping Students And Teachers 
                 </h3>
                 <h3>With 21st Century Skills For A Digital Future</h3>
                
                 
             </div>
         </div>
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
                         <!-- <img src="{{('public/images/Innovation lab.png')}}"> --
                         <h2>INNOVATION LAB</h2>
                     </div>
                     <div class="advance_card">
                         <div>
                             <h3>CREATIVITY AND DESIGN LAB
                             </h3>
                             <div class="mt-4 text-center">
                                 <a href="#innovation_explore" class="explore_btn innovation_explore">Explore</a>
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
                         <!-- <img src="{{('public/images/ict/Ict 2.0.png')}}"> --
                         <h2>ICT 2.0</h2>
                     </div>
                     <div class="advance_card">
                         <div>
                             <h3>ADVANCED ICT LEARNING FOR EDUCATORS AND STUDENTS
                             </h3>
                             <div class="mt-4 text-center">
                                 <a class="explore_btn ict_explore" href="#ict_explore">Explore</a>
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
                         <!-- <img src="{{('public/images/D2h.png')}}"> --
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
 <!--====== Innovation Section START ======-->
 <div class="innovation_section" id="innovation_explore">
     <!--====== INNOVATION LAB START ======-->
     <section class="innovation_lab iframe_sec">
         <div class="col-md-12">
             <h1 class="text-center text-uppercase mt-4 mb-2">ExploreHow CanWeHelpYou
</h1>
         </div>
     </section>
     <section class="innovation_slider_sec">
         <div class="innovation_slider">
     
             <div class="video_iframe ict_video">
                 <video  controls>
                     <source src="{{('public/images/innovation/Innovation Lab.mp4')}}" type="video/mp4">
                 </video>
                 <!-- <iframe width="100%" height="500" src="https://www.youtube.com/embed/281vjSc03k4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
             </div>
         </div>
     </section>
     <!--====== INNOVATION LAB END ======-->
     <!--====== OUR PROGRAMS START ======-->
     <section class="inno_prog our_programs_sec">
         <h1 class="text-center text-uppercase">our programs</h1>
         <p>At MindBox, we partner with schools offering age/grade-appropriate programs across India. These programs are designed to empower students to connect learnings of school curriculum with the experiential/technology driven curriculum offered by us.</p>
     </section>
     <!--====== OUR PROGRAMS END ======-->
     <!--====== WHY MINDBOX SECTION START ======-->
     <section class="innovation mindbox_sec digital_sec primary_program">
         <h1 class="text-uppercase">primary programs</h1>
         <p>
             Our Primary Programs cater to the skill development of students from Grade 1-5. With our interdisciplinary projects across Science, Technology, Research, Engineering, Art, & Mathematics (STREAM), students learn by solving problems, reflecting on experiences, engaging in Do-It-Yourself activities.
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
                 <h3>Interactive Media Design
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
                 <h3>Interactive Media Design
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
                 <h3>DIGITAL DESIGN
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
                 <h3>DIGITAL DESIGN
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
         <p class="text-left">In today's world, the skills that are essential to do well and help in problem solving, decision making, and innovation are called 21st Century Skills. These skills are broadly categorised into four areas: Critical thinking, Creativity, Collaboration, Communication. Let us understand how these skills play a part in the life of a 21st Century citizen:
         </p>
         <div class="position-relative">
             <div class="d-flex justify-content-center presence_ab flex-wrap">
                 <div class="p-4 approachwidth text-center">
                     <img src="{{asset('public/images/innovation/1.png')}}">
                 </div>
                 <div class="p-4 approachwidth text-center">
                     <img src="{{asset('public/images/innovation/2.png')}}">
                 </div>
                 <div class="p-4 approachwidth text-center">
                     <img src="{{asset('public/images/innovation/3.png')}}">
                 </div>
             </div>
         </div>
     </section>
     <!--====== OUR PRESENCE SECTION END ======-->
     <!--====== DIGITAL FOOTPRINT START ======-->
     <section class="innovation_presence digital_sec pb-30">

         <p class="text-left">At MindBox we understand that the need of the hour is the 21st Century Skills. Through our Project and Design based learning approach, we create an environment for your child to learn and develop these 21st Century Skills.
         </p>
         <p class="text-left">
             To develop these skills effectively, we have mapped our programs to match the age appropriate developmental stages of your child. We call this the Skill Development Framework.
         </p>
         <!-- <p class="text-left">
             The purpose of this framework is to observe, explore, identify, evaluate, and support the development of 21st Century Skills in your child based on the 'nascent, emerging, and developed' level of your child because we do not want to leave these developments to chance.
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
         </div> -->
     </section>
     <!--====== DIGITAL FOOTPRINT END ======-->
     <!--====== COMPETITIONS START ======-->
     <section class="competition_sec p-0">
         <div class="student_project mt-5 mb-5">
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
                     <img src="{{asset('public/images/avatar.png')}}" alt="linaashar">
                 </div>
                 <div>
                     <h3 class="student_testimonial">
                         "I honestly feel that MindBox is such a fun session that we should have it twice a week because as we are learning how to make examples or if i need to say it as data or diagram of an App i say its so fun, i wait for the session every week so this is heat i feel about MindBox."
                     </h3>
                     <h4 class="pt-3 float-left w-100">Vishwajit Ramesh Swaminathan</h4>
                     <p>
                         7th : Billabong high international school, Santacruz.
                     </p>
                 </div>
             </div>
             <div>
                 <div>
                     <img src="{{asset('public/images/avatar.png')}}" alt="linaashar">
                 </div>
                 <div>
                     <h3 class="student_testimonial">
                         "I am very happy with the programs , activities projects and overall MindBox Sessions. I like attending the MindBox class on Tuesdays. The sessions are Very interesting."
                     </h3>
                     <h4 class="pt-3 float-left w-100">Krishiv Pandya</h4>
                     <p>
                         5th : Billabong high international school, Santacruz.
                     </p>
                 </div>
             </div>
             <div>
                 <div>
                     <img src="{{asset('public/images/avatar.png')}}" alt="linaashar">
                 </div>
                 <div>
                     <h3 class="student_testimonial">
                         "My experience with Mindbox teachers is like taking my technical skills to a new horizon altogether. Starting from 3D modeling in VIII standard followed by Film making softwares Adobe After Effects and Adobe Premiere Pro. My Instructors boosted my confidence by assigning projects/filmmaking for various inter school and intra school competitions."
                     </h3>
                     <h4 class="pt-3 float-left w-100">Daksh Khanna</h4>
                     <p>
                         10th : DPS Greater Faridabad Sector 81
                     </p>
                 </div>
             </div>
             <div>
                 <div>
                     <img src="{{asset('public/images/avatar.png')}}" alt="linaashar">
                 </div>
                 <div>
                     <h3 class="student_testimonial">

                         "Mindbox and especially Vivian sir have a huge part in growing my interest toward Designing and developing games, visual effects and more. In the 3 years studying under Vivian sir I have learned a lot about many tools of 2D & 3D. The Teaching approach was very unique and helped me grasp complex concepts easily. This happened only because Vivian sir would go out of the way and do longer shifts to teach us these softwares and excel in using them. This opened a new horizon for me which interests me a lot and I will want to pursue this in the future. Sir not only taught me to use these softwares but also many other practical skills which has helped me perform well in different competitions."
                     </h3>
                     <h4 class="pt-3 float-left w-100">Aakash Mukherjee </h4>
                     <p>
                         11th : DPS Greater Faridabad Sector 82
                     </p>
                 </div>
             </div>
             <div>
                 <div>
                     <img src="{{asset('public/images/avatar.png')}}" alt="linaashar">
                 </div>
                 <div>
                     <h3 class="student_testimonial">
                         "My experience with the Mindbox teachers has been remarkable. Their expertise in teaching and ceaseless guidance has empowered me to think creatively and innovatively. Learning about Communication Designing using Corel Draw has been an insightful experience. I enjoyed Three-Dimensional designing (using Maya) which enabled me to understand various problems, think, design and develop a model to solve it. Getting the opportunity to participate in the Design Championship was yet another phenomenal experience."
                     </h3>
                     <h4 class="pt-3 float-left w-100">Misthi Jain </h4>
                     <p>
                         12th : G.D Goenka Rohini
                     </p>
                 </div>
             </div>
             <div>
                 <div>
                     <img src="{{asset('public/images/avatar.png')}}" alt="linaashar">
                 </div>
                 <div>
                     <h3 class="student_testimonial">

                         "My experience with teachers from Mindbox (Aarti Mam and Jyoti Mam) was amazing. With their help and guidance I have learned more about Coral Draw (Graphics Design Platform) and many important things that should be in our mind while doing graphics design. Their teaching methods were so good and effective that actually helped me to learn hard things easily and also make my interest in the class. Because of their easy teaching methods I like each and every class and always wait for next class with them. I am happy that in our school classes are conducted by teachers from Mindbox which give us a lot of opportunities in our life and tell more about technology."
                     </h3>
                     <h4 class="pt-3 float-left w-100">Rachit Munjal</h4>
                     <p>
                         9th : G.D Goenka Rohini
                     </p>
                 </div>
             </div>
             <div>
                 <div>
                     <img src="{{asset('public/images/avatar.png')}}" alt="linaashar">
                 </div>
                 <div>
                     <h3 class="student_testimonial">
                         "Its really interesting and fun to learn,its really clear to understand and we can learn a lot about things we know and we don't know and we can learn more about it and what its about."
                     </h3>
                     <h4 class="pt-3 float-left w-100">Vijaya Kumar</h4>
                     <p>
                         8th : Kamala Niketan School
                     </p>
                 </div>
             </div>
         </div>
     </section>
 </div>
 <!--====== Innovation Section END ======-->
 <!--====== ICT Section START ======-->
 <div class="ict_section" id="ict_explore">
     <!--====== INNOVATION LAB START ======-->
     <section class="innovation_lab iframe_sec">
         <div class="col-md-12">
             <h1 class="text-center text-uppercase mt-4 mb-2">ICT 2.0</h1>
         </div>
         <!-- <div class="col-md-12 p-0 pera">
                    <div class="innovation_position">
                
                </div> -->
     </section>
     <section class="innovation_slider_sec">
         <div class="innovation_slider ict_slider">
             <div class="video_iframe ict_video">
                 <video width="100%" height="450px" controls>
                     <source src="{{('public/images/videos/ict.mp4')}}" type="video/mp4">
                 </video>
             </div>
         </div>
     </section>
     <!--====== INNOVATION LAB END ======-->
     <!--====== OUR PROGRAMS START ======-->
     <section class="our_programs_sec">
         <h1 class="text-center text-uppercase">
             the next level of ict learning
         </h1>
         <p>With the new guidelines of NEP 2020, and future skills, ICT 2.0 curriculum designed by MindBox is a unique program which takes ICT to the next level by seamlessly combining the subject knowledge of ICT with the development of the 21st Century skills, using Project | Design Based Pedagogy and advanced technologies as a tool that enables students to become Innovators, Collaborators, and Problem-Solvers.</p>
     </section>
     <!--====== OUR PROGRAMS END ======-->
     <!--====== WHY MINDBOX SECTION START ======-->
     <section class="innovation mindbox_sec digital_sec bg-yellow">
         <h1 class="text-uppercase">Our curriculum</h1>
         <h2 class="text-center text-uppercase">Primary (grades 1 to 5)</h2>
         <div class="d-flex flex-wrap justify-content-center">
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/Digital Citizenship.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Ethics & Ergonomics <br>Cyber Security</p>
                             <!-- <ul class="text-uppercase">
                                     <li>Ethics & Ergonomics</li>
                                     <li> Cyber Security</li>
                                 </ul> -->
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">Digital Citizenship
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/Computer Literecy.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Computer Basics<br>Internet & Networking</p>
                             <!-- <ul class="text-uppercase">
                                 <li>Computer Basics</li>
                                 <li>Internet & Networking</li>
                             </ul> -->
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">Computer Literacy
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/Information Literacy.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Documentation<br>Data Analysis</p>
                             <!-- <ul class="text-uppercase">
                                 <li>Documentation</li>
                                 <li>Data Analysis</li>
                             </ul> -->
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">Information Literacy
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/Life Skills.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Effective Presentation</p>
                             <!-- <ul class="text-uppercase">
                                 <li>Effective Presentation</li>
                             </ul> -->
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">Life Skills
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/Media Literacy.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Multimedia<br>Image Processing<br>Digital Painting<br>Visualization & Animation</p>
                             <!-- <ul class="text-uppercase">
                                 <li>Multimedia</li>
                                 <li>Image Processing</li>
                                 <li>Digital Painting</li>
                                 <li>Visualization & Animation</li>
                             </ul> -->
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">Media Literacy
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/computational Thinking.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Visual Programming</p>
                             <!-- <ul class="text-uppercase">
                                 <li>Visual Programming</li>
                             </ul> -->
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">computational Thinking
                 </h3>
             </div>
         </div>
         <h2 class="text-center text-uppercase">Secondary (grades 6 to 8)</h2>
         <div class="d-flex flex-wrap justify-content-center">
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/computational Thinking.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Visual Programming<br>App Design<br>Object Oriented Programming(OOP)<br>Data Science and Analysis<br>Game Design<br>Web Design</p>
                             <!-- <ul class="text-uppercase">
                                 <li>Visual Programming</li>
                                 <li>App Design</li>
                                 <li>Object Oriented Programming(OOP)</li>
                                 <li>Data Science and Analysis</li>
                                 <li>Game Design</li>
                                 <li>Web Design</li>
                             </ul> -->
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">computational Thinking
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/Media Literacy.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Visualization & Animation</p>
                             <!-- <ul class="text-uppercase">
                                 <li>Visualization & Animation</li>
                             </ul> -->
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">Media Literacy
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/Life Skills.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Project Management<br>Entrepreneurship</p>
                             <!-- <ul class="text-uppercase">
                                 <li>Project Management</li>
                                 <li>Entrepreneurship</li>
                             </ul> -->
                             <p class="text-uppercase"><br>
                             </p>
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">Life Skills
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/Design Thinking.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Computer Aided Design (CAD)<br>3D Digital Design<br>Graphics Design</p>
                             <!-- <ul class="text-uppercase">
                                 <li>Computer Aided Design (CAD)</li>
                                 <li>3D Digital Design
                                 <li>Graphics Design</li>
                             </ul> -->
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">Design Thinking
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/Digital Citizenship.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Social Networks<br>Troubleshooting</p>
                             <!-- <ul class="text-uppercase">
                                 <li>Social Networks</li>
                                 <li>Troubleshooting
                             </ul> -->
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">Digital Citizenship
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/ict/Future Technologies.png')}}" class="img-fluid">
                     <div class="curriculum_hover_overlay">
                         <div class="gallery_info">
                             <p>Virtual Reality & Augmented Reality(VR,AR)<br>Artificial Intelligence (AI)<br>Cloud Computing</p>
                             <!-- <ul class="text-uppercase">
                                 <li>Virtual Reality & Augmented Reality(VR,AR)<br>Artificial Intelligence (AI)</li>
                                 <li>Cloud Computing</li>
                             </ul> -->
                         </div>
                     </div>
                 </div>
                 <h3 class="animated fadeIn">Future Technologies
                 </h3>
             </div>
         </div>
         <!-- <div class="row">
             <div class="col-md-6 circum_br primary_curriculum">
                
                 <ul class="tree horizontal">
                     <li>
                         <div>Digital Citizenship</div>
                         <ul class="tree horizontal">
                             <li>
                                 <div><i class="fa fa-circle"></i> Ethics & Ergonomics</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Cyber Security</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
                 <ul class="tree horizontal">
                     <li>
                         <div>Computer Literacy</div>
                         <ul>
                             <li>
                                 <div><i class="fa fa-circle"></i> Computer Basics</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Internet & Networking</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
                 <ul class="tree horizontal">
                     <li>
                         <div>Information Literacy</div>
                         <ul>
                             <li>
                                 <div><i class="fa fa-circle"></i> Documentation</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Data Analysis</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
                 <ul class="sec_tree tree horizontal">
                     <li>
                         <div>Life Skills</div>
                         <ul>
                             <li>
                                 <div><i class="fa fa-circle"></i> Effective Presentation</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
                 <ul class="tree horizontal">
                     <li>
                         <div>Media Literacy</div>
                         <ul>
                             <li>
                                 <div><i class="fa fa-circle"></i> Multimedia</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Image Processing</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Digital Painting</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Visualization & Animation</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
                 <ul class="sec_tree tree horizontal">
                     <li>
                         <div>Computational Thinking</div>
                         <ul>
                             <li>
                                 <div><i class="fa fa-circle"></i> Visual Programming</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </div>
             <div class="col-md-6 secondry_curriculum">
                 <h2 class="text-center text-uppercase">Secondary (grades 6 to 8)</h2>
                 <ul class="pri_tree tree horizontal">
                     <li>
                         <div>Computational Thinking</div>
                         <ul>
                             <li>
                                 <div><i class="fa fa-circle"></i> Visual Programming</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> App Design</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Object Oriented Programming(OOP)</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Data Science and Analysis</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Game Design</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Web Design</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
                 <ul class="sec_tree tree horizontal">
                     <li>
                         <div>Media Literacy</div>
                         <ul>
                             <li>
                                 <div><i class="fa fa-circle"></i> Visualization & Animation</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
                 <ul class="tree horizontal">
                     <li>
                         <div>Life Skills</div>
                         <ul>
                             <li>
                                 <div><i class="fa fa-circle"></i> Project Management</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Entrepreneurship</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
                 <ul class="tree horizontal">
                     <li>
                         <div>Design Thinking</div>
                         <ul>
                             <li>
                                 <div><i class="fa fa-circle"></i> Computer Aided Design (CAD)</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> 3D Digital Design</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Graphics Design</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
                 <ul class="tree horizontal">
                     <li>
                         <div>Digital Citizenship</div>
                         <ul>
                             <li>
                                 <div><i class="fa fa-circle"></i> Social Networks</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Troubleshooting</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
                 <ul class="tree horizontal">
                     <li>
                         <div>Future Technologies</div>
                         <ul>
                             <li>
                                 <div><i class="fa fa-circle"></i> Virtual Reality & Augmented Reality(VR,AR)</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Artificial Intelligence (AI)</div>
                             </li>
                             <li>
                                 <div><i class="fa fa-circle"></i> Cloud Computing</div>
                             </li>
                         </ul>
                     </li>
                 </ul>
             </div>
         </div> -->
     </section>
     <!--====== WHY MINDBOX SECTION END ======-->
     <!--====== ICT 2.0 IS DESIGNED SECTION FOR DEVELOPING SECTION START ======-->
     <section class="ict_developing_sec">
         <h1 class="text-uppercase text-dark">ICT 2.0 IS DESIGNED FOR DEVELOPING</h1>
         <p class="text-uppercase font-17 text-center">TPACK (TECHNOLOGY, PEDAGOGY AND CONTENT KNOWLEDGE) | INTERDISCIPLINARY LEARNING</p>
         <div class="d-flex justify-content-center flex-wrap">
             <div class="digi_card">
                 <div class="card developing">
                     <img src="{{asset('public/images/ict/21st.png')}}" alt="21st century skills">
                     <div class="developing_hover_overlay">
                         <div class="gallery_info">
                             <p class="text-uppercase">Research, Creative Thinking and Innovation, Teamwork and Multitasking
                             </p>
                         </div>
                     </div>
                 </div>
                 <h3 class="text-uppercase">21st century skills
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card developing">
                     <img src="{{asset('public/images/ict/TS.png')}}" alt="technical skills">
                     <div class="developing_hover_overlay">
                         <div class="gallery_info">
                             <p class="text-uppercase">Analyzing and Interpreting Data, Interactive Design and Testing, Computational Thinking
                             </p>
                         </div>
                     </div>
                 </div>
                 <h3 class="text-uppercase">technical skills
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card developing">
                     <img src="{{asset('public/images/ict/Science skill.png')}}" alt="science skills">
                     <div class="developing_hover_overlay">
                         <div class="gallery_info">
                             <p class="text-uppercase">Physics, Kinematics, Dynamics, Computer Science</p>
                         </div>
                     </div>
                 </div>
                 <h3 class="text-uppercase">science skills
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card developing">
                     <img src="{{asset('public/images/ict/Ms.png')}}" alt="Mathematical skills">
                     <div class="developing_hover_overlay">
                         <div class="gallery_info">
                             <p class="text-uppercase">Algebra, Geometry, Trigonometry, Ratios & Proportions, Radius, Circumference & Diameters, Frequency And Amplitude</p>
                         </div>
                     </div>
                 </div>
                 <h3 class="text-uppercase">Mathematical skills
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card developing">
                     <img src="{{asset('public/images/ict/AS.png')}}" alt="art skills">
                     <div class="developing_hover_overlay">
                         <div class="gallery_info">
                             <p class="text-uppercase">Visual Communication and Design Principles</p>
                         </div>
                     </div>
                 </div>
                 <h3 class="text-uppercase">art skills
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card developing">
                     <img src="{{asset('public/images/ict/TCS.png')}}" alt="technology skills">
                     <div class="developing_hover_overlay">
                         <div class="gallery_info">
                             <p class="text-uppercase">Electronics, Programming, Bluetooth technology and wireless communications 
                             </p>
                         </div>
                     </div>
                 </div>
                 <h3 class="text-uppercase">technology skills
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card developing">
                     <img src="{{asset('public/images/ict/ES.png')}}" alt="Engineering skills">
                     <div class="developing_hover_overlay">
                         <div class="gallery_info">
                             <p class="text-uppercase">Rotational Motion, Scaling, Ratios, Speed And Torque, Hypothesis And Predictions</p>
                         </div>
                     </div>
                 </div>
                 <h3 class="text-uppercase">Engineering skills
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card developing">
                     <img src="{{asset('public/images/ict/AI.png')}}" alt="Artificial Intelligence">
                     <div class="developing_hover_overlay">
                         <div class="gallery_info">
                             <p class="text-uppercase">Machine Learning, Deep Learning</p>
                         </div>
                     </div>
                 </div>
                 <h3 class="text-uppercase">Artificial Intelligence
                 </h3>
             </div>
         </div>
     </section>
     <!--====== ICT 2.0 IS DESIGNED SECTION FOR DEVELOPING SECTION END ======-->
     <!--====== OUR OFFERING TO UPSKILL SECTION START ======-->
     <section class="educator mindbox_sec digital_sec">
         <h1 class="text-uppercase">OUR OFFERING TO UPSKILL EDUCATORS AND STUDENTS</h1>
         <div class="d-flex justify-content-center upskill1 flex-wrap">
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/ict/iD.png')}}" alt="digital_art">
                 </div>
                 <h3 class="text-uppercase">INTEGRATED DESIGN AND ADVANCED TECH CURRICULUM
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/ict/PBL.png')}}" alt="visual-storytelling">
                 </div>
                 <h3 class="text-uppercase">STEAM – PROJECT BASED LEARNING METHODOLOGY
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/ict/GWRT.png')}}" alt="mechatronics-design">
                 </div>
                 <h3 class="text-uppercase">GRADE – WISE REFERENCE TEXTBOOK AND REFLECTIVE JOURNAL
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/ict/TTT.png')}}" alt="interactive-media-design">
                 </div>
                 <h3 class="text-uppercase">TRAIN-THE-TEACHER PROGRAM
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/ict/PAE.png')}}" alt="media-design">
                 </div>
                 <h3 class="text-uppercase">PERIODIC ASSESSMENTS, EVALUATION AND ANALYTICS REPORT
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
                 <h3 class="text-uppercase">LOGIN TO MINDBOX PORTAL
                     FOR STUDENT, TEACHER, AND SCHOOL
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/ict/Mindbox Lms.png')}}" alt="mechatronics-design">
                 </div>
                 <h3 class="text-uppercase">MINDBOX LMS FOR STUDENTS AND TEACHERS FOR SYNCHRONOUS AND ASYNCHRONOUS LEARNING
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/ict/SPER.png')}}" alt="interactive-media-design">
                 </div>
                 <h3 class="text-uppercase">Skill Development Framework
                 </h3>
             </div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{asset('public/images/ict/LE.png')}}" alt="media-design">
                 </div>
                 <h3 class="text-uppercase">LEGAL EDUCATIONAL LICENSES OF SOFTWARE WHEREVER APPLICABLE
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
         <div class="container">
             <div class="row">
                 <div class="col-md-7 offset-md-1 line_height p-0">
                     <h1 class="text-uppercase mb-4 text-left">ATTRACTIVE PRICING PLANS</h1>
                     <p>Our platform will help your school in the successful implementation of the new National Education Policy (NEP) 2020 with advanced technologies and relevant upskilling programs.</p>
                     <h3>Salient Features:</h3>
                     <ul>
                         <li>Empower Educators and Students with key 21st century, digital & employability skills</li>
                         <li>Develop creative potential & creative confidence of students </li>
                         <li>Research-based Design Thinking and Coding curriculum</li>
                         <li>Real-world STREAM/STEAM Projects </li>
                         <li>Interdisciplinary, Learner-Centric, Experiential & Holistic Learning</li>
                     </ul>
                     <p style="color:#000"><b>Our Pricing Plans suit the needs and requirements of the Progressive Schools in India. They are so attractive that it should not be a problem for the School to implement the same if you are keen to elevate your Technology Curriculum</b></p>
                     <!-- <p class="dash">Enhance teaching and learning to improve student outcomes.</p>
                 <p>NEP 2020 - Design Thinking and Coding curriculum</p>
                 <p>Project and Design Thinking based Learning</p>
                 <p>Interdisciplinary Learning</p>
                 <p>Integrated - Computational Thinking</p> -->
                 </div>
                 <div class="col-md-4">
                     <div class="d-flex justify-content-center justify-content-md-start flex-wrap">
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
                                     <li>Assessment
                                         <img src="{{('public/images/check.png')}}" alt="check">
                                     </li>
                                     <li>Digital Portfolio
                                         <img src="{{('public/images/check.png')}}" alt="check">
                                     </li>
                                     <li>Competition
                                         <img src="{{('public/images/check.png')}}" alt="check">
                                     </li>
                                     <li class="mt-4">
                                         <a class="enquiry_btn" href="#contact">contact us</a>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                         <!-- <div class="enquiry">
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
                                     <button class="enquiry_btn">Enquire Now</button>
                                 </li>
                             </ul>
                         </div>
                     </div> -->
                     </div>
                 </div>
             </div>
     </section>
     <!--====== TESTIMONIALs SECTION END ======-->
 </div>
 <!--========= ICT Section END ========-->
 <!--====== NEED OF THE HOUR START ======-->



 
 <section class="iframe_sec">
     <div class="col-md-12 h_300px">

     <h1 class="text-center text-uppercase mt-4 mb-2">ADVANCED ICT LEARNING FOR EDUCATORS AND STUDENTS
</h1>
     </div>
     <div class="col-md-12 p-0 pera yellow_gradient">
         <div class="index_iframe">


             <div class="video_iframe">
                 <iframe  src="https://www.youtube.com/embed/GWf1zmuQ_k8?rel=0&amp;autoplay=1&amp;loop=1&amp;playlist=GWf1zmuQ_k8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="background-image:url(public/images/ipad.png); background-size: cover;" allowfullscreen></iframe>
                 <!-- <iframe width="100%" height="600px"
                    src="https://www.youtube.com/embed/xAw9SaiXSLY?feature=oembed&start&end&wmode=opaque&loop=0&controls=1&mute=0&rel=0&modestbranding=0"
                    frameborder="0" allowfullscreen></iframe> -->
             </div>
         </div>
         <p>
         In today’s world - creation of new information, discoveries, inventions are taking place at a fast pace. To match up with the developments and advancements, our school curriculum needs to evolve, and 21st century learning methodology can be a crucial bridge in achieving the same.
         </p>
     </div>
 </section>
 <!--====== NEED OF THE HOUR END ======-->

 <!--====== HOLISTIC LEARNING APPROACH START ======-->
 <section class="holistic_sec">
     <h1>HOLISTIC LEARNING APPROACH</h1>
     <div class="d-flex justify-content-between holistic_flex">
         <div class="digi_card">
             <div class="">
                 <img src="{{('public/images/STREAM.png')}}" class="img-fluid">
             </div>
             <h3>STREAM 
                 EDUCATION
             </h3>
             <p class="holistic_pera">Students learn how to apply the combined knowledge of interdisciplinary subjects - Science, Technology, Research, Engineering, Art, and Mathematics to innovate and create solutions for real-world problems.
             </p>
         </div>
         <div class="digi_card">
             <div class="">
                 <img src="{{('public/images/pbl.png')}}" class="img-fluid">
             </div>
             <h3>PROJECT BASED LEARNING (PBL)
             </h3>
             <p class="holistic_pera">PBL is a student-centred teaching method that involves a dynamic classroom approach where students acquire a deeper knowledge through active exploration of real-world challenges and problems. 
             </p>
         </div>
         <div class="digi_card">
             <div class="">
                 <img src="{{('public/images/SCL.png')}}" class="img-fluid">
             </div>
             <h3>STUDENT CENTRIC LEARNING (SCL)
             </h3>
             <p class="holistic_pera">Student Centric Learning is a method which engages students into the learning process which is personalized, happens anytime and/or anywhere, and has ownership of students in their learning.
             </p>
         </div>
         <div class="digi_card">
             <div class="">
                 <img src="{{('public/images/DT.png')}}" class="img-fluid">
             </div>
             <h3>DESIGN THINKING
             </h3>
             <p class="holistic_pera">Design Thinking is a process where students apply their knowledge to solve real-world problems. They
                 work together, understand the problem, think, design and develop a model to solve a given problem. 
             </p>
         </div>
         <div class="digi_card">
             <div class="">
                 <img src="{{('public/images/Contex.png')}}" class="img-fluid">
             </div>
             <h3>CONTENT TO CONTEXT
             </h3>
             <p class="holistic_pera">Through Project based Learning, students relate the content learned in the classroom to their everyday life. They understand how the acquired knowledge and skills can be applied for innovation & problem-solving.
             </p>
         </div>
     </div>
     <div class="holistic_slider mt-5">
         <div class="digi_card">
             <div class="">
                 <img src="{{('public/images/STREAM.png')}}" class="img-fluid">
             </div>
             <h3>STREAM 
                 EDUCATION
             </h3>
             <p>Students learn how to apply the combined knowledge of interdisciplinary subjects - Science,
                 Technology, Research, Engineering, Art, and Mathematics to innovate and create solutions for
                 real-world problems.
             </p>
         </div>
         <div class="digi_card">
             <div class="">
                 <img src="{{('public/images/pbl.png')}}" class="img-fluid">
             </div>
             <h3>PROJECT BASED LEARNING (PBL)
             </h3>
             <p>PBL is a student-centred teaching method that involves a dynamic classroom approach where students
                 acquire a deeper knowledge through active exploration of real-world challenges and problems. 
             </p>
         </div>
         <div class="digi_card">
             <div class="">
                 <img src="{{('public/images/SCL.png')}}" class="img-fluid">
             </div>
             <h3>STUDENT CENTRIC LEARNING (SCL)
             </h3>
             <p>Student Centric Learning is a method which engages students into the learning process which is
                 personalized, happen anytime and/or anywhere, and has ownership of students in their learning.
             </p>
         </div>
         <div class="digi_card">
             <div class="">
                 <img src="{{('public/images/DT.png')}}" class="img-fluid">
             </div>
             <h3>DESIGN THINKING
             </h3>
             <p>Design Thinking is a process where students apply their knowledge to solve real-world problems. They
                 work together, understand the problem, think, design and develop a model to solve a given problem. 
             </p>
         </div>
         <div class="digi_card">
             <div class="">
                 <img src="{{('public/images/Contex.png')}}" class="img-fluid">
             </div>
             <h3>CONTENT TO CONTEXT
             </h3>
             <p>Through Project based Teaching Methodology, students relate the content learned in the classroom to
                 their everyday life. They understand how the acquired knowledge can be applied for innovation &
                 problem-solving. It encourages them to think & explore new ideas. The purpose of Project based
                 teaching is to nurture skills in students which include critical thinking, creativity &
                 communication.
             </p>
         </div>
     </div>
 </section>

 
 <!--====== HOLISTIC LEARNING APPROACH END ======-->
 <!--====== WHY MINDBOX SECTION START ======-->
 <section class="mindbox_sec digital_sec blue_gredient">
     <h1>WHY ICT 360</h1>
     <p>
     Diversity. Every child is unique, and they all learn differently, hence “One Size Fits All” philosophy doesn't apply to learning. The current education system focuses on the 3 R's of learning (Reading, Writing & Arithmetic) where information is only consumed by students. It's time to make a shift in the way learning occurs i.e. from Information Consumption to Knowledge Application and Creation.
     </p>
     <p>
     To empower learners, we need to develop our education system where classrooms are Student-Centric, and Teachers act as Facilitators of Learning. A system that enables learning of 21st Century Skills – Creative Thinking, Critical Thinking, Collaboration and Communication cited as a prerequisite by leading industries across the globe.
     </p>
     <div class="container-fluid d-flex_slider1">
         <div class="row justify-content-center">
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/LMS.png')}}" width="200">
                 </div>
                 <h3>LEARNING MANAGEMENT SYSTEM 
                 </h3>
             </div>
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/TTT.png')}}" width="128">
                 </div>
                 <h3>TRAIN THE TRAINER
                 </h3>
             </div>
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/CC.png')}}" width="128">
                 </div>
                 <h3>CURRICULUM
                     & CONTENT
                 </h3>
             </div>
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/SDF.png')}}" width="128">
                 </div>
                 <h3>SKILL DEVELOPMENT FRAMEWORK
                 </h3>
             </div>
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/Report.png')}}" width="128">
                 </div>
                 <h3>EVALUATION AND
                     ANALYTICS REPORT
                 </h3>
             </div>
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/Text book.png')}}" width="128">
                 </div>
                 <h3>ENGAGING REFERENCE TEXTBOOKS
                 </h3>
             </div>
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/Digital profile.png')}}" width="200">
                 </div>
                 <h3>PROJECT BASED LEARNING
                 </h3>
             </div>
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/competition.png')}}" width="128">
                 </div>
                 <h3>NATIONAL & INTERNATIONAL COMPETITIONS
                 </h3>
             </div>
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/DESIGN & INNOVATION LAB.png')}}" width="128">
                 </div>
                 <h3>DESIGN & INNOVATION LAB
                 </h3>
             </div>
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/GAMIFICATION.png')}}" width="128">
                 </div>
                 <h3>GAMIFICATION
                 </h3>
             </div>
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/SPECIALISED FACULTY.png')}}" width="128">
                 </div>
                 <h3>SPECIALISED FACULTY
                 </h3>
             </div>
             <div class="col-md-2 digi_card">
                 <div class="card">
                     <img src="{{('public/images/Advanced technology.png')}}" width="128">
                 </div>
                 <h3>ADVANCED FUTURE TECHNOLOGIES
                 </h3>
             </div>
         </div>
     </div>
     <div class="d-flex justify-content-center flex_div1">
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/LMS.png')}}" width="200">
                 </div>
                 <h3>LEARNING MANAGEMENT SYSTEM 
                 </h3>
             </div>
         </div>
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/TTT.png')}}" width="128">
                 </div>
                 <h3>TRAIN THE TRAINER
                 </h3>
             </div>
         </div>
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/CC.png')}}" width="128">
                 </div>
                 <h3>CURRICULUM
                     & CONTENT
                 </h3>
             </div>
         </div>
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/SDF.png')}}" width="128">
                 </div>
                 <h3>SKILL DEVELOPMENT FRAMEWORK
                 </h3>
             </div>
         </div>
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/Report.png')}}" width="128">
                 </div>
                 <h3>EVALUATION AND
                     ANALYTICS REPORT
                 </h3>
             </div>
         </div>
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/Text book.png')}}" width="128">
                 </div>
                 <h3>ENGAGING REFERENCE TEXTBOOKS
                 </h3>
             </div>
         </div>
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/Digital profile.png')}}" width="200">
                 </div>
                 <h3>PROJECT BASED LEARNING
                 </h3>
             </div>
         </div>
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/competition.png')}}" width="128">
                 </div>
                 <h3>NATIONAL & INTERNATIONAL COMPETITIONS
                 </h3>
             </div>
         </div>
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/DESIGN & INNOVATION LAB.png')}}" width="128">
                 </div>
                 <h3>DESIGN & INNOVATION LAB
                 </h3>
             </div>
         </div>
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/GAMIFICATION.png')}}" width="128">
                 </div>
                 <h3>GAMIFICATION
                 </h3>
             </div>
         </div>
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/SPECIALISED FACULTY.png')}}" width="128">
                 </div>
                 <h3>SPECIALISED FACULTY
                 </h3>
             </div>
         </div>
         <div>
             <div class="digi_card">
                 <div class="card">
                     <img src="{{('public/images/Advanced technology.png')}}" width="128">
                 </div>
                 <h3>ADVANCED FUTURE TECHNOLOGIES
                 </h3>
             </div>
         </div>
     </div>
 </section>
 <!--====== WHY MINDBOX SECTION END ======-->
 <!--====== OUR PRESENCE SECTION START ======-->
 <section class="presence_sec">
     <h1>OUR PRESENCE</h1>
     <p>More than 100000 students across India have been empowered with 21st century skills through our ICT Programs. Our dedicated faculties are transforming students from Consumer to Creator, Creator to Creative and Problem Mindset to Solution Mindset through STREAM based Creative Education and Project Based Learning.
     </p>
     <div class="d-flex justify-content-center flex-wrap">
         <div class="p-4">
             <div class="pre_card yellow_gradient">
                 <div class="h_115px">
                     <img src="{{('public/images/Student.png')}}">
                 </div>
                 <h2> <span class="counter">100000</span> + </h2>
                 <p>STUDENTS</p>
             </div>
         </div>
         <div class="p-4">
             <div class="pre_card blue_gredient">
                 <div class="h_115px"><img src="{{('public/images/Cities.png')}}"></div>
                 <h2><span class="counter">18</span>+ </h2>
                 <p>CITIES</p>
             </div>
         </div>
         <div class="p-4">
             <div class="pre_card red_gradient">
                 <div class="h_115px"><img src="{{('public/images/Faculties.png')}}"></div>
                 <h2><span class="counter">100</span>+ </h2>
                 <p>FACULTIES</p>
             </div>
         </div>
         <div class="p-4">
             <div class="pre_card lignt_blue_gradient">
                 <div class="h_115px"><img src="{{('public/images/School.png')}}"></div>
                 <h2><span class="counter">50</span>+ </h2>
                 <p>SCHOOLS</p>
             </div>
         </div>
     </div>
     <div class="autoplay mt-5">
         <div>
             <img src="{{('public/images/schools/Advait.png')}}" alt="Advait">
         </div>
         <div>
             <img src="{{('public/images/schools/Camford.png')}}" alt="Camford">
         </div>
         <div>
             <img src="{{('public/images/schools/Dr.-Dasarathan-international-school.png')}}" alt="Dr.-Dasarathan-international-school">
         </div>
         <div>
             <img src="{{('public/images/schools/Excel-Global.png')}}" alt="Excel-Global">
         </div>
         <div>
             <img src="{{('public/images/schools/Gopi-Birla.png')}}" alt="Gopi-Birla">
         </div>
         <div>
             <img src="{{('public/images/schools/Phoenix.png')}}" alt="Phoenix">
         </div>
         <div>
             <img src="{{('public/images/schools/Rivereside.png')}}" alt="Rivereside">
         </div>
         <div>
             <img src="{{('public/images/schools/SRM.png')}}" alt="SRM">
         </div>
         <div>
             <img src="{{('public/images/schools/Vel_s.png')}}" alt="Vel_s">
         </div>
     </div>
 </section>
 <!--====== OUR PRESENCE SECTION END ======-->
 <!--====== TESTIMONIALs SECTION START ======-->
 <section class="mindbox_sec digital_sec red_gradient ">
     <h1 class="mt-3">WHAT PARENTS & EDUCATORS SAY ABOUT US
     </h1>
     <div class="testimonial mt-3 text-center">
         <div>
             <div>
                 <img src="{{('public/images/avatar.png')}}" alt="linaashar">
             </div>
             <div>
                 <h3>
                     “When the kids reach school, we introduce ICT platform to them. It will introduce children to games and activities that will prepare them to learn coding and other emerging technologies.”
                 </h3>
                 <h4 class="pt-3 float-left w-100">-	Seshasai KVS</h4>
                 <p>
                  CEO, Kangaroo Kids Education
                 </p>
             </div>
         </div>
         <div>
             <div>
                 <img src="{{('public/images/avatar.png')}}" alt="linaashar">
             </div>
             <div>
                 <h3>
                     “This year we have tied up with MindBox for setting up a STEAM lab (Science, Technology, Engineering, Arts, Math Lab), which is helping us in delivering key subject concepts using digital designing and some of the industry standard software like CorelDRAW, Photoshop, AutoCAD etc. Our students are able to print their digital design using 3D printers and see that their designs come to life. We are also encouraging our students to design online games, and many are willing to participate in the game design championship. We have introduced Robotics to our students, which is helping them to design and code Robots and have a plan to send our students to world Robotics Challenge in the next two years."
                 </h3>
                 <h4 class="pt-3 float-left w-100">Narendra Prasad E</h4>
                 <p>
                     Founder & MD - Futuristic Edu Initiatives
                 </p>
             </div>
         </div>
     </div>
 </section>
 <!--====== TESTIMONIALs SECTION END ======-->
 <!--====== COMPETITIONS START ======-->
 <section class="competition_sec">
     <h1>
         COMPETITIONS
     </h1>
     <p>
     We organise competitions like Design Championship and VEX Robotics. These competitions offer a platform to the students to take their classroom learning to the outside world. It inspires them to think out of the box, tap into their creative side and showcase their talent. We believe National and International level competitions help students develop competitive and innovative spirit.
     </p>
     <div class="d-flex justify-content-center mt-5">
         <div class="position-relative text-center">
             <div class="br first_ele">
                 <div class="comp_card d-flex align-items-center justify-content-center"><img src="{{('public/images/competition/DC.png')}}" width="150px" alt="dc"></div>
                 <p><a href="https://designchampionship.in/home" class="text-black" target="_blank">www.designchampionship.in</a></p>
             </div>
         </div>
         <div class="position-relative text-center">
             <div class="br">
                 <div class="comp_card d-flex align-items-center"><img src="{{('public/images/Vex.png')}}" width="200px" alt="vex"></div>
                 <p><a href="https://vexindia.com/" class="text-black" target="_blank">www.vexindia.com</a></p>
             </div>
         </div>
     </div>
 </section>
 <!--====== COMPETITIONS END ======-->
 <!--====== DIGITAL FOOTPRINT START ======-->
 <section class="digital_sec lignt_blue_gradient">
     <div class="container">
         <h1>DIGITAL FOOTPRINT</h1>
         <p>
         We want every child to be equipped with 21st century skills that will help them become a Creator, Thinker and Innovator. To achieve this, we have set out on a journey to empower educators and students through our ICT programs. We are focused on creating awareness of technology-based education and we do this through our Newsletters, Blogs and Social Media posts.
         </p>
         <div class="row mt-4">
             <div class="col-md-4 col-12">
                 <div class="digi_card digital_footprint">
                     <a href="{{route('newsletter')}}" target="_blank">
                         <img src="{{('public/images/Newletter.png')}}" alt="Newletter" class='bdr_20 img-fluid'>
                     </a>
                 </div>
                 <h3>Newsletter</h3>
             </div>
             <div class="col-md-4 col-12">
                 <div class="digi_card digital_footprint">
                     <a href="{{route('blog')}}" target="_blank">
                         <img src="{{('public/images/Blog.png')}}" alt="Blog" class='bdr_20 img-fluid'>
                     </a>
                 </div>
                 <h3>blogs</h3>
             </div>
             <div class="col-md-4 col-12">
                 <div class="digi_card single_feature position-relative digital_footprint">
                     <ul>
                         <li>
                             <a href="https://www.facebook.com/mindboxofficial/" target="_blank">
                                 <img src="{{('public/images/fb.png')}}" alt="fb" class="img-fluid">
                             </a>
                         </li>
                         <li>
                             <a href="https://twitter.com/mindboxindia?lang=en" target="_blank">
                                 <img src="{{('public/images/tw.png')}}" alt="tw" class="img-fluid">
                             </a>
                         </li>
                         <li>
                             <a href="https://www.instagram.com/mindboxindia/" target="_blank">
                                 <img src="{{('public/images/insta.png')}}" class="img-fluid">
                             </a>
                         </li>
                         <li>
                             <a href="https://www.youtube.com/channel/UCuTWnAILUssrApSJmpTn_hw" target="_blank">
                                 <img src="{{('public/images/youtb.png')}}" class="img-fluid">
                             </a>
                         </li>
                         <li>
                             <a href="https://in.linkedin.com/company/mindbox-india" target="_blank">
                                 <img src="{{('public/images/linkdin.png')}}" class="img-fluid">
                             </a>
                         </li>
                         <li>
                             <a href="https://in.pinterest.com/mindboxindia/" target="_blank">
                                 <img src="{{('public/images/pint.png')}}" class="img-fluid">
                             </a>
                         </li>
                     </ul>
                     <!-- <div class="position-relative">
                     <img src="{{('public/images/Box.png')}}" alt="Blog" class="img-fluid">
                     <ul>
                         <li>
                             <a href="https://www.facebook.com/mindboxofficial/" target="_blank">
                                 <img src="{{('public/images/fb.png')}}" alt="fb" class="img-fluid">
                             </a>
                         </li>
                         <li>
                             <a href="https://twitter.com/mindboxindia?lang=en" target="_blank">
                                 <img src="{{('public/images/tw.png')}}" alt="tw" class="img-fluid">
                             </a>
                         </li>
                         <li>
                             <a href="https://www.instagram.com/mindboxindia/" target="_blank">
                                 <img src="{{('public/images/insta.png')}}" class="img-fluid">
                             </a>
                         </li>
                         <li>
                             <a href="https://www.youtube.com/channel/UCuTWnAILUssrApSJmpTn_hw" target="_blank">
                                 <img src="{{('public/images/youtb.png')}}" class="img-fluid">
                             </a>
                         </li>
                         <li>
                             <a href="https://in.linkedin.com/company/mindbox-india" target="_blank">
                                 <img src="{{('public/images/linkdin.png')}}" class="img-fluid">
                             </a>
                         </li>
                         <li>
                             <a href="https://in.pinterest.com/mindboxindia/" target="_blank">
                                 <img src="{{('public/images/pint.png')}}" class="img-fluid">
                             </a>
                         </li>
                     </ul>
                 </div> -->

                 </div>
                 <h3>Social Media</h3>
             </div>
         </div>
     </div>
 </section>
 <!--====== DIGITAL FOOTPRINT END ======-->
 <!--====== CONTACT US PART START ======-->
 <section id="contact" class="contact_sec">
     @include('common.contact-us')
 </section>
 <!--====== CONTACT US PART END ======-->
  
<!-- modal box area starts  -->
<!--<div class="modal fade" id="mbModal" tabindex="-1" aria-labelledby="mbModal" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="border: 3px solid #ffffff;
    border-radius: 3px;">

      <div class="modal-body" style=" height: 508px; padding: 0;
    overflow: hidden;">
	  
          <div class="row">
		    <div class="col-lg-6" style="padding: 0px 2px;">
		<div class="container-img">	
  <img src="https://www.mindbox.in/public/images/In-School.jpg" alt="Snow" style="width:100%;">
  <div class="centered"> 
  <h2>For Schools</h2>
  <h1>ICT 2.0 Solution</h1>
   <h2>&nbsp;</h2>
  <a class="btn btn-info d2h_btn" href="https://www.mindbox.in/?search=xy477">Enter</a>
  </div>
</div>
</div>

<div class="col-lg-6" style="padding: 0px 2px;">
					<div class="container-img">
  <img src="https://www.mindbox.in/public/images/Live-Class.jpg" alt="Snow" style="width:100%;">
  <div class="centered">
   <h2>For Parents</h2>
  <h1>Online 1:1 Live Class</h1>
  <h2>Direct2Home Learning</h2>
  <a class="btn btn-info d2h_btn" href="https://mbxd2h.in/">Enter</a>
  </div>
  </div>
</div>
			
		  
		  </div>
      </div>
      <div class="modal-footer text-center" style="padding:5px; margin: 0 auto;">
       <a><img src="https://www.mindbox.in/public/images/logo-ict.png" style="height:40px;" alt="" ></a>
        
      </div>
    </div>
  </div>
</div>-->

<style>

@media only screen and (max-device-width: 415px){

.modal-content img {
    margin: 0 auto;
    display: block;
    max-height: 255px;
    border: 1px solid #fff;
}
.centered h1 {
    font-size: 20px !important;
}

}
.container-img {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
}
.centered h1{
    color: #fffc00;
    text-transform: uppercase;
    font-weight: 800;
    font-size: 31px;
}
.centered h2{
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    color: #fff;
    line-height: 38px;
}
.d2h_btn{
    color: #fdfc01;
    background-color: #4d9518;
    border-color: #4d9518;
    border-radius: 25px;
	padding: 5px 20px;
}
.modal-backdrop.show {
    filter: alpha(opacity=90);
    opacity: .9;
}
.btn-info:hover {
     color: #fdfc01;
    background-color: #4d9518;
    border-color: #4d9518;
}
.modal-dialog {
    width: 1043px;
    margin: 30px auto;
    max-width: 100%;
}
</style>
 
 @endsection

 @section('script')
 <script>
     $(document).ready(function() {

     })
 </script>
 <!-- Coundown js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  -->
 <!-- Counterup and Waypoint js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
 <script src="https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js"></script>
 <!-- <script type="text/javascript">
  
    $(document).ready(function() { 
        if(document.URL==='https://www.mindbox.in/')
         {
            $('#mbModal').modal('toggle');
         }
   });
    
</script>-->
 <script>
     $(document).ready(function() {
         $('.counter').counterUp({
             delay: 10,
             time: 2000
         });
         $('.counter').addClass('animated fadeInDownBig');
         $('h3').addClass('animated fadeIn');
         //  slider
         $('.student_project').slick({
             slidesToShow: 4,
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
                         slidesToShow: 1,
                         slidesToScroll: 3,
                         infinite: true,
                         dots: true
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
         
         $('.holistic_slider').slick({
             slidesToShow: 1,
             slidesToScroll: 1,
             autoplay: true,
             autoplaySpeed: 3000,
             dots: false,
             arrows: true,
             responsive: [{
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
         $('.flex_div1').slick({
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
                         slidesToShow: 2,
                         slidesToScroll: 1
                     }
                 }
             ]
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
                         slidesToShow: 1,
                         slidesToScroll: 1,
                         infinite: true,
                         dots: true
                     }
                 },
                 {
                     breakpoint: 600,
                     settings: {
                         slidesToShow: 1,
                         slidesToScroll: 1
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
         //  $('.innovation_slider').slick({
         //      slidesToShow: 1,
         //      slidesToScroll: 1,
         //      autoplay: true,
         //      autoplaySpeed: 3000,
         //      dots: false,
         //      arrows: true,
         //      responsive: [{
         //              breakpoint: 1024,
         //              settings: {
         //                  slidesToShow: 1,
         //                  slidesToScroll: 3,
         //                  infinite: true,
         //                  dots: false
         //              }
         //          },
         //          {
         //              breakpoint: 600,
         //              settings: {
         //                  slidesToShow: 1,
         //                  slidesToScroll: 2
         //              }
         //          },
         //          {
         //              breakpoint: 480,
         //              settings: {
         //                  slidesToShow: 1,
         //                  slidesToScroll: 1
         //              }
         //          }
         //      ]
         //  });
         //  $('.autoplay').slick({
         //      slidesToShow: 4,
         //      slidesToScroll: 1,
         //      autoplay: true,
         //      autoplaySpeed: 3000,
         //      dots: false,
         //      arrows: true,
         //      responsive: [{
         //              breakpoint: 1024,
         //              settings: {
         //                  slidesToShow: 3,
         //                  slidesToScroll: 3,
         //                  infinite: true,
         //                  dots: false
         //              }
         //          },
         //          {
         //              breakpoint: 600,
         //              settings: {
         //                  slidesToShow: 2,
         //                  slidesToScroll: 2
         //              }
         //          },
         //          {
         //              breakpoint: 480,
         //              settings: {
         //                  slidesToShow: 1,
         //                  slidesToScroll: 1
         //              }
         //          }
         //      ]
         //  });
     });
     $(".explore_btn.innovation_explore").on("click", function() {
         $(".innovation_section").css("display", "block");
         $(".ict_section").css("display", "none");
         $(".page-banner").css("display", "none");
         $(".page-banner-innovation").css("display", "block");
         $(".card_front.card_front_innovation").addClass("active");
         $(".card_front.card_front_ict").removeClass("active");
         $(".card_front.card_front_online").removeClass("active");
     });
     $(".explore_btn.ict_explore").on("click", function() {
         $(".innovation_section").css("display", "none");
         $(".ict_section").css("display", "block");
         $(".default_content").css("display", "none");
         $(".ict_content").css("display", "block");
         $(".page-banner").css("display", "block");
         $(".page-banner-innovation").css("display", "none");
         $(".card_front.card_front_innovation").removeClass("active");
         $(".card_front.card_front_ict").addClass("active");
         $(".card_front.card_front_online").removeClass("active");
     });
     $(".explore_btn.online_explore").on("click", function() {
         $(".innovation_section").css("display", "none");
         $(".ict_section").css("display", "none");
         $(".page-banner").css("display", "block");
         $(".page-banner-innovation").css("display", "none");
         $(".default_content").css("display", "block");
         $(".ict_content").css("display", "none");
         $(".card_front.card_front_innovation").removeClass("active");
         $(".card_front.card_front_ict").removeClass("active");
         $(".card_front.card_front_online").addClass("active");
     });
     $(".our_solution").on("click", function() {
         $(".ict_section").css("display", "none");
         $(".innovation_section").css("display", "none");
         $(".page-banner").css("display", "block");
         $(".page-banner-innovation").css("display", "none");
         $(".default_content").css("display", "block");
         $(".ict_content").css("display", "none");
     });
 </script>

 @endsection