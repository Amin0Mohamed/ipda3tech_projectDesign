@extends('layouts.dashbord.app')

@section('content')

    <div class="content-wrapper">


        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3  class="box-title" style="position: relative;top: 20px; width: 50%;text-align: center; margin: 20px auto;">
                        @lang('site.edit')
                    </h3>
                </div><!-- end of box header -->

                <div class="box-body">

{{--                    @include('partials._errors')--}}

                    <form action="{{ route('dashboard.settings.update', [$setting->id])}}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.header_logo')</label>
                            <input type="file" name="header_logo" class="form-control" value="{{ $setting->header_logo }}" autocomplete="on">
                            <img style="display: inline" width="50px" height="50px"  src="{{ url('/') }}/productimages/{{$setting->header_logo}}" alt="error">

                        </div>

                        <div class="form-group">
                            <label>@lang('site.footer_logo')</label>
                            <input type="file" name="footer_logo" class="form-control" value="{{ $setting->footer_logo }}" autocomplete="on">
                            <img style="display: inline" width="50px" height="50px"  src="{{ url('/') }}/productimages/{{$setting->footer_logo}}" alt="error">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.slogan')</label>
                            <input type="text" name="slogan" class="form-control" value="{{ $setting->slogan }}" autocomplete="on">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.intro_image')</label>
                            <input type="file" name="intro_image" class="form-control" value="{{ $setting->intro_image }}" autocomplete="on">
                            <img style="display: inline" width="50px" height="50px"  src="{{ url('/') }}/productimages/{{$setting->intro_image}}" alt="error">

                        </div>
                        <div class="form-group">
                            <label>@lang('site.address')</label>
                            <input type="text" name="address" class="form-control" value="{{ $setting->address }}" autocomplete="on">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.fb_link')</label>
                            <input type="text" name="fb_link" class="form-control" value="{{ $setting->fb_link }}" autocomplete="on">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.tw_link')</label>
                            <input type="text" name="tw_link" class="form-control" value="{{ $setting->tw_link }}" autocomplete="on">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.github_link')</label>
                            <input type="text" name="github_link" class="form-control" value="{{ $setting->github_link }}" autocomplete="on">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.whatsupp_number')</label>
                            <input type="text" name="whatsupp_number" class="form-control" value="{{ $setting->whatsupp_number }}" autocomplete="on">
                        </div>

                       <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
