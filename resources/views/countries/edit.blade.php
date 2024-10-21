@extends('mylayouts.masterlayout1')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <script defer src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</head>
<h2 class="my-4">Edit Country</h2>
<form action="{{ route('countries.update', $country->id) }}" method="POST">
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="country">Country:</label>
        <input type="text" class="form-control" id="country" name="country" value="{{ $country->country }}" placeholder="Enter the country name.">
    </div>
    <div class="form-group">
        <label for="population">Population:</label>
        <input type="number" class="form-control" id="population" name="population" value="{{ $country->population }}" placeholder="Enter the population.">
    </div>
    <div class="form-group">
        <label for="size">Size:</label>
        <input type="number" class="form-control" id="size" name="size" value="{{ $country->size }}" placeholder="Enter the size (in square kilometers).">
    </div>
    <div class="form-group">
        <label for="language">Language:</label>
        <input type="text" class="form-control" id="language" name="language" value="{{ $country->language }}" placeholder="Enter the primary language.">
    </div>
    <div class="form-group">
        <label for="capital">Capital:</label>
        <input type="text" class="form-control" id="capital" name="capital" value="{{ $country->capital }}" placeholder="Enter the capital city.">
    </div>
    <div class="form-group">
        <label for="currency">Currency:</label>
        <input type="text" class="form-control" id="currency" name="currency" value="{{ $country->currency }}" placeholder="Enter the currency.">
    </div>
    <div class="form-group">
        <label for="gdp">GDP:</label>
        <input type="number" class="form-control" id="gdp" name="gdp" value="{{ $country->gdp }}" placeholder="Enter the GDP (in USD).">
    </div>
    <div class="form-group">
        <label for="is_eu_member">Is EU Member:</label>
        <input type="text" class="form-control" id="is_eu_member" name="is_eu_member" value="{{ $country->is_eu_member }}" placeholder="Enter whether the country is an EU member.">
    </div>
    <div class="form-group">
        <label for="foundation_date">Foundation Date:</label>
        <input type="date" class="form-control" id="foundation_date" name="foundation_date" value="{{ $country->foundation_date }}" placeholder="Enter the foundation date.">
    </div>
    <div class="mb-3">
              <label for="president" class="form-label">
                <strong>president_id:</strong>
              </label>
                <select class="form-control" style="width:25%" id="president_id" name="president_id">
                @foreach($presidents as $president)
                  <option value="{{$president->id}}" {{($president->president_id === $president->id) ?
                  'selected' : ''}}>{{$president->president_name}}</option>
                @endforeach
                </select>
            </div>
    <button type="submit" class="btn btn-primary">Save Changes</button>
</form>

@endsection
