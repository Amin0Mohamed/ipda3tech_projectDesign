

<!doctype html>
<html lang="en">
@include('front_end.head.head_our_works')
<body onload="load()">
<!-- ************* satrt nav*****************-->
@include('front_end.header')
<!-- ************* end nav*****************-->

<section id="our_work" style="padding-top: 10px">
    <h2><span>  بعض اعمالنا </span></h2>
    <div class="bgi">
        <div class="container" >
            <div class="row" >
               @foreach($our_workes as $our_worke)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="contain">
                        <div class="cont_img">
                            <img src="{{url('/')}}/productimages/{{$our_worke->image}}" alt="ssss" />
                        </div>
                        <p><a href="{{url('product_details',['product_id'=>$our_worke->id])}}">{{$our_worke->title}}</a></p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center">
                        {{$our_workes->links()}}
                    </div>
                </div>
            </div>
{{--            <nav aria-label="Page navigation example">--}}
{{--                <ul class="pagination">--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="#" aria-label="Previous">--}}
{{--                            <span aria-hidden="true">&laquo;</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    @php--}}
{{--                        $count=1;--}}
{{--                    @endphp--}}
{{--                    @foreach($our_workes as $our_worke)--}}
{{--                    <li class="page-item"><a class="page-link" href="#">{{$count}}</a></li>--}}
{{--                        @php--}}
{{--                            $count++;--}}
{{--                        @endphp--}}
{{--                    @endforeach--}}
{{--                    <li class="page-item">--}}
{{--                        <a class="page-link" href="#" aria-label="Next">--}}
{{--                            <span aria-hidden="true">&raquo;</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
        </div>
    </div>
</section>
<div class="loading d-flex justify-content align-items" id="load">
    <div class="loader"></div>
</div>
@include('front_end.footer')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
@include('front_end.script.script_our_works')

</body>
