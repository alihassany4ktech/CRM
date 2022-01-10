 @php

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        {
          $link = "https";
        }
        else
        {
          $link = "http";

          // Here append the common URL characters.
          $link .= "://";

          // Append the host(domain name, ip) to the URL.
          $link .= $_SERVER['HTTP_HOST'];

          // Append the requested resource location to the URL
          $link .= $_SERVER['REQUEST_URI'];
        }

    @endphp
 <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url({{asset('assets/images/background/user-info.jpg')}}) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img">
                          
                         @if (Auth::guard('admin')->user()->image == '0')
                            <img src="{{asset('assets/images/users/profile.png')}}" alt="user" /> 
                        @else
                            <img src="{{asset(Auth::guard('admin')->user()->image)}}" width="50" height="50" alt="userp">
                        @endif
                        
                        </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{Auth::guard('admin')->user()->name}}</a>
                        <div class="dropdown-menu animated flipInY"> <a href="{{route('admin.profile')}}" class="dropdown-item"><i class="ti-user"></i> My Profile</a> <a href="#" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a> <a href="#" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                            <div class="dropdown-divider"></div> <a href="#" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                            <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>
                         </div>
                    </div>
                </div>
                <!-- End User profile text-->
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        {{-- <li class="{{ $link == route('admin.dashboard') ? 'active':'' }}"> <a class="" href="{{route('admin.dashboard')}}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard </span></a> --}}
        
                        </li>
                          <li class="{{ $link == route('admin.dashboard') || $link == route('admin.client.dashboard') ? 'active':'' }}"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboards</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="{{ $link == route('admin.dashboard') ? 'active':'' }}" href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                <li><a href="#"><i class="fa fa-clock" aria-hidden="true"></i> Project Dashboard</a></li>
                                <li><a class="{{ $link == route('admin.client.dashboard') ? 'active':'' }}" href="{{route('admin.client.dashboard')}}">Client Dashboard</a></li>
                                <li><a href="#"><i class="fa fa-clock" aria-hidden="true"></i> HR Dashboard</a></li>
                                <li><a href="#"><i class="fa fa-clock" aria-hidden="true"></i> Ticket Dashboard</a></li>
                                <li><a href="#"><i class="fa fa-clock" aria-hidden="true"></i> Finanace Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="{{ $link == route('admin.clients') || $link == route('admin.roles_permissions') || $link == route('admin.lead.kanbanBoard') || $link == route('admin.create.lead')  ||$link == route('admin.leads')||$link == route('admin.permissions') ||$link == route('admin.create.client') || $link == route('admin.create.role_permission') ||$link == route('admin.create.permission') ? 'active':'' }}"> 
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Customers</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.clients')}}" class="{{ $link == route('admin.clients') ||$link == route('admin.create.client') ? 'active':'' }}">Clients</a></li>
                                <li><a href="{{route('admin.leads')}}" class="{{$link == route('admin.leads') || $link == route('admin.lead.kanbanBoard')  || $link == route('admin.create.lead') ? 'active':''}}">Leads</a></li>
                                <li><a href="{{route('admin.roles_permissions')}}" class="{{ $link == route('admin.roles_permissions') ||$link == route('admin.create.role_permission') ? 'active':'' }}">Roles</a></li>
                                <li><a href="{{route('admin.permissions')}}" class="{{ $link == route('admin.permissions') || $link == route('admin.create.permission') ? 'active':'' }}">Permissions</a></li>
                            </ul>
                        </li>
                        <li class="{{$link == route('admin.employees')||$link == route('admin.designations')|| $link == route('admin.departments')||$link == route('admin.create.employee')  ? 'active':'' }}"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">HR</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.employees') }}" class="{{$link == route('admin.employees')  ||$link == route('admin.create.employee')? 'active':'' }}">Employee List</a></li>
                                <li><a href="{{route('admin.departments')}}" class="{{$link == route('admin.departments')? 'active':'' }}">Department</a></li>
                                <li><a href="{{route('admin.designations')}}">Designation</a></li>
                                <li><a href="#"><i class="fa fa-clock" aria-hidden="true"></i> Attendance</a></li>
                                <li><a href="{{route('admin.holiday.index')}}" class="{{$link == route('admin.holiday.index')? 'active':'' }}"><i class="fa fa-clock" aria-hidden="true"></i> Holiday</a></li>
                                <li><a href="#"><i class="fa fa-clock" aria-hidden="true"></i> Leaves</a></li>
                            </ul>
                        </li>
                        <li  class="{{$link == route('admin.projects')||$link == route('admin.tasks')|| $link == route('admin.contracts')||$link == route('admin.task.create') || $link == route('admin.project.create')  ? 'active':'' }}"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hide-menu">Work</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.contracts')}}" class="{{$link == route('admin.contracts') ? 'active':''}}">Contracts</a></li>
                                <li><a href="{{route('admin.projects')}}"  class="{{$link == route('admin.projects') || $link == route('admin.project.create') ? 'active':'' }}">Projects</a></li>
                                <li><a href="{{route('admin.tasks')}}" class="{{$link == route('admin.tasks') ||$link == route('admin.task.create') ? 'active' : ''}}">Tasks</a></li>
                                <li><a href="#">Task Board</a></li>
                                <li><a href="#">Task Calender</a></li>
                                <li><a href="#">Time Logs</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Fainance</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="ui-cards.html">Cards</a></li>
                                <li><a href="ui-user-card.html">User Cards</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                            
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Forms</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.html">Basic Forms</a></li>
                                <li><a href="form-layout.html">Form Layouts</a></li>
                               
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tables</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="table-basic.html">Basic Tables</a></li>
                               
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Widgets</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="widget-apps.html">Widget Apps</a></li>
                           
                            </ul>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">EXTRA COMPONENTS</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Page Layout</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="layout-single-column.html">1 Column</a></li>
                               
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Sample Pages</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="starter-kit.html">Starter Kit</a></li>
                                <li><a href="pages-blank.html">Blank page</a></li>
                                <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success">6</span></a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-login.html">Login 1</a></li>
                               
                                    </ul>
                                </li>
                                <li><a href="pages-profile.html">Profile page</a></li>
                                <li><a href="pages-animation.html">Animation</a></li>
                                <li><a href="#" class="has-arrow">Error Pages</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="pages-error-400.html">400</a></li>
                                      
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Charts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                         
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-brush"></i><span class="hide-menu">Icons</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                            
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Maps</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="map-google.html">Google Maps</a></li>
                                <li><a href="map-vector.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">item 1.1</a></li>
                                <li><a href="#">item 1.2</a></li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#">item 1.3.1</a></li>
                                       
                                    </ul>
                                </li>
                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
            <!-- Bottom points-->
            <div class="sidebar-footer">
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Settings"><i class="ti-settings"></i></a>
                <!-- item--><a href="#" class="link" data-toggle="tooltip" title="Email"><i class="mdi mdi-gmail"></i></a>
                <!-- item--><a href="{{ route('admin.logout') }}" data-toggle="tooltip" title="Logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="mdi mdi-power"></i></a>
                            <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>

            <!-- End Bottom points-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->