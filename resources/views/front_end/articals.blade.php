<!doctype html>
<html lang="en">
@include('front_end.head.head_index')


<body onload="load()">
<!-- ************* satrt nav*****************-->
@include('front_end.header')
<!-- ************* end nav*****************-->
<section id="microsoft" style="margin-top: 75px;padding: 20px">
    <h2><span>   المقالات </span></h2>
    <div class="bgi">
        <div class="container">
              <div class="row fadeInLeft wow">
                  @foreach($posts as $post)
                 <div class="col-sm-6">
                    <div class="contain">
                        <div class="cont_img">
                            <img src="{{url('/')}}/productimages/{{$post->image}}" alt="ssss" />
                        </div>
                        <div class="cont_text">
                            <p>{{$post->content}}</p>
                        </div>
                        <div class="view">
                            <p><i class="fa fa-eye" aria-hidden="true"></i><span>{{$post->views}}</span></p>
                            <p><button onclick="window.location='{{ url('all_information',['post_id'=>$post->id]) }}'" class="btn btn-success">اقراء الان</button></p>                    </div>
                    </div>
                </div>
                  @endforeach
              </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center">
                        {{$posts->links()}}
                    </div>
                </div>
            </div>

        </div>
{{--        <nav aria-label="Page navigation example">--}}
{{--            <ul class="pagination" style="justify-content: center">--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="#" aria-label="Previous">--}}
{{--                        <span aria-hidden="true">&laquo;</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                @php--}}
{{--                    $count=1;--}}
{{--                @endphp--}}
{{--                @foreach($posts as $post)--}}
{{--                    <li class="page-item" style="text-align: center"><a class="page-link" href="#">{{$count}}</a></li>--}}
{{--                    @php--}}
{{--                        $count++;--}}
{{--                    @endphp--}}
{{--                @endforeach--}}
{{--                <li class="page-item">--}}
{{--                    <a class="page-link" href="#" aria-label="Next">--}}
{{--                        <span aria-hidden="true">&raquo;</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}

    </div>
</section>
<!--****************on loading***********************-->
<div class="loading d-flex justify-content align-items" id="load">
    <div class="loader"></div>
</div>
@include('front_end.footer')

{{--**************scripts link*****************--}}
@include('front_end.script.script_articals')
</body>
</html>

