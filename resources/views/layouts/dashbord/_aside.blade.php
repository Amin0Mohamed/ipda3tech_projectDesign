

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-around" style="max-width: 69%;margin: auto;">
            <div class="image" style="width: 40%;height: 100%;padding-left: 0px;">
                <img src="{{asset('img/team1.jpg')}}" class="img-circle elevation-2 w-100 h-100" alt="User Image">
            </div>
            <div class="info" style="width:60%;height: 100%;padding: 5px 0px 5px 3px;">
                @guest
                    <a class="d-block">no login</a>
                @else
                    <a href="{{ route('dashboard.index') }}" class="d-block">{{auth()->user()->name}}</a>
                @endguest

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           @auth
                @if(auth()->user()->hasRole('super_admin'))
                        <li class="nav-item"><a  class="nav-link active text-center text-uppercase font-weight-bold"><p>Admin</p></a></li>
                @elseif(auth()->user()->hasRole('user'))
                        <li class="nav-item"><a  class="nav-link active text-center text-uppercase font-weight-bold"><p>Not Admin</p></a></li>
                @endif
           @endauth
{{--*****************************body of aside********************************************************--}}
        @auth
            @if(auth()->user()->hasRole('super_admin'))
                        {{--*************users***********************--}}
                            <li class="nav-item">
                                <a href="{{ route('dashboard.users.index')}}" class="nav-link">
                                    <i class="fa fa-user"></i>
                                    <p>@lang('site.users')</p>
                                </a>
                            </li>
                        {{--*************settings***********************--}}
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        @lang('site.settings')
                                        <i class="fas fa-angle-left right"></i>
                                        <span class="badge badge-info right">1</span>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('dashboard.settings.index')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>@lang('site.settings')</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
            @endif
                    {{--*************pages***********************--}}
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                @lang('site.pages')
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">7</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('dashboard.clients.index')}}" class="nav-link">
                                    <i class="fa fa-users "></i>
                                    <p>@lang('site.clients')</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.pages.index')}}" class="nav-link">
                                    <i class="fa fa-pager" aria-hidden="true"></i>
                                    <p>@lang('site.pages')</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.photos.index')}}" class="nav-link">
                                    <i class="fa fa-poo-storm" aria-hidden="true"></i>
                                    <p>@lang('site.photos')</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.posts.index')}}" class="nav-link">
                                    <i class="fa fa-poo-storm" aria-hidden="true"></i>
                                    <p>@lang('site.posts')</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.projects.index')}}" class="nav-link">
                                    <i class="fa fa-project-diagram" aria-hidden="true"></i>
                                    <p>@lang('site.projects')</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('dashboard.services.index')}}" class="nav-link">
                                    <i class="fa fa-server" aria-hidden="true"></i>
                                    <p>@lang('site.services')</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
        @endauth
        </nav>
    </div>
</aside>
