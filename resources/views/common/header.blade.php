<header>
    <div class="container">
        <div class="left-header">
            <img src="img/logo.png" alt="logo">
        </div>
        <div class="right-header">
            <ul class="menu">
                @foreach (config('menu.pages') as $page)
                    <li class={{ Route::currentRouteName() == $page['pathId'] ? 'active' : '' }}>
                        <a href="{{ route($page['pathId']) }}">
                            {{ $page['displaytext'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <button class="main-btn">Candidati Ora</button>
        </div>
    </div>
</header>