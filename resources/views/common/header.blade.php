<header>
    <div class="container">
        <div class="left-header">
            <a href="/">
                <img src="img/logo.png" alt="logo">
            </a>
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