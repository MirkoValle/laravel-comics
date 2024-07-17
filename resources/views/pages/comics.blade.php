@extends('layouts.app')

@section('page-title', 'Comics')

@section('jumbo')
<div class="jumbo">

</div>
@endsection

@section('main-content')
<section>
    <div class="container">
        <span>Current series</span>

        <div class="comics">
            @foreach ($data as $comic)
            <article>
                <img src="{{ $comic['thumb'] }}" alt="{{$comic['title']}}">
                <p>
                    {{$comic['title']}}
                </p>
            </article>
            @endforeach
        </div>

        <button>Load more</button>
    </div>
</section>
@endsection
