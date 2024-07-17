<header>
    <section>
        <div><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Main logo DC"></div>
        <nav>
            <ul>
                @foreach ($links as $link)
                <li class="{{ Route::CurrentRouteName() == 'guest.' . $link['name'] ? 'active' : null }}">
                    <a href="{{ $link['url'] }}">
                        {{ $link['name'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>

    </section>
</header>
