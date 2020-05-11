<?php

namespace App\Http\Controllers;

use App\Mesgs as Mesg;
use App\ChargeAffaires;
use Illuminate\Http\Request;
use \App\User;
class MesgsController extends Controller
{

    protected $mesg;
    public function __construct(Mesg $mesg)
    {
        $this->mesg = $mesg;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = 'Mounir';
      $alert = false;
      $appi = 'Lyon';
      return view('mesgs.index', compact('user','alert','appi'));
    }

    /**
     * Display all the data for MESGS
     *
     * @return \App\MESGS
     */
    public function getData()
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
        $title = 'Création d\'une MESG';
        $user = 'Mounir';
        $chargeAffaires = ChargeAffaires::all();
        return view('mesgs.create', compact('title','user', 'chargeAffaires'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Mesg::create([
            'description' => request('description'),
            'numero' => request('numero'),
            'programme' => request('programme'),
            'pce' => request('pce'),
            'nb_pce' => request('nb_pce'),
            'nb_sg' => request('nb_sg'),
            'batiment' => request('batiment'),
            'commune' => request('commune'),
            'adresse' => request('adresse'),
            'gtc_id' => request('gtc_id'),
            'date_reception_mail' => request('date_reception_mail'),
            'date_reception_cm' => request('date_reception_cm'),
            'delai' => request('delai'),
            'date_souhaite' => request('date_souhaite'),
            'user_id' => auth()->id()

      ]);
      /* $this->validate(request(),[ */
      /*       'description' => request('description'), */
      /*       'numero' => request('numero'), */
      /*       'programme' => request('programme'), */
      /*       'pce' => request('pce'), */
      /*       'nb_pce' => request('nb_pce'), */
      /*       'nb_sg' => request('nb_sg'), */
      /*       'batiment' => request('batiment'), */
      /*       'commune' => request('commune'), */
      /*       'adresse' => request('adresse'), */
      /*       'gtc_id' => request('gtc_id'), */
      /*       'date_reception_mail' => request('date_reception_mail'), */
      /*       'date_reception_cm' => request('date_reception_cm'), */
      /*       'delai' => request('delai'), */
      /*       'date_souhaite' => request('date_souhaite'), */
      /*       'user_id' => auth()->id() */

      /* ]); */

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesgs  $mesgs
     * @return \Illuminate\Http\Response
     */
    public function show(Mesgs $mesgs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesgs  $mesgs
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesgs $mesgs)
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
    public function update(Request $request, Mesgs $mesgs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesgs  $mesgs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesgs $mesgs)
    {
        //
    }

}
