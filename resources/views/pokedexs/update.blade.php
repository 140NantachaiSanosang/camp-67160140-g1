@extends('template.default')

@section('content')
    <h1>Pokedex Update</h1>
    <form action="{{ url('/pokedexs'. $flight_update->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">NAME</label>
        <input class="form-control" type="text" name="name" id="name" value="{{ $pokedex_update->name }}">

        <label for="type">TYPE</label>
        <input class="form-control" type="text=" name="type" id="type" value="{{ $pokedex_update->type }}">

        <label for="species">SPECIES</label>
        <input class="form-control" type="text" name="species" id="species" value="{{ $pokedex_update->species }}">

        <label for="height">HEIGHT</label>
        <input class="form-control" type="decimal=" name="height" id="height" value="{{ $pokedex_update->height }}">

        <label for="weight">WEIGHT</label>
        <input class="form-control" type="decimal" name="weight" id="weight" value="{{ $pokedex_update->weight }}">

        <label for="hp">HP</label>
        <input class="form-control" type="number=" name="hp" id="hp" value="{{ $pokedex->hp }}">

        <label for="attack">ATTACK</label>
        <input class="form-control" type="number" name="attack" id="attack" value="{{ $pokedex_update->attack }}">

        <label for="defense">DEFENSE</label>
        <input class="form-control" type="number=" name="defense" id="defense" value="{{ $pokedex_update->defense }}">

        <label for="image_url">image_url</label>
        <input class="form-control" type="text=" name="image_url" id="image_url" value="{{ $pokedex_update->image_url }}">

        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
    @include('pokedexs.table');
    @endsection
