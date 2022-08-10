@extends('layouts.master')
@section('title','MBX-ICT')
@section('content')
<section class="about iframe_sec mt-88 b_b">
    <div class="col-md-12">
        <h1 class="pt-5 pb-3 font-50">BLOG</h1>
    </div>
    <div class="col-md-12 pl-3 pr-3">
        <div class="row">
            <div class="col-md-12">
                <div class="isotope-nav mb-4">
                    <ul>
                        <li class="nav-item btn btn-default filter-button active" data-filter="*">All</li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".humour">Humour</li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".infographics">Infographics</li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".riddle">Riddle</li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".technology">Technology</li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".uncategorized">Uncategorized</li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".younginventors">Young Inventors</li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".mindblog">Mindblog</li>
                    </ul>
                </div>
                <div class="isotope-content">
                    <div class="isotope-item" style="position: relative; height: 2972.5px;">
                        <div class="row">
                        @foreach($blogs as $blog)
                        @if($blog->category == 'humour')
                            <div class="item col-md-4 col-sm-6 col-xs-12 humour" style="position: absolute; left: 0px; top: 0px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{url('public').$blog->file_path}}" class="img-fluid" alt="boy">
                                        </div>
                                        <div>
                                            <h3>{{$blog->title}}</h3>
                                        </div>
                                        <div class="overlay">
                                            <a href="{{route('blogdetail',$blog->blog_url)}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                           @if($blog->category == 'infographics')
                            <div class="item col-md-4 col-sm-6 col-xs-12 infographics" style="position: absolute; left: 0px; top: 0px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                            <img src="{{url('public').$blog->file_path}}" class="img-fluid" alt="boy">
                                        </div>
                                        <div>
                                            <h3>{{$blog->title}}</h3>
                                        </div>
                                        <div class="overlay">
                                            <a href="{{route('blogdetail',$blog->blog_url)}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($blog->category == 'riddle')
                            <div class="item col-md-4 col-sm-6 col-xs-12 riddle" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                        <img src="{{url('public').$blog->file_path}}" class="img-fluid" alt="boy">
                                        </div>
                                        <div>
                                        <h3>{{$blog->title}}</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('blogdetail',$blog->blog_url)}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($blog->category == 'technology')
                            <div class="item col-md-4 col-sm-6 col-xs-12 technology" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                        <img src="{{url('public').$blog->file_path}}" class="img-fluid" alt="boy">
                                        </div>
                                        <div>
                                        <h3>{{$blog->title}}</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('blogdetail',$blog->blog_url)}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($blog->category == 'uncategorized')
                            <div class="item col-md-4 col-sm-6 col-xs-12 uncategorized" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                        <img src="{{url('public').$blog->file_path}}" class="img-fluid" alt="boy">
                                        </div>
                                        <div>
                                        <h3>{{$blog->title}}</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('blogdetail',$blog->blog_url)}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($blog->category == 'young-inventors')
                            <div class="item col-md-4 col-sm-6 col-xs-12 younginventors" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                        <img src="{{url('public').$blog->file_path}}" class="img-fluid" alt="boy">
                                        </div>
                                        <div>
                                        <h3>{{$blog->title}}</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('blogdetail',$blog->blog_url)}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @if($blog->category == 'mindblog')
                            <div class="item col-md-4 col-sm-6 col-xs-12 mindblog" style="position: absolute; left: 855px; top: 891px;">
                                <div class="page-preview">
                                    <div class="thumb">
                                        <div class="card">
                                        <img src="{{url('public').$blog->file_path}}" class="img-fluid" alt="boy">
                                        </div>
                                        <div>
                                        <h3>{{$blog->title}}</h3>
                                        </div>
                                        <div class="overlay">
                                        <a href="{{route('blogdetail',$blog->blog_url)}}" class="readmore_btn" target="_blank">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
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
<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6041d4e175e2520d"></script>
@endsection