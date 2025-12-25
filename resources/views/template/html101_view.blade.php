@extends('template.default')

@section('content')
<label>ชื่อ</label>
<input value="{{ $fname }}" readonly class="from-control">

<label>นามสกุล</label>
<input value="{{ $lname }}" readonly class="from-control">

<label>วันเกิด</label>
<input value="{{ $birthdate }}" readonly class="from-control">

<label>อายุ</label>
<input value="{{ $age }}" readonly class="from-control">

<label>เพศ</label>
<input value="{{ $sex }}" readonly class="from-control">

<label>รูป</label>
<input value="{{ $picture }}" readonly class="from-control">

<label>ที่อยู๋</label>
<input value="{{ $address }}" readonly class="from-control">

<label>สีที่ชอบ</label>
<input value="{{ $color }}" readonly class="from-control">

<label>แนวเพลงที่ชอบ</label>
<input value="{{ $song }}" readonly class="from-control">
@endsection
