@extends('template.default')

@section('content')
    <h1>Flight Update</h1>
    <form action="{{ url('/flights'. $flight_update->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="name">NAME</label>
        <input class="form-control" type="text" name="name" id="name" value="{{ $flight_update->name }}">
        <label for="airline">AIRLINE</label>
        <input class="form-control" type="text=" name="airline" id="airline" value="{{ $flight_update->airline }}">
        <label for="number_of_seats">NUMBER_OF_SEATS</label>
        <input class="form-control" type="text" name="number_of_seats" id="number_of_seats" value="{{ $flight_update->number_of_seats }}">
        <label for="price">PRICE</label>
        <input class="form-control" type="text=" name="price" id="price" value="{{ $flight_update->price }}">
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
    @include('flights.table');
    @endsection
