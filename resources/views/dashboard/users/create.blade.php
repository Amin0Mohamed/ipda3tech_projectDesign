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
                            <form action="{{ route('dashboard.users.store') }}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>@lang('site.name')</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                </div>

                                <div class="form-group">
                                    <label>@lang('site.email')</label>
                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.email_verfied_At')</label>
                                    <input type="email" name="email_verfied_At" class="form-control" value="{{ old('email_verfied_At') }}">
                                </div>
                                <div class="form-group">
                                    <label>@lang('site.password')</label>
                                    <input type="password" name="password" class="form-control" value="{{ old('password') }}">
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
