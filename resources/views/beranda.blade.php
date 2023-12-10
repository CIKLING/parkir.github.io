<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Portal - Bootstrap 5 Admin Dashboard Template For Developers
        </title>

        @php
            $user = session('user');
        @endphp
        <!-- Meta -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta
            name="description"
            content="Portal - Bootstrap 5 Admin Dashboard Template For Developers"
        />
        <meta name="author" content="Xiaoying Riley at 3rd Wave Media" />
        <link rel="shortcut icon" href="favicon.ico" />

        <!-- FontAwesome JS-->
        <script defer src="{{asset('assets/plugins/fontawesome/js/all.min.js')}}"></script>

        <!-- App CSS -->
        <link id="theme-style" rel="stylesheet" href="{{asset('assets/css/portal.css')}}" />
    </head>

    <body class="app">
        <header class="app-header fixed-top">
            <div class="app-header-inner">
                <div class="container-fluid py-2">
                    <div class="app-header-content">
                        <div
                            class="row justify-content-between align-items-center"
                        >
                            <div class="col-auto">
                                <a
                                    id="sidepanel-toggler"
                                    class="sidepanel-toggler d-inline-block d-xl-none"
                                    href="#"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="30"
                                        height="30"
                                        viewBox="0 0 30 30"
                                        role="img"
                                    >
                                        <title>Menu</title>
                                        <path
                                            stroke="currentColor"
                                            stroke-linecap="round"
                                            stroke-miterlimit="10"
                                            stroke-width="2"
                                            d="M4 7h22M4 15h22M4 23h22"
                                        ></path>
                                    </svg>
                                </a>
                            </div>
                            <!--//col-->
                            <div class="search-mobile-trigger d-sm-none col">
                                <i
                                    class="search-mobile-trigger-icon fas fa-search"
                                ></i>
                            </div>
                            <!--//col-->
                            <div class="app-search-box col">
                                <form class="app-search-form">
                                    <input
                                        type="text"
                                        placeholder="Search..."
                                        name="search"
                                        class="form-control search-input"
                                    />
                                    <button
                                        type="submit"
                                        class="btn search-btn btn-primary"
                                        value="Search"
                                    >
                                        <i class="fas fa-search"></i>
                                    </button>
                                </form>
                            </div>
                            <!--//app-search-box-->

                            <div class="app-utilities col-auto">
                                <div
                                    class="app-utility-item app-notifications-dropdown dropdown"
                                >
                                    <a
                                        class="dropdown-toggle no-toggle-arrow"
                                        id="notifications-dropdown-toggle"
                                        data-bs-toggle="dropdown"
                                        href="#"
                                        role="button"
                                        aria-expanded="false"
                                        title="Notifications"
                                    >
                                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                        <svg
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 16 16"
                                            class="bi bi-bell icon"
                                            fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"
                                            />
                                        </svg>
                                        <span class="icon-badge">3</span> </a
                                    ><!--//dropdown-toggle-->

                                    <div
                                        class="dropdown-menu p-0"
                                        aria-labelledby="notifications-dropdown-toggle"
                                    >
                                        <div class="dropdown-menu-header p-3">
                                            <h5
                                                class="dropdown-menu-title mb-0"
                                            >
                                                Notifications
                                            </h5>
                                        </div>
                                        <!--//dropdown-menu-title-->
                                        <div class="dropdown-menu-content">
                                            <div class="item p-3">
                                                <div
                                                    class="row gx-2 justify-content-between align-items-center"
                                                >
                                                    <div class="col-auto">
                                                        <img
                                                            class="profile-image"
                                                            src="{{asset('assets/images/profiles/profile-1.png')}}"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <!--//col-->
                                                    <div class="col">
                                                        <div class="info">
                                                            <div class="desc">
                                                                Amy shared a
                                                                file with you.
                                                                Lorem ipsum
                                                                dolor sit amet,
                                                                consectetur
                                                                adipiscing elit.
                                                            </div>
                                                            <div class="meta">
                                                                2 hrs ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--//col-->
                                                </div>
                                                <!--//row-->
                                                <a
                                                    class="link-mask"
                                                    href="notifications.html"
                                                ></a>
                                            </div>
                                            <!--//item-->
                                            <div class="item p-3">
                                                <div
                                                    class="row gx-2 justify-content-between align-items-center"
                                                >
                                                    <div class="col-auto">
                                                        <div
                                                            class="app-icon-holder"
                                                        >
                                                            <svg
                                                                width="1em"
                                                                height="1em"
                                                                viewBox="0 0 16 16"
                                                                class="bi bi-receipt"
                                                                fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"
                                                                />
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <!--//col-->
                                                    <div class="col">
                                                        <div class="info">
                                                            <div class="desc">
                                                                You have a new
                                                                invoice. Proin
                                                                venenatis
                                                                interdum est.
                                                            </div>
                                                            <div class="meta">
                                                                1 day ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--//col-->
                                                </div>
                                                <!--//row-->
                                                <a
                                                    class="link-mask"
                                                    href="notifications.html"
                                                ></a>
                                            </div>
                                            <!--//item-->
                                            <div class="item p-3">
                                                <div
                                                    class="row gx-2 justify-content-between align-items-center"
                                                >
                                                    <div class="col-auto">
                                                        <div
                                                            class="app-icon-holder icon-holder-mono"
                                                        >
                                                            <svg
                                                                width="1em"
                                                                height="1em"
                                                                viewBox="0 0 16 16"
                                                                class="bi bi-bar-chart-line"
                                                                fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"
                                                                />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <!--//col-->
                                                    <div class="col">
                                                        <div class="info">
                                                            <div class="desc">
                                                                Your report is
                                                                ready. Proin
                                                                venenatis
                                                                interdum est.
                                                            </div>
                                                            <div class="meta">
                                                                3 days ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--//col-->
                                                </div>
                                                <!--//row-->
                                                <a
                                                    class="link-mask"
                                                    href="notifications.html"
                                                ></a>
                                            </div>
                                            <!--//item-->
                                            <div class="item p-3">
                                                <div
                                                    class="row gx-2 justify-content-between align-items-center"
                                                >
                                                    <div class="col-auto">
                                                        <img
                                                            class="profile-image"
                                                            src="{{asset('assets/images/profiles/profile-2.png')}}"
                                                            alt=""
                                                        />
                                                    </div>
                                                    <!--//col-->
                                                    <div class="col">
                                                        <div class="info">
                                                            <div class="desc">
                                                                James sent you a
                                                                new message.
                                                            </div>
                                                            <div class="meta">
                                                                7 days ago
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--//col-->
                                                </div>
                                                <!--//row-->
                                                <a
                                                    class="link-mask"
                                                    href="notifications.html"
                                                ></a>
                                            </div>
                                            <!--//item-->
                                        </div>
                                        <!--//dropdown-menu-content-->

                                        <div
                                            class="dropdown-menu-footer p-2 text-center"
                                        >
                                            <a href="notifications.html"
                                                >View all</a
                                            >
                                        </div>
                                    </div>
                                    <!--//dropdown-menu-->
                                </div>
                                <!--//app-utility-item-->
                                <div class="app-utility-item">
                                    <a href="settings.html" title="Settings">
                                        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                        <svg
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 16 16"
                                            class="bi bi-gear icon"
                                            fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"
                                            />
                                        </svg>
                                    </a>
                                </div>
                                <!--//app-utility-item-->

                                <div
                                    class="app-utility-item app-user-dropdown dropdown"
                                >
                                    <a
                                        class="dropdown-toggle"
                                        id="user-dropdown-toggle"
                                        data-bs-toggle="dropdown"
                                        href="#"
                                        role="button"
                                        aria-expanded="false"
                                        ><img
                                            src="{{asset('assets/images/user.png')}}"
                                            alt="user profile"
                                    /></a>
                                    <ul
                                        class="dropdown-menu"
                                        aria-labelledby="user-dropdown-toggle"
                                    >
                                        <li>
                                            <a
                                                class="dropdown-item"
                                                href="account.html"
                                                >Account</a
                                            >
                                        </li>
                                        <li>
                                            <a
                                                class="dropdown-item"
                                                href="settings.html"
                                                >Settings</a
                                            >
                                        </li>
                                        <li><hr class="dropdown-divider" /></li>
                                        <li>
                                            <a
                                                class="dropdown-item"
                                                href="{{route('logout')}}"
                                                >Log Out</a
                                            >
                                        </li>
                                    </ul>
                                </div>
                                <!--//app-user-dropdown-->
                            </div>
                            <!--//app-utilities-->
                        </div>
                        <!--//row-->
                    </div>
                    <!--//app-header-content-->
                </div>
                <!--//container-fluid-->
            </div>
            <!--//app-header-inner-->
            <div id="app-sidepanel" class="app-sidepanel">
                <div id="sidepanel-drop" class="sidepanel-drop"></div>
                <div class="sidepanel-inner d-flex flex-column">
                    <a
                        href="#"
                        id="sidepanel-close"
                        class="sidepanel-close d-xl-none"
                        >&times;</a
                    >
                    <div class="app-branding">
                        <a class="app-logo" href="{{'dashboard'}}"
                            ><img
                                class="logo-icon me-2"
                                src="{{asset('assets/images/app-logo.svg')}}"
                                alt="logo"
                            /><span class="logo-text">PORTAL</span></a
                        >
                    </div>
                    <!--//app-branding-->

                    <nav
                        id="app-nav-main"
                        class="app-nav app-nav-main flex-grow-1"
                    >
                        <ul
                            class="app-menu list-unstyled accordion"
                            id="menu-accordion"
                        >
                            <li class="nav-item">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link active" href="{{route('dashboard')}}">
                                    <span class="nav-icon">
                                        <svg
                                            width="1em"
                                            height="1em"
                                            viewBox="0 0 16 16"
                                            class="bi bi-house-door"
                                            fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg"
                                        >
                                            <path
                                                fill-rule="evenodd"
                                                d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"
                                            />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text"
                                        >Beranda</span
                                    > </a
                                ><!--//nav-link-->
                            </li>
                            <!--//nav-item-->
                            @if(auth()->user()->hasRole('admin'))
                            <li class="nav-item">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link" href="{{route('users')}}">
                                    <span class="nav-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                                          </svg>
                                          
                                            <path
                                                d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"
                                            />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Pegawai</span> </a
                                ><!--//nav-link-->
                            </li>
                            @endif
                            <!--//nav-item-->
                           
                            @if(auth()->user()->hasRole('admin'))
                            <li class="nav-item">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link" href="{{route('users')}}">
                                    <span class="nav-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-car-front" viewBox="0 0 16 16">
                                            <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
                                            <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
                                          </svg>
                                          
                                            <path
                                                d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"
                                            />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Ruang Parkir</span> </a
                                ><!--//nav-link-->
                            </li>
                            @endif

                            @if(auth()->user()->hasRole('admin'))
                            <li class="nav-item">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link" href="#">
                                    <span class="nav-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                          </svg>
                                          
                                            <path
                                                d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"
                                            />
                                            <path
                                                fill-rule="evenodd"
                                                d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"
                                            />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Laporan Keuangan</span> </a
                                ><!--//nav-link-->
                            </li>
                            @endif

                        </ul>
                        <!--//app-menu-->
                    </nav>
                    <!--//app-nav-->
                    
                </div>
                <!--//sidepanel-inner-->
            </div>
            <!--//app-sidepanel-->
        </header>
        <!--//app-header-->

        <div class="app-wrapper">
            <div class="app-content pt-3 p-md-3 p-lg-4">
                <div class="container-xl">
                    <h1 class="app-page-title">Overview</h1>

                    <div
                        class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration"
                        role="alert"
                    >
                        <div class="inner">
                            <div class="app-card-body p-3 p-lg-4">
                                <h3 class="mb-3">Welcome, {{auth()->user()->name}}!</h3>
                                <div class="row gx-5 gy-3">
                                    <div class="col-12 col-lg-9">
                                        <div>
                                            Selamat datang kembali {{$user->name}}, Wah,ada banyak tugas untuk kamu. Selamat bekerja
                                        </div>
                                    </div>
                                    <!--//col-->
                                    
                                    <!--//col-->
                                </div>
                                <!--//row-->
                                <button
                                    type="button"
                                    class="btn-close"
                                    data-bs-dismiss="alert"
                                    aria-label="Close"
                                ></button>
                            </div>
                            <!--//app-card-body-->
                        </div>
                        <!--//inner-->
                    </div>
                    <!--//app-card-->

                    <div class="row g-4 mb-4">
                        <div class="col-6 col-lg-3">
                            <div class="app-card app-card-stat shadow-sm h-100">
                                <div class="app-card-body p-3 p-lg-4">
                                    <h4 class="stats-type mb-1">Jumlah Kendaraan</h4>
                                    <div class="stats-figure">{{$jumlahKendaraan}}</div>
                                    <div class="stats-meta">
                                        Buah Mobil
                                    </div>
                                </div>
                                <!--//app-card-body-->
                                <a class="app-card-link-mask" href="#"></a>
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->

                        <div class="col-6 col-lg-3">
                            <div class="app-card app-card-stat shadow-sm h-100">
                                <div class="app-card-body p-3 p-lg-4">
                                    <h4 class="stats-type mb-1">Total Pemasukan</h4>
                                    <div class="stats-figure">{{number_format($income, 0, ',', '.')}}</div>
                                    <div class="stats-meta">
                                        Rupiah
                                    </div>
                                </div>
                                <!--//app-card-body-->
                                <a class="app-card-link-mask" href="#"></a>
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
                        <div class="col-6 col-lg-3">
                            <div class="app-card app-card-stat shadow-sm h-100">
                                <div class="app-card-body p-3 p-lg-4">
                                    <h4 class="stats-type mb-1">Projects</h4>
                                    <div class="stats-figure">23</div>
                                    <div class="stats-meta">Open</div>
                                </div>
                                <!--//app-card-body-->
                                <a class="app-card-link-mask" href="#"></a>
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
                        <div class="col-6 col-lg-3">
                            <div class="app-card app-card-stat shadow-sm h-100">
                                <div class="app-card-body p-3 p-lg-4">
                                    <h4 class="stats-type mb-1">Invoices</h4>
                                    <div class="stats-figure">6</div>
                                    <div class="stats-meta">New</div>
                                </div>
                                <!--//app-card-body-->
                                <a class="app-card-link-mask" href="#"></a>
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-lg-6">
                            <div
                                class="app-card app-card-chart h-100 shadow-sm"
                            >
                                <div class="app-card-header p-3">
                                    <div
                                        class="row justify-content-between align-items-center"
                                    >
                                        <div class="col-auto">
                                            <h4 class="app-card-title">
                                                Line Chart Example
                                            </h4>
                                        </div>
                                        <!--//col-->
                                        <div class="col-auto">
                                            <div class="card-header-action">
                                                <a href="charts.html"
                                                    >More charts</a
                                                >
                                            </div>
                                            <!--//card-header-actions-->
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//app-card-header-->
                                <div class="app-card-body p-3 p-lg-4">
                                    <div class="mb-3 d-flex">
                                        <select
                                            class="form-select form-select-sm ms-auto d-inline-flex w-auto"
                                        >
                                            <option value="1" selected>
                                                This week
                                            </option>
                                            <option value="2">Today</option>
                                            <option value="3">
                                                This Month
                                            </option>
                                            <option value="3">This Year</option>
                                        </select>
                                    </div>
                                    <div class="chart-container">
                                        <canvas id="canvas-linechart"></canvas>
                                    </div>
                                </div>
                                <!--//app-card-body-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
                        <div class="col-12 col-lg-6">
                            <div
                                class="app-card app-card-chart h-100 shadow-sm"
                            >
                                <div class="app-card-header p-3">
                                    <div
                                        class="row justify-content-between align-items-center"
                                    >
                                        <div class="col-auto">
                                            <h4 class="app-card-title">
                                                Bar Chart Example
                                            </h4>
                                        </div>
                                        <!--//col-->
                                        <div class="col-auto">
                                            <div class="card-header-action">
                                                <a href="charts.html"
                                                    >More charts</a
                                                >
                                            </div>
                                            <!--//card-header-actions-->
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//app-card-header-->
                                <div class="app-card-body p-3 p-lg-4">
                                    <div class="mb-3 d-flex">
                                        <select
                                            class="form-select form-select-sm ms-auto d-inline-flex w-auto"
                                        >
                                            <option value="1" selected>
                                                This week
                                            </option>
                                            <option value="2">Today</option>
                                            <option value="3">
                                                This Month
                                            </option>
                                            <option value="3">This Year</option>
                                        </select>
                                    </div>
                                    <div class="chart-container">
                                        <canvas id="canvas-barchart"></canvas>
                                    </div>
                                </div>
                                <!--//app-card-body-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-lg-6">
                            <div
                                class="app-card app-card-progress-list h-100 shadow-sm"
                            >
                                <div class="app-card-header p-3">
                                    <div
                                        class="row justify-content-between align-items-center"
                                    >
                                        <div class="col-auto">
                                            <h4 class="app-card-title">
                                                Progress
                                            </h4>
                                        </div>
                                        <!--//col-->
                                        <div class="col-auto">
                                            <div class="card-header-action">
                                                <a href="#">All projects</a>
                                            </div>
                                            <!--//card-header-actions-->
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//app-card-header-->
                                <div class="app-card-body">
                                    <div class="item p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="title mb-1">
                                                    Project lorem ipsum dolor
                                                    sit amet
                                                </div>
                                                <div class="progress">
                                                    <div
                                                        class="progress-bar bg-success"
                                                        role="progressbar"
                                                        style="width: 25%"
                                                        aria-valuenow="25"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                            <div class="col-auto">
                                                <svg
                                                    width="1em"
                                                    height="1em"
                                                    viewBox="0 0 16 16"
                                                    class="bi bi-chevron-right"
                                                    fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                                                    />
                                                </svg>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="item-link-mask" href="#"></a>
                                    </div>
                                    <!--//item-->

                                    <div class="item p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="title mb-1">
                                                    Project duis aliquam et
                                                    lacus quis ornare
                                                </div>
                                                <div class="progress">
                                                    <div
                                                        class="progress-bar bg-success"
                                                        role="progressbar"
                                                        style="width: 34%"
                                                        aria-valuenow="34"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                            <div class="col-auto">
                                                <svg
                                                    width="1em"
                                                    height="1em"
                                                    viewBox="0 0 16 16"
                                                    class="bi bi-chevron-right"
                                                    fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                                                    />
                                                </svg>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="item-link-mask" href="#"></a>
                                    </div>
                                    <!--//item-->

                                    <div class="item p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="title mb-1">
                                                    Project sed tempus felis id
                                                    lacus pulvinar
                                                </div>
                                                <div class="progress">
                                                    <div
                                                        class="progress-bar bg-success"
                                                        role="progressbar"
                                                        style="width: 68%"
                                                        aria-valuenow="68"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                            <div class="col-auto">
                                                <svg
                                                    width="1em"
                                                    height="1em"
                                                    viewBox="0 0 16 16"
                                                    class="bi bi-chevron-right"
                                                    fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                                                    />
                                                </svg>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="item-link-mask" href="#"></a>
                                    </div>
                                    <!--//item-->

                                    <div class="item p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="title mb-1">
                                                    Project sed tempus felis id
                                                    lacus pulvinar
                                                </div>
                                                <div class="progress">
                                                    <div
                                                        class="progress-bar bg-success"
                                                        role="progressbar"
                                                        style="width: 52%"
                                                        aria-valuenow="52"
                                                        aria-valuemin="0"
                                                        aria-valuemax="100"
                                                    ></div>
                                                </div>
                                            </div>
                                            <!--//col-->
                                            <div class="col-auto">
                                                <svg
                                                    width="1em"
                                                    height="1em"
                                                    viewBox="0 0 16 16"
                                                    class="bi bi-chevron-right"
                                                    fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                                                    />
                                                </svg>
                                            </div>
                                            <!--//col-->
                                        </div>
                                        <!--//row-->
                                        <a class="item-link-mask" href="#"></a>
                                    </div>
                                    <!--//item-->
                                </div>
                                <!--//app-card-body-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
                        <div class="col-12 col-lg-6">
                            <div
                                class="app-card app-card-stats-table h-100 shadow-sm"
                            >
                                <div class="app-card-header p-3">
                                    <div
                                        class="row justify-content-between align-items-center"
                                    >
                                        <div class="col-auto">
                                            <h4 class="app-card-title">
                                                Stats List
                                            </h4>
                                        </div>
                                        <!--//col-->
                                        <div class="col-auto">
                                            <div class="card-header-action">
                                                <a href="#">View report</a>
                                            </div>
                                            <!--//card-header-actions-->
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//app-card-header-->
                                <div class="app-card-body p-3 p-lg-4">
                                    <div class="table-responsive">
                                        <table
                                            class="table table-borderless mb-0"
                                        >
                                            <thead>
                                                <tr>
                                                    <th class="meta">Source</th>
                                                    <th class="meta stat-cell">
                                                        Views
                                                    </th>
                                                    <th class="meta stat-cell">
                                                        Today
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#"
                                                            >google.com</a
                                                        >
                                                    </td>
                                                    <td class="stat-cell">
                                                        110
                                                    </td>
                                                    <td class="stat-cell">
                                                        <svg
                                                            width="1em"
                                                            height="1em"
                                                            viewBox="0 0 16 16"
                                                            class="bi bi-arrow-up text-success"
                                                            fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"
                                                            />
                                                        </svg>
                                                        30%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#"
                                                            >getbootstrap.com</a
                                                        >
                                                    </td>
                                                    <td class="stat-cell">
                                                        67
                                                    </td>
                                                    <td class="stat-cell">
                                                        23%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#"
                                                            >w3schools.com</a
                                                        >
                                                    </td>
                                                    <td class="stat-cell">
                                                        56
                                                    </td>
                                                    <td class="stat-cell">
                                                        <svg
                                                            width="1em"
                                                            height="1em"
                                                            viewBox="0 0 16 16"
                                                            class="bi bi-arrow-down text-danger"
                                                            fill="currentColor"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                        >
                                                            <path
                                                                fill-rule="evenodd"
                                                                d="M8 1a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L7.5 13.293V1.5A.5.5 0 0 1 8 1z"
                                                            />
                                                        </svg>
                                                        20%
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#"
                                                            >javascript.com
                                                        </a>
                                                    </td>
                                                    <td class="stat-cell">
                                                        24
                                                    </td>
                                                    <td class="stat-cell">-</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="#"
                                                            >github.com
                                                        </a>
                                                    </td>
                                                    <td class="stat-cell">
                                                        17
                                                    </td>
                                                    <td class="stat-cell">
                                                        15%
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--//table-responsive-->
                                </div>
                                <!--//app-card-body-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                    <div class="row g-4 mb-4">
                        <div class="col-12 col-lg-4">
                            <div
                                class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm"
                            >
                                <div
                                    class="app-card-header p-3 border-bottom-0"
                                >
                                    <div class="row align-items-center gx-3">
                                        <div class="col-auto">
                                            <div class="app-icon-holder">
                                                <svg
                                                    width="1em"
                                                    height="1em"
                                                    viewBox="0 0 16 16"
                                                    class="bi bi-receipt"
                                                    fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"
                                                    />
                                                </svg>
                                            </div>
                                            <!--//icon-holder-->
                                        </div>
                                        <!--//col-->
                                        <div class="col-auto">
                                            <h4 class="app-card-title">
                                                Invoices
                                            </h4>
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//app-card-header-->
                                <div class="app-card-body px-4">
                                    <div class="intro">
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Etiam aliquet eros vel
                                        diam semper mollis.
                                    </div>
                                </div>
                                <!--//app-card-body-->
                                <div class="app-card-footer p-4 mt-auto">
                                    <a class="btn app-btn-secondary" href="#"
                                        >Create New</a
                                    >
                                </div>
                                <!--//app-card-footer-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
                        <div class="col-12 col-lg-4">
                            <div
                                class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm"
                            >
                                <div
                                    class="app-card-header p-3 border-bottom-0"
                                >
                                    <div class="row align-items-center gx-3">
                                        <div class="col-auto">
                                            <div class="app-icon-holder">
                                                <svg
                                                    width="1em"
                                                    height="1em"
                                                    viewBox="0 0 16 16"
                                                    class="bi bi-code-square"
                                                    fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M6.854 4.646a.5.5 0 0 1 0 .708L4.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0zm2.292 0a.5.5 0 0 0 0 .708L11.793 8l-2.647 2.646a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708 0z"
                                                    />
                                                </svg>
                                            </div>
                                            <!--//icon-holder-->
                                        </div>
                                        <!--//col-->
                                        <div class="col-auto">
                                            <h4 class="app-card-title">Apps</h4>
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//app-card-header-->
                                <div class="app-card-body px-4">
                                    <div class="intro">
                                        Pellentesque varius, elit vel volutpat
                                        sollicitudin, lacus quam efficitur augue
                                    </div>
                                </div>
                                <!--//app-card-body-->
                                <div class="app-card-footer p-4 mt-auto">
                                    <a class="btn app-btn-secondary" href="#"
                                        >Create New</a
                                    >
                                </div>
                                <!--//app-card-footer-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
                        <div class="col-12 col-lg-4">
                            <div
                                class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm"
                            >
                                <div
                                    class="app-card-header p-3 border-bottom-0"
                                >
                                    <div class="row align-items-center gx-3">
                                        <div class="col-auto">
                                            <div class="app-icon-holder">
                                                <svg
                                                    width="1em"
                                                    height="1em"
                                                    viewBox="0 0 16 16"
                                                    class="bi bi-tools"
                                                    fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M0 1l1-1 3.081 2.2a1 1 0 0 1 .419.815v.07a1 1 0 0 0 .293.708L10.5 9.5l.914-.305a1 1 0 0 1 1.023.242l3.356 3.356a1 1 0 0 1 0 1.414l-1.586 1.586a1 1 0 0 1-1.414 0l-3.356-3.356a1 1 0 0 1-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 0 0-.707-.293h-.071a1 1 0 0 1-.814-.419L0 1zm11.354 9.646a.5.5 0 0 0-.708.708l3 3a.5.5 0 0 0 .708-.708l-3-3z"
                                                    />
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M15.898 2.223a3.003 3.003 0 0 1-3.679 3.674L5.878 12.15a3 3 0 1 1-2.027-2.027l6.252-6.341A3 3 0 0 1 13.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"
                                                    />
                                                </svg>
                                            </div>
                                            <!--//icon-holder-->
                                        </div>
                                        <!--//col-->
                                        <div class="col-auto">
                                            <h4 class="app-card-title">
                                                Tools
                                            </h4>
                                        </div>
                                        <!--//col-->
                                    </div>
                                    <!--//row-->
                                </div>
                                <!--//app-card-header-->
                                <div class="app-card-body px-4">
                                    <div class="intro">
                                        Sed maximus, libero ac pharetra
                                        elementum, turpis nisi molestie neque,
                                        et tincidunt velit turpis non enim.
                                    </div>
                                </div>
                                <!--//app-card-body-->
                                <div class="app-card-footer p-4 mt-auto">
                                    <a class="btn app-btn-secondary" href="#"
                                        >Create New</a
                                    >
                                </div>
                                <!--//app-card-footer-->
                            </div>
                            <!--//app-card-->
                        </div>
                        <!--//col-->
                    </div>
                    <!--//row-->
                </div>
                <!--//container-fluid-->
            </div>
            <!--//app-content-->

            <footer class="app-footer">
                <div class="container text-center py-3">
                    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
                    <small class="copyright"
                        >&copy; GO Parkir 2023. All rights</small
                    >
                </div>
            </footer>
            <!--//app-footer-->
        </div>
        <!--//app-wrapper-->

        <!-- Javascript -->
        <script src="{{asset('assets/plugins/popper.min.js')}}"></script>
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

        <!-- Charts JS -->
        <script src="{{asset('assets/plugins/chart.js/chart.min.js')}}"></script>
        <script src="{{asset('assets/js/index-charts.js')}}"></script>

        <!-- Page Specific JS -->
        <script src="{{asset('assets/js/app.js')}}"></script>
    </body>
</html>
