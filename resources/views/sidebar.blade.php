<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/bower_components/admin-lte/dist/img/avatar.png") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><span>Dashboard</span></a></li>
            <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-share"></i> <span>Outlet</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/outlet') }}"><i class="fa fa-list"></i> See all</a></li>
                    <li><a href="{{ url('/outlet/create') }}"><i class="fa fa-plus"></i> New</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-share"></i> <span>Showing</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/showings') }}"><i class="fa fa-list"></i> See all</a></li>
                    <li><a href="{{ url('/showings/create') }}"><i class="fa fa-plus"></i> New</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>