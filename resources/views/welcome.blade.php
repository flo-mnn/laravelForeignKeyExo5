@extends('template.main')
@section('content')
    <section class="container">
        <div class="row my-2">
            @foreach ($pokemon as $pokemon_item)
                <div class="col-2 my-auto d-flex flex-column justify-content-center align-items-center">
                    <a href="/pokemon/{{$pokemon_item->id}}">
                        <img src="/storage/img/{{$pokemon_item->src}}" alt="pokemon_img" height="100">
                    </a>
                    <span class="font-weight-bold text-center text-danger">{{$pokemon_item->types->type}}</span>
                </div>
                @if ($loop->iteration % 6 == 0)
            </div>
            <div class="row">
                        
                @endif
            @endforeach
        </div>
    </section>
@endsection