<div class="quixnav-scroll">
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
</div>