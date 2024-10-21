<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\President;



class CountryController extends Controller
{

  private $validator_rules = [
    'country' => 'required|string|min:2|max:10',
    'population' => 'required|integer|min:1000000|max:50000000',
    'size' => 'required|integer|min:50000|max:100000',
    'language' => 'required|string|min:2|max:10',
    'capital' => 'required|string|min:2|max:10',
    'currency' => 'required|string|min:2|max:10',
    'gdp' => 'required|integer|min:100000|max:800000',
    'is_eu_member' => 'required|in:Ja,Nein',
    'foundation_date' => 'required|date',
];
  
    /**
     * Display a listing of the resource.
     */
    public function index() {
      try{
      $country = \App\Models\Country::all();
      return view('countries.index')->with('myCountry', $country);

    }catch (\Illuminate\Database\QueryException $ex) {
        return redirect()->route('error')->withErrors("Datenbankzugriff fehlgeschlagen: {$ex->getMessage()} : {$ex->getCode()}");
      } catch (Exception $ex) {
        return redirect()->route('error')->withErrors("Fehler aufgetreten:: {$ex->getMessage()} : {$ex->getCode()}");
      }
  }
  
  
  
    /**
     * Show the form for creating a new resource.
     */
    public function create() {
      $presidents = President::orderBy('president_name')->get();
      return view('countries.create', compact('presidents'));
    }
  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
      try{
        $this->validate($request, $this->validator_rules);

      $country = new Country();
      $country->country = $request->country;
      $country->population = $request->population;
      $country->size = $request->size;
      $country->language = $request->language;
      $country->capital = $request->capital;
      $country->currency = $request->currency;
      $country->gdp = $request->gdp;
      $country->is_eu_member = $request->is_eu_member;
      $country->foundation_date = $request->foundation_date;
      $country->president_id = $request->president_id;
      $country->save();
      return redirect()->route('countries.index');

    }catch (\Illuminate\Database\QueryException $ex) {
        return redirect()->route('error')->withErrors("Datenbankzugriff fehlgeschlagen: {$ex->getMessage()} : {$ex->getCode()}");
      } catch (Exception $ex) {
        return redirect()->route('error')->withErrors("Fehler aufgetreten:: {$ex->getMessage()} : {$ex->getCode()}");
      }
  }
  

    /**
     * Display the specified resource.
     */
    public function show($id) {
      try{
      $country = Country::find($id);
      return view('countries.show')->with('myCountry', $country);

    }catch (\Illuminate\Database\QueryException $ex) {
        return redirect()->route('error')->withErrors("Datenbankzugriff fehlgeschlagen: {$ex->getMessage()} : {$ex->getCode()}");
      } catch (Exception $ex) {
        return redirect()->route('error')->withErrors("Fehler aufgetreten:: {$ex->getMessage()} : {$ex->getCode()}");
      }
  }
  

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
      try{
      $country = Country::find($id);
      $presidents = President::orderBy('president_name')->get();
      return view('countries.edit', ['presidents'=>$presidents, 'country'=>$country]);

    }catch (\Illuminate\Database\QueryException $ex) {
        return redirect()->route('error')->withErrors("Datenbankzugriff fehlgeschlagen: {$ex->getMessage()} : {$ex->getCode()}");
      } catch (Exception $ex) {
        return redirect()->route('error')->withErrors("Fehler aufgetreten:: {$ex->getMessage()} : {$ex->getCode()}");
      }
  }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
      try{
        $this->validate($request, $this->validator_rules);

      $country = Country::find($id);
      $country->country = $request->country;
      $country->population = $request->population;
      $country->size = $request->size;
      $country->language = $request->language;
      $country->capital = $request->capital;
      $country->currency = $request->currency;
      $country->gdp = $request->gdp;
      $country->is_eu_member = $request->is_eu_member;
      $country->foundation_date = $request->foundation_date;
      $country->president_id = $request->president_id;
      $country->save();
      return redirect()->route('countries.index');

    }catch (\Illuminate\Database\QueryException $ex) {
        return redirect()->route('error')->withErrors("Datenbankzugriff fehlgeschlagen: {$ex->getMessage()} : {$ex->getCode()}");
      } catch (Exception $ex) {
        return redirect()->route('error')->withErrors("Fehler aufgetreten:: {$ex->getMessage()} : {$ex->getCode()}");
      }
  }
  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
      try{
      $country = Country::find($id);
      if ($country) {
          
          $country->delete();
      } else {
          
      }
      return redirect()->route('countries.index');

    }catch (\Illuminate\Database\QueryException $ex) {
        return redirect()->route('error')->withErrors("Datenbankzugriff fehlgeschlagen: {$ex->getMessage()} : {$ex->getCode()}");
      } catch (Exception $ex) {
        return redirect()->route('error')->withErrors("Fehler aufgetreten:: {$ex->getMessage()} : {$ex->getCode()}");
      }
  }
      
  public function search(Request $request)
  {
      try {
          $searchInput = $request->input('search_query');
          $country = Country::where('country', 'like', '%' . $searchInput . '%')->get();
          $query = $request->input('mysearch'); 
          $myCountry = Country::where('country', 'LIKE', "$query%")->get(); 
          return view('countries.index')->with('myCountry', $myCountry); // Korrigierter Code: 'countries' zu 'myCountry'
      } catch (\Illuminate\Database\QueryException $ex) {
          return redirect()->route('error')->withErrors("Datenbankzugriff fehlgeschlagen: {$ex->getMessage()} : {$ex->getCode()}");
      } catch (Exception $ex) {
          return redirect()->route('error')->withErrors("Fehler aufgetreten:: {$ex->getMessage()} : {$ex->getCode()}");
      }
  }
  
  public function sum(Request $request){
    try {
      $country = Country::all();
      $sum = $country->sum('population');
      return view('countries.sum', ['myCountry' => $country, 'sum' => $sum]);
    } catch (Exception $e) {
        return redirect()->back()->withErrors(['error' => 'Fehler bei der Berechnung der Summe der Population: ' . $e->getMessage()]);
    }
}
  
}

