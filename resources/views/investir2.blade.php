@extends('layout.master2')
@section('content')


            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> PROJETS D'INVESTISSEMENT DU NIGER EN ENERGIE</h3>
          <!-- <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> ACCUEIL </a>
            </li>
            <li>
              <a href="#"> Investir    </a>
            </li>
            <li class="active">Projet d'investissement du Niger</li>
          </ol> -->
        </div>
      </section>


      <div class="w-10">
        <div class="row mt-0 bg-secondary" style="padding: 20px 0 20px 0;background-color: #5a983e !important;">

            <div class="row col-md-10 col-sm-12 mt-2">
              <div class="col-md-2 col-sm-0" align="center">
              </div>
              <div class="col-md-2 col-sm-6" onclick="location.href='{{URL::to('/investissement-en-agriculture/1')}}'"; align="center">
               <i class="fa fa-tree text-white" style='font-size:24px;' aria-hidden="true"></i>
               <br/>
               <span class=" text-white" style="cursor: pointer;">AGRICULTURE</span> 
              </div>
              
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/investir/1')}}'"; align="center">
               <i class="fa fa-leaf text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">ENERGIE</span>
               </div>
              
               <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/investir-mine/1')}}'"; align="center">
               <i class="fa fa-binoculars text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">MINES</span> 
              </div>

              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/investir-transport/1')}}'"; align="center">
               <i class="fa fa-train text-white" style='font-size:24px;' aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">TRANSPORT</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/investir-elevage/1')}}'"; align="center">
              <i class="fa fa-twitter text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">ELEVAGE</span> 
              </div>
              <div class="col-md-2 col-sm-0" align="center">
              </div>
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/investir1-industrie/1')}}'"; align="center">
               <i class="fa fa-industry text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">INDUSTRIE</span> 
              </div>
             <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/investir1-urbanisme/1')}}'"; align="center">
               <i class="fa fa-home text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">URBANISME</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/investir-tic/1')}}'"; align="center">
               <i class="fa fa-laptop text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">TIC</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/investir-tourisme/1')}}'"; align="center">
               <i class="fa fa-building text-white" style='font-size:24px;' aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">TOURISME</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/investir-finance/1')}}'"; align="center">
               <i class="fa fa-university text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">FINANCE</span> 
              </div>
            </div>

            <style type="text/css">
              .agriculture{
                background-image: url('https://www.nigerrenaissant.org/themes/custom/rdn/assets/images/icons/tourisme.png');
                background-repeat: no-repeat;
               /* margin-top: 20px;
                height: 35px;*/
              }
            </style>


            <hr class="my-4">
           <!--  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
                    
        </div>
      </div>


        
        <section>
        <div class="container">
          <div class="row">

            <div class="category-case-warp category-case-warp-h5 category-case-warp-page">
              <div class="casesFilter">
                                <a href="#" data-filter="*" class="current ">Niger</a>
                                <a href="#" data-filter=".Tokyo" class="">Cote d'ivoire</a>
                                <a href="#" data-filter=".Cairo" class="">Guinnée</a>
                                <a href="#" data-filter=".London" class="">Guinée</a>
                                <a href="#" data-filter=".Rome" class="">Guinée Bissau</a>
                                <a href="#" data-filter=".Rome" class="">Libéria</a>
                                <a href="#" data-filter=".Rome" class="">Togo</a>
              </div> <!-- End Project Fillter -->

            </div>
            
<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D’UN OLEODUC POUR L’EXPORATION DU PETROLE BRUT</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Au Niger, les réserves pétrolières sont évaluées à près de 4 milliards de barils et 23,175 milliards de m3 de gaz naturel. Aujourd’hui, la quantité exportable de pétrole brut au Niger est de l’…
        </p>
        <a href="{{URL::to('/projets11-investissement/construction-dun-oleoduc-pour-lexporation-du-petrole-brut')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D'UN COMPLEXE CHARBONNIER A SALKADAMNA</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le projet de création d’un complexe charbonnier à Salkadamna s’inscrit dans le cadre de la politique énergétique du gouvernement du Niger qui a pour but d’accroitre la capacité énergétique du pays…
        </p>
        <a href="{{URL::to('/projets12-investissement/construction-dun-complexe-charbonnier-salkadamna')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
          PROJET D'ELECTRIFICATION DE 250 VILLAGES PAR SYSTEME SOLAIRE PHOTOVOLTAÏQUE
        </h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le secteur énergétique est de nos jours au centre de la problématique socio-économique et de la lutte contre le réchauffement climatique.
        </p>
        <a href="{{URL::to('/projets13-investissement/projet-delectrification-de-250-villages-par-systeme-solaire-photovoltaique')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D'UNE CENTRALE A CONCENTRATION DE 50 MW</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Ce projet rentre dans le cadre de la poursuite de la politique nationale énergétique qui vise la promotion des énergies renouvelables et la sécurisation de l'approvisionnement en énergie…
        </p>
        <a href="{{URL::to('/projets14-investissement/construction-dune-centrale-concentration-de-50-mw')}}">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D'UNE BRIQUETTERIE DE CHARBON MINERAL ET DE BIOMASSE</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          L’objectif de ce projet est de mettre en place une unité industrielle de fabrication de briquettes de charbon minéral et de biomasse d’une capacité de production annuelle de 50 000 Tonnes à…
        </p>
        <a href="{{URL::to('/projets15-investissement/construction-dune-briquetterie-de-charbon-mineral-et-de-biomasse')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">HYBRIDATION DE LA CENTRALE DIESEL DE DIFFA</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le projet d’hybridation de la centrale diesel de Diffa s’inscrit dans le cadre de la politique énergétique du gouvernement du Niger qui a pour but d’accroitre la capacité énergétique du pays afin…
        </p>
        <a href="{{URL::to('/projets16-investissement/hybridation-de-la-centrale-diesel-de-diffa')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D'UNE CENTRALE SOLAIRE PHOTOVOLTAÏQUE AUX AXCILLIAIRES DE LA CENTRALE 2 × 25 MW DE LA SONICHAR</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le projet de construction d'un parc solaire photovoltaïque dans le Grand Nord du Niger d'une capacité de production de 50 MW rentre dans la ligne de conduite de la stratégie nationale axée sur la…
        </p>
        <a href="{{URL::to('/projets17-investissement/construction-dune-centrale-solaire-photovoltaique-aux-axcilliaires-de-la')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">MISE EN PLACE D’UNE UNITE DE PRODUCTION ET D'INSTALLATION DES LAMPADAIRES SOLAIRES</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Au Niger, il existe une grande disparité du taux d'accès aux services énergétiques modernes entre les différentes zones.
        </p>
        <a href="{{URL::to('/projets18-investissement/mise-en-place-dune-unite-de-production-et-dinstallation-des-lampadaires')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">KITS ENSEIGNANTS ET AGENTS DE SANTE RURAUX</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Il est constaté, en milieu rural, un taux élevé d’absentéisme et d’abandon des enseignants et infirmiers qui préfèrent toujours servir dans de meilleurs milieux de condition de vie (centres…
        </p>
        <a href="{{URL::to('/projets19-investissement/kits-enseignants-et-agents-de-sante-ruraux')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D'UNE CENTRALE HYBRIDE THERMIQUE/SOLAIRE DE 60 MW A SORAZ</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le projet de construction de la centrale hybride thermique/solaire d'une capacité de production de 60 MW à la Soraz vise à pallier au déficit récurrent en énergie électrique dans le Centre-Est du…
        </p>
        <a href="{{URL::to('/projets20-investissement/construction-dune-centrale-hybride-thermiquesolaire-de-60-mw-soraz')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>
            
            <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/investir/1')}}" class="ot-btn btn-main-color" ><i class="fa fa-caret-square-o-left" aria-hidden="true"></i></a>
              <a href="{{URL::to('/investir3/3')}}" class="ot-btn btn-main-color" ><i style="" class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
            </div>

          </div>
        </div>
      </section>

    
      @endsection

     