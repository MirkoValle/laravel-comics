<header>
    <section>
        <div><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Main logo DC"></div>
        <nav>
            <ul>
                @foreach ($links as $link)
                <li class="{{ $link['active'] ? 'active' : '' }}">
                    {{ $link['name'] }}
                </li>
                @endforeach
            </ul>
        </nav>

    </section>
</header>
