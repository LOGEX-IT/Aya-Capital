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
                                <a href="#" data-filter=".Cairo" class="">Guinn??e</a>
                                <a href="#" data-filter=".London" class="">Guin??e</a>
                                <a href="#" data-filter=".Rome" class="">Guin??e Bissau</a>
                                <a href="#" data-filter=".Rome" class="">Lib??ria</a>
                                <a href="#" data-filter=".Rome" class="">Togo</a>
              </div> <!-- End Project Fillter -->

            </div>
            
<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D'UN COMPLEXE CHARBONNIER A SALKADAMNA</h5>
        <p>ENERGIE</p>
        <p class="card-text">
         Le projet de cr??ation d???un complexe charbonnier ?? Salkadamna s???inscrit dans le cadre de la politique ??nerg??tique du gouvernement du Niger qui a pour but d???accroitre la capacit?? ??nerg??tique du pays???
        </p>
        <a href="{{URL::to('/projets21-investissement/construction-dun-complexe-charbonnier-salkadamna')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PROJET D'ELECTRIFICATION DE 250 VILLAGES PAR SYSTEME SOLAIRE PHOTOVOLTA??QUE</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le secteur ??nerg??tique est de nos jours au centre de la probl??matique socio-??conomique et de la lutte contre le r??chauffement climatique.
        </p>
        <a href="{{URL::to('/projets22-investissement/projet-delectrification-de-250-villages-par-systeme-solaire-photovoltaique')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
         CONSTRUCTION D'UNE CENTRALE A CONCENTRATION DE 50 MW
        </h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Ce projet rentre dans le cadre de la poursuite de la politique nationale ??nerg??tique qui vise la promotion des ??nergies renouvelables et la s??curisation de l'approvisionnement en ??nergie???
        </p>
        <a href="{{URL::to('/projets23-investissement/construction-dune-centrale-concentration-de-50-mw')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D'UNE BRIQUETTERIE DE CHARBON MINERAL ET DE BIOMASSE</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          L???objectif de ce projet est de mettre en place une unit?? industrielle de fabrication de briquettes de charbon min??ral et de biomasse d???une capacit?? de production annuelle de 50 000 Tonnes ?????
        </p>
        <a href="{{URL::to('/projets24-investissement/construction-dune-briquetterie-de-charbon-mineral-et-de-biomasse')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">HYBRIDATION DE LA CENTRALE DIESEL DE DIFFA</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Le projet d???hybridation de la centrale diesel de Diffa s???inscrit dans le cadre de la politique ??nerg??tique du gouvernement du Niger qui a pour but d???accroitre la capacit?? ??nerg??tique du pays afin???
        </p>
        <a href="{{URL::to('/projets25-investissement/hybridation-de-la-centrale-diesel-de-diffa')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>
            
            <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/investir2/2')}}" class="ot-btn btn-main-color" ><i class="fa fa-caret-square-o-left" aria-hidden="true"></i></a>
              
            </div>

          </div>
        </div>
      </section>

    
      @endsection

     