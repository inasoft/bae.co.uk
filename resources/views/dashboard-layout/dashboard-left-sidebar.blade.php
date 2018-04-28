<!-- Left side column. contains the logo and sidebar -->

  <aside class="main-sidebar" style="background: url(../dashboard_theme/dist/img/6.jpg) center center / cover no-repeat fixed;">

    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">

      <!-- Sidebar user panel -->

      <div class="user-panel">

        <div class="pull-left image">

       <img src="{{asset(Auth::user()->profile_image)}}" class="img-circle" alt="User Image">

        </div>

        <div class="pull-left info">

          <p>{!! Auth::user()->name!!}</p>

          <a href="#"><i class="fa fa-circle text-success"></i> User Id: {!! Auth::user()->id!!}</a>

        </div>

      </div>

      <!-- search form -->

      <form action="/search-order-id" method="get" class="sidebar-form">
      {{csrf_field()}}
        <div class="input-group">

          <input type="text" name="serach_orderid_student" class="form-control" placeholder="Order id to search">

              <span class="input-group-btn">

                <button type="submit" class="btn btn-flat"><i class="fa fa-search"></i>

                </button>

              </span>

        </div>

      </form>

      <!-- /.search form -->

      <!-- sidebar menu: : style can be found in sidebar.less -->

      <ul class="sidebar-menu">


        <li class="active treeview">

          <a href="<?= URL::to('/users/dashboard') ?>">

            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <!-- <ul class="treeview-menu">

            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>

            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>

          </ul> -->

        </li>

        <!-- <li class="treeview">

          <a href="#">

            <i class="fa fa-files-o"></i>

            <span>Layout Options</span>

            <span class="pull-right-container">

              <span class="label label-primary pull-right">4</span>

            </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>

            <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>

            <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>

            <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>

          </ul>

        </li>

        <li>

          <a href="pages/widgets.html">

            <i class="fa fa-th"></i> <span>Widgets</span>

            <span class="pull-right-container">

              <small class="label pull-right bg-green">new</small>

            </span>

          </a>

        </li> -->

        <!-- <li class="treeview">

          <a href="#">

            <i class="fa fa-pie-chart"></i>

            <span>Charts</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>

            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>

            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>

            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>

          </ul>

        </li>

        <li class="treeview">

          <a href="#">

            <i class="fa fa-laptop"></i>

            <span>UI Elements</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>

            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>

            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>

            <li><a href="pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>

            <li><a href="pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>

            <li><a href="pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>

          </ul>

        </li>

   -->      <li class="treeview">

          <a href="<?= URL::to('/add-assignment') ?>">

            <i class="fa fa-file-text"></i> <span>Add Assignments</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <!-- <ul class="treeview-menu">

            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>

            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>

            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>

          </ul> -->

        </li>

        <li class="treeview">

          <a href="<?= URL::to('/my-assignment') ?>">

            <i class="fa fa-table"></i> <span>Assignments</span>

            <span class="pull-right-container">

              <!-- <i class="fa fa-angle-left pull-right"></i> -->

              <small class="label pull-right bg-blue">{{$global_count_of_assignment}}</small>

            </span>

          </a>

          <!-- <ul class="treeview-menu">

            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>

            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>

          </ul> -->

        </li>

        <li>

          <a href="<?= URL::to('/my-wallet') ?>">

            <i class="fa fa-money"></i> <span>Wallet</span>

            <span class="pull-right-container">

              <small class="label pull-right bg-red">{{$global_wallet_amount}}</small>

              <!-- <small class="label pull-right bg-blue">17</small> -->

            </span>

          </a>

        </li>

        <li>

           <a href="<?= URL::to('/my-referral') ?>">

            <i class="fa fa-users"></i> <span>Refer & Earn</span>

            <span class="pull-right-container">

              <small class="label pull-right bg-yellow">{{$global_referral}}</small>

              <!-- <small class="label pull-right bg-green">16</small>

              <small class="label pull-right bg-red">5</small> -->

            </span>

          </a>

        </li>

        <li>

           <a href="<?= URL::to('/my-orders') ?>">

            <i class="fa fa-shopping-bag"></i> <span>My Orders</span>

            <span class="pull-right-container">

              <small class="label pull-right bg-yellow">{{$global_order_count}}</small>

              <!-- <small class="label pull-right bg-green">16</small>

              <small class="label pull-right bg-red">5</small> -->

            </span>

          </a>

        </li>
        <li>

           <a href="<?= URL::to('/my-chat') ?>" target="_blank">

            <i class="fa fa-users"></i> <span>Chat with Admin</span>

            <span class="pull-right-container">

              

              <!-- <small class="label pull-right bg-green">16</small>

              <small class="label pull-right bg-red">5</small> -->

            </span>

          </a>

        </li>

        <!-- <li class="treeview">

          <a href="#">

            <i class="fa fa-folder"></i> <span>Examples</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>

            <li><a href="pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>

            <li><a href="pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>

            <li><a href="pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>

            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>

            <li><a href="pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>

            <li><a href="pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>

            <li><a href="pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>

            <li><a href="pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>

          </ul>

        </li> -->

        <!-- <li class="treeview">

          <a href="#">

            <i class="fa fa-share"></i> <span>Multilevel</span>

            <span class="pull-right-container">

              <i class="fa fa-angle-left pull-right"></i>

            </span>

          </a>

          <ul class="treeview-menu">

            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>

            <li>

              <a href="#"><i class="fa fa-circle-o"></i> Level One

                <span class="pull-right-container">

                  <i class="fa fa-angle-left pull-right"></i>

                </span>

              </a>

              <ul class="treeview-menu">

                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>

                <li>

                  <a href="#"><i class="fa fa-circle-o"></i> Level Two

                    <span class="pull-right-container">

                      <i class="fa fa-angle-left pull-right"></i>

                    </span>

                  </a>

                  <ul class="treeview-menu">

                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>

                    <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>

                  </ul>

                </li>

              </ul>

            </li>

            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>

          </ul>

        </li>

        <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>-->

        <li class="header">Others</li>

        <li><a href="<?= URL::to('/my-profile') ?>"><i class="fa fa-circle-o text-red"></i> <span>Profile</span></a></li>

        <li><a href="<?= URL::to('/users/logout') ?>"><i class="fa fa-circle-o text-yellow"></i> <span>Logout</span></a></li>

        <!-- <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->

      </ul>

    </section>

    <!-- /.sidebar -->

  </aside>

