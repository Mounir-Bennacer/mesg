<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mesg;
use App\ChargeAffaires;
use App\User;
use App\GroupeTechnique;

class MesgsController extends Controller
{

    /* protected $mesg; */
    /* public function __construct(Mesg $mesg) */
    /* { */
    /*     $this->mesg = $mesg; */
    /* } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesgs = Mesg::all();
        return view('mesgs.index', compact('mesgs'));
    }

    public function showAll()
    {
        return Mesg::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chargeAffaires = ChargeAffaires::all();
        $groupes = GroupeTechnique::all();
        return view('mesgs.create', compact('chargeAffaires', 'groupes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $mesg = Mesg::create($request->all()); */
        /* dd(\Auth::user()->nom); */
        dd($request->responsable);
        $mesg = Mesg::create([
            'user_id' => auth()->id(),
            'programme' => $request->programme,
            'num' => $request->numero,
            'nb_pce' => $request->nb_pce,
            'nb_sg' => $request->nb_sg,
            'adresse' => $request->adresse,
            'code_postal' => $request->code_postal,
            'commune' => $request->commune,
            'batiment' => $request->batiment,
            'gtc_id' => $request->gtc,
            'charge_affaire_id' => $request->responsable,
            'delai' => $request->delai,
            'date_reception_mail' => $request->date_reception_mail,
            'date_reception_cm' => $request->date_reception_cm,
            'date_souhaite' => $request->date_souhaite,
            'charge_affaire_id' =>$request->responsable,
            'groupe_technique_id' => $request->gtc
      ]);
        return response()->json($mesg, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesgs  $mesgs
     * @return \Illuminate\Http\Response
     */
    public function show(Mesg $mesg)
    {
        return $mesg;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesgs  $mesgs
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesg $mesg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesgs  $mesgs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mesg $mesg)
    {
        /* $mesg = $this->mesg->findOrFail($mesgs); */
        $mesg->update($request->all());
        return response()->json($mesg, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesgs  $mesgs
     * @return \Illuminate\Http\Response
     */
    public function delete(Mesg $mesg)
    {
        /* $mesg = $this->findOrFail($mesgs); */
        $mesg->delete();
        return response()->json(null,204);
    }
}
