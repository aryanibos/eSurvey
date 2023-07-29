<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                @if (Auth::user()->role == 'a')
                    <li>
                        <a href="{{ route('dashboard') }}"><i class="feather-grid"></i> <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{ route('ibu-hamil') }}"><i class="feather-users"></i> <span>Ibu Hamil</span></a>
                    </li>
                    <li>
                        <a href="{{ route('list-quisioner') }}"><i class="feather-list"></i> <span>List
                                Kuisioner</span></a>
                    </li>
                @endif

                @if (Auth::user()->role == 'u')
                    <li>
                        <a href="{{ route('form-quisioner') }}"><i class="feather-list"></i> <span>Quisioner</span></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
