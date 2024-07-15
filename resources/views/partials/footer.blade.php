<footer>
    <div class="container">
        <section>
            <div>
                @foreach ($footerLinks as $footerSection)
                <nav>
                    <h2>
                        {{ $footerSection['name'] }}
                    </h2>
                    <div>
                        @foreach ($footerSection['links'] as $footerLink)
                    <a href="{{ $footerLink['url'] }}">{{ $footerLink['title'] }}</a>
                    @endforeach
                    </div>
                </nav>
                @endforeach
            </div>
            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
        </section>
    </div>
</footer>
