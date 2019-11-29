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


                    <form action="{{ route('dashboard.posts.update', [$post->id])}}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.title')</label>
                            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                        </div>

                        <div class="form-group">
                            <label>@lang('site.content')</label>
                            <input type="text" name="content" class="form-control" value="{{ $post->content }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.image')</label>
                            <input type="file" name="image" class="form-control" value="{{ $post->image }}">
                            <img style="display: inline" width="50px" height="50px"  src="{{ url('/') }}/productimages/{{$post->image}}" alt="error">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.views')</label>
                            <input type="number" name="views" class="form-control" value="{{ $post->views}}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.slug')</label>
                            <input type="text" name="slug" class="form-control" value="{{ $post->slug }}">
                        </div>
                        <input type="hidden" name="user_id" class="form-control" value="{{ Session::get('id') }}">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> @lang('site.edit')</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
