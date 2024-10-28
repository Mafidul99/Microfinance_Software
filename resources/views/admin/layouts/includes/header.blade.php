<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <!-- End Level two -->
            </ul>
            <!-- Right navbar links -->
            <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto ">
                <li class="nav-item">
                    <a href="index3.html" class="btn btn-flat hidden-xs accout_menu"
                    style="border-left: 1px solid #d2d6de; border-right-width: 0;">
                    <strong>Day Book</strong>
                </a>
                </li>
                <li class="nav-item">
                    <a href="index3.html" class="btn btn-flat hidden-xs accout_menu"
                    style="border-left: 1px solid #d2d6de; border-right-width: 0;">
                        <strong>Voucher Entries</strong>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index3.html" class="btn btn-flat hidden-xs accout_menu "
                    style="border-left: 1px solid #d2d6de; border-right-width: 0;">
                        <strong>Payment</strong></a>
                </li>
                <li class="nav-item">
                    <a href="index3.html" class="btn btn-flat hidden-xs accout_menu"
                    style="border-left: 1px solid #d2d6de; border-right-width: 0;">
                        <strong>Receipt</strong></a>
                </li>
                <li class="nav-item">
                    <a href="index3.html" class="btn btn-flat hidden-xs accout_menu"
                        style="border-left: 1px solid #d2d6de; border-right-width: 0;">
                        <strong>Contra</strong></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-flat hidden-xs accout_menu"
                        style="border-left: 1px solid #d2d6de; border-right-width: 0;">
                        <strong>Journal</strong></a>
                </li>
                <li class="dropdown-divider"></li>
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel d-flex pr-2" style="border-left: 1px solid #d2d6de; border-right-width: 0;">
                    <div class="image">
                        <img src="{{ asset('backend/assets/dist/img/user2-160x160.jpg') }}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">
                        {{ Auth::guard('admin')->user()->name }}
                    </a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow"
                        style="left: 0px; right: inherit;">
                        <li><a href="#" class="dropdown-item">Profile</a></li>
                        <li><a href="#" class="dropdown-item">Setting</a></li>

                        <li class="dropdown-divider"></li>
                        <li>
                            <form method="POST" action="{{ route('admin.logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{route('admin.logout')}}"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
</nav>
