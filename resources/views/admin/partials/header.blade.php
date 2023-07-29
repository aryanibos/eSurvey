<div class="header">

    <div class="header-left">
        <a href="{{ route('dashboard') }}" class="logo">
            <img src="{{ asset('template') }}/assets/img/logo.png" alt="Logo">
        </a>
        <a href="{{ route('dashboard') }}" class="logo logo-small">
            <img src="{{ asset('template') }}/assets/img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <div class="menu-toggle">
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
        </a>
    </div>

    <div class="top-nav-search">
        <form>
            <input type="text" class="form-control" placeholder="Search here">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">
        <li class="nav-item zoom-screen me-2">
            <a href="#" class="nav-link header-nav-list win-maximize">
                <img src="{{ asset('template') }}/assets/img/icons/header-icon-04.svg" alt="">
            </a>
        </li>
        @if (Auth::user()->role == 'a')
            <li class="nav-item dropdown noti-dropdown me-2">
                <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                    <img src="{{ asset('template') }}/assets/img/icons/header-icon-05.svg" alt="">
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        {{-- jika kita click tombol clear maka menghapus semua notifikasi --}}
                        <a href="#" class="clear-noti" id="clearNoti">Clear All</a>

                    </div>

                    <div class="noti-content">
                        <ul class="notification-list">
                            @php
                                $ibuHamils = App\Models\IbuHamil::where('responden', 'ya')->get();
                                // get Ibu hamil max 6 records dari data created_at terbaru
                                $ibuHamils = $ibuHamils->sortByDesc('created_at');
                                $ibuHamils = $ibuHamils->take(6);
                            @endphp

                            {{-- If there are any "Ibu Hamil" records with 'responden' set to 'y', then display the notifications --}}
                            @if ($ibuHamils->count() > 0)
                                @foreach ($ibuHamils as $item)
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media d-flex">
                                                <span class="avatar avatar-sm flex-shrink-0">
                                                    <img class="avatar-img rounded-circle" alt="User Image"
                                                        src="{{ asset('template') }}/assets/img/profiles/avatar-02.jpg">
                                                </span>
                                                <div class="media-body flex-grow-1">
                                                    <p class="noti-details"><span
                                                            class="noti-title">{{ $item->nama_ibu }}</span> Bersedia
                                                        <span class="noti-title">Menjadi Responden</span>
                                                    </p>
                                                    <p class="noti-time"><span class="notification-time">
                                                            @php
                                                                $date = date_create($item->created_at);
                                                                // date_format($date, 'd-m-Y H:i:s'); dan jam
                                                                echo date_format($date, 'd-m-Y');
                                                                
                                                            @endphp
                                                        </span></p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                {{-- Show a message when there are no "Ibu Hamil" records with 'responden' set to 'y' --}}
                                <li class="notification-message">
                                    <p class="noti-details">Tidak ada Notifikasi Hari Ini</p>
                                </li>
                            @endif

                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                    </div>
                </div>
            </li>
        @endif
        <li class="nav-item dropdown has-arrow new-user-menus">
            <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                <span class="user-img">
                    <img class="rounded-circle" src="{{ asset('template') }}/assets/img/profiles/avatar-01.jpg"
                        width="31" alt="{{ Auth::user()->name }}">
                    <div class="user-text">
                        <h6>{{ Auth::user()->name }}</h6>
                        <p class="text-muted mb-0">
                            @if (Auth::user()->role == 'a')
                                Administrator
                            @else
                                Pengguna
                            @endif
                        </p>
                    </div>
                </span>
            </a>
            <div class="dropdown-menu">
                <div class="user-header">
                    <div class="avatar avatar-sm">
                        <img src="{{ asset('template') }}/assets/img/profiles/avatar-01.jpg" alt="User Image"
                            class="avatar-img rounded-circle">
                    </div>
                    <div class="user-text">
                        <h6>{{ Auth::user()->name }}</h6>
                        <p class="text-muted mb-0">
                            @if (Auth::user()->role == 'a')
                                Administrator
                            @else
                                Pengguna
                            @endif
                        </p>
                    </div>
                </div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                    Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>

    </ul>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const clearNotiLink = document.getElementById('clearNoti');
        const notificationList = document.getElementById('notificationList');

        clearNotiLink.addEventListener('click', function(event) {
            event.preventDefault();
            // Remove all child elements (notification items) from the notification list
            while (notificationList.firstChild) {
                notificationList.removeChild(notificationList.firstChild);
            }
            // You may also send an AJAX request to the server here to mark notifications as read or delete them from the database.
        });
    });
</script>
