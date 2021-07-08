<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/projets-soutenus','investController@projets_soutenus');
Route::get('/en/supported-projects','investController@projets_soutenus_en');
Route::get('/nos-donateurs','investController@nos_donateurs');
Route::get('/en/donors','investController@nos_donateurs_en');
Route::get('/gouvernance','investController@gouvernance');
Route::get('/en/gouvernance','investController@gouvernance_en');
Route::get('/equipe','investController@equipe');
Route::get('/en/team','investController@equipe_en');
Route::get('/fonctionnement','investController@fonctionnement');
Route::get('/en/fonctionnement','investController@fonctionnement_en');
Route::get('/formation-et-coaching','investController@formation_coaching');
Route::get('/en/training-and-coaching','investController@formation_coaching_en');
Route::get('/aya-impact','investController@aya_impact');
Route::get('/en/aya-impact','investController@aya_impact_en');
Route::get('/mission','investController@mission');
Route::get('/en/mission','investController@mission_en');
Route::get('/administration-de-fonds','investController@administration_de_fonds');
Route::get('/en/fund-administration','investController@administration_de_fonds_en');
Route::get('/service-corpatif','investController@service_corporatif');
Route::get('/en/corporate-service','investController@service_corporatif_en');
Route::get('/cession','investController@cession');
Route::get('/en/cession','investController@cession_en');
Route::get('/contact','investController@contact');

Route::get('/acquisition','investController@acquisition');
Route::get('/en/acquisition','investController@acquisition_en');
Route::get('/strategie','investController@strategie');
Route::get('/en/strategy','investController@strategie_en');
Route::get('/trade-finance','investController@trade_finance');
Route::get('/en/trade-finance','investController@trade_finance_en');
Route::get('/apropos','investController@apropos');
Route::get('/en/contact','investController@contact_en');
Route::get('/en/about-us','investController@apropos_en');
Route::get('/structuration_leve_fonds','investController@structuration_leve_fonds');
Route::get('/corporate-finance-projet','investController@corporate_finance_projet');
Route::get('/en/corporate-finance-projet','investController@corporate_finance_projet_en');

// LES ROUTES DU MENU INVESTISSEMENT EN ENERGIE
Route::get('/investir/{id}','investController@investir');
Route::get('/en/invest/{id}','investController@investir_en');
Route::get('/investir2/{id}','investController@investir2');
Route::get('/en/invest2/{id}','investController@investir2_en');
Route::get('/investir3/{id}','investController@investir3');
Route::get('/en/invest3/{id}','investController@investir3_en');
Route::get('/projets-investissement/{id}','investController@projets_investissement');
Route::get('/projets2-investissement/{id}','investController@projets2_investissement');
Route::get('/projets3-investissement/{id}','investController@projets3_investissement');
Route::get('/projets4-investissement/{id}','investController@projets4_investissement');
Route::get('/projets5-investissement/{id}','investController@projets5_investissement');
Route::get('/projets6-investissement/{id}','investController@projets6_investissement');
Route::get('/projets7-investissement/{id}','investController@projets7_investissement');
Route::get('/projets8-investissement/{id}','investController@projets8_investissement');
Route::get('/projets9-investissement/{id}','investController@projets9_investissement');
Route::get('/projets10-investissement/{id}','investController@projets10_investissement');
Route::get('/projets11-investissement/{id}','investController@projets11_investissement');
Route::get('/projets12-investissement/{id}','investController@projets12_investissement');
Route::get('/projets13-investissement/{id}','investController@projets13_investissement');
Route::get('/projets14-investissement/{id}','investController@projets14_investissement');
Route::get('/projets15-investissement/{id}','investController@projets15_investissement');
Route::get('/projets16-investissement/{id}','investController@projets16_investissement');
Route::get('/projets17-investissement/{id}','investController@projets17_investissement');
Route::get('/projets18-investissement/{id}','investController@projets18_investissement');
Route::get('/projets19-investissement/{id}','investController@projets19_investissement');
Route::get('/projets20-investissement/{id}','investController@projets20_investissement');
Route::get('/projets21-investissement/{id}','investController@projets21_investissement');
Route::get('/projets22-investissement/{id}','investController@projets22_investissement');
Route::get('/projets23-investissement/{id}','investController@projets23_investissement');
Route::get('/projets24-investissement/{id}','investController@projets24_investissement');
Route::get('/projets25-investissement/{id}','investController@projets25_investissement');
// FIN DES ROUTES D'INVESTISSEMENT EN ENERGIE

// LES ROUTES D'INVESTISSEMENT EN AGRICULTURE
Route::get('/investissement-en-agriculture/{id}','investController@investir1_agri');
Route::get('/en/investment-in-agriculture/{id}','investController@investir1_agri_en');
Route::get('/investissement2-en-agriculture/{id}','investController@investir2_agri');
Route::get('/en/investment2-in-agriculture/{id}','investController@investir2_agri_en');
Route::get('/projets-investissement-agri1/{id}','investController@projets_investissement_agri1');
Route::get('/projets-investissement-agri2/{id}','investController@projets_investissement_agri2');
Route::get('/projets-investissement-agri3/{id}','investController@projets_investissement_agri3');
Route::get('/projets-investissement-agri4/{id}','investController@projets_investissement_agri4');
Route::get('/projets-investissement-agri5/{id}','investController@projets_investissement_agri5');
Route::get('/projets-investissement-agri6/{id}','investController@projets_investissement_agri6');
Route::get('/projets-investissement-agri7/{id}','investController@projets_investissement_agri7');
Route::get('/projets-investissement-agri8/{id}','investController@projets_investissement_agri8');
Route::get('/projets-investissement-agri9/{id}','investController@projets_investissement_agri9');
Route::get('/projets-investissement-agri10/{id}','investController@projets_investissement_agri10');
Route::get('/projets-investissement-agri11/{id}','investController@projets_investissement_agri11');
Route::get('/projets-investissement-agri12/{id}','investController@projets_investissement_agri12');
Route::get('/projets-investissement-agri13/{id}','investController@projets_investissement_agri13');
Route::get('/projets-investissement-agri14/{id}','investController@projets_investissement_agri14');
// FIN DES ROUTES D'INVESTISSEMENT EN AGRICULTURE

// LES ROUTES D'INVESTISSEMENT EN MINE
Route::get('/investir-mine/{id}','investController@investir_mine');
Route::get('/en/invest-mine/{id}','investController@investir_mine_en');
Route::get('/investissement-en-mine/{id}','investController@investir_mine_details');
// FIN DES ROUTES D'INVESTISSEMENT EN MINE

    //DEBUT ROUTE DE MINE
   Route::get('/en/investment-in-mine/{id}','DetailsinvestirController@investir_mine_details');
    //FIN ROUTES DETAILS INVESTISSEMENT EN MINE

// LES ROUTES D'INVESTISSEMENT EN TRANSPORT
Route::get('/investir-transport/{id}','investController@investir_transport');
Route::get('/en/invest-transport/{id}','investController@investir_transport_en');
Route::get('/projets-investissement-transport1/{id}','investController@projets_investissement_transport1');
Route::get('/projets-investissement-transport2/{id}','investController@projets_investissement_transport2');
Route::get('/projets-investissement-transport3/{id}','investController@projets_investissement_transport3');
Route::get('/projets-investissement-transport4/{id}','investController@projets_investissement_transport4');


Route::get('/en/transport-investment-projects1/{id}','DetailsinvestirController@projets_investissement_transport1');
Route::get('/en/transport-investment-projects2/{id}','DetailsinvestirController@projets_investissement_transport2');
Route::get('/en/transport-investment-projects3/{id}','DetailsinvestirController@projets_investissement_transport3');
Route::get('/en/transport-investment-projects4/{id}','DetailsinvestirController@projets_investissement_transport4');
// FIN DES ROUTES D'INVESTISSEMENT EN TRANSPORT

// LES ROUTES D'INVESTISSEMENT EN ELEVAGE
Route::get('/investir-elevage/{id}','investController@investir_elevage');
Route::get('/en/invest-breeding/{id}','investController@investir_elevage_en');
Route::get('/projets-investissement-elevage1/{id}','investController@projets_investissement_elevage1');
Route::get('/projets-investissement-elevage2/{id}','investController@projets_investissement_elevage2');


Route::get('/en/livestock-investment-projects1/{id}','DetailsinvestirController@projets_investissement_elevage1');
Route::get('/en/livestock-investment-projects2/{id}','DetailsinvestirController@projets_investissement_elevage2');
// FIN DES ROUTES D'INVESTISSEMENT EN ELEVAGE

// LES ROUTES D'INVESTISSEMENT EN INDUSTRIE
Route::get('/investir1-industrie/{id}','investController@investir1_industrie');
Route::get('/en/invest1-industry/{id}','investController@investir1_industrie_en');
Route::get('/investir2-industrie/{id}','investController@investir2_industrie');
Route::get('/en/invest2-industry/{id}','investController@investir2_industrie_en');
Route::get('/investir3-industrie/{id}','investController@investir3_industrie');
Route::get('/en/invest3-industry/{id}','investController@investir3_industrie_en');
Route::get('/projets-investissement-industrie1/{id}','investController@projets_investissement_industrie1');
Route::get('/projets-investissement-industrie2/{id}','investController@projets_investissement_industrie2');
Route::get('/projets-investissement-industrie3/{id}','investController@projets_investissement_industrie3');
Route::get('/projets-investissement-industrie4/{id}','investController@projets_investissement_industrie4');
Route::get('/projets-investissement-industrie5/{id}','investController@projets_investissement_industrie5');
Route::get('/projets-investissement-industrie6/{id}','investController@projets_investissement_industrie6');
Route::get('/projets-investissement-industrie7/{id}','investController@projets_investissement_industrie7');
Route::get('/projets-investissement-industrie8/{id}','investController@projets_investissement_industrie8');
Route::get('/projets-investissement-industrie9/{id}','investController@projets_investissement_industrie9');
Route::get('/projets-investissement-industrie10/{id}','investController@projets_investissement_industrie10');


Route::get('/projets-investissement-industrie11/{id}','investController@projets_investissement_industrie11');
Route::get('/projets-investissement-industrie12/{id}','investController@projets_investissement_industrie12');
Route::get('/projets-investissement-industrie13/{id}','investController@projets_investissement_industrie13');
Route::get('/projets-investissement-industrie14/{id}','investController@projets_investissement_industrie14');
Route::get('/projets-investissement-industrie15/{id}','investController@projets_investissement_industrie15');
Route::get('/projets-investissement-industrie16/{id}','investController@projets_investissement_industrie16');
Route::get('/projets-investissement-industrie17/{id}','investController@projets_investissement_industrie17');
Route::get('/projets-investissement-industrie18/{id}','investController@projets_investissement_industrie18');
Route::get('/projets-investissement-industrie19/{id}','investController@projets_investissement_industrie19');
Route::get('/projets-investissement-industrie20/{id}','investController@projets_investissement_industrie20');

Route::get('/projets-investissement-industrie21/{id}','investController@projets_investissement_industrie21');
Route::get('/projets-investissement-industrie22/{id}','investController@projets_investissement_industrie22');
Route::get('/projets-investissement-industrie23/{id}','investController@projets_investissement_industrie23');
Route::get('/projets-investissement-industrie24/{id}','investController@projets_investissement_industrie24');
Route::get('/projets-investissement-industrie25/{id}','investController@projets_investissement_industrie25');
Route::get('/projets-investissement-industrie26/{id}','investController@projets_investissement_industrie26');
// FIN DES ROUTES D'INVESTISSEMENT EN INDUSTRIE

// LES ROUTES D'INVESTISSEMENT EN URBANISME
Route::get('/investir1-urbanisme/{id}','investController@investir1_urbanisme');
Route::get('/en/invest1-town-planning/{id}','investController@investir1_urbanisme_en');
Route::get('/en/invest2-town-planning/{id}','investController@investir2_urbanisme_en');
Route::get('/investir2-urbanisme/{id}','investController@investir2_urbanisme');
Route::get('/projets-investissement-urbanisme1/{id}','investController@projets_investissement_urbanisme1');
Route::get('/projets-investissement-urbanisme2/{id}','investController@projets_investissement_urbanisme2');
Route::get('/projets-investissement-urbanisme3/{id}','investController@projets_investissement_urbanisme3');
Route::get('/projets-investissement-urbanisme4/{id}','investController@projets_investissement_urbanisme4');
Route::get('/projets-investissement-urbanisme5/{id}','investController@projets_investissement_urbanisme5');
Route::get('/projets-investissement-urbanisme6/{id}','investController@projets_investissement_urbanisme6');
Route::get('/projets-investissement-urbanisme7/{id}','investController@projets_investissement_urbanisme7');
Route::get('/projets-investissement-urbanisme8/{id}','investController@projets_investissement_urbanisme8');
Route::get('/projets-investissement-urbanisme9/{id}','investController@projets_investissement_urbanisme9');
Route::get('/projets-investissement-urbanisme10/{id}','investController@projets_investissement_urbanisme10');

Route::get('/projets-investissement-urbanisme11/{id}','investController@projets_investissement_urbanisme11');
Route::get('/projets-investissement-urbanisme12/{id}','investController@projets_investissement_urbanisme12');
Route::get('/projets-investissement-urbanisme13/{id}','investController@projets_investissement_urbanisme13');
Route::get('/projets-investissement-urbanisme14/{id}','investController@projets_investissement_urbanisme14');
Route::get('/projets-investissement-urbanisme15/{id}','investController@projets_investissement_urbanisme15');
Route::get('/projets-investissement-urbanisme16/{id}','investController@projets_investissement_urbanisme16');
// FIN DES ROUTES D'INVESTISSEMENT EN URBANISME



// LES ROUTES D'INVESTISSEMENT EN URBANISME  VERSION ANGLAISE
Route::get('/investir1-urbanisme/{id}','investController@investir1_urbanisme');
Route::get('/en/invest1-town-planning/{id}','investController@investir1_urbanisme_en');
Route::get('/en/invest2-town-planning/{id}','investController@investir2_urbanisme_en');
Route::get('/investir2-urbanisme/{id}','investController@investir2_urbanisme');
Route::get('/en/urban-investment-projects1/{id}','DetailsinvestirController@projets_investissement_urbanisme1');
Route::get('/en/urban-investment-projects2/{id}','DetailsinvestirController@projets_investissement_urbanisme2');
Route::get('/en/urban-investment-projects3/{id}','DetailsinvestirController@projets_investissement_urbanisme3');
Route::get('/en/urban-investment-projects4/{id}','DetailsinvestirController@projets_investissement_urbanisme4');
Route::get('/en/urban-investment-projects5/{id}','DetailsinvestirController@projets_investissement_urbanisme5');
Route::get('/en/urban-investment-projects6/{id}','DetailsinvestirController@projets_investissement_urbanisme6');
Route::get('/en/urban-investment-projects7/{id}','DetailsinvestirController@projets_investissement_urbanisme7');
Route::get('/en/urban-investment-projects8/{id}','DetailsinvestirController@projets_investissement_urbanisme8');
Route::get('/en/urban-investment-projects9/{id}','DetailsinvestirController@projets_investissement_urbanisme9');
Route::get('/en/urban-investment-projects10/{id}','DetailsinvestirController@projets_investissement_urbanisme10');

Route::get('/en/urban-investment-projects11/{id}','DetailsinvestirController@projets_investissement_urbanisme11');
Route::get('/en/urban-investment-projects12/{id}','DetailsinvestirController@projets_investissement_urbanisme12');
Route::get('/en/urban-investment-projects13/{id}','DetailsinvestirController@projets_investissement_urbanisme13');
Route::get('/en/urban-investment-projects14/{id}','DetailsinvestirController@projets_investissement_urbanisme14');
Route::get('/en/urban-investment-projects15/{id}','DetailsinvestirController@projets_investissement_urbanisme15');
Route::get('/en/urban-investment-projects16/{id}','DetailsinvestirController@projets_investissement_urbanisme16');
// FIN DES ROUTES D'INVESTISSEMENT EN URBANISME



// LES ROUTES D'INVESTISSEMENT EN TIC
Route::get('/investir-tic/{id}','investController@investir_tic');
Route::get('/en/invest-tic/{id}','investController@investir_tic_en');
Route::get('/projets-investissement-tic1/{id}','investController@projets_investissement_tic1');
Route::get('/projets-investissement-tic2/{id}','investController@projets_investissement_tic2');
Route::get('/projets-investissement-tic3/{id}','investController@projets_investissement_tic3');
Route::get('/projets-investissement-tic4/{id}','investController@projets_investissement_tic4');


Route::get('/en/projects-investment-tic1/{id}','DetailsinvestirController@projets_investissement_tic1');
Route::get('/en/projects-investment-tic2/{id}','DetailsinvestirController@projets_investissement_tic2');
Route::get('/en/projects-investment-tic3/{id}','DetailsinvestirController@projets_investissement_tic3');
Route::get('/en/projects-investment-tic4/{id}','DetailsinvestirController@projets_investissement_tic4');
// FIN DES ROUTES D'INVESTISSEMENT EN TIC

// LES ROUTES D'INVESTISSEMENT EN TOURISME
Route::get('/investir-tourisme/{id}','investController@investir_tourisme');
Route::get('/en/invest-tourism/{id}','investController@investir_tourisme_en');
Route::get('/projets-investissement-tourisme1/{id}','investController@projets_investissement_tourisme1');
Route::get('/projets-investissement-tourisme2/{id}','investController@projets_investissement_tourisme2');
Route::get('/projets-investissement-tourisme3/{id}','investController@projets_investissement_tourisme3');
Route::get('/projets-investissement-tourisme4/{id}','investController@projets_investissement_tourisme4');



Route::get('/en/investment-tourism-projects1/{id}','DetailsinvestirController@projets_investissement_tourisme1');
Route::get('/en/investment-tourism-projects2/{id}','DetailsinvestirController@projets_investissement_tourisme2');
Route::get('/en/investment-tourism-projects3/{id}','DetailsinvestirController@projets_investissement_tourisme3');
Route::get('/en/investment-tourism-projects4/{id}','DetailsinvestirController@projets_investissement_tourisme4');
// FIN DES ROUTES D'INVESTISSEMENT EN TOURISME

// LES ROUTES D'INVESTISSEMENT EN FINANCE
Route::get('/investir-finance/{id}','investController@investir_finance');
Route::get('/en/invest-finance/{id}','investController@investir_finance_en');
Route::get('/projets-investissement-finance1/{id}','investController@projets_investissement_finance1');
Route::get('/projets-investissement-finance2/{id}','investController@projets_investissement_finance2');
Route::get('/projets-investissement-finance3/{id}','investController@projets_investissement_finance3');
Route::get('/projets-investissement-finance4/{id}','investController@projets_investissement_finance4');
Route::get('/projets-investissement-finance5/{id}','investController@projets_investissement_finance5');



Route::get('/en/investment-finance-projects1/{id}','DetailsinvestirController@projets_investissement_finance1');
Route::get('/en/investment-finance-projects2/{id}','DetailsinvestirController@projets_investissement_finance2');
Route::get('/en/investment-finance-projects3/{id}','DetailsinvestirController@projets_investissement_finance3');
Route::get('/en/investment-finance-projects4/{id}','DetailsinvestirController@projets_investissement_finance4');
Route::get('/en/investment-finance-projects5/{id}','DetailsinvestirController@projets_investissement_finance5');
// FIN DES ROUTES D'INVESTISSEMENT EN FINANCE


//DEBUT DES ROUTES DE DETAILS DE PROJETS D'INVESTISSEMENT EN ENERGIE

Route::get('/en/projects1-investment-in-energy/{id}','DetailsinvestirController@projets_investissement');
Route::get('/en/projects2-investment-in-energy/{id}','DetailsinvestirController@projets2_investissement');
Route::get('/en/projects3-investment-in-energy/{id}','DetailsinvestirController@projets3_investissement');
Route::get('/en/projects4-investment-in-energy/{id}','DetailsinvestirController@projets4_investissement');
Route::get('/en/projects5-investment-in-energy/{id}','DetailsinvestirController@projets5_investissement');
Route::get('/en/projects6-investment-in-energy/{id}','DetailsinvestirController@projets6_investissement');
Route::get('/en/projects7-investment-in-energy/{id}','DetailsinvestirController@projets7_investissement');
Route::get('/en/projects8-investment-in-energy/{id}','DetailsinvestirController@projets8_investissement');
Route::get('/en/projects9-investment-in-energy/{id}','DetailsinvestirController@projets9_investissement');
Route::get('/en/projects10-investment-in-energy/{id}','DetailsinvestirController@projets10_investissement');
Route::get('/en/projects11-investment-in-energy/{id}','DetailsinvestirController@projets11_investissement');
Route::get('/en/projects12-investment-in-energy/{id}','DetailsinvestirController@projets12_investissement');
Route::get('/en/projects13-investment-in-energy/{id}','DetailsinvestirController@projets13_investissement');
Route::get('/en/projects14-investment-in-energy/{id}','DetailsinvestirController@projets14_investissement');
Route::get('/en/projects15-investment-in-energy/{id}','DetailsinvestirController@projets15_investissement');
Route::get('/en/projects16-investment-in-energy/{id}','DetailsinvestirController@projets16_investissement');
Route::get('/en/projects17-investment-in-energy/{id}','DetailsinvestirController@projets17_investissement');
Route::get('/en/projects18-investment-in-energy/{id}','DetailsinvestirController@projets18_investissement');
Route::get('/en/projects19-investment-in-energy/{id}','DetailsinvestirController@projets19_investissement');
Route::get('/en/projects20-investment-in-energy/{id}','DetailsinvestirController@projets20_investissement');
Route::get('/en/projects21-investment-in-energy/{id}','DetailsinvestirController@projets21_investissement');
Route::get('/en/projects22-investment-in-energy/{id}','DetailsinvestirController@projets22_investissement');
Route::get('/en/projects23-investment-in-energy/{id}','DetailsinvestirController@projets23_investissement');
Route::get('/en/projects24-investment-in-energy/{id}','DetailsinvestirController@projets24_investissement');
Route::get('/en/projects25-investment-in-energy/{id}','DetailsinvestirController@projets25_investissement');
//FIN DE ROUTES DE DETAILS DE PROJETS D'INVESTISSEMENT EN ENERGIE


//DEBUT DE ROUTES DE DETAILS D'INVESTISSEMENT EN AGRICULTURE

Route::get('/en/agri1-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri1');
Route::get('/en/agri2-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri2');
Route::get('/en/agri3-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri3');
Route::get('/en/agri4-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri4');
Route::get('/en/agri5-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri5');
Route::get('/en/agri6-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri6');
Route::get('/en/agri7-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri7');
Route::get('/en/agri8-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri8');
Route::get('/en/agri9-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri9');
Route::get('/en/agri10-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri10');
Route::get('/en/agri11-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri11');
Route::get('/en/agri12-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri12');
Route::get('/en/agri13-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri13');
Route::get('/en/agri14-investment-projects/{id}','DetailsinvestirController@projets_investissement_agri14');

//FIN DE ROUTES DE DETAILS D'INVESTISSEMENT EN AGRICULTURE

// DEBUT DE ROUTES DE DETAILS D'INVESTISSEMENT EN INDUSTRIE VERSION ANGLAIS
Route::get('/en/investment-industry-projects1/{id}','DetailsinvestirController@projets_investissement_industrie1');
Route::get('/en/investment-industry-projects2/{id}','DetailsinvestirController@projets_investissement_industrie2');
Route::get('/en/investment-industry-projects3/{id}','DetailsinvestirController@projets_investissement_industrie3');
Route::get('/en/investment-industry-projects4/{id}','DetailsinvestirController@projets_investissement_industrie4');

Route::get('/en/investment-industry-project/{id}','DetailsinvestirController@projets_investissement_industrie5');

Route::get('/en/investment-industry-projects6/{id}','DetailsinvestirController@projets_investissement_industrie6');
Route::get('/en/investment-industry-projects7/{id}','DetailsinvestirController@projets_investissement_industrie7');
Route::get('/en/investment-industry-projects8/{id}','DetailsinvestirController@projets_investissement_industrie8');
Route::get('/en/investment-industry-projects9/{id}','DetailsinvestirController@projets_investissement_industrie9');
Route::get('/en/investment-industry-projects10/{id}','DetailsinvestirController@projets_investissement_industrie10');
Route::get('/en/investment-industry-projects11/{id}','DetailsinvestirController@projets_investissement_industrie11');
Route::get('/en/investment-industry-projects12/{id}','DetailsinvestirController@projets_investissement_industrie12');
Route::get('/en/investment-industry-projects13/{id}','DetailsinvestirController@projets_investissement_industrie13');
Route::get('/en/investment-industry-projects14/{id}','DetailsinvestirController@projets_investissement_industrie14');
Route::get('/en/investment-industry-projects15/{id}','DetailsinvestirController@projets_investissement_industrie15');
Route::get('/en/investment-industry-projects16/{id}','DetailsinvestirController@projets_investissement_industrie16');
Route::get('/en/investment-industry-projects17/{id}','DetailsinvestirController@projets_investissement_industrie17');
Route::get('/en/investment-industry-projects18/{id}','DetailsinvestirController@projets_investissement_industrie18');
Route::get('/en/investment-industry-projects19/{id}','DetailsinvestirController@projets_investissement_industrie19');
Route::get('/en/investment-industry-projects20/{id}','DetailsinvestirController@projets_investissement_industrie20');

Route::get('/en/investment-industry-projects21/{id}','DetailsinvestirController@projets_investissement_industrie21');
Route::get('/en/investment-industry-projects22/{id}','DetailsinvestirController@projets_investissement_industrie22');
Route::get('/en/investment-industry-projects23/{id}','DetailsinvestirController@projets_investissement_industrie23');
Route::get('/en/investment-industry-projects24/{id}','DetailsinvestirController@projets_investissement_industrie24');
Route::get('/en/investment-industry-projects25/{id}','DetailsinvestirController@projets_investissement_industrie25');
Route::get('/en/investment-industry-projects27/{id}','DetailsinvestirController@projets_investissement_industrie27');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/{en}', function($lang){
  App::setLocale($lang);
  return view('en/welcome');
});


