@extends('layouts.dashbord.app')
@section('content')
        <div class="container">
            <section class="content-header">
                <h3  class="box-title" style="width: 50%;text-align: center; margin: 20px auto;">
                    @lang('site.projects')
                </h3>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" name="search" class="form-control" />
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-secondary">@lang('site.search')</button>
                            <a href="{{route('dashboard.projects.create')}}" class="btn btn-primary add_btn">
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
                                        <th>@lang('site.title')</th>
                                        <th>@lang('site.content')</th>
                                        <th>@lang('site.image')</th>
                                        <th>@lang('site.cover_image')</th>
                                        <th>@lang('site.slug')</th>
                                    </tr>
                                    </thead>
                                    @foreach($projects as $project)
                                        <tbody>
                                        <tr>
                                            <td>{{$project->title}} </td>
                                            <td>{{$project->content}}</td>
                                            <td>
                                                <img style="display: inline" width="50px" height="50px"  src="{{ url('/') }}/productimages/{{$project->image}}" alt="error">
                                            </td>
                                            <td>
                                                <img style="display: inline" width="50px" height="50px"  src="{{ url('/') }}/productimages/{{$project->cover_image}}" alt="error">
                                            </td>
                                            <td>{{$project->slug}}</td>
                                            <td>
                                                <button onclick="window.location='{{route('dashboard.projects.edit',['id'=> $project->id])}}'" class="btn btn-info">@lang('site.edit')</button>
                                            </td>
                                            <td>
                                                <form action="{{route('dashboard.projects.destroy',[$project->id])}}" method="post" style="display: inline-block">
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
