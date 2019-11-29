@extends('layouts.dashbord.app')
@section('content')
        <div class="container">
            <section class="content-header">
                <h3  class="box-title" style="width: 50%;text-align: center; margin: 20px auto;">
                    @lang('site.settings')
                </h3>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" name="search" class="form-control" />
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-secondary">@lang('site.search')</button>
                            <a href="{{route('dashboard.settings.create')}}" class="btn btn-primary add_btn">
                                <i class="fa fa-plus"></i> @lang('site.add')
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content">
                <div class="row">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>@lang('site.header_logo')</th>
                                        <th>@lang('site.footer_logo')</th>
                                        <th>@lang('site.slogan')</th>
                                        <th>@lang('site.intro_image')</th>
                                        <th>@lang('site.address')</th>
                                        <th>@lang('site.fb_link')</th>
                                        <th>@lang('site.tw_link')</th>
                                        <th>@lang('site.github_link')</th>
                                        <th>@lang('site.whatsupp_number')</th>
                                    </tr>
                                    </thead>
                                    @foreach($settings as $setting)
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img style="display: inline" width="50px" height="50px"  src="{{ url('/') }}/productimages/{{$setting->header_logo}}" alt="error">
                                            </td>
                                            <td>
                                                <img style="display: inline" width="50px" height="50px"  src="{{ url('/') }}/productimages/{{$setting->footer_logo}}" alt="error">
                                            </td>
                                            <td>{{$setting->slogan}}</td>
                                            <td>
                                                <img style="display: inline" width="50px" height="50px"  src="{{ url('/') }}/productimages/{{$setting->intro_image}}" alt="error">

                                            </td>
                                            <td>{{$setting->address}}</td>
                                            <td>{{$setting->fb_link}}</td>
                                            <td>{{$setting->tw_link}}</td>
                                            <td>{{$setting->github_link}}</td>
                                            <td>{{$setting->whatsupp_number}}</td>
                                            <td>
                                                <button onclick="window.location='{{route('dashboard.settings.edit',['id'=> $setting->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            </td>
                                            <td>
                                                <form action="{{route('dashboard.settings.destroy',[$setting->id])}}" method="post" style="display: inline-block">
                                                    {{csrf_field()}}
                                                    {{method_field('delete')}}
                                                    <input type="submit"  value="@lang('site.delete')" class="btn btn-danger delete">
                                                </form>
                                            </td>
                                        </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- end of row -->

            </section>
        </div>
@endsection
