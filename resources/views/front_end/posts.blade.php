<!doctype html>
<html lang="en">
@include('front_end.head.head_all_information')

  <body onload="load()">
<!-- ************* satrt nav*****************-->
@include('front_end.header')
<!-- ************* end nav*****************-->
    <section id="information">
       <div class="bgi">
         <h2><span> {{$all_posts->title}} </span></h2>
         <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 fadeInUp wow">
                    <div class="contain">
                        <div class="cont_img">
                            <img src="{{ url('/')}}/productimages/{{$all_posts->image}}" alt="">
                        </div>
                        <div class="cont_text">
                            <p>{{$all_posts->content}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
</section>
<!--****************on loading***********************-->
<div class="loading d-flex justify-content align-items" id="load">
    <div class="loader"></div>
</div>
{{--**************footers***********************--}}
@include('front_end.footer')
<!--************script*****************-->
@include('front_end.script.script_all_information')

</body>
</html>
