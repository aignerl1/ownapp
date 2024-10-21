@extends('mylayouts.masterlayout1')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<div class="container mt-4">
    <h2 class="mb-4">Country Details</h2>

    <div class="card">
        <div class="card-body">
            <p>
                <strong>Country:</strong>
                {{ $myCountry->country }}
            </p>
            <p>
                <strong>Population:</strong>
                {{ $myCountry->population }}
            </p>
            <p>
                <strong>Size:</strong>
                {{ $myCountry->size }}
            </p>
            <p>
                <strong>Language:</strong>
                {{ $myCountry->language }}
            </p>
            <p>
                <strong>Capital:</strong>
                {{ $myCountry->capital }}
            </p>
            <p>
                <strong>Currency:</strong>
                {{ $myCountry->currency }}
            </p>
            <p>
                <strong>GDP:</strong>
                {{ $myCountry->gdp }}
            </p>
            <p>
                <strong>EU Member:</strong>
                {{ $myCountry->is_eu_member }}
            </p>
            <p>
                <strong>Foundation Date:</strong>
                {{ $myCountry->foundation_date }}
            </p>
            <p>
                <strong>President:</strong>
                {{ $myCountry->president->president_name }}
            </p>
        </div>
    </div>
</div>

@endsection
