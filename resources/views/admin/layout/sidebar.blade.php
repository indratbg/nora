<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! asset('public/admin/dist/img/user2-160x160.jpg') !!}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{ url('/dashboard') }}"><i class="fa fa-circle-o"></i> Dashboard v1</a>
                    </li>
                    <li><a href="{{ url('/dashboard2') }}"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>

            <li><a href="{{ url('admin/list_article') }}"><i class="fa fa-book"></i><span>List Article</span>
                    <span class="label label-primary pull-right">{{ App\Blog::count()}} </span>
                </a>
            </li>

            <li><a href="{{ url('admin/list_products') }}"><i class="fa fa-shopping-cart"></i> <span>List Product</span>
                    <span class="label label-primary pull-right">{{ App\Products::count()}} </span>
                </a>
            </li>
            <li><a href="{{ url('admin/list_category') }}"><i class="fa fa-list"></i><span>Category</span>
                    <span class="label label-primary pull-right">{{ App\Category::count()}} </span>
                </a>
            </li>
            <li><a href="{{ url('admin/slider') }}"><i class="fa fa-image"></i><span>Slider</span> </a>
            </li>

            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i><span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i><span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i><span>Information</span></a></li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>