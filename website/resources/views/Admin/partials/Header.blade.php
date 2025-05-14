<!-- partial:partials/_navbar.html -->
<nav class="navbar">
    <div class="navbar-content">

        <div class="logo-mini-wrapper">
            <img src="../assets/images/logo-mini-light.png" class="logo-mini logo-mini-light" alt="logo">
            <img src="../assets/images/logo-mini-dark.png" class="logo-mini logo-mini-dark" alt="logo">
        </div>

        <form class="search-form">
            <div class="input-group">
                <div class="input-group-text">
                    <i data-feather="search"></i>
                </div>
                <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
            </div>
        </form>

        <ul class="navbar-nav">
            <li class="theme-switcher-wrapper nav-item">
                <input type="checkbox" value="" id="theme-switcher">
                <label for="theme-switcher">
                    <div class="box">
                        <div class="ball"></div>
                        <div class="icons">
                            <i class="feather icon-sun"></i>
                            <i class="feather icon-moon"></i>
                        </div>
                    </div>
                </label>
            </li>
            @can('business-access')
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="grid"></i>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                    <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                        <p class="mb-0 fw-bold">Web Apps</p>
                        <a href="javascript:;" class="text-secondary">Edit</a>
                    </div>
                    <div class="row g-0 p-1">
                        <div class="col-3 text-center">
                            <a href="pages/apps/chat.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center w-70px h-70px"><i data-feather="message-square" class="icon-lg mb-1"></i>
                                <p class="fs-12px">Chat</p>
                            </a>
                        </div>
                        <div class="col-3 text-center">
                            <a href="{{ route('calender') }}" class="dropdown-item d-flex flex-column align-items-center justify-content-center w-70px h-70px"><i data-feather="calendar" class="icon-lg mb-1"></i>
                                <p class="fs-12px">Calendar</p>
                            </a>
                        </div>
                        <div class="col-3 text-center">
                            <a href="pages/email/inbox.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center w-70px h-70px"><i data-feather="mail" class="icon-lg mb-1"></i>
                                <p class="fs-12px">Email</p>
                            </a>
                        </div>
                        <div class="col-3 text-center">
                            <a href="pages/general/profile.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center w-70px h-70px"><i data-feather="instagram" class="icon-lg mb-1"></i>
                                <p class="fs-12px">Profile</p>
                            </a>
                        </div>
                    </div>
                    <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                        <a href="javascript:;">View all</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i data-feather="mail"></i>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
                    <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
                        <p>9 New Messages</p>
                        <a href="javascript:;" class="text-secondary">Clear all</a>
                    </div>
                    <div class="p-1">
                        <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                            <div class="me-3">
                                <img class="w-30px h-30px rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                            </div>
                            <div class="d-flex justify-content-between flex-grow-1">
                                <div class="me-4">
                                    <p>Leonardo Payne</p>
                                    <p class="fs-12px text-secondary">Project status</p>
                                </div>
                                <p class="fs-12px text-secondary">2 min ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                            <div class="me-3">
                                <img class="w-30px h-30px rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                            </div>
                            <div class="d-flex justify-content-between flex-grow-1">
                                <div class="me-4">
                                    <p>Carl Henson</p>
                                    <p class="fs-12px text-secondary">Client meeting</p>
                                </div>
                                <p class="fs-12px text-secondary">30 min ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                            <div class="me-3">
                                <img class="w-30px h-30px rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                            </div>
                            <div class="d-flex justify-content-between flex-grow-1">
                                <div class="me-4">
                                    <p>Jensen Combs</p>
                                    <p class="fs-12px text-secondary">Project updates</p>
                                </div>
                                <p class="fs-12px text-secondary">1 hrs ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                            <div class="me-3">
                                <img class="w-30px h-30px rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                            </div>
                            <div class="d-flex justify-content-between flex-grow-1">
                                <div class="me-4">
                                    <p>Amiah Burton</p>
                                    <p class="fs-12px text-secondary">Project deatline</p>
                                </div>
                                <p class="fs-12px text-secondary">2 hrs ago</p>
                            </div>
                        </a>
                        <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                            <div class="me-3">
                                <img class="w-30px h-30px rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                            </div>
                            <div class="d-flex justify-content-between flex-grow-1">
                                <div class="me-4">
                                    <p>Yaretzi Mayo</p>
                                    <p class="fs-12px text-secondary">New record</p>
                                </div>
                                <p class="fs-12px text-secondary">5 hrs ago</p>
                            </div>
                        </a>
                    </div>
                    <div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
                        <a href="javascript:;">View all</a>
                    </div>
                </div>
            </li>
            @endcan
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="w-30px h-30px ms-1 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                        <div class="mb-3">
                            <img class="w-80px h-80px rounded-circle" src="https://via.placeholder.com/80x80" alt="">
                        </div>
                        <div class="text-center">
                            <!-- Show logged-in user name and email -->
                            <p class="fs-16px fw-bolder">{{ auth()->user()->name ?? 'Guest' }}</p>
                            <p class="fs-12px text-secondary">{{ auth()->user()->email ?? '' }}</p>
                        </div>
                    </div>
                    <ul class="list-unstyled p-1">
                        <li class="dropdown-item py-2">
                            <a href="pages/general/profile.html" class="text-body ms-0">
                                <i class="me-2 icon-md" data-feather="user"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li class="dropdown-item py-2">
                            <a href="javascript:;" class="text-body ms-0">
                                <i class="me-2 icon-md" data-feather="edit"></i>
                                <span>Edit Profile</span>
                            </a>
                        </li>
                        <li class="dropdown-item py-2">
                            <a href="javascript:;" class="text-body ms-0">
                                <i class="me-2 icon-md" data-feather="repeat"></i>
                                <span>Switch User</span>
                            </a>
                        </li>
                        <li class="dropdown-item py-2">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <a href="javascript:;" onclick="document.getElementById('logout-form').submit();" class="text-body ms-0">
                                <i class="me-2 icon-md" data-feather="log-out"></i>
                                <span>Log Out</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>

        <a href="#" class="sidebar-toggler">
            <i data-feather="menu"></i>
        </a>

    </div>
</nav>
<!-- partial -->