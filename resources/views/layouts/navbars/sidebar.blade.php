<div class="sidebar" data-color="azure" data-background-color="black"
    data-image="{{ asset('material') }}/img/background_sidebar.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="{{ route('home') }}" class="simple-text logo-normal">
            {{ __(config('app.name')) }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Inicio') }}</p>
                </a>
            </li>
            @if (auth()->user()->hasRole('Root') || auth()->user()->hasRole('Admin'))
            {{-- Inicio items administrativos --}}
            <li class="nav-item {{ $activePage == 'users' || $activePage == 'roles' ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#administration" aria-expanded="false">
                    <i class="material-icons">tune</i>
                    <p>{{ __('Administration') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $activePage == 'users' || $activePage == 'roles' ? ' show' : 'hide' }}"
                    id="administration">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <i class="material-icons">settings_accessibility</i>
                                <p>{{ __('Users Management') }}</p>
                            </a>
                        </li>
                        <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('roles.index') }}">
                                <i class="material-icons">admin_panel_settings</i>
                                <p>{{ __('Roles') }}</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Fin items administrativos --}}
            @endif

            {{-- Item logout --}}
            <li class="nav-item active-pro">
                <a class="nav-link text-white bg-purple" href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="material-icons text-white">logout</i>
                    <p>{{ __('Log out') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
