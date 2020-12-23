<header class="header navbar navbar-expand-sm">

    <ul class="navbar-item theme-brand flex-row  text-center">
        <li class="nav-item theme-logo">
            <a href="/cork/laravel/ltr/vertical-light-menu/analytics">
                <img src="https://designreset.com/cork/laravel/ltr/vertical-light-menu/public/storage/img/logo.svg" class="navbar-logo" alt="logo">
            </a>
        </li>
        <li class="nav-item theme-text">
            <a href="/cork/laravel/ltr/vertical-light-menu/analytics" class="nav-link"> CodeReset Blog </a>
        </li>
    </ul>
    <ul class="navbar-item theme-brand flex-row  text-center">
        <li class="nav-item theme-logo">
            <a href="#">
                <img src="https://designreset.com/cork/laravel/ltr/vertical-light-menu/public/storage/img/logo.svg" class="navbar-logo" alt="logo">
            </a>
        </li>
        <li class="nav-item theme-text">
            <a href="/cork/laravel/ltr/vertical-light-menu/analytics" class="nav-link"> CodeReset Blog </a>
        </li>
    </ul>
    
    
    <ul class="navbar-item flex-row ml-md-auto">
        
        <li class="nav-item dropdown user-profile-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <img src="https://designreset.com/cork/laravel/ltr/vertical-light-menu/public/storage/img/profile-16.jpeg" alt="avatar">
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                <div class="">
                    <div class="dropdown-item">
                        <a href="/cork/laravel/ltr/vertical-light-menu/users/profile"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> My Profile</a>
                    </div>
                    <div class="dropdown-item">
                        <a href="/cork/laravel/ltr/vertical-light-menu/apps/mailbox"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> Inbox</a>
                    </div>
                    <div class="dropdown-item">
                        <a href="/cork/laravel/ltr/vertical-light-menu/authentication/lockscreen_boxed"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> Lock Screen</a>
                    </div>
                    <div class="dropdown-item">
                        <a href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Sign Out</a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        <input type="hidden" name="_token" value="TKpsdUCziZzm71a3AdLweiE9jhHH3psdjDAJ7bnz">                            </form>
                </div>
            </div>
        </li>

    </ul>
</header>