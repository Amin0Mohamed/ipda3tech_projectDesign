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
                            <form action="{{ route('dashboard.services.store') }}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>@lang('site.title')</label>
                                    <input type="text" name="title" class="form-control" value="{{ old('title') }}" autocomplete="on">
                                </div>

                                <div class="form-group">
                                    <label>@lang('site.content')</label>
                                    <input type="text" name="content" class="form-control" value="{{ old('content') }}" autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.image')</label>
                                    <input type="file" name="image" class="form-control" value="{{ old('image') }}" autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.slug')</label>
                                    <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" autocomplete="on">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.is_active')</label>
                                    <input type="number" name="is_active" class="form-control" value="{{ old('is_active') }}" autocomplete="on">
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
