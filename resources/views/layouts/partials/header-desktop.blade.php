<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="header-button" style="justify-content: flex-end;">
            <div class="account-wrap">
                <div class="account-item clearfix js-item-menu">
                    <div class="image">
                        <img src="{!! asset('theme/images/icon/avatar-01.jpg') !!}" alt="John Doe" />
                    </div>
                    <div class="content">
                        <a class="js-acc-btn" href="#">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
                    </div>
                    <div class="account-dropdown js-dropdown">
                        <div class="info clearfix">
                            <div class="image">
                                <a href="#">
                                    <img src="{!! asset('theme/images/icon/avatar-01.jpg') !!}" alt="John Doe" />
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="name">
                                    <a href="#">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
                                </h5>
                                <span class="email">{{ Auth::user()->email }}</span>
                            </div>
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-account"></i>Account</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <div class="account-dropdown__item">
                                <a href="#">
                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                            </div>
                        </div>
                        <div class="account-dropdown__footer">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button style="color:red;padding-top:10px;padding-bottom:10px;padding-left:20px;">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>