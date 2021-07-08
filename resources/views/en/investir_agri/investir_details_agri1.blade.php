@extends('layout_en.master2')
@section('content')


            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> NIGER INVESTMENT PROJECTS IN AGRICULTURE</h3>
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
        <h5 class="card-title">PROJECT TO CREATE AN AGRI-FOOD PRODUCTION PLANT</h5>
        <p>AGRICULTURE, INDUSTRY</p>
        <p class="card-text">
          The green belt erected around Niamey was intended to protect the city against strong winds and more often dust loads.
        </p>
        <a href="{{URL::to('/en/agri1-investment-projects/agrifood-production-plant-creation-project')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PROMOTION OF FARM-DIGITAL 20,000 M2 & TELE-IRRIGATION (GSM)</h5>
        <p>AGRICULTURE</p>
        <p class="card-text">
         Tech-Innov Sarl is a Nigerien innovation company in the field of smart agriculture. She is the recipient of several international grand prizes including the World Grand Prix ...
        </p>
        <a href="{{URL::to('/en/agri2-investment-projects/promotion-of-the-digital-farm-20-000-m2-tele-irrigation-gsm')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
         CREATION OF A UNIT FOR TRANSFORMATION OF FRUITS INTO NATURAL JUICE
        </h5>
        <p>AGRICULTURE, INDUSTRY</p>
        <p class="card-text">
        The Nigerien market is inundated with carbonated drinks from various walks of life. Most of these drinks are made from synthetic products which can be harmful to health.…
        </p>
        <a href="{{URL::to('/en/agri3-investment-projects/creation-of-a-processing-unit-of-fruit-into-natural-juice')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION OF A LIVESTOCK POULTRY FEED PRODUCTION UNIT</h5>
        <p>AGRICULTURE, INDUSTRY</p>
        <p class="card-text">
         In Niger, recurrent pastoral crises are forcing companies to move towards increasingly intensive systems that consume more inputs.
        </p>
        <a href="{{URL::to('/en/agri4-investment-projects/creation-of-a-livestock-poultry-feed-production-unit')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION OF A PRODUCTION UNIT OF AGRI-FOOD PRODUCTS</h5>
        <p>AGRICULTURE, INDUSTRY</p>
        <p class="card-text">
          Based on statistics on the consumption of pasta (25,000 tonnes in 2017) and substitute products in Niger, the project consists of creating an industry of ...
        </p>
        <a href="{{URL::to('/en/agri5-investment-projects/creation-of-a-production-unit-of-agrifood-products')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION OF AN ONION PROCESSING AND MARKETING UNIT</h5>
        <p>AGRICULTURE, INDUSTRIE</p>
        <p class="card-text">
          With onion production of over 700,000 tonnes since 2010 and local consumption of over 60% of production, the project aims to create a processing unit and ...
        </p>
        <a href="{{URL::to('/en/agri6-investment-projects/creation-of-an-onion-processing-and-marketing-unit')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION OF A SUGAR COMPLEX IN DJOUNDJOU IN DOSSO</h5>
        <p>AGRICULTURE, INDUSTRY</p>
        <p class="card-text">
         Niger produces sugar cane but does not have a sugar factory. To meet strong national demand, the State of Niger imports massive amounts of sugar from neighboring countries.
        </p>
        <a href="{{URL::to('/en/agri7-investment-projects/creation-of-sugar-complex-djoundjou-dosso')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PRODUCTION AND INDUSTRIAL TRANSFORMATION OF MORINGA</h5>
        <p>AGRICULTURE, INDUSTRY</p>
        <p class="card-text">
          The objective of this project is to increase the production of moringa as well as its transformation into various products such as moringa powder, soap made from moringa oil, ...
        </p>
        <a href="{{URL::to('/en/agri8-investment-projects/production-and-industrial-processing-of-moringa')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION OF A VEGETABLE OIL PRODUCTION UNIT BASED ON DESERT DATIER</h5>
        <p>AGRICULTURE, INDUSTRY</p>
        <p class="card-text">
          The project to create a vegetable oil production unit consists of setting up a plant to transform the kernel of the desert date palm (ADOUWA) into refined crude product, ...
        </p>
        <a href="{{URL::to('/en/agri9-investment-projects/creation-of-a-plant-oil-production-base-from-the-desert-date')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">OPERATION OF A TANGELO PLANTATION AND TRANSFORMATION INTO JUICE</h5>
        <p>AGRICULTURE, INDUSTRY</p>
        <p class="card-text">
         The goal of the project is to set up a Tangelo plantation on a plot of 1000 hectares and then use the fruits of the plantation to produce natural juice at the plant level which ...
        </p>
        <a href="{{URL::to('/en/agri10-investment-projects/operation-of-a-plantation-of-tangelo-and-transformation-into-juice')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>
            
            <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/en/investment2-in-agriculture/2')}}" class="ot-btn btn-main-color" ><i style="" class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
            </div>

          </div>
        </div>
      </section>

    
      @endsection

     