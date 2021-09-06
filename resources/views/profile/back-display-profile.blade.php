@extends('layouts.mytemplate')

@section('title', 'Company Profile')
@section('css')
<link href="{{ asset('css/display-profile.css') }}" rel="stylesheet">

    
@endsection
@section('content')

    <h3>Profile details</h3>
    <div class="details" >

        <section>
            <p><strong>First name: </strong> {{ $userDetails->first_name }}</p>
            <p><strong>Last name: </strong> {{ $userDetails->last_name }}</p>
            <p><strong>City: </strong> {{ $userDetails->city}}</p>
            <p><strong>Email: </strong> {{ $userDetails->email }}</p>
            
        </section>
        <section>
    
            <p><strong>Company name : </strong> {{ $companyDetails->company_name }}</p>
            <p><strong>Address: </strong> {{ $companyDetails->address }}</p>
            <p><strong> City: </strong> {{ $companyDetails->city }}</p>
            <p><strong> Zip Code: </strong> {{ $companyDetails->zip_code }}</p>
            <p><strong> Email: </strong> {{ $companyDetails->email}}</p>
    
           
        </section>
    </div>

   
    <button><a href="{{ route('profile.update') }}">Edit profile</a></button>
    
@endsection