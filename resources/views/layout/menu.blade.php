<ul class="site-menu" data-plugin="menu">
    <li class="site-menu-category">General</li>
    <li class="site-menu-item active">
        
    <a href="{{ route('dashboard') }}">
            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
            <span class="site-menu-title">Dashboard</span>
        </a>
        
    </li>
    
    <li class="site-menu-item">
        
        <a href="{{ route('dashboard') }}">
            <i class="site-menu-icon fa fa-map" aria-hidden="true"></i>
            <span class="site-menu-title">Full Map View</span>
        </a>
        
    </li>

    <li class="site-menu-category">Master Data</li>

    <li class="site-menu-item has-sub" class="active">
        
        <a href="index.html">
            <i class="site-menu-icon fa fa-thumb-tack" aria-hidden="true"></i>
            <span class="site-menu-title">DAM Management</span>
        </a>
        
    </li>

    <li class="site-menu-item has-sub" class="active">

        <a href="index.html">
            <i class="site-menu-icon fa fa-users" aria-hidden="true"></i>
            <span class="site-menu-title">User Management</span>
        </a>
        
    </li>

    <li class="site-menu-item has-sub" class="active">

        <a href="index.html">
            <i class="site-menu-icon fa fa-wrench" aria-hidden="true"></i>
            <span class="site-menu-title">Setting</span>
        </a>
        
    </li>

    <li class="site-menu-category">Help Desk</li>

    <li class="site-menu-item">

        <a href="{{ route('helpdesk.index') }}">
            <i class="site-menu-icon fa fa-cog" aria-hidden="true"></i>
            <span class="site-menu-title">Technical Support</span>
        </a>
        
    </li>

    <li class="site-menu-item">

        <a href="{{ route('helpdesk.manual') }}">
            <i class="site-menu-icon fa fa-book" aria-hidden="true"></i>
            <span class="site-menu-title">Manual</span>
        </a>
        
    </li>

</ul>
