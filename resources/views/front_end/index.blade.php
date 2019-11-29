<!doctype html>
<html lang="en">
@include('front_end.head.head_index')


<body onload="load()">
<!-- ************* satrt nav*****************-->
@include('front_end.header')
<!-- ************* end nav*****************-->
<!-- ************* main*****************-->
<section id="main" >
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-7">
                <p class="fadeInLeft wow">{{$setting->slogan}}</p>
            </div>
            <div class="col-sm-6 col-md-5">
                <div class="con_img">
                    <img src="{{ url('/')}}/productimages/{{$setting->intro_image}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ************* من نحن*****************-->
<section id="know" >
    <div class="container">
        <h2><span>{{ $pages->title }}</span></h2>
        <div class="row">
            <div class="col-sm-6 fadeInLeft wow">
                <div class="cont_text">
                    <p>{{ $pages->content }}</p>
                </div>
            </div>
            <div class="col-sm-6 fadeInRight wow">
                <img src="{{ url('/')}}/productimages/{{$pages->image}}" alt="">
            </div>
        </div>
    </div>
</section>
<!-- ************* من نحن*****************-->
<!-- ************* itro*****************-->
<section id="intro" style="padding-top: 10px">
    <h2><span>ما نقدمه لكم </span></h2>
    <div class="bgi">
        <div class="container" >
            <div class="single-item fadeInLeft wow">
                @foreach($services as $service)
                <div class="eachsliderimage">
                    <div class="contain">
                        <div class="cont_img">
                            <img src="{{url('/')}}/productimages/{{$service->image}}" alt="ssss" />
                        </div>
                        <h3> {{$service->title}}</h3>
                        <p>{{$service->content}}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="text-center">
                <i class="fa fa-arrow-left prev"></i>
                <i class="fa fa-arrow-right next"></i>
            </div>
        </div>
    </div>
</section>

<!-- ************* our_work*****************-->
<section id="our_work" style="padding-top: 10px">
    <h2><span>  بعض اعمالنا </span></h2>
    <div class="bgi">
        <div class="container" >
            <div class="row fadeInLeft wow" >
                @foreach($our_workes as $our_worke)
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="contain">
                        <div class="cont_img">
                            <img src="{{url('/')}}/productimages/{{$our_worke->image}}" alt="ssss" />
                        </div>
                        <p><a href="{{url('product_details',['product_id'=>$our_worke->id])}}">{{$our_worke->title}} </a></p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <a href="{{ url('our_work') }}" class="btn">شاهد كل اعمالنا</a>
    </div>
</section>
<!-- ************* intro*****************-->
<!-- ************* posts*****************-->
<section id="microsoft">
    <div class="container">
        <div class="row fadeInLeft wow">
            @foreach($posts as $post)
              <div class="col-sm-6">
                <div class="contain">
                    <div class="cont_img">
                        <img src="{{ url('/')}}/productimages/{{$post->image}}" alt="">
                    </div>
                    <div class="cont_text">
                        <p>{{$post->content}}</p>
                    </div>
                    <div class="view">
                        <p><i class="fa fa-eye" aria-hidden="true"></i><span class="span">{{$post->views}}</span></p>
                        <p><a href="{{ url('all_information',['post_id'=>$post->id]) }}" class="btn btn-success">اقراء الان</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row fadeInLeft wow">
            <div class="col-sm-12">
                <a href="{{url('article')}}" class="btn btn-success text-center">المزيد</a>
            </div>
        </div>
    </div>
</section>
<!-- ************* customer*****************-->
<section id="customer">
    <h2><span>عملاء نفتخر بهم </span></h2>
    <div class="bgi">
        <div class="container">
            <div class="single fadeInLeft wow">
                @foreach($clients as $client)
                <div>
                    <div class="contain">
                        <div class="cont_img">
                            <img src="{{ url('/')}}/productimages/{{$client->image}}" alt="">
                        </div>
                    </div>
                </div>
               @endforeach
            </div>

            <div class="text-center">
                <i class="fa fa-arrow-left pre"></i>
                <i class="fa fa-arrow-right nex"></i>
            </div>
        </div>
    </div>
</section>
<!-- ************* footer*****************-->
<!--**********scroll up***********-->
<i class="fa fa-arrow-circle-up scroll fa-2x" onclick="topFunction()" id="myBtn"></i>
<!--***********scroll up*************-->
<!--**********loading page***********-->
<div class="loading d-flex justify-content align-items" id="load">
    <div class="loader"></div>
</div>
@include('front_end.footer')

{{--**************scripts link*****************--}}
@include('front_end.script.script_index')

</body>
</html>



