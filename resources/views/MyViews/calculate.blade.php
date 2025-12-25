@extends('template.default')

@section('title' , 'my view')
@section('content')
<ul>
    <?php

    for ($i=1; $i <=12 ; $i++) {
    ?>
        <li> {{$num}} X {{$i}} = {{$num * $i}}</li>
    <?php } ?>
</ul>
@endsection
