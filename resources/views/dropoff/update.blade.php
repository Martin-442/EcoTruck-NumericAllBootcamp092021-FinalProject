@extends('layouts.dropoff-template')

@section('title', 'Dropoff locations')

@section('navigation')
    @include('dropoff.navigation') <!-- same directory "navigation.blade.php" -->
@endsection

@section('content')

<h3>Update dropoff location</h3>

<div id="results"></div>
<!-- https://ekimunyime.medium.com/working-with-forms-in-laravel-8-a28283301622 -->
<!-- https://laravelcollective.com/docs/6.x/html -->
<!-- composer require laravelcollective/html -->
<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name" value="{{$dropoff->name}}"><br>
    <input type="text" name="description" placeholder="Description" value="{{$dropoff->description}}"><br>
<?php
        //SELECT stop FROM stop WHERE id=10 OR id=235 OR id=311 OR id=425 OR id=432 OR id=521 OR id=777 OR id=782 OR id=792 OR id=820
/*         $stop = array(
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
 */
        $stop = array(
            '10' => 'Altlinster',
            '235' => 'Ehner',
            '311' => 'Froumillen',
            '425' => 'Hobscheid',
            '432' => 'Hollermühle',
            '521' => 'Kobenbour',
            '777' => 'Rodange',
            '782' => 'Roedt',
            '792' => 'Roost (Bissen)',
            '820' => 'Schengen'
        );
        $stop_id = array(10, 235, 311, 425, 432, 521, 777, 782, 792, 820  );
        $stop_name = array('Altlinster', 'Ehner', 'Froumillen', 'Hobscheid', 'Hollermühle', 'Kobenbour', 'Rodange', 'Roedt', 'Roost (Bissen)', 'Schengen' );
        ?>
    <br>
    {{ Form::select('location_id', $stop, $dropoff->location_id, ['id'=>'location_id', 'class' => 'form-control', 'placeholder' => 'Select a yard site']) }}
    {{ Form::label('location_id','location_id*') }}
    <br>

    <input type="submit" value="Update dropoff location">
</form>

@endsection
