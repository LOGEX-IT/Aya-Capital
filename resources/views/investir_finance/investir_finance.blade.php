@extends('layout.master2')
@section('content')


            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> PROJETS D'INVESTISSEMENT DU NIGER<br>EN FINANCE</h3>
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
        <h5 class="card-title">CREATION D’UN ETABLISSEMENT FINANCIER DE CREDIT BAIL A NIAMEY</h5>
        <p>FINANCES</p>
        <p class="card-text">
          Ce projet a pour objectif de créer un établissement financier spécialisé en crédit-bail mobilier et immobilier à Niamey.
        </p>
        <a href="{{URL::to('/projets-investissement-finance1/creation-dun-etablissement-financier-de-credit-bail-niamey')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PROJET DE CREATION D’UNE ZONE FRANCHE A MARADI</h5>
        <p>FINANCES</p>
        <p class="card-text">
         Le projet vise la création d’une zone franche dans la capitale économique du Niger Maradi. le but est de conférer des avantages fiscaux à des entreprises afin d’attirer l’investissement et…
        </p>
        <a href="{{URL::to('/projets-investissement-finance2/projet-de-creation-dune-zone-franche-maradi')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
        MISE EN PLACE D’UNE PLATEFORME ELECTRONIQUE ET MOBILE DE GESTION DE FONDS (POST E PAY)
        </h5>
        <p>FINANCES</p>
        <p class="card-text">
         Ce projet rentre dans le cadre de la poursuite de la politique de l’inclusion financière grâce aux TIC’S au Niger.
        </p>
        <a href="{{URL::to('/projets-investissement-finance3/mise-en-place-dune-plateforme-electronique-et-mobile-de-gestion-de-fonds')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">OCTROI D'UNE LIGNE DE CREDIT EN FAVEUR D'ASUSU</h5>
        <p>FINANCES</p>
        <p class="card-text">
         ASUSU occupe la première place sur le marché de microfinance au Niger et présente une situation financière saine lui permettant de dégager des résultats positifs.
        </p>
        <a href="{{URL::to('/projets-investissement-finance4/octroi-dune-ligne-de-credit-en-faveur-dasusu')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">OCTROI D'UNE LIGNE DE CREDIT EN FAVEUR DE SONIBANK</h5>
        <p>FINANCES</p>
        <p class="card-text">
          Créée en 1990, la SONIBANK occupe l'une des premières places sur le marché bancaire nigérien et présente une situation financière saine dégageant des résultats positifs.
        </p>
        <a href="{{URL::to('/projets-investissement-finance5/octroi-dune-ligne-de-credit-en-faveur-de-sonibank')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>
    
            <!-- <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/investir2/2')}}" class="ot-btn btn-main-color" ><i style="" class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
            </div> -->

          </div>
        </div>
      </section>

    
      @endsection

     