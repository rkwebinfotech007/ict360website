@extends('layouts.master')
@section('title','MBX-ICT')
@section('content')
<section class="about iframe_sec mt-88 b_b">
    <div class="col-md-12">
        <h1 class="pt-5 pb-3">BLOG</h1>
    </div>
    <div class="col-md-12 pl-7 pr-7">
        <div class="row">
            <div class="col-md-12">
                <div class="isotope-nav mb-4">
                    <ul>
                        <li class="nav-item btn btn-default filter-button active" data-filter="*">All</li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".humour">Humour</li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".infographics">Infographics</li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".riddle">Riddle</li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".technology">Technology</li>
                    </ul>
                </div>
                <div class="isotope-content">
                    <div class="isotope-item" style="position: relative; height: 2972.5px;">
                        <div class="row">
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 0px; top: 0px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/boy.jpg')}}" class="img-responsive" alt="boy">
                                        </div>
                                        <div>
                                            <h3>Don’t Underestimate The Knowledge Of Kittu</h3>
                                        </div>
                                        <div class="overlay">
                                            <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 285px; top: 0px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/mom-these-days.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Mom These Days</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 570px; top: 0px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/after-effects-of-marriage.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Can You Guess What Did “0” Said To “8”?</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 570px; top: 0px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/when-kids-are-addicted-to-computer.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>After Effects Of Marriage!!</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 855px; top: 297px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/how-to-avoid-being-punished-with-bad-grades.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>When Kids Are Addicted To Computer!</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 0px; top: 594px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/renewal-energy-have-a-great-potential-for-environmental-and-economic-impact.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>How To Avoid Being Punished With Bad Grades!</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 285px; top: 594px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/whats-the-longest-word-in-the-dictionary.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Renewal Energy Have A Great Potential For Environmental And Economic Impact!</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 570px; top: 594px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/at-times-social-media-addiction-can-put-you-in-trouble.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>What’s The Longest Word In The Dictionary?</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 855px; top: 594px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/when-students-dont-know-the-right-answer.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>At Times, Social Media Addiction Can Put You In Trouble!</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                    </h3>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 0px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/what-do-you-think-which-one-is-closer.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>When Students Don’t Know The Right Answer!</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 285px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/what-if-you-ever-find-yourself-stuck-in-something-like-this.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>What Do You Think? Which One Is Closer!</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 570px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/street-smart-kids-knows-everything.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>What If You Ever Find Yourself Stuck In Something Like This</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/thankfully-teacher-didnt-ask-for-formula-of-titin.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Street Smart Kids Knows Everything</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 285px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/when-you-are-not-what-does-english-version-of-your-name-is.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Thankfully Teacher Didn’t Ask For Formula Of Titin!</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 570px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/this-guy-just-tricked-his-teacher.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>When You Are Not What Does English Version Of Your Name Is!!</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/when-you-take-your-teachers-instructions-so-literally.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>This Guy Just Tricked His Teacher!</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/which-day-do-potatoes-hate-the-most.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>When You Take Your Teacher’s Instructions So Literally!</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 570px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/can-you-make-goldfishes-old-not-sure-check-this-out.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Which Day Do Potatoes Hate The Most?</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/do-you-like-this-candy-which-always-gets-late.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Can You Make Goldfishes Old? Not Sure? Check This Out</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/do_you_like_this_candy_which_always_gets_late.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Do You Like This Candy Which Always Gets Late?</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 infographics" style="position: absolute; left: 570px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/how_do_touch_screens_work.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>How Do Touch Screens Work?</h3>
                                            <p>Can you count how many touch screens you encounter on a single trip? Frequent travelers probably use touch screens more than most — smartphones.</p>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 infographics" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/what_are_the_effects_of_air_pollution-2.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>What Are The Effects Of Air Pollution?</h3>
                                            <p>Air pollution can result from both human and natural actions. Natural events that pollute the air include forest fires, volcanic eruptions, wind erosion.</p>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 infographics" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/ninja_tips_to_master_your_keyboard-1-.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Ninja Tips To Master Your Keyboard</h3>
                                            <p>Keyboard shortcuts are combinations of two or more keys that you can use to perform a task that would typically require a mouse or other pointing device.</p>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 infographics" style="position: absolute; left: 570px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/how_the_internet_actually_works-1-.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>How The Internet Actually Works</h3>
                                            <p>With 100’s of millions of internet users around the world it seems appropriate to explain what actually takes place when browsing the web.</p>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 infographics" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/how-it-works-solar-energy.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>How It Works – Solar Energy</h3>
                                            <p>Solar energy may seem like a complicated process but it is easy to understand the basics of how it works and how it helps us every day.</p>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 infographics" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/how-it-works-heat-pump-water-heaters.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>How It Works — Heat Pump Water Heaters</h3>
                                            <p>Solar energy may seem like a complicated process but it is easy to understand the basics of how it works and how it helps us every day.</p>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 riddle" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/im-there-once-in-a-minute-twice-in-a-moment-but-never-in-thousand-years.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>I’m There Once In A Minute, Twice In A Moment But Never In Thousand Years</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 technology" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/media-design-and-its-importance-in-school-curriculum.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Creative Confidence: The Key To Foster 21st Century Skills In Kids</h3>
                                            <p>Creative Confidence is the confidence that inspires your child to think and come up with creative solutions to real-world problems. It helps boost 21st Century Skills</p>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 technology" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/kiwi-kids-aim-to-break-the-world-coding-record.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Make Your Child A Coding Champion</h3>
                                            <p>‘Learning to write programs stretches your mind and helps you think better, creates a way of thinking about things that I think is helpful in all domains’ ~ Bill Gates, Philanthropist</p>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item col-md-4 col-sm-6 col-xs-12 technology" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{('public/images/blog/how-cloud-computing-will-change-the-face-of-education.jpg')}}" class="img-responsive" alt="">
                                        </div>
                                        <div>
                                            <h3>Design Solutions For A Sustainable Planet</h3>
                                            <p>Covid-19 has shown us that the only way to prevent future pandemics and improve the health of both humans and planet is to work towards achieving Sustainable Development Goals (SDGs)</p>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('dont_underestimate_the_knowledge_of_kittu')}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

@endsection