@extends('layouts.dropoff-template')

@section('title', 'Dropoff locations')

@section('navigation')
    @include('dropoff.navigation') <!-- same directory "navigation.blade.php" -->
@endsection

@section('content')

<h3>Update dropoff location</h3>

<div id="results"></div>
<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="text" name="description" placeholder="Description"><br>
<?php
        //SELECT stop FROM stop WHERE id=10 OR id=235 OR id=311 OR id=425 OR id=432 OR id=521 OR id=777 OR id=782 OR id=792 OR id=820
        $stop = array(
            array('id' => '10','stop' => 'Altlinster'),
            array('id' => '235','stop' => 'Ehner'),
            array('id' => '311','stop' => 'Froumillen'),
            array('id' => '425','stop' => 'Hobscheid'),
            array('id' => '432','stop' => 'Hollermühle'),
            array('id' => '521','stop' => 'Kobenbour'),
            array('id' => '777','stop' => 'Rodange'),
            array('id' => '782','stop' => 'Roedt'),
            array('id' => '792','stop' => 'Roost (Bissen)'),
            array('id' => '820','stop' => 'Schengen')
        );
        ?>
    <select name="location_id" value="location_id">
        @foreach ($stop as $s)
        <option value="{{ $s['id'] }}" name="{{ $s['id'] }}" id="{{ $s['id'] }}">{{ $s['stop'] }}</option>
        @endforeach
    </select>

    <input type="submit" value="Add dropoff location">
</form>

@endsection
