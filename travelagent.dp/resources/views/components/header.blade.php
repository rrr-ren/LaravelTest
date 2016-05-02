
<div class="header">
    <div class="top_menu">
        <div class="nav">
            <ul>
                <li><a href="#">О компании</a></li>
                <li><a href="#">Виды отдыха</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Отзывы</a></li>
                <li><a href="#">Контакты</a></li>
                <div class="clear"></div>
            </ul>
        </div>
        <div class="search">
            <form>
                <div class="search_text"><input type="text" name="search"></div>
                <button type="submit"></button>
                <div class="clear"></div>
            </form>
        </div>
        <div class="social top_social">
            <a href=""><img src="images/vk.png"></a>
            <a href=""><img src="images/ok.png"></a>
            <a href=""><img src="images/f.png"></a>
            <a href=""><img src="images/tw.png"></a>
        </div>
        <div class="login">
            @if (Auth::guest())
            <a href="{{ url('/auth/login') }}"><img src="images/auth_reg.png" alt=""></a>
            <a href="{{ url('/auth/register') }}">Register</a>
            @else
            <li class="dropdown">
                <a href="{{ url('/admin/users') }}"><img src="images/auth_reg.png" alt=""></a>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ url('/auth/logout') }}">Выход</a></li>
                </ul>
            </li>
            @endif
        </div>
        <div class="clear"></div>
    </div>
</div>