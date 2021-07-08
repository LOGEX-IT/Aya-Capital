<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class investController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('contact');
    }

    public function contact_en()
    {
        return view('en.contact');
    }

    public function projets_soutenus()
    {
        return view('projets_soutenus');
    }

    public function projets_soutenus_en()
    {
        return view('en.projets_soutenus');
    }

    public function nos_donateurs()
    {
        return view('nos_donateurs');
    }

    public function nos_donateurs_en()
    {
        return view('en.nos_donateurs');
    }

    public function gouvernance()
    {
        return view('gouvernance');
    }

    public function gouvernance_en()
    {
        return view('en.gouvernance');
    }

    public function structuration_leve_fonds()
    {
        return view('structuration_leve_fonds');
    }

    public function apropos()
    {
        return view('apropos');
    }
    public function apropos_en()
    {
        return view('en.apropos');
    }


    public function corporate_finance_projet()
    {
        return view('corporate_finance_projet');
    }

    public function corporate_finance_projet_en()
    {
        return view('en.corporate_finance_projet');
    }

    public function trade_finance()
    {
        return view('trade_finance');
    }

    public function trade_finance_en()
    {
        return view('en.trade_finance');
    }

    public function strategie()
    {
        return view('strategie');
    }
    public function strategie_en()
    {
        return view('en.strategie');
    }

    public function acquisition()
    {
        return view('acquisition');
    }
    public function acquisition_en()
    {
        return view('en.acquisition');
    }

    public function cession()
    {
        return view('cession');
    }
    public function cession_en()
    {
        return view('en.cession');
    }


    public function service_corporatif()
    {
        return view('service_corporatif');
    }
    public function service_corporatif_en()
    {
        return view('en.service_corporatif');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function administration_de_fonds()
    {
       return view('administration_de_fonds');
    }
    public function administration_de_fonds_en()
    {
       return view('en.administration_de_fonds');
    }

    public function aya_impact()
    {
       return view('impact_aya');
    }
    public function aya_impact_en()
    {
       return view('en.impact_aya');
    }

    public function mission()
    {
       return view('missions');
    }
    public function mission_en()
    {
       return view('en.missions');
    }

    public function fonctionnement()
    {
       return view('fonctionnement');
    }
    public function fonctionnement_en()
    {
       return view('en.fonctionnement');
    }


    public function formation_coaching()
    {
       return view('formation_coaching');
    }

    public function formation_coaching_en()
    {
       return view('en.formation_coaching');
    }

    public function investir($id)
    {
       return view('investir');
    }
    public function investir_en($id)
    {
       return view('en.investir');
    }

    public function investir2($id)
    {
       return view('investir2');
    }
    public function investir2_en($id)
    {
       return view('en.investir2');
    }

    public function investir3($id)
    {
       return view('investir3');
    }
    public function investir3_en($id)
    {
       return view('en.investir3');
    }

    public function equipe()
    {
       return view('equipe');
    }

    public function equipe_en()
    {
       return view('en.equipe');
    }


    public function projets_investissement($id)
    {
       return view('investir_details1');
    }
    public function projets2_investissement($id)
    {
       return view('investir_details2');
    }
    public function projets3_investissement($id)
    {
       return view('investir_details3');
    }
    public function projets4_investissement($id)
    {
       return view('investir_details4');
    }
    public function projets5_investissement($id)
    {
       return view('investir_details5');
    }
    public function projets6_investissement($id)
    {
       return view('investir_details6');
    }
    public function projets7_investissement($id)
    {
       return view('investir_details7');
    }
    public function projets8_investissement($id)
    {
       return view('investir_details8');
    }

    public function projets9_investissement($id)
    {
       return view('investir_details9');
    }

    public function projets10_investissement($id)
    {
       return view('investir_details10');
    }
    public function projets11_investissement($id)
    {
       return view('investir_details11');
    }
    public function projets12_investissement($id)
    {
       return view('investir_details12');
    }
    public function projets13_investissement($id)
    {
       return view('investir_details13');
    }
    public function projets14_investissement($id)
    {
       return view('investir_details14');
    }

    public function projets15_investissement($id)
    {
       return view('investir_details15');
    }
    public function projets16_investissement($id)
    {
       return view('investir_details16');
    }
    public function projets17_investissement($id)
    {
       return view('investir_details17');
    }
    public function projets18_investissement($id)
    {
       return view('investir_details18');
    }
    public function projets19_investissement($id)
    {
       return view('investir_details19');
    }
    public function projets20_investissement($id)
    {
       return view('investir_details20');
    }
    public function projets21_investissement($id)
    {
       return view('investir_details21');
    }

    public function projets22_investissement($id)
    {
       return view('investir_details22');
    }
    public function projets23_investissement($id)
    {
       return view('investir_details23');
    }
    public function projets24_investissement($id)
    {
       return view('investir_details24');
    }
    public function projets25_investissement($id)
    {
       return view('investir_details25');
    }

    public function investir1_agri($id)
    {
       return view('investir_agri.investir_details_agri1');
    }
    public function investir1_agri_en($id)
    {
       return view('en.investir_agri.investir_details_agri1');
    }
    public function investir2_agri($id)
    {
       return view('investir_agri.investir_details_agri2');
    }
    public function investir2_agri_en($id)
    {
       return view('en.investir_agri.investir_details_agri2');
    }
    public function investir_mine($id)
    {
       return view('investir_mine.investir_mine');
    }
    public function investir_mine_en($id)
    {
       return view('en.investir_mine.investir_mine');
    }
    public function investir_mine_details($id)
    {
       return view('investir_mine.projets_investissement_mine');
    }
    public function investir_transport($id)
    {
       return view('investir_transport.investir_transport');
    }
    public function investir_transport_en($id)
    {
       return view('en.investir_transport.investir_transport');
    }
    public function investir_elevage($id)
    {
       return view('investir_elevage.investir_elevage');
    }
    public function investir_elevage_en($id)
    {
       return view('en.investir_elevage.investir_elevage');
    }
    public function investir1_industrie($id)
    {
       return view('investir_industrie.investir1_industrie');
    }
    public function investir1_industrie_en($id)
    {
       return view('en.investir_industrie.investir1_industrie');
    }
    public function investir2_industrie($id)
    {
       return view('investir_industrie.investir2_industrie');
    }
    public function investir2_industrie_en($id)
    {
       return view('en.investir_industrie.investir2_industrie');
    }
    public function investir3_industrie($id)
    {
       return view('investir_industrie.investir3_industrie');
    }
    public function investir3_industrie_en($id)
    {
       return view('en.investir_industrie.investir3_industrie');
    }
    public function investir1_urbanisme($id)
    {
       return view('investir_urbanisme.investir1_urbanisme');
    }

    public function investir1_urbanisme_en($id)
    {
       return view('en.investir_urbanisme.investir1_urbanisme');
    }

    public function investir2_urbanisme($id)
    {
       return view('investir_urbanisme.investir2_urbanisme');
    }

    public function investir2_urbanisme_en($id)
    {
       return view('en.investir_urbanisme.investir2_urbanisme');
    }

    public function investir_tic($id)
    {
       return view('investir_tic.investir_tic');
    }
    public function investir_tic_en($id)
    {
       return view('en.investir_tic.investir_tic');
    }
    public function investir_tourisme($id)
    {
       return view('investir_tourisme.investir_tourisme');
    }
    public function investir_tourisme_en($id)
    {
       return view('en.investir_tourisme.investir_tourisme');
    }
    public function investir_finance($id)
    {
       return view('investir_finance.investir_finance');
    }

    public function investir_finance_en($id)
    {
       return view('en.investir_finance.investir_finance');
    }

    // PROJETS D'INVESTISSEMENT EN AGRICULTURE
    public function projets_investissement_agri1($id)
    {
       return view('investir_agri.projets_investissement_agri1');
    }
    public function projets_investissement_agri2($id)
    {
       return view('investir_agri.projets_investissement_agri2');
    }
    public function projets_investissement_agri3($id)
    {
       return view('investir_agri.projets_investissement_agri3');
    }
    public function projets_investissement_agri4($id)
    {
       return view('investir_agri.projets_investissement_agri4');
    }
    public function projets_investissement_agri5($id)
    {
       return view('investir_agri.projets_investissement_agri5');
    }
    public function projets_investissement_agri6($id)
    {
       return view('investir_agri.projets_investissement_agri6');
    }
    public function projets_investissement_agri7($id)
    {
       return view('investir_agri.projets_investissement_agri7');
    }
    public function projets_investissement_agri8($id)
    {
       return view('investir_agri.projets_investissement_agri8');
    }
    public function projets_investissement_agri9($id)
    {
       return view('investir_agri.projets_investissement_agri9');
    }
    public function projets_investissement_agri10($id)
    {
       return view('investir_agri.projets_investissement_agri10');
    }
    public function projets_investissement_agri11($id)
    {
       return view('investir_agri.projets_investissement_agri11');
    }
    public function projets_investissement_agri12($id)
    {
       return view('investir_agri.projets_investissement_agri12');
    }
    public function projets_investissement_agri13($id)
    {
       return view('investir_agri.projets_investissement_agri13');
    }
    public function projets_investissement_agri14($id)
    {
       return view('investir_agri.projets_investissement_agri14');
    }

    public function projets_investissement_mine($id)
    {
       return view('investir_mine.projets_investissement_mine');
    }
    public function projets_investissement_transport1($id)
    {
       return view('investir_transport.projets_investissement_transport1');
    }
    public function projets_investissement_transport2($id)
    {
       return view('investir_transport.projets_investissement_transport2');
    }
    public function projets_investissement_transport3($id)
    {
       return view('investir_transport.projets_investissement_transport3');
    }
    public function projets_investissement_transport4($id)
    {
       return view('investir_transport.projets_investissement_transport4');
    }
    public function projets_investissement_elevage1($id)
    {
       return view('investir_elevage.projets_investissement_elevage1');
    }
    public function projets_investissement_elevage2($id)
    {
       return view('investir_elevage.projets_investissement_elevage2');
    }
        public function projets_investissement_industrie1($id)
    {
       return view('investir_industrie.projets_investissement_industrie1');
    }
        public function projets_investissement_industrie2($id)
    {
       return view('investir_industrie.projets_investissement_industrie2');
    }
        public function projets_investissement_industrie3($id)
    {
       return view('investir_industrie.projets_investissement_industrie3');
    }
        public function projets_investissement_industrie4($id)
    {
       return view('investir_industrie.projets_investissement_industrie4');
    }
        public function projets_investissement_industrie5($id)
    {
       return view('investir_industrie.projets_investissement_industrie5');
    }
        public function projets_investissement_industrie6($id)
    {
       return view('investir_industrie.projets_investissement_industrie6');
    }
        public function projets_investissement_industrie7($id)
    {
       return view('investir_industrie.projets_investissement_industrie7');
    }
        public function projets_investissement_industrie8($id)
    {
       return view('investir_industrie.projets_investissement_industrie8');
    }
        public function projets_investissement_industrie9($id)
    {
       return view('investir_industrie.projets_investissement_industrie9');
    }
        public function projets_investissement_industrie10($id)
    {
       return view('investir_industrie.projets_investissement_industrie10');
    }

    public function projets_investissement_industrie11($id)
    {
       return view('investir_industrie.projets_investissement_industrie11');
    }
    public function projets_investissement_industrie12($id)
    {
       return view('investir_industrie.projets_investissement_industrie12');
    }
    public function projets_investissement_industrie13($id)
    {
       return view('investir_industrie.projets_investissement_industrie13');
    }
    public function projets_investissement_industrie14($id)
    {
       return view('investir_industrie.projets_investissement_industrie14');
    }
    public function projets_investissement_industrie15($id)
    {
       return view('investir_industrie.projets_investissement_industrie15');
    }
    public function projets_investissement_industrie16($id)
    {
       return view('investir_industrie.projets_investissement_industrie16');
    }
    public function projets_investissement_industrie17($id)
    {
       return view('investir_industrie.projets_investissement_industrie17');
    }
    public function projets_investissement_industrie18($id)
    {
       return view('investir_industrie.projets_investissement_industrie18');
    }
    public function projets_investissement_industrie19($id)
    {
       return view('investir_industrie.projets_investissement_industrie19');
    }
    public function projets_investissement_industrie20($id)
    {
       return view('investir_industrie.projets_investissement_industrie20');
    }

    public function projets_investissement_industrie21($id)
    {
       return view('investir_industrie.projets_investissement_industrie21');
    }
    public function projets_investissement_industrie22($id)
    {
       return view('investir_industrie.projets_investissement_industrie22');
    }
    public function projets_investissement_industrie23($id)
    {
       return view('investir_industrie.projets_investissement_industrie23');
    }
    public function projets_investissement_industrie24($id)
    {
       return view('investir_industrie.projets_investissement_industrie24');
    }
    public function projets_investissement_industrie25($id)
    {
       return view('investir_industrie.projets_investissement_industrie25');
    }
    public function projets_investissement_industrie26($id)
    {
       return view('investir_industrie.projets_investissement_industrie26');
    }


    // LES ROUTES D'INVESTISSEMENT EN URBANISME
    public function projets_investissement_urbanisme1($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme1');
    }
    public function projets_investissement_urbanisme2($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme2');
    }
    public function projets_investissement_urbanisme3($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme3');
    }
    public function projets_investissement_urbanisme4($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme4');
    }
    public function projets_investissement_urbanisme5($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme5');
    }
    public function projets_investissement_urbanisme6($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme6');
    }
    public function projets_investissement_urbanisme7($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme7');
    }
    public function projets_investissement_urbanisme8($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme8');
    }
    public function projets_investissement_urbanisme9($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme9');
    }
    public function projets_investissement_urbanisme10($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme10');
    }

    public function projets_investissement_urbanisme11($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme11');
    }
    public function projets_investissement_urbanisme12($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme12');
    }
    public function projets_investissement_urbanisme13($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme13');
    }
    public function projets_investissement_urbanisme14($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme14');
    }
    public function projets_investissement_urbanisme15($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme15');
    }
    public function projets_investissement_urbanisme16($id)
    {
       return view('investir_urbanisme.projets_investissement_urbanisme16');
    }


    // LES INVESTISSEMENTS EN TIC
    public function projets_investissement_tic1($id)
    {
       return view('investir_tic.projets_investissement_tic1');
    }
    public function projets_investissement_tic2($id)
    {
       return view('investir_tic.projets_investissement_tic2');
    }
    public function projets_investissement_tic3($id)
    {
       return view('investir_tic.projets_investissement_tic3');
    }
    public function projets_investissement_tic4($id)
    {
       return view('investir_tic.projets_investissement_tic4');
    }

    // LES INVESTISSEMENTS EN TOURISME
    public function projets_investissement_tourisme1($id)
    {
       return view('investir_tourisme.projets_investissement_tourisme1');
    }
    public function projets_investissement_tourisme2($id)
    {
       return view('investir_tourisme.projets_investissement_tourisme2');
    }
    public function projets_investissement_tourisme3($id)
    {
       return view('investir_tourisme.projets_investissement_tourisme3');
    }
    public function projets_investissement_tourisme4($id)
    {
       return view('investir_tourisme.projets_investissement_tourisme4');
    }

    // LES INVESTISSEMENTS EN TOURISME
    public function projets_investissement_finance1($id)
    {
       return view('investir_finance.projets_investissement_finance1');
    }
    public function projets_investissement_finance2($id)
    {
       return view('investir_finance.projets_investissement_finance2');
    }
    public function projets_investissement_finance3($id)
    {
       return view('investir_finance.projets_investissement_finance3');
    }
    public function projets_investissement_finance4($id)
    {
       return view('investir_finance.projets_investissement_finance4');
    }
    public function projets_investissement_finance5($id)
    {
       return view('investir_finance.projets_investissement_finance5');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
