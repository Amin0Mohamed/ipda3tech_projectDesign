<!doctype html>
<html lang="en">
@include('front_end.head.head_project_details')

<body onload="load()">
<!-- ************* satrt nav*****************-->
@include('front_end.header')
<!-- ************* end nav*****************-->
<section id="project" style="padding-top: 10px;margin-top: 77px">
    <h2><span> {{$all_products->title}} </span></h2>
    <div class="container" >
        <div class="row" >
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <img class="rotateInDownLeft wow" width="100%" height="100%" src="{{url('/')}}/productimages/{{$all_products->cover_image}}" alt="ssss" />
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</section>

<section id="details" style="padding-top: 10px">
    <h2><span> تفاصيل المشروع </span></h2>
    <div class="bgi">
        <div class="container" >
            <div class="row" >
                <div class="col-sm-12">
                       <p>{{$all_products->content}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="take_roll" style="padding-top: 10px">
    <h2><span> خذ لفه </span></h2>
{{--    <div class="bgi">--}}
{{--        <div class="container" >--}}
{{--            <div class="row" >--}}
{{--                <div class="col-sm-12">--}}
{{--                    <div class="i text-center">--}}
{{--                        <i class="fa fa-arrow-left my" id="prev"></i>--}}
{{--                        <i class="fa fa-arrow-right my" id="next"></i>--}}
{{--                    </div>--}}
{{--                    <div class="card-carousel">--}}
{{--                      @foreach($all_products->photos as $photos)--}}
{{--                              <div class="my-card"><img src="{{url('/')}}/{{$photos->url}}.{{$photos->ext}}" width="100%" height="100%"/></div>--}}
{{--                       @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" id="carousel-inner">

                <div class="carousel-item active">
                    <img class="d-block img-fluid img-thumbnail" src="{{url('/')}}/{{$all_products->photos->first()->url}}.{{$all_products->photos->first()->ext}}" width="100%" height="100%"/>
                </div>
            @foreach($all_products->photos as $photos)
                <div class="carousel-item">
                    <img class="d-block img-fluid img-thumbnail " src="{{url('/')}}/{{$photos->url}}.{{$photos->ext}}" width="100%" height="100%"/>
                </div>
            @endforeach

        </div>
          <div class="arrow d-flex justify-content-around">
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
    </div>
    </div>
</section>

<!--**************loading page*************************-->
<div class="loading d-flex justify-content align-items" id="load">
    <div class="loader"></div>
</div>

@include('front_end.footer')
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{--**************scripts link*****************--}}

@include('front_end.script.script_project_details')
</body>
</html>
