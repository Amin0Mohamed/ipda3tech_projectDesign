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

                    <form action="{{ route('dashboard.users.update', [$user->id])}}" method="post" enctype="multipart/form-data">
                        {{method_field('PUT')}}
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>@lang('site.name')</label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.email')</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.email_verfied_At')</label>
                            <input type="email" name="email_verfied_At" class="form-control" value="{{$user->email_verified_at }}">
                        </div>
                        <div class="form-group">
                            <label>@lang('site.password')</label>
                            <input type="password" name="password" class="form-control" value="{{$user->password}}">
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
