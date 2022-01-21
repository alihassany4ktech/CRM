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
                        <li class="{{ $link == route('admin.clients') || $link == route('admin.lead.kanbanBoard') || $link == route('admin.create.lead')  ||$link == route('admin.leads') ||$link == route('admin.create.client')  ? 'active':'' }}"> 
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span class="hide-menu">Customers</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.clients')}}" class="{{ $link == route('admin.clients') ||$link == route('admin.create.client') ? 'active':'' }}">Clients</a></li>
                                <li><a href="{{route('admin.leads')}}" class="{{$link == route('admin.leads') || $link == route('admin.lead.kanbanBoard')  || $link == route('admin.create.lead') ? 'active':''}}">Leads</a></li>
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
                        <li class="{{$link == route('admin.roles_permissions')? 'active':'' }}"><a class="waves-effect waves-dark" href="{{route('admin.roles_permissions')}}" aria-expanded="false"><i class="mdi mdi-lock" style="font-size: 20px" aria-hidden="true"></i><span class="hide-menu">Roles & Permissions</span></a></li>

                        <li  class="{{$link == route('admin.projects')|| $link == route('admin.task-board') || $link == route('admin.task.kanbanBoard') |$link == route('admin.tasks')|| $link == route('admin.contracts')||$link == route('admin.task.create') || $link == route('admin.project.create')  ? 'active':'' }}"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hide-menu">Work</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.contracts')}}" class="{{$link == route('admin.contracts') ? 'active':''}}">Contracts</a></li>
                                <li><a href="{{route('admin.projects')}}"  class="{{$link == route('admin.projects') || $link == route('admin.project.create') ? 'active':'' }}">Projects</a></li>
                                <li><a href="{{route('admin.tasks')}}" class="{{$link == route('admin.tasks')|| $link == route('admin.task.kanbanBoard') ||$link == route('admin.task.create') ? 'active' : ''}}">Tasks</a></li>
                                <li><a href="{{route('admin.task-board')}}" class="{{$link == route('admin.task-board') ? 'active':''}}">Task Board</a></li>
                                <li><a href="#">Task Calender</a></li>
                                <li><a href="#">Time Logs</a></li>
                            </ul>
                        </li>
                        <li class="{{$link == route('admin.expenses') || $link == route('admin.expense.create') ? 'active':'' }}"> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-money-bill-alt" style="font-size: 17px"></i><span class="hide-menu">Fainance</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{route('admin.expenses')}}" class="{{$link == route('admin.expenses')|| $link == route('admin.expense.create') ? 'active':'' }}">Expenses</a></li>
                            </ul>
                        </li>
                        <li class="{{$link == route('admin.products') || $link == route('admin.product.create') ? 'active':'' }}"> <a class="waves-effect waves-dark" href="{{route('admin.products')}}" aria-expanded="false"><i class="mdi mdi-cart" aria-hidden="true"></i><span class="hide-menu">Products</span></a></li>
                        <li class="{{$link == route('admin.tickets') || $link==route('admin.ticket.types') || $link==route('admin.ticket.channels') || $link==route('admin.ticket.agents') || $link == route('admin.ticket.create') ? 'active':'' }}"> <a class="waves-effect waves-dark" href="{{route('admin.tickets')}}" aria-expanded="false"><i class="mdi mdi-ticket" aria-hidden="true"></i><span class="hide-menu">Tickets</span></a></li>
                        <li class="{{$link == route('admin.notice-boards') || $link==route('admin.create.notice-board') ? 'active':'' }}"> <a class="waves-effect waves-dark" href="{{route('admin.notice-boards')}}" aria-expanded="false"><i class="mdi mdi-clipboard" aria-hidden="true"></i><span class="hide-menu">Notice Board</span></a></li>
            
                        <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-av-timer"></i><span class="hide-menu">Reports</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="form-basic.html">Task Report</a></li>
                                <li><a href="form-layout.html">Time Log Report</a></li>
                                <li><a href="form-layout.html">Finance Report</a></li>
                                <li><a href="form-layout.html">Income Vs Expense Report</a></li>
                                <li><a href="form-layout.html">Leave Report</a></li>
                                <li><a href="form-layout.html">Attendance Report</a></li>
                            </ul>
                        </li>
                        <li class="{{$link == route('admin.settings') ? 'active':'' }}"><a class="waves-effect waves-dark" href="{{route('admin.settings')}}"  aria-expanded="false"><i class="ti-settings" style="font-size: 18px" aria-hidden="true"></i><span class="hide-menu">Settings</span></a></li>
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