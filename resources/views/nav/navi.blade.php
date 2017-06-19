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
                        <a href="javascript:;" data-toggle="collapse" data-target="#Address"><i class="fa fa-fw fa-barcode"></i> Address <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="Address" class="collapse nav nav-second-level">
                                <li>
                                    <a href="javascript:;" data-toggle="collapse" data-target="#Provinces"><i class="fa fa-fw fa-barcode"></i> Province <i class="fa fa-fw fa-caret-down"></i></a>
                                    <ul id="Provinces" class="collapse nav nav-second-level">
                                        <li>
                                            <a href="{{ route('provinces.index')}}">All Province</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('provinces.create')}}">Create New Province</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" data-toggle="collapse" data-target="#Districts"><i class="fa fa-fw fa-barcode"></i> District <i class="fa fa-fw fa-caret-down"></i></a>
                                    <ul id="Districts" class="collapse nav nav-second-level">
                                        <li>
                                            <a href="{{ route('districts.index')}}">All District</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('districts.create')}}">Create New District</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" data-toggle="collapse" data-target="#Communes"><i class="fa fa-fw fa-barcode"></i> Commune <i class="fa fa-fw fa-caret-down"></i></a>
                                    <ul id="Communes" class="collapse nav nav-second-level">
                                        <li>
                                            <a href="{{ route('communes.index')}}">All Communes</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('communes.create')}}">Create New Commune</a>
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
                                <!-- <li>
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
                            <a href="javascript:;" data-toggle="collapse" data-target="#Usages"><i class="fa fa-fw fa-barcode"></i> Usages <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="Usages" class="collapse nav nav-second-level">
                                <li>
                                    <a href="{{ route('usages.index')}}">All Usages</a>
                                </li>
                                <li>
                                    <a href="{{ route('usages.create')}}">Create New Usages</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#Invoices"><i class="fa fa-fw fa-barcode"></i> Invoice <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="Invoices" class="collapse nav nav-second-level">
                                <li>
                                    <a href="{{ route('invoices.index')}}">All Invoices</a>
                                </li>
                                <li>
                                    <a href="{{ route('invoices.create')}}">Create New Invoices</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->