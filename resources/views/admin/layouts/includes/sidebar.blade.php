<aside class="main-sidebar elevation-3 sidebar-light-success">
    <!-- Brand Logo -->
    <a href="{{route('admin.dashboard')}}" class="brand-link navbar-success text-white">
        <img src="{{ asset('backend/assets/dist/img/Logo/Side_logo.png') }}" alt="main Logo"
            class=" img-circle elevation-4" style="width: 48px">
        <span class="brand-text brandname ">
            {{ config('app.name') }}
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel pt-3 d-flex text-center">
            <div class="info">
                <a href="#" class="d-block ">
                    {{ Auth::guard('admin')->user()->name }}
                </a>
                <p>{{ Auth::guard('admin')->user()->email }}</p>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-compact nav-legacy  nav-child-indent" data-widget="treeview"
                role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('admin.dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-square-plus"></i>
                        <p>
                            Master
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('loanplan.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Loan plan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Mastergroup.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Groups</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Masterstate.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>State</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Masterbank.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bank</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Masterbranch.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Branches</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Masterstaffbranch.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Staff Branch</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Masterbranchcenter.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Branch Center</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('Masterleavemaster.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Leave</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('designation.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Designation</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('mixed.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Miscellaneous</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Software Timing</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('session.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Session</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('profile.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Setting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>SMS Setting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('series.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Series</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-brands fa-intercom"></i>
                        <p>
                            HRM
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employee</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Salary</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Holiday</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employee Transfer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Member Transfer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Update Center Leader</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Print Letter</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Employee Leave</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Attendance</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-location-dot"></i>
                        <p>
                            Area Survey
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-users"></i>
                        <p>
                            Members
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Members</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Member Group</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-regular fa-credit-card"></i>
                        <p>
                            Apply For Loan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Download Loan Form</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Individual Loan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Group Loan</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-list"></i>
                        <p>
                            Disbursement
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Disbursed</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Group Disbursed</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class=" nav-icon fa-solid fa-hand-holding-heart"></i>
                        <p>
                            Loan Summary
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon  fa-regular fa-money-bill-1"></i>
                        <p>
                            EMI Records
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Paid EMIs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Due EMIs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Promise To Pay</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Group EMI Collection</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Old Member Collection</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Member Collection</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-regular fa-circle-check"></i>
                        <p>
                            Approvals
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Salary</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Collection</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Settlement</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-dumpster"></i>
                        <p>
                            Settlements
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Settlement</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Death Member List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-brands fa-creative-commons-sampling"></i>
                        <p>
                            CIBIL
                        </p>
                    </a>
                </li>
                <li class="nav-header">ACCOUNTING</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-regular fa-circle-check"></i>
                    <p>
                        Voucher
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Day Book</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Voucher Entries</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Payment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Receipt</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Contra</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Journal</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Trial Balance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>FY Trial Balance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>FY Voucher Statement</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>FY Opening Balance</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-regular fa-address-book"></i>
                        <p>
                            ACGroup
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-money-bill-trend-up"></i>
                        <p>
                            Profit-Loss
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-book"></i>
                        <p>
                            Ledger
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-book"></i>
                        <p>
                            Branch Ledger
                        </p>
                    </a>
                </li>
                <li class="nav-header">REPORTING</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-file-lines"></i>
                    <p>
                        Reporting
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Loan Report</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Due EMI Reporting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Collection Reporting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Disbursement Reporting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Settlement Reporting</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Member Attendance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Online Payment Reporting</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">RERMISSION</li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa-solid fa-network-wired"></i>
                    <p>
                        Role & Permission
                        <i class="fas fa-angle-left right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Permission</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Role</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown-divider"></li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <a href="{{route('admin.logout')}}" class="nav-link"
                                onclick="event.preventDefault();
                                    this.closest('form').submit();">
                            <i class="nav-icon fa-solid fa-right-from-bracket"></i>
                            {{ __('LOGOUT') }}
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
