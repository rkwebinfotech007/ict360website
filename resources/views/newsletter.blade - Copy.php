@extends('layouts.master')
 @section('title','MBX-ICT')
 @section('content')
    <section class="about iframe_sec mt-88">
        <div class="col-md-12">
            <h1 class="pt-5 pb-3">Newsletter</h1>
        </div>
        <div class="col-md-12 pl-7 pr-7">
            <div class="newsletter_autoplay mt-1 p-0">
                
                           <div class="slider_dim">
                <div class="slider_card technology">
                    <div class="card">
                        <img src="{{asset('public/images/newsletter/dec-thumbnail.jpg')}}" class="img-fluid" alt="Hybrid Teaching">
                    </div>
                    <div>
                        <h3>Hybrid Teaching</h3>
                    </div>
                    <div>
                        <button class="readmore_btn" onclick="generatePdf('Hybrid Teaching','dec-newsletter.pdf')">Read More</button>
                    </div>
                </div>
            </div>
                
                     <div class="slider_dim">
                <div class="slider_card technology">
                    <div class="card">
                        <img src="{{asset('public/images/newsletter/nov-thumbnail.jpg')}}" class="img-fluid" alt="An Effective  21st Century Teacher ">
                    </div>
                    <div>
                        <h3>An Effective  21st Century Teacher </h3>
                    </div>
                    <div>
                        <button class="readmore_btn" onclick="generatePdf('An Effective  21st Century Teacher ','Nov-Newsletter.pdf')">Read More</button>
                    </div>
                </div>
            </div>
            
                
                <div class="slider_dim">
                <div class="slider_card technology">
                    <div class="card">
                        <img src="{{asset('public/images/newsletter/oct-newsletter.jpg')}}" class="img-fluid" alt="21st Century Teaching Skills ">
                    </div>
                    <div>
                        <h3>21st Century Teaching Skills </h3>
                    </div>
                    <div>
                        <button class="readmore_btn" onclick="generatePdf('21st Century Teaching Skills ','oct-newsletter.pdf')">Read More</button>
                    </div>
                </div>
            </div>
            
                
                        <div class="slider_dim">
                <div class="slider_card technology">
                    <div class="card">
                        <img src="{{asset('public/images/newsletter/september-newsletter.jpg')}}" class="img-fluid" alt="Continuous Educatioon with Digital Learning">
                    </div>
                    <div>
                        <h3>Continuous Educatioon with Digital Learning</h3>
                    </div>
                    <div>
                        <button class="readmore_btn" onclick="generatePdf('Continuous Educatioon with Digital Learning','september-newsletter.pdf')">Read More</button>
                    </div>
                </div>
            </div>
                
                <div class="slider_dim">
                <div class="slider_card technology">
                    <div class="card">
                        <img src="{{asset('public/images/newsletter/august-newsletter.jpg')}}" class="img-fluid" alt="The Holistic Teacher">
                    </div>
                    <div>
                        <h3>The Holistic Teacher</h3>
                    </div>
                    <div>
                        <button class="readmore_btn" onclick="generatePdf('The Holistic Teacher','august-newsletter.pdf')">Read More</button>
                    </div>
                </div>
            </div>
            
        
            
            
                
                       <div class="slider_dim">
                <div class="slider_card technology">
                    <div class="card">
                        <img src="{{asset('public/images/newsletter/july-thumbnail.jpg')}}" class="img-fluid" alt="Learning Management System">
                    </div>
                    <div>
                        <h3>Learning Management System(LMS)</h3>
                    </div>
                    <div>
                        <button class="readmore_btn" onclick="generatePdf('Learning Management System','july-newsletter.pdf')">Read More</button>
                    </div>
                </div>
            </div>
                
                     <div class="slider_dim">
                <div class="slider_card humour">
                    <div class="card">
                        <img src="{{asset('public/images/newsletter/Newsletter-June-Thumbnail.jpg')}}" class="img-fluid" alt="d2h-blog">
                    </div>
                    <div>
                        <h3>The Future of Education</h3>
                    </div>
                    <div>
                        <button class="readmore_btn" onclick="generatePdf('The Future of Education','Newsletter_June.pdf')">Read More</button>
                    </div>
                </div>
            </div>
            
                <div class="slider_dim">
                <div class="slider_card humour">
                    <div class="card">
                        <img src="{{asset('public/images/newsletter/thumbnail-for-newsletter.jpg')}}" class="img-fluid" alt="d2h-blog">
                    </div>
                    <div>
                        <h3>National Education Policy (NEP)2020</h3>
                    </div>
                    <div>
                        <button class="readmore_btn" onclick="generatePdf('National Education Policy (NEP)2020','newsletter_10.pdf')">Read More</button>
                    </div>
                </div>
            </div>
                <div class="slider_dim">
                    <div class="slider_card humour">
                        <div class="card">
                            <img src="{{asset('public/images/newsletter/newsletter11.jpg')}}" class="img-fluid" alt="d2h-blog">
                        </div>
                        <div>
                            <h3>Guide To Preparing The Reopening Of Schools Post Lockdown</h3>
                        </div>
                        <div>
                            <button class="readmore_btn" onclick="generatePdf('Guide To Preparing The Reopening Of Schools Post Lockdown','Guide-to-Preparing-the-Reopening-of-Schools-Post-Lockdown.pdf')">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="slider_dim">
                    <div class="slider_card humour">
                        <div class="card">
                            <img src="{{asset('public/images/newsletter/newsletter10.jpg')}}" class="img-fluid" alt="Advait">
                        </div>
                        <div>
                            <h3>Online Classes Guidebook</h3>
                        </div>
                        <div>
                            <button class="readmore_btn" onclick="generatePdf('Online Classes Guidebook','Online-Classes-Guidebook.pdf')">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="slider_dim">
                    <div class="slider_card humour">
                        <div class="card">
                            <img src="{{asset('public/images/newsletter/newsletter9.jpg')}}" class="img-fluid"
                                alt="Advait">
                        </div>
                        <div>
                            <h3>Sustainable Development Goal: No Poverty</h3>
                        </div>
                        <div>
                            <button class="readmore_btn" onclick="generatePdf('Sustainable Development Goal: No Poverty','Newsletter9_web.pdf')">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="slider_dim">
                    <div class="slider_card infographics">
                        <div class="card">
                            <img src="{{asset('public/images/newsletter/newsletter8.jpg')}}" class="img-fluid" alt="Advait">
                        </div>
                        <div>
                            <h3>Social Emotional Learning (SEL)</h3>
                        </div>
                        <div>
                            <button class="readmore_btn" onclick="generatePdf('Social Emotional Learning (SEL)','SEL-Newsletter.pdf')">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="slider_dim">
                    <div class="slider_card infographics">
                        <div class="card">
                            <img src="{{asset('public/images/newsletter/newsletter7.jpg')}}" class="img-fluid" alt="Advait">
                        </div>
                        <div>
                            <h3>Education in the Age of Artificial Intelligence</h3>
                        </div>
                        <div>
                            <button class="readmore_btn" onclick="generatePdf('Education in the Age of Artificial Intelligence','Newsletter-7.pdf')">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="slider_dim">
                    <div class="slider_card riddle">
                        <div class="card">
                            <img src="{{asset('public/images/newsletter/newsletter6.jpg')}}" class="img-fluid" alt="Advait">
                        </div>
                        <div>
                            <h3>Mixed Reality and Education</h3>
                        </div>
                        <div>
                            <button class="readmore_btn" onclick="generatePdf('Mixed Reality and Education','News-Letter-6.0-Mixed-Reality.pdf')">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="slider_dim">
                    <div class="slider_card riddle">
                        <div class="card">
                            <img src="{{asset('public/images/newsletter/newsletter5.jpg')}}" class="img-fluid" alt="Advait">
                        </div>
                        <div>
                            <h3>Gamification</h3>
                        </div>
                        <div>
                            <button class="readmore_btn" onclick="generatePdf('Gamification','News_Lettert5.0.pdf')">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="slider_dim">
                    <div class="slider_card riddle">
                        <div class="card">
                            <img src="{{asset('public/images/newsletter/newsletter4.jpg')}}" class="img-fluid" alt="Advait">
                        </div>
                        <div>
                            <h3>What is STEAM</h3>
                        </div>
                        <div>
                            <button class="readmore_btn" onclick="generatePdf('What is STEAM','NEWSLETTER-2018_Vol_4.pdf')">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="slider_dim">
                    <div class="slider_card technology">
                        <div class="card">
                            <img src="{{asset('public/images/newsletter/newsletter3.jpg')}}" class="img-fluid" alt="Advait">
                        </div>
                        <div>
                            <h3>21st Century Skills</h3>
                        </div>
                        <div>
                            <button class="readmore_btn" onclick="generatePdf('21st Century Skills','NEWSLETTER-Volume-III.pdf')">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="slider_dim">
                    <div class="slider_card technology">
                        <div class="card">
                            <img src="{{asset('public/images/newsletter/newsletter2.jpg')}}" class="img-fluid" alt="Advait">
                        </div>
                        <div>
                            <h3>Transforming Classrooms with Design Thinking</h3>
                        </div>
                        <div>
                            <button class="readmore_btn" onclick="generatePdf('Transforming Classrooms with Design Thinking','NEWSLETTER-Volume-II.pdf')">Read More</button>
                        </div>
                    </div>
                </div>
                <div class="slider_dim">
                    <div class="slider_card technology">
                        <div class="card">
                            <img src="{{asset('public/images/newsletter/newsletter1.jpg')}}" class="img-fluid" alt="Advait">
                        </div>
                        <div>
                            <h3>Consumer to Creator to Creative</h3>
                        </div>
                        <div>
                            <button class="readmore_btn" onclick="generatePdf('Consumer to Creator to Creative','Mindbox-NEWS-LETTER-PDF-min.pdf')">Read More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
    <!--====== BLOG SECTION END ======-->
    
    <section class="blog_slider_sec padding mt-5" id="pdf_section">
    <h3 id="Pdf_title">Hybrid Teaching</h3>
    <div class="col-sm-12 p-0 embed-responsive embed-responsive-16by9">

        <iframe id="iframe_id" src="{{asset('public/pdf/dec-newsletter.pdf')}}"></iframe>
    </div>
</section>

    <!--====== Creative Confidence:The Key to Foster 21st Century Skills in Kids SECTION START ======-->
    
   
    <!--====== Creative Confidence:The Key to Foster 21st Century Skills in Kids SECTION END ======-->
    <!--====== CONTACT US PART START ======-->
    <section id="contact" class="contact_sec">
       @include('common.contact-us')
    </section>
    @endsection

    @section('script')

    <script>
        $(document).ready(function () {
            $('.newsletter_autoplay').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                dots: false,
                arrows: true,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: false
                        }
                    },
                    {
                        breakpoint: 1199,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 770,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        })

      function generatePdf(Title,PdfName)
      {
          var PdfUrl = "<?=asset('public');?>"+"/pdf/"+PdfName;
          $('#Pdf_title').html(Title);
          $('#iframe_id').attr("src",PdfUrl);
          $(window).scrollTop($('#pdf_section').offset().top);
          
      }
    </script>

@endsection