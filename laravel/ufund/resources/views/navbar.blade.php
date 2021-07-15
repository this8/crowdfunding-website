
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #c1e0f7;">
    <a class="navbar-brand" href="#">uFund</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/posts/?category=1000">Heart</a>
                    <a class="dropdown-item" href="/posts/?category=1001">Cancer</a>
                    <a class="dropdown-item" href="/posts/?category=1002">Vision Problem</a>
                    <a class="dropdown-item" href="/posts/?category=1003">infants</a>
                    <a class="dropdown-item" href="/posts/?category=1004">Other</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/posts/create">Create post</a>
            </li>
            <li class="nav-item dropdown">
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}

{{--                    <x-dropdown-link :href="route('logout')"--}}
{{--                                     onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                        {{ __('Log Out') }}--}}
{{--                    </x-dropdown-link>--}}
{{--                </form>--}}

                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu">{{-- this class use to drop and down menu --}}

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="#" class="dropdown-item">Profile</a>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();this.closest('form').submit();">
                        {{ __('Logout') }}
                         </a>
                    </form>
                </div>

            </li>
        </ul>

    </div>
</nav>
