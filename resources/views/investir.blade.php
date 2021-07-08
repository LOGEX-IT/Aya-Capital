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
        <h5 class="card-title">ACROISSEMENT DE LA CAPACITE DE LA SONICHAR</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          SONICHAR (société nigérienne de charbon d’Anou - Araren) vise a élaboré un bilan des perspectives actuelles (augmentation de leur production) des clients miniers de la SONICHAR auxquelles s’…
        </p>
        <a href="{{URL::to('/projets-investissement/acroissement-de-la-capacite-de-la-sonichar')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION DU PIPELINE SORAZ-ZINDER-TORODI POUR LE TRANSPORT DES PRODUITS PETROLIERS</h5>
        <p>ENERGIE</p>
        <p class="card-text">
         L’objectif visé par le projet est la construction d’un pipeline qui permettra de relier la SORAZ (Société de Raffinerie de Zinder) à la ville de Torodi en passant par Niamey.
        </p>
        <a href="{{URL::to('/projets2-investissement/construction-du-pipeline-soraz-zinder-torodi-pour-le-transport-des-produits')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
         CREATION D’UNE UNITE D’ASSEMBLAGE ET COMMERCIALISATION DE PANNEAUX ET DIVERS EQUIPEMENTS SOLAIRES
        </h5>
        <p>ENERGIE</p>
        <p class="card-text">
          En l’absence d’un accès à l’électricité du réseau, les populations nigériennes tout comme celles de la sous-région, font de plus en plus recours aux équipements solaires pour assurer l’essentiel…
        </p>
        <a href="{{URL::to('/projets3-investissement/creation-dune-unite-dassemblage-et-commercialisation-de-panneaux-et-divers')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">ENFUTAGE ET COMMERCIALISATION DE GAZ DOMESTIQUE</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Ce projet s'inscrit dans la poursuite de la stratégie nationale énergique qui vise la promotion des énergies alternatives à travers une gestion et utilisation rationnelle des ressources…
        </p>
        <a href="{{URL::to('/projets4-investissement/enfutage-et-commercialisation-de-gaz-domestique')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D'UNE CENTRALE SOLAIRE DE 30 MW A GOROU BANDA</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le projet de construction de la centrale solaire photovoltaïque dans la région de Niamey d'une capacité de production de 30 MW vise à répondre à la demande croissante en énergie électrique des…
        </p>
        <a href="{{URL::to('/projets6-investissement/construction-dune-centrale-solaire-de-30-mw-gorou-banda')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">ACCROISSEMENT DE LA GAMME DE PRODUITS RAFFINES DE LA SORAZ</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le Niger regorge de ressources énergétiques mais reste tributaire des pays voisins pour la satisfaction de ses besoins en énergie.
        </p>
        <a href="{{URL::to('/projets5-investissement/accroissement-de-la-gamme-de-produits-raffines-de-la-soraz')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D'UNE CENTRALE THERMIQUE DE 75 MW</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le projet de construction de la centrale thermique à fioul d'une capacité de production de 75 MW dans la région de Zinder vise à palier au déficit récurrent en énergie électrique de la région à…
        </p>
        <a href="{{URL::to('/projets8-investissement/construction-dune-centrale-thermique-de-75-mw')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PROJET DE DEVELOPPEMENT DE LA RECHERCHE PETROLIERE ET GAZIERE</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le Niger possède un potentiel pétrolier et gazier avec des réserves évaluées à plus d’un milliard de barils de pétrole et 23 175 milliards de m3 de gaz naturel. L’objectif principal du projet vise…


        </p>
        <a href="{{URL::to('/projets7-investissement/projet-de-developpement-de-la-recherche-petroliere-et-gaziere')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D'UNE LIGNE 132 KV DE 87 KM ET D'UNE LIGNE 132 KV DE 115 KM</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le projet de construction des boucles nationales dimensionnées à 2 × 132 KV vise à faciliter l'interconnexion des villes des régions de Dosso et de Tillabéry.
        </p>
        <a href="{{URL::to('/projets9-investissement/construction-dune-ligne-132-kv-de-87-km-et-dune-ligne-132-kv-de-115-km')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PROJET DE DIVERSIFICATION DE LA PRODUCTION PETROLIERE</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le Niger possède un potentiel pétrolier et gazier avec des réserves évaluées à plus d’un milliard de barils de pétrole et 23 175 milliards de m3 de gaz naturel. La production actuelle est de 20…
        </p>
        <a href="{{URL::to('/projets9-investissement/projet-de-diversification-de-la-production-petroliere')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>
            
            <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/investir2/2')}}" class="ot-btn btn-main-color" ><i style="" class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
            </div>

          </div>
        </div>
      </section>

    
      @endsection

     