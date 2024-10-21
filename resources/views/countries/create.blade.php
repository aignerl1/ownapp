@extends('mylayouts.masterlayout1')
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel=stylesheet type= "text/fonts" href="../css/font-awesome.min.css">
    <script defer src="../js/bootstrap.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2>Create a new Country</h2>
    <form method="post" action="{{ route('countries.store') }}">
        @csrf
        <div class="form-group">
            <label for="country"><strong>Country:</strong></label>
            <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" value="{{ old('country') }}"/>
            @error('country')
            <div class="invalid-feedback">{{ $message }}</div>
            @else
            <small id="countryHelp" class="form-text text-muted">Enter the country name.</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="population"><strong>Population:</strong></label>
            <input type="number" class="form-control @error('population') is-invalid @enderror" id="population" name="population" value="{{ old('population') }}"/>
            @error('population')
            <div class="invalid-feedback">{{ $message }}</div>
            @else
            <small id="populationHelp" class="form-text text-muted">Enter the population.</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="size"><strong>Size:</strong></label>
            <input type="number" class="form-control @error('size') is-invalid @enderror" id="size" name="size" value="{{ old('size') }}"/>
            @error('size')
            <div class="invalid-feedback">{{ $message }}</div>
            @else
            <small id="sizeHelp" class="form-text text-muted">Enter the size (in square kilometers).</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="language"><strong>Language:</strong></label>
            <input type="text" class="form-control @error('language') is-invalid @enderror" id="language" name="language" value="{{ old('language') }}"/>
            @error('language')
            <div class="invalid-feedback">{{ $message }}</div>
            @else
            <small id="languageHelp" class="form-text text-muted">Enter the primary language.</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="capital"><strong>Capital:</strong></label>
            <input type="text" class="form-control @error('capital') is-invalid @enderror" id="capital" name="capital" value="{{ old('capital') }}"/>
            @error('capital')
            <div class="invalid-feedback">{{ $message }}</div>
            @else
            <small id="capitalHelp" class="form-text text-muted">Enter the capital city.</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="currency"><strong>Currency:</strong></label>
            <input type="text" class="form-control @error('currency') is-invalid @enderror" id="currency" name="currency" value="{{ old('currency') }}"/>
            @error('currency')
            <div class="invalid-feedback">{{ $message }}</div>
            @else
            <small id="currencyHelp" class="form-text text-muted">Enter the currency.</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="gdp"><strong>GDP:</strong></label>
            <input type="number" class="form-control @error('gdp') is-invalid @enderror" id="gdp" name="gdp" value="{{ old('gdp') }}"/>
            @error('gdp')
            <div class="invalid-feedback">{{ $message }}</div>
            @else
            <small id="gdpHelp" class="form-text text-muted">Enter the GDP (in USD).</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="is_eu_member"><strong>Is EU Member:</strong></label>
            <input type="text" class="form-control @error('is_eu_member') is-invalid @enderror" id="is_eu_member" name="is_eu_member" value="{{ old('is_eu_member') }}"/>
            @error('is_eu_member')
            <div class="invalid-feedback">{{ $message }}</div>
            @else
            <small id="isEuMemberHelp" class="form-text text-muted">Enter whether the country is an EU member.</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="foundation_date"><strong>Foundation Date:</strong></label>
            <input type="text" class="form-control" id="foundation_date" name="foundation_date" value="{{ old('foundation_date') }}"/>
            <small id="foundationDateHelp" class="form-text text-muted">Enter the foundation date.</small>
        </div>

        <div class="form-group">
                <label for="president">
                  <strong>President:</strong>
                </label>
            <select class="form-control form-select form-select-lg mb-3" id="president_id" name="president_id">
                @foreach($presidents as $president)
                  <option value="{{$president->id}}">{{$president->president_name}}</option>
                @endforeach
            </select>

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
</body>
</html>
