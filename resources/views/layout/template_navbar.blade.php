<style>
.navbar .nav>li>a {
    float: none;
    color: #ffffff;
    text-decoration: none;
    text-shadow: 0 0px 0 #000000;
}
</style>
<div class="navbar navbar-fixed-top" >
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i></a>
                <a class="brand" href="#" style="color:#fff;">LIBIFRN</a>
            <div class="nav-collapse collapse navbar-inverse-collapse">
                <ul class="nav pull-right">
                    <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('images/passport-size.png') }}" class="nav-avatar" />{{ auth()->user()->name }}
                        <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ URL::route('account-sign-out') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>