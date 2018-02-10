    <nav class="navbar navbar-static-top" id="bar">
             <a class="navbar-brand" id="brand" href="#">SmartMalazi</a>
        <ul class="nav nav-pills pull-left">
            @if(Sentinel::check() && Sentinel::getUser()->roles()->first()->slug == 'admin')
            <li class="links">
                <a href="{{env('APP_URL')}}/lodges" id="admin_menu"style="color:#F8F8F6">Lodges</a>
            </li>
                <li class="links">
                    <a href="{{env('APP_URL')}}/register" id="admin_menu" style="color:#F8F8F6">Register Lodge Admin</a>
                </li>
            @else
                <li class="links">
                    <a href="{{env('APP_URL')}}" id="admin_menu"style="color:#F8F8F6">Home</a>
                </li>
            @endif
        </ul>

        <ul class="nav nav-pills pull-right">
            @if(Sentinel::check())

                <li id="hello">Hello, {{ Sentinel::getUser()->first_name }}
                </li>

                <li class="log">
                    <form method="POST" action="{{env('APP_URL')}}/logout" id="logout-form">
                        {{ csrf_field() }}

                        <a href="#" class="logout" onclick="document.getElementById('logout-form').submit()">Logout</a>
                    </form>

                </li>
            @endif
        </ul>
    </nav>
