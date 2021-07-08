@extends('layout_en.master2')
@section('content')


            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> NIGER ENERGY INVESTMENT PROJECTS</h3>
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

<style type="text/css">
  #example1 {
}
</style>

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
        <h5 class="card-title">INCREASING THE CAPACITY OF THE SONICHAR</h5>
        <p>ENERGY</p>
        <p class="card-text">
          SONICHAR (Nigerian coal company of Anou - Araren) aims to have drawn up an assessment of the current prospects (increase in their production) of SONICHAR's mining customers to whom ...
        </p>
        <a href="{{URL::to('/en/projects1-investment-in-energy/increasing-the-capacity-of-the-sonichar')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION OF THE SORAZ-ZINDER-TORODI PIPELINE FOR THE TRANSPORT OF PETROLEUM PRODUCTS</h5>
        <p>ENERGY</p>
        <p class="card-text">
         The objective of the project is the construction of a pipeline that will connect SORAZ (Zinder Refinery Company) to the town of Torodi via Niamey.
        </p>
        <a href="{{URL::to('/en/projects2-investment-in-energy/construction-of-the-soraz-zinder-torodi-pipeline-for-transportation-of-products')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
         CREATION OF AN ASSEMBLY AND MARKETING UNIT OF PANELS AND VARIOUS SOLAR EQUIPMENT
        </h5>
        <p>ENERGY</p>
        <p class="card-text">
          In the absence of access to grid electricity, the populations of Niger, like those in the sub-region, are increasingly using solar equipment to provide the essential ...
        </p>
        <a href="{{URL::to('/en/projects3-investment-in-energy/creation-of-an-assembly-and-marketing-of-panels-and-miscellaneous-unit')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">FURNING AND MARKETING OF DOMESTIC GAS</h5>
        <p>ENERGY</p>
        <p class="card-text">
          This project is part of the pursuit of the energetic national strategy which aims to promote alternative energies through rational management and use of resources ...
        </p>
        <a href="{{URL::to('/en/projects4-investment-in-energy/domestic-gas-firing-and-marketing')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">EXPANSION OF THE RANGE OF REFINED SORAZ PRODUCTS</h5>
        <p>ENERGY</p>
        <p class="card-text">
          The project to build a photovoltaic solar power plant in the Niamey region with a production capacity of 30 MW aims to meet the growing demand for electrical energy from…
        </p>
        <a href="{{URL::to('/en/projects5-investment-in-energy/expansion-of-the-range-of-refined-products-from-la-soraz')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
        
        CONSTRUCTION OF A 30 MW SOLAR POWER PLANT IN GOROU BANDA
      </h5>
        <p>ENERGIE</p>
        <p class="card-text">
          Niger abounds in energy resources but remains dependent on neighboring countries for the satisfaction of its energy needs.
        </p>
        

        <a href="{{URL::to('/en/projects6-investment-in-energy/construction-of-a-solar-power-plant-of-30-mw-gorou-banda')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION OF A 75 MW THERMAL PLANT</h5>
        <p>ENERGY</p>
        <p class="card-text">
          The project to build a thermal oil-fired power station with a production capacity of 75 MW in the Zinder region aims to overcome the recurrent deficit in electrical energy in the region at…
        </p>
        <a href="{{URL::to('/en/projects8-investment-in-energy/construction-of-a-thermal-power-plant-of-75-mw')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">OIL AND GAS RESEARCH DEVELOPMENT PROJECT</h5>
        <p>ENERGY</p>
        <p class="card-text">
         Niger has an oil and gas potential with reserves estimated at over one billion barrels of oil and 23,175 billion m3 of natural gas. The main objective of the project is ...


        </p>
        <a href="{{URL::to('/en/projects7-investment-in-energy/projet-de-developpement-de-la-recherche-petroliere-et-gaziere')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION OF A 132 KV LINE OF 87 KM AND OF A 132 KV LINE OF 115 KM</h5>
        <p>ENERGY</p>
        <p class="card-text">
          The project to build national loops sized at 2 × 132 KV aims to facilitate the interconnection of towns in the regions of Dosso and Tillabéry.
        </p>
        <a href="{{URL::to('/en/projects9-investment-in-energy/construction-of-dune-line-132-kv-of-87-km-and-dune-line-132-kv-of-115-km')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">OIL PRODUCTION DIVERSIFICATION PROJECT</h5>
        <p>ENERGY</p>
        <p class="card-text">
         Niger has an oil and gas potential with reserves estimated at over one billion barrels of oil and 23,175 billion m3 of natural gas. The current production is 20 ...
        </p>
        <a href="{{URL::to('/en/projects10-investment-in-energy/projet-de-diversification-de-la-production-petroliere')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>
            
            <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/en/invest2/2')}}" class="ot-btn btn-main-color" ><i style="" class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
            </div>

          </div>
        </div>
      </section>

    
      @endsection

     