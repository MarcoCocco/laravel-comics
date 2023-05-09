@extends('layouts/main-layout')

@section('jumbo')
    <div class="jumbo">
    </div>
@endsection

@section('mainContent')
    <main>
        <div class="cards-container container">
            @foreach ($comics as $comic)
                <div id="card">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <div id="series">
                        <p>{{ $comic['series'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div id="load-button">
            <button>LOAD MORE</button>
        </div>
    </main>
@endsection

@section('merchLinks')
    <div class='merchandise'>
        <div class="main-container container">
            <div class="main-links">
                <ul>
                    @foreach ($mainLinks as $mainLink)
                        <li><img src="{{ Vite::asset($mainLink['image']) }}" alt="">{{ $mainLink['name'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
