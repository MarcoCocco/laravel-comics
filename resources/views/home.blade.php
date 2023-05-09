@extends('layouts/main-layout')

@section('jumbo')
    <div class="jumbo">
    </div>
@endsection

@section('merchLinks')
    <main>
        <div class="main-container container">
            <div class="main-links">
                <ul>
                    @foreach ($mainLinks as $mainLink)
                        <li><img src="{{ Vite::asset($mainLink['image']) }}" alt="">{{ $mainLink['name'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </main>
@endsection
