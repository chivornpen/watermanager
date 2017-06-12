<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{route('dashbords.index') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Users"><i class="fa fa-fw fa-barcode"></i> User <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Users" class="collapse nav nav-second-level">
                            <li>
                                <a href="{{ route('users.index')}}">All Users</a>
                            </li>
                            <li>
                                <a href="{{route('users.create')}}">Create New User</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Stocks"><i class="fa fa-fw fa-barcode"></i> Stock <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="Stocks" class="collapse nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="javascript:;" data-toggle="collapse" data-target="#test"><i class="fa fa-fw fa-barcode"></i> Product <i class="fa fa-fw fa-caret-down"></i></a>

                                    <ul id="test" class="collapse nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#Staffs"><i class="fa fa-fw fa-barcode"></i> Staffs <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="Staffs" class="collapse nav nav-second-level">
                                <li>
                                    <a href="{{ route('staffs.index')}}">All Staffs</a>
                                </li>
                                <li>
                                    <a href="{{ route('staffs.create')}}">Create New Staffs</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#Customers"><i class="fa fa-fw fa-barcode"></i> Customers <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="Customers" class="collapse nav nav-second-level">
                                <li>
                                    <a href="{{ route('customers.index')}}">All Customers</a>
                                </li>
                                <li>
                                    <a href="{{ route('customers.create')}}">Create New Customers</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#Roles"><i class="fa fa-fw fa-barcode"></i> Roles <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="Roles" class="collapse nav nav-second-level">
                                <li>
                                    <a href="{{ route('roles.index')}}">All Roles</a>
                                </li>
                                <li>
                                    <a href="{{ route('roles.create')}}">Create New Roles</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#Villages"><i class="fa fa-fw fa-barcode"></i> Village <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="Villages" class="collapse nav nav-second-level">
                                <li>
                                    <a href="{{ route('villages.index')}}">All Villages</a>
                                </li>
                                <li>
                                    <a href="{{ route('villages.create')}}">Create New Villages</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->