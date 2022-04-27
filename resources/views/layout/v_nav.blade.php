<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{request()-> is('/') ? 'active' : ''}}"><a href="/"><i class="fa fa-home"></i> <span>Home</span></a></li>
        <li class="{{request()-> is('Pembeli') ? 'active' : ''}}"><a href="/Pembeli"><i class="fa fa-shopping-basket" aria-hidden="true"></i></i> <span>Pembeli</span></a></li>
        <li class="{{request()-> is('Nominal') ? 'active' : ''}}"><a href="/Nominal"><i class="fa fa-money" aria-hidden="true"></i></i> <span>Nominal</span></a></li>
        <li class="{{request()-> is('provider') ? 'active' : ''}}"><a href="/Provider"><i class="fa fa-desktop" aria-hidden="true"></i></i> <span>Provider</span></a></li>
        <li class="{{request()-> is('Customers') ? 'active' : ''}}"><a href="/Customers"><i class="fa fa-group"></i> <span>Customers</span></a></li>
        <li class="treeview">