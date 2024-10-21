@extends('mylayouts.masterlayout1')

@section('content')
<head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel=stylesheet type= "text/fonts" href="../css/font-awesome.min.css">
    <script defer src="../js/bootstrap.js"></script>
</head>
<h2>All European Countries</h2>
<table class="table table-bordered table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Id</th>
            <th>Country</th>
            <th>Population</th>
            <th>Size</th>
            <th>Language</th>
            <th>Capital</th>
            <th>Currency</th>
            <th>GDP</th>
            <th>EU Member</th>
            <th>Foundation Date</th>
            <th>President</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($myCountry as $country)
        <tr>
            <td>{{ $country->id }}</td>
            <td>{{ $country->country }}</td>
            <td>{{ $country->population }}</td>
            <td>{{ $country->size }}</td>
            <td>{{ $country->language }}</td>
            <td>{{ $country->capital }}</td>
            <td>{{ $country->currency }}</td>
            <td>{{ $country->gdp }}</td>
            <td>{{ $country->is_eu_member }}</td>
            <td>{{ $country->foundation_date }}</td>
            <td>{{ $country->president->president_name }}</td>
            <td>
                <a href="{{ route('countries.show', $country->id) }}" class="btn btn-info btn-sm">Show</a>
                <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form method="POST" action="{{ route('countries.destroy', $country->id) }}" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('countries.create') }}" class="btn btn-primary">Create</a>

<form method="get" action="{{ route('countries.search') }}">
      @csrf
      <div class="input-group">
      <input type="text" name="mysearch" class="form-control" placeholder="Suche nach Land">
      <div class="input-group-append">
      <button type="submit" class="btn btn-outline-secondary">Search for Country</button>
      </div>
      </div>
      </form>
      @section('sum')
          <div class="container">
              <h4>Summe berechnen</h4>
              <form method="POST" action="{{ route('countries.sum') }}" >
                  @csrf
                  <button type="submit" class="btn btn-dark">Summe der Population bilden</button>
              </form>
          </div>

          
        @endsection('sum')

@endsection
