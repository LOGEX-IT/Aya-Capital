@extends('layout_en.master2')
@section('content')


            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> NIGER INVESTMENT PROJECTS IN INDUSTRY</h3>
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
             <div class="row mt-0 bg-secondary" style="padding: 20px 0 20px 0; background-color: #5a983e !important;">

            <div id="example1" class="row col-md-10 col-sm-12 mt-2">
              <div class="col-md-2 col-sm-0" align="center">
              </div>
              <div class="col-md-2 col-sm-6" onclick="location.href='{{URL::to('/en/investment-in-agriculture/1')}}'"; align="center">
               <i class="fa fa-tree text-white" style='font-size:24px;' aria-hidden="true"></i>
               <br/>
               <span class=" text-white" style="cursor: pointer;">AGRICULTURE</span> 
              </div>
              
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/en/invest/1')}}'"; align="center">
               <i class="fa fa-leaf text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">ENERGY</span>
               </div>
              
               <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/en/invest-mine/1')}}'"; align="center">
               <i class="fa fa-binoculars text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">MINES</span> 
              </div>

              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/en/invest-transport/1')}}'"; align="center">
               <i class="fa fa-train text-white" style='font-size:24px;' aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">TRANSPORT</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/en/invest-breeding/1')}}'"; align="center">
               <i class="fa fa-twitter text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">BREEDING</span> 
              </div>
              <div class="col-md-2 col-sm-0" align="center">
              </div>
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/en/invest1-industry/1')}}'"; align="center">
               <i class="fa fa-industry text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">INDUSTRY</span> 
              </div>
             <div class="col-md-2 col-sm-6 text-white"  onclick="location.href='{{URL::to('/en/invest1-town-planning/1')}}'"; align="center">
               <i class="fa fa-home text-white" style='font-size:24px;'  aria-hidden="true"></i>

               <br/> 
               <span class="" style="cursor: pointer;">URBAN PLANNING</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/en/invest-tic/1')}}'"; align="center">
               <i class="fa fa-laptop text-white" style='font-size:24px;'  aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">TIC</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/en/invest-tourism/1')}}'"; align="center">
               <i class="fa fa-building text-white" style='font-size:24px;' aria-hidden="true"></i>
               <br/> 
               <span class="" style="cursor: pointer;">TOURISM</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/en/invest-finance/1')}}'"; align="center">
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
                                <a href="#" data-filter=".Tokyo" class="">Ivory Coast</a>
                                <a href="#" data-filter=".London" class="">Guinea</a>
                                <a href="#" data-filter=".Rome" class="">Guinea Bissau</a>
                                <a href="#" data-filter=".Rome" class="">Liberia</a>
                                <a href="#" data-filter=".Rome" class="">Togo</a>
              </div> <!-- End Project Fillter -->

            </div>
            
<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">RECYCLING OF PLATISTIC WASTE</h5>
        <p>INDUSTRY</p>
        <p class="card-text">
          In Niger, the issue of plastic waste management remains, the collection, treatment and recovery of plastic bags.
        </p>
        <a href="{{URL::to('/en/investment-industry-projects18/waste-recycling')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION OF A FASHION AND ARTS SCHOOL AND AN INSDUSTRIAL COMPLEX</h5>
        <p>INDUSTRY</p>
        <p class="card-text">
         The project aims to create a Pan-African fashion and arts school as well as the construction of an industrial complex with: a textile factory, a tannery, a unit of ...
        </p>
        <a href="{{URL::to('/en/investment-industry-projects22/creation-of-a-school-of-fashion-and-the-arts-and-an-industrial-complex')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
        CREATION OF A LIVESTOCK POULTRY FEED PRODUCTION UNIT
        </h5>
        <p>AGRICULTURE, INDUSTRY</p>
        <p class="card-text">
         In Niger, recurrent pastoral crises are forcing companies to move towards increasingly intensive systems that consume more inputs.
        </p>
        <a href="{{URL::to('/en/investment-industry-projects23/creation-of-a-livestock-poultry-feed-production-unit')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION OF A NEW CEMENT PLANT IN GARADAWA</h5>
        <p>INDUSTRY</p>
        <p class="card-text">
          Since 2000, the Nigerien cement market has experienced average annual growth of + 10% and its national production only covers 20%. Niger, which has a low production capacity of ...
        </p>
        <a href="{{URL::to('/en/investment-industry-projects24/construction-dune-new-cement-plant-garadawa')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">AGRIP</h5>
        <p>AGRICULTURE, INDUSTRY</p>
        <p class="card-text">
          In several regions of Niger, peasant organizations of farmers produce after the rainy season potatoes, onions, cassava, mango, tomato etc. ......
        </p>
        <a href="{{URL::to('/en/investment-industry-projects25/agrip')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION OF AN ONION PROCESSING AND MARKETING UNIT</h5>
        <p>AGRICULTURE, INDUSTRY</p>
        <p class="card-text">
          With onion production of over 700,000 tonnes since 2010 and local consumption of over 60% of production, the project aims to create a processing unit and ...
        </p>
        <a href="{{URL::to('/en/investment-industry-projects27/creation-of-an-onion-processing-and-marketing-unit')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

            
            <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/en/invest2-industry/1')}}" class="ot-btn btn-main-color" ><i style="" class="fa fa-caret-square-o-left" aria-hidden="true"></i></a>
            </div>

          </div>
        </div>
      </section>

    
      @endsection

     