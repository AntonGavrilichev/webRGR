<header class="header_style">
    @php
    $user = Illuminate\Support\Facades\Auth::user()
    @endphp
    <div class="header_log">
        @if(Illuminate\Support\Facades\Auth::guest())
        <div class="log_block">
            <ul> <a href="{{ route('register') }}">@lang('main.register')</a></ul>
            <ul> <a href="{{ route('login') }}">@lang('main.login')</a></ul>
        </div>
        @endif
        @if(Illuminate\Support\Facades\Auth::check())

        <div class="block_header">
            <div class="user_name">
                @if($user and $user->isAdmin())
                @lang('main.youAreAdmin')
                @endif
            </div>
            <div class="user_name"> {{ $user->name }}</div>
            <form class="user_name" method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();">@lang('main.logout')</a>
            </form>
        </div>

        @endif
    </div>
    <div class="nav_menu_extra">
        <nav>
            <ul>
                @if($user and $user->isAdmin())
                <li><a id="menu_basket" href="{{ route('admin.orders_index') }}">@lang('main.orders')</a></li>
                <li><a id="menu_catalog" href="{{ route('admin.catalog_index') }}">@lang('main.catalog')</a></li>
                <li><a id="menu_catalog" href="{{ route('admin.users_index') }}">@lang('main.users')</a></li>
                @else
                <li><a id="menu_main" href="{{ route('main.index') }}">@lang('main.main_page')</a></li>
                <li><a id="menu_basket" href="{{ route('basket.index') }}">@lang('main.basket')</a></li>
                <li><a id="menu_catalog" href="{{ route('catalog.index') }}">@lang('main.catalog')</a></li>
                <li><a id="menu_contact" href="{{ route('contact.index') }}">@lang('main.contact')</a></li>
                <li><a id="menu_about" href="{{ route('aboutUs.index') }}">@lang('main.about_us')</a></li>
                @if(Auth::check())
                <li><a href="{{ route('profile.index') }}">@lang('main.profile')</a></li>
                @endif
                @endif
                <li><a id="menu_about" href="{{ route('locale', __('main.set_lan') ) }}">@lang('main.set_lan')</a></li>
            </ul>
        </nav>
    </div>
</header>