@extends('layout.master2')
@section('content')


            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> PROJETS D'INVESTISSEMENT DU NIGER<br>EN INDUSTRIE</h3>
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
        <h5 class="card-title">RECYCLAGE DES DECHETS PLATISQUES</h5>
        <p>INDUSTRIE</p>
        <p class="card-text">
          Au Niger l'enjeu de la gestion des d??chets plastiques reste, la collecte, le traitement et la valorisation des sachets plastiques.
        </p>
        <a href="{{URL::to('/projets-investissement-industrie18/recyclage-des-dechets-platisques')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION D???UNE ECOLE DE MODE ET DES ARTS ET D???UN COMPLEXE INSDUSTRIEL</h5>
        <p>INDUSTRIE</p>
        <p class="card-text">
         Le projet vise la cr??ation d???une ??cole panafricaine de mode et des arts mais aussi la construction d'un complexe industriel dot?? : d???une usine de textile, d???une tannerie, d???une unit?? de???
        </p>
        <a href="{{URL::to('/projets-investissement-industrie22/creation-dune-ecole-de-mode-et-des-arts-et-dun-complexe-insdustriel')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
        CREATION D'UNE UNITE DE PRODUCTION D???ALIMENTS BETAIL VOLAILLE
        </h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
         Au Niger, les crises pastorales r??currentes obligent les entreprises ?? ??voluer vers des syst??mes de plus en plus intensifs et consommateurs d???intrants.
        </p>
        <a href="{{URL::to('/projets-investissement-industrie23/creation-dune-unite-de-production-daliments-betail-volaille')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D'UNE NOUVELLE CIMENTERIE A GARADAWA</h5>
        <p>INDUSTRIE</p>
        <p class="card-text">
          Le march?? nig??rien de ciment conna??t depuis 2000 une croissance annuelle moyenne de + 10% et sa production nationale ne couvre que 20%. Le Niger qui dispose d???une faible capacit?? de production de???
        </p>
        <a href="{{URL::to('/projets-investissement-industrie24/construction-dune-nouvelle-cimenterie-garadawa')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">AGRIP</h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
          Dans plusieurs r??gions du Niger, les organisations paysannes d'agriculteurs produisent apr??s la saison des pluies de la pomme de terre, de l???oignon, du manioc, de la mangue, de la tomate etc.??????
        </p>
        <a href="{{URL::to('/projets-investissement-agri11/agrip')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION D???UNE UNITE DE TRANSFORMATION ET DE COMMERCIALISATION DE L???OIGNON</h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
          Avec une production d???oignon de plus de 700 000 tonnes depuis 2010 et une consommation locale de plus 60% de la production , le projet vise ?? cr??er une unit?? de transformation et de???
        </p>
        <a href="{{URL::to('/projets-investissement-agri26/creation-dune-unite-de-transformation-et-de-commercialisation-de-loignon')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

            
            <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/investir2-industrie/1')}}" class="ot-btn btn-main-color" ><i style="" class="fa fa-caret-square-o-left" aria-hidden="true"></i></a>
            </div>

          </div>
        </div>
      </section>

    
      @endsection

     