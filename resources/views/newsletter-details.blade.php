
@extends('layouts.master')

@section('title','MBXD ICT')

@section('content')

<section class="blog_detail mt-88">
                <h1>{{$newsletter->title}}</h1>
    <h3 class="text-left mb-3">{{$newsletter->sub_title}}</h3>
    <p>
        <img src="{{asset('public').$newsletter->file_path}}" width="100%" alt="dont-underestimate-the-knowledge-of-kittu">
    </p>
    <p class="mt-3">
        {!! $newsletter->content !!} 
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