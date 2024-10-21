@extends('mylayouts.masterlayout1')
@section('sum')
    <div class="container">
        <h2>Ergebnis der Summenberechnung</h2>
        <table class="table table-hover" style="width:50%">
            <thead>
                <tr>
                    <th>Population</th>
                </tr>
            </thead>
            <tbody>
            @foreach($myCountry as $country)
                    <tr>
                        <td>{{ $country->population }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td>Population</td>
                    <td>{{ $sum }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('countries.index') }}" class="btn btn-primary">Zurück</a>
    </div>
@endsection