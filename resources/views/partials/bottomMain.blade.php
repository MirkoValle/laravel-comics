<div class="container blue-links">
    <section>
        <ul>
            @foreach ($blueLinks as $blueLink)
            <li>
                <a href={{ $blueLink['url'] }}></a>
                <img src="{{ Vite::asset('resources/img/' . $blueLink['src']) }}" alt="">
                <h2>{{ $blueLink['name'] }}</h2>
            </li>
            @endforeach
        </ul>
    </section>
</div>
