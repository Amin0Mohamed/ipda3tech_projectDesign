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
                            <form action="{{ route('dashboard.clients.store') }}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>@lang('site.name')</label>
                                    <input type="text" name="name" @error('name') is-invalid @enderror class="form-control" value="{{ old('name') }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>@lang('site.image')</label>
                                    <input type="file" name="image" @error('image') is-invalid @enderror class="form-control" value="{{ old('image') }}">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
{{--                                <select name="user_id" class="form-control">--}}
{{--                                    <option value="">@lang('site.select_admin')</option>--}}
{{--                                    @foreach($users as $user)--}}
{{--                                        <option value="{{$user->id}}">{{ $user->name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
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
