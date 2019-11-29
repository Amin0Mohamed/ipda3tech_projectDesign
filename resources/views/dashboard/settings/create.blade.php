@extends('layouts.dashbord.app')
@section('content')

        <section class="content">
            <div class="row">
                <div class="container">
                    <div class="box box-primary">

                        <div class="box-header">
                            <h3  class="box-title" style="width: 50%;text-align: center; margin: 20px auto;">
                                @lang('site.add')
                            </h3>
                        </div><!-- end of box header -->

                        <div class="box-body">
                            <form action="{{ route('dashboard.settings.store') }}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>@lang('site.header_logo')</label>
                                    <input type="file" name="header_logo" class="form-control" value="{{ old('header_logo') }}" autocomplete="on">
                                </div>

                                <div class="form-group">
                                    <label>@lang('site.footer_logo')</label>
                                    <input type="file" name="footer_logo" class="form-control" value="{{ old('footer_logo') }}" autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.slogan')</label>
                                    <input type="text" name="slogan" class="form-control" value="{{ old('slogan') }}" autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.intro_image')</label>
                                    <input type="file" name="intro_image" class="form-control" value="{{ old('intro_image') }}" autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.address')</label>
                                    <input type="text" name="address" class="form-control" value="{{ old('address') }}" autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.fb_link')</label>
                                    <input type="text" name="fb_link" class="form-control" value="{{ old('fb_link') }}" autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.tw_link')</label>
                                    <input type="text" name="tw_link" class="form-control" value="{{ old('tw_link') }}" autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.github_link')</label>
                                    <input type="text" name="github_link" class="form-control" value="{{ old('github_link') }}" autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.whatsupp_number')</label>
                                    <input type="text" name="whatsupp_number" class="form-control" value="{{ old('whatsupp_number') }}" autocomplete="on">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                                </div>
                            </form><!-- end of form -->
                        </div><!-- end of box body -->

                    </div><!-- end of box -->
                </div>
            </div>

        </section><!-- end of content -->

@endsection
