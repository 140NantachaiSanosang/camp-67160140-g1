@extends('template.default')

@section('content')
    <h1>POKEDEXS</h1>
    <form action="{{ url('/pokedexs') }}" method="post">
        @csrf
        <lable for="name">Name</lable>
        <input class="form-control" type="text" name="name" id="name">

        <lable for="type">Type</lable>
        <input class="form-control" type="text" name="type" id="type">

        <lable for="species">Species</lable>
        <input class="form-control" type="text" name="species" id="species">

        <lable for="height">Height</lable>
        <input class="form-control" type="decimal" name="height" id="height">

        <lable for="weight">Weight</lable>
        <input class="form-control" type="decimal" name="weight" id="weight">

        <lable for="hp">HP</lable>
        <input class="form-control" type="number" name="hp" id="hp">

        <lable for="attack">Attack</lable>
        <input class="form-control" type="number" name="attack" id="attack">

         <lable for="defense">Defense</lable>
        <input class="form-control" type="number" name="defense" id="defense">

        <lable for="image_url">image_url</lable>
        <input class="form-control" type="text" name="image_url" id="image_url">

        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
    @include('pokedexs.table')
@endsection
