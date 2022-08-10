
@extends('layouts.master')

@section('title','MBXD ICT')

@section('content')

<section class="blog_detail mt-88">
<!-- <div class="isotope-nav mb-4">
                    <ul>
                        <li class="nav-item btn btn-default filter-button active" data-filter="*"><a href="{{route('blog')}}">All</a></li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".humour"><a href="{{route('blog')}}">Humour</a></li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".infographics"><a href="{{route('blog')}}">Infographics</a></li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".riddle"><a href="{{route('blog')}}">Riddle</a></li>
                        <li class="nav-item btn btn-default filter-button" data-filter=".technology"><a href="{{route('blog')}}">Technology</a></li>
                    </ul>
                </div> -->
                <h1>{{$blog->title}}</h1>
    <h3 class="text-left mb-3">{{$blog->sub_title}}</h3>
    <p>
        <img src="{{asset('public').$blog->file_path}}" width="100%" alt="dont-underestimate-the-knowledge-of-kittu">
    </p>
    <p class="mt-3">
        {!! $blog->content !!} 
    </p>
      
   
    <p>
       
        <div class="addthis_inline_share_toolbox"></div>
    </p>
</section>
<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6041d4e175e2520d"></script>
<!--====== CONTACT US PART START ======-->
<section id="contact" class="contact_sec">
    @include('common.contact-us')
</section>
@endsection