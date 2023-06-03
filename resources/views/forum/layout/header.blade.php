<ul class="top-navlist">
    <li><a href="/">Home</a></li>
    <li><a href="/profile">Profile</a></li>
    <li><a href="/search">Topics</a></li>
    @if (Auth::check())
        <li style="float: right;">
            Welcome {{ Auth::user()->name }}, 
            <a href="/logout">Logout</a>
        </li>
    @else
        <li style="float: right;">
            <a href="/login">Log in &amp; Sign up</a>
        </li>
    @endif
</ul>
