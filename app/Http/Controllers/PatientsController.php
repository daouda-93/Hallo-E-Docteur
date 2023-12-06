<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rendezvous;
use App\Models\Docteurs;
use App\Models\Patients;

class RendezvousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rendezvous = Patients::all();
        return view('patient.liste', compact('patient'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $docteurs = Patients::all();
        return view('Patient.ajouter',compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $request->validate([

        //     'nom'=>'required',
        //     'prenom'=>'required',
        //     'date_naissance'=>'required',
        //     'adresse'=>'required',
        //     'sexe'=>'required',
        //     'specialite'=>'required',
        //     'telephone'=>'required',
        //     'photo'=>'required',

        // ]);

        $patient = new Patients();
        $patient->nom = $request->nom;
        $patient->prenom = $request->prenom;
        $patient->age = $request->age;
        $patient->adresse = $request->adresse;
        $patient->sexe = $request->sexe;
        $patient->telephone = $request->telephone ;
        $patient->date_rdv = $request->date_rdv;
        $patient->heure_rdv = $request->heure_rdv;
        $patient->statut = $request->statut;
        $patient->patient_id = $request->patient_id;


        $patient->save();

        return redirect()->route('welcome')->with('status', 'Votre patient a été pris en compte.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('Patients.details',[

            'patient' => Patients::find($id)

      ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rendezvous = Patients::find($id);
        return view('Patient.modifier',compact('patient'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $patient = Patients::find($id);

        $patient->update([
            'statut' => $request->statut,
             ]);

        return redirect()->route('patients.index')->with('status', 'Un Patient a  été modifié avec succes.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rendezvous = Patients::find($id);
        $rendezvous->delete();
        return redirect()->route('patients.index')->with('status', 'Patient a  été supprimé avec succes.');
}
}
