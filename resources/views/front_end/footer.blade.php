<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/footer_style.css') }}">
    <style>
        footer .contain .left .media ul li{display: inline-block; margin: 3px; padding: 3px;}
    </style>
</head>
<footer>
    <div class="contain">
        <div class="left">
            <div class="info">
                <div class="cont_text">
                    <span style="font-size: 25px;font-weight: 900">إبداع تك</span>
                    <span>لبرمجه الويب وتطبيقات الموبيل</span>
                </div>
                <div>
                    <img src="{{ url('/')}}/productimages/{{$settings->footer_logo }}" width="150"  alt="">
                </div>
            </div>
            <div class="cont_text">
                <p>{{$settings->address }}</p>
            </div>
            <div class="media">
                <ul>
                    <li><a class="facebook" href="{{$settings->fb_link }}"><i class="fa fa-facebook-f"></i></a></li>
                    <li><a class="twitter" href="{{$settings->tw_link }}"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="github" href="{{$settings->github_link }}"><i class="fa fa-github"></i></a></li>
                    <li><a class="whatsapp" href="{{$settings->whatsupp_number }}"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <img class="" src="{{ asset('assets/images/footer-vec.jpg') }}"  alt="">

        </div>
    </div>
</footer>
