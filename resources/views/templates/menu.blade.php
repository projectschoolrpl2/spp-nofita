@if ($user->level == 1)
    <ul class="metismenu" id="menu">
        <li class="nav-label first">Main Menu</li>
        
        <li><a class="has-arrow" href="{{ url('/') }}" aria-expanded="false">
            <i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
        </li>

        <li class="nav-label">Manage Data</li>
        <li><a class="has-arrow" href="{{ url('siswa') }}" aria-expanded="false">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i><span class="nav-text">Students</span></a>
        </li>

        <li><a class="has-arrow" href="{{ url('officer') }}" aria-expanded="false">
            <i class="fa fa-user-plus" aria-hidden="true"></i><span class="nav-text">Officers</span></a>
        </li>

        <li><a class="has-arrow" href="{{ url('grade') }}" aria-expanded="false">
            <i class="fa fa-building-o" aria-hidden="true"></i><span class="nav-text">Classes</span></a>
        </li>

        <li><a class="has-arrow" href="{{ url('spp') }}" aria-expanded="false">
            <i class="fa fa-money" aria-hidden="true"></i><span class="nav-text">SPP</span></a>
        </li>
        
        <li class="nav-label">Transactions</li>
        <li><a class="has-arrow" href="{{ url('pembayaran') }}" aria-expanded="false">
            <i class="fa fa-credit-card" aria-hidden="true"></i><span class="nav-text">Payments</span></a>
        </li>

        <li class="nav-label">Histories</li>
        <li><a class="has-arrow" href="{{ url('history') }}" aria-expanded="false">
            <i class="fa fa-line-chart" aria-hidden="true"></i><span class="nav-text">Payment Histories</span></a>
        </li>

        <li class="nav-label">Report</li>
        <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
            <i class="fa fa-print" aria-hidden="true"></i><span class="nav-text">Reports</span></a>
        </li>
    </ul>
@elseif ($user->level == 2)
    <ul class="metismenu" id="menu">
        <li class="nav-label first">Main Menu</li>
        
        <li><a class="has-arrow" href="{{ url('/') }}" aria-expanded="false">
            <i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
        </li>
        
        <li class="nav-label">Transactions</li>
        <li><a class="has-arrow" href="{{ url('pembayaran') }}" aria-expanded="false">
            <i class="fa fa-credit-card" aria-hidden="true"></i><span class="nav-text">Payments</span></a>
        </li>

        <li class="nav-label">Histories</li>
        <li><a class="has-arrow" href="{{ url('history') }}" aria-expanded="false">
            <i class="fa fa-line-chart" aria-hidden="true"></i><span class="nav-text">Payment Histories</span></a>
        </li>

    </ul>
@elseif ($user->level == 3)
    <ul class="metismenu" id="menu">
        <li class="nav-label first">Main Menu</li>
        
        <li><a class="has-arrow" href="{{ url('/') }}" aria-expanded="false">
            <i class="icon icon-single-04"></i><span class="nav-text">Dashboard</span></a>
        </li>

        <li class="nav-label">Histories</li>
        <li><a class="has-arrow" href="{{ url('history') }}" aria-expanded="false">
            <i class="fa fa-line-chart" aria-hidden="true"></i><span class="nav-text">Payment Histories</span></a>
        </li>

    </ul>
@endif