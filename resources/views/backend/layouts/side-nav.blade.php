<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-card-dark" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src={{ asset("backend/assets/img/easy-admin.png")}} class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav" >
            <li class="nav-item">
              <a class="nav-link " href="{{ route('admin.home') }}" role="button">
                <i class="fas fa-columns"></i>
                <span class="nav-link-text">{{__('Dashboard.Dashboard')}}</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" onclick="event.preventDefault()" data-toggle="collapse" href="#collapse-12" role="button">
                <i class="fas fa-lock"></i>
                <span class="nav-link-text">{{__('Admin.Access Control')}}</span>
              </a>
              <ul class="collapse" id="collapse-12" style="">
                <li class="nav-item "><a class="nav-link" href="{{ route('role.index') }}"><i class="fas fa-chess-king"></i>{{__('Admin.Roles')}}</a></li>
                <li class="nav-item "><a class="nav-link" href="{{ route('admin-user.index') }}"><i class="fas fa-user-shield"></i>{{__('Admin.Admin Users')}}</a></li>
              </ul>
              </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" onclick="event.preventDefault()" data-toggle="collapse" href="#collapse-15" role="button" aria-expanded="true">
              <i class="fas fa-hammer"></i>
              <span class="nav-link-text">{{__('Admin.Admin aria')}}</span>
            </a>
          </li>
          <ul class="collapse show" id="collapse-15" style="">
            <li class="nav-item "><a class="nav-link" href="{{ route('admin.backup') }}"><i class="fas fa-hdd"></i>{{__('Admin.Backup Manager')}}</a></li>
            </ul>
              {{-- @php
              /* menu query's */
                $allMenuItem = DB::table('menus')->orderBy('order')->get();
                $parentMenuItem = DB::table('menus')->where('parent_id', 0)->orderBy('order')->get();
              @endphp
              @foreach ($parentMenuItem as $parentItem)
              <li class="nav-item">
                @php
                  $hasChild = DB::table('menus')->where('parent_id', $parentItem->id)->get();
                @endphp
                @if (count($hasChild)>0)
                @if (auth('admin')->user()->hasAnyPermission(json_decode($parentItem->permissions)) or auth('admin')->user()->hasRole('super-admin'))
                  <a class="nav-link" onclick="event.preventDefault()" data-toggle="collapse" href="#collapse-{{ $parentItem->id }}" role="button">
                    <i class="{{ $parentItem->icon }}"></i>
                    <span class="nav-link-text">{{ $parentItem->name }}</span>
                  </a>
                @endif
                  <ul class="collapse
                  @foreach ($allMenuItem as $childItem)
                  @if ($parentItem->id == $childItem->parent_id)
                  {{ (request()->is($childItem->uri)) ? 'show' : '' }}
                  @endif
                  @endforeach
                  " id="collapse-{{ $parentItem->id }}">
                    @foreach ($allMenuItem as $childItem)
                        @if ($parentItem->id == $childItem->parent_id)
                        @if (auth('admin')->user()->hasAnyPermission(json_decode($childItem->permissions)) or auth('admin')->user()->hasRole('super-admin'))
                        <li class="nav-item {{ (request()->is($childItem->uri)) ? 'active' : '' }}"><a class="nav-link" href="{{ url($childItem->uri) }}"><i class="{{ $childItem->icon }}"></i>{{ $childItem->name }}</a></li>
                        @endif
                        @endif
                    @endforeach
                  </ul>
                @else
                  @if (auth('admin')->user()->hasAnyPermission(json_decode($parentItem->permissions)) or auth('admin')->user()->hasRole('super-admin'))
                  <a class="nav-link {{ (request()->is($parentItem->uri)) ? 'active' : '' }}" href="{{ url($parentItem->uri) }}" role="button">
                    <i class="{{ $parentItem->icon }}"></i>
                    <span class="nav-link-text">{{ $parentItem->name }}</span>
                  </a>
                  @endif
                @endif
              </li>
              @endforeach --}}
                <li class="nav-item dropdown">
                  <a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fab fa-adversal"></i>
                    {{__('Admin.Language')}}
                  </a>
                  <div class="dropdown-menu  dropdown-menu-right ">
                    <ul class="navbar-nav">
                      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                          <li class="nav-item ml-2">
                              <a rel="alternate" class="nav-link " hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                  {{ $properties['native'] }}
                              </a>
                          </li>
                      @endforeach
                    </ul>

                  </div>

                </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
