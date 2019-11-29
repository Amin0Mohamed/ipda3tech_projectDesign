<!-- ************* satrt nav*****************-->
<nav class="navbar bg-light navbar-light fixed-top" id="nav">
    <button class="navbar-toggler icon-color collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <img src="{{ url('/')}}/productimages/{{$settings->header_logo }}" width="150"  alt="">
    <div class="navbar-collapse collapse" id="navbarsExample01" style="">
        <ul class="navbar-nav mr-auto align-items-flex-end">
            <li class="nav-item active">
                <a class="nav-link hvr-rotate " href="{{url('/')}}">الرئيسية <span class="sr-only">(current)</span></a>
            </li>
            @if(\Request::is('/'))
            <li class="nav-item">
                <a class="nav-link hvr-rotate" href="#intro">خدماتنا</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link hvr-rotate " href="{{url('/our_work')}}">أعمالنا</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link hvr-rotate " href="{{url('/article')}}">المقالات</a>
            </li>
        </ul>
    </div>
</nav>
<!-- ************* end nav*****************-->
