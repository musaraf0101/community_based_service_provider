<div class="header">
    <div class="header-left">
        <a href="/"><i class="fas fa-home" style="font-size: 30px;"></i></a>
    </div>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>

    <ul class="nav user-menu">


        <li class="nav-item zoom-screen me-2 mt-2">
            <a href="#" class="nav-link header-nav-list win-maximize">
                <img src="{{asset('assets/img/icons/header-icon-04.svg')}}" alt="">
            </a>
        </li>
        <li class="mt-2">
            <form action="/logout" method="post">
                @csrf
                <button class="btn btn-outline-primary" type="submit"><i class="bi bi-box-arrow-right"></i>&nbsp;Logout</button>
            </form>
        </li>
    </ul>
</div>