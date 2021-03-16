@extends('template.main')
@section('content')
    <section class="container">
        <div class="row my-2">
            @foreach ($pokemon as $pokemon_item)
                <div class="col-2 my-auto mx-auto">
                    <a href="/pokemon/{{$pokemon_item->id}}">
                        <img src="/storage/img/{{$pokemon_item->src}}" alt="pokemon_img" height="100">
                    </a>
                </div>
                @if ($loop->iteration % 6 == 0)
            </div>
            <div class="row">
                        
                @endif
            @endforeach
        </div>
    </section>
@endsection