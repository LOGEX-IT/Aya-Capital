@extends('layout.master2')
@section('content')


            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> PROJETS D'INVESTISSEMENT DU NIGER<br>EN AGRICULTURE</h3>
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
        <h5 class="card-title">PROJET DE CREATION D’UNE USINE DE PRODUCTION AGRO-ALIMENTAIRE</h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
          La ceinture verte dressée autour de Niamey avait pour vocation de protéger la ville contre les vents violents et plus souvent les charges de poussière.
        </p>
        <a href="{{URL::to('/projets-investissement-agri2/projet-de-creation-dune-usine-de-production-agro-alimentaire')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PROMOTION DE LA FERME-DIGITALE 20 000 M2& TELE-IRRIGATION (GSM)</h5>
        <p>AGRICULTURE</p>
        <p class="card-text">
         Tech-Innov Sarl est une société Nigérienne d’innovation dans le domaine de l’agriculture intelligente. Elle est récipiendaire des plusieurs grands prix internationaux dont le Grand Prix Mondial…
        </p>
        <a href="{{URL::to('/projets-investissement-agri1/promotion-de-la-ferme-digitale-20-000-m2-tele-irrigation-gsm')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
         CREATION D’UNE UNITE DE TRANSFORMATION DES FRUITS EN JUS NATUREL
        </h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
         Le marché nigérien est inondé des boissons gazeuses provenant des divers horizons. La plupart de ces boissons sont fabriquées à partir de produits de synthèse qui peuvent être nocifs à la santé.…
        </p>
        <a href="{{URL::to('/projets-investissement-agri3/creation-dune-unite-de-transformation-des-fruits-en-jus-naturel')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION D'UNE UNITE DE PRODUCTION D’ALIMENTS BETAIL VOLAILLE</h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
          Au Niger, les crises pastorales récurrentes obligent les entreprises à évoluer vers des systèmes de plus en plus intensifs et consommateurs d’intrants.
        </p>
        <a href="{{URL::to('/projets-investissement-agri4/creation-dune-unite-de-production-daliments-betail-volaille')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION D’UNE UNITE DE PRODUCTION DES PRODUITS AGROALIMENTAIRES</h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
          Sur la base des statistiques sur la consommation des pates alimentaires (25000 tonnes en 2017) et des produits de substitution au Niger, le projet consiste à la création d’une industrie de…
        </p>
        <a href="{{URL::to('/projets-investissement-agri5/creation-dune-unite-de-production-des-produits-agroalimentaires')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION D’UNE UNITE DE TRANSFORMATION ET DE COMMERCIALISATION DE L’OIGNON</h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
          Avec une production d’oignon de plus de 700 000 tonnes depuis 2010 et une consommation locale de plus 60% de la production , le projet vise à créer une unité de transformation et de…
        </p>
        <a href="{{URL::to('/projets-investissement-agri6/creation-dune-unite-de-transformation-et-de-commercialisation-de-loignon')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION D'UN COMPLEXE SUCRIER A DJOUNDJOU A DOSSO</h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
         Le Niger produit de la canne à sucre mais ne dispose pas d’usine de fabrication de sucre. Pour répondre à la forte demande nationale, l’Etat du Niger importe massive du sucre des pays voisins.
        </p>
        <a href="{{URL::to('/projets-investissement-agri7/creation-dun-complexe-sucrier-djoundjou-dosso')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PRODUCTION ET DE TRANSFORMATION INDUSTRIELLE DU MORINGA</h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
          L’objectif visé par ce projet est l’augmentation de la production de moringa ainsi que sa transformation en divers produits tels que de la poudre de moringa, du savon à base d’huile de moringa,…
        </p>
        <a href="{{URL::to('/projets-investissement-agri8/production-et-de-transformation-industrielle-du-moringa')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION D’UNE UNITE DE PRODUCTION D’HUILE VEGETALE A BASE DU DATIER DU DESERT</h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
          Le projet de création d’une unité de production d’huile végétale consiste en la mise en place d’une usine de transformation de noyau du dattier du désert (ADOUWA) en produit brut raffiné ,…
        </p>
        <a href="{{URL::to('/projets-investissement-agri9/creation-dune-unite-de-production-dhuile-vegetale-base-du-datier-du-desert')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">EXPLOITATION D’UNE PLANTATION DE TANGELO ET TRANSFORMATION EN JUS</h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
         Le but du projet est de mettre en place une plantation de Tangelo sur un terrain de 1000 hectares puis d'utiliser les fruits de la plantation pour produire de jus naturel au niveau de l'usine qui…
        </p>
        <a href="{{URL::to('/projets-investissement-agri10/exploitation-dune-plantation-de-tangelo-et-transformation-en-jus')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>
            
            <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/investissement2-en-agriculture/2')}}" class="ot-btn btn-main-color" ><i style="" class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
            </div>

          </div>
        </div>
      </section>

    
      @endsection

     