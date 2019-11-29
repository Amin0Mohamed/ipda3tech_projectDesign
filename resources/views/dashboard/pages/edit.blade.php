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

                    <form action="{{ route('dashboard.pages.update', [$pages->id])}}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.title')</label>
                            <input type="text" name="title" class="form-control" value="{{ $pages->title}}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.content')</label>
                            <input type="text" name="content" class="form-control" value="{{ $pages->content}}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.image')</label>
                            <input type="file" name="image" class="form-control" value="{{ $pages->image }}">
                            <img style="display: inline" width="50px" height="50px" src="{{ url('/') }}/productimages/{{$pages->image}}" alt="error">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.show_in_menu')</label>
                            <input type="number" name="show_in_menu" class="form-control" value="{{ $pages->show_in_menu }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.slug')</label>
                            <input type="text" name="slug" class="form-control" value="{{ $pages->slug }}">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-edit"></i> @lang('site.edit')</button>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
