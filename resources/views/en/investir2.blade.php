@extends('layout.master2')
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
        <h5 class="card-title">CONSTRUCTION OF A PIPELINE FOR THE EXPORTING OF CRUDE OIL</h5>
        <p>ENERGIE</p>
        <p class="card-text">
          In Niger, oil reserves are estimated at nearly 4 billion barrels and 23.175 billion m3 of natural gas. Today, the exportable amount of crude oil in Niger is ...
        </p>
        <a href="{{URL::to('/en/projects11-investment-in-energy/construction-of-a-crude-oil-export-pipeline')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION OF A COAL COMPLEX IN SALKADAMNA</h5>
        <p>ENERGY</p>
        <p class="card-text">
          The project to create a coal complex in Salkadamna is part of the energy policy of the government of Niger, which aims to increase the country's energy capacity ...
        </p>
        <a href="{{URL::to('/en/projects12-investment-in-energy/construction-of-a-coal-mining-complex-salkadamna')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
          ELECTRIFICATION PROJECT OF 250 VILLAGES BY SOLAR PHOTOVOLTAIC SYSTEM
        </h5>
        <p>ENERGY</p>
        <p class="card-text">
          The energy sector is nowadays at the center of socio-economic issues and the fight against global warming.
        </p>
        <a href="{{URL::to('/en/projects13-investment-in-energy/250-village-electrification-project-by-solar-photovoltaic-system')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION OF A 50 MW CONCENTRATION PLANT</h5>
        <p>ENERGY</p>
        <p class="card-text">
          This project is part of the pursuit of the national energy policy which aims to promote renewable energies and secure energy supply ...
        </p>
        <a href="{{URL::to('/en/projects14-investment-in-energy/construction-dune-powerhouse-concentration-of-50-mw')}}">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION OF A MINERAL COAL AND BIOMASS BRICKET PLANT</h5>
        <p>ENERGY</p>
        <p class="card-text">
          The objective of this project is to set up an industrial unit to manufacture mineral coal and biomass briquettes with an annual production capacity of 50,000 tons at ...
        </p>
        <a href="{{URL::to('/en/projects15-investment-in-energy/construction-dune-briquetterie-de-charbon-mineral-et-de-biomasse')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">HYBRIDATION OF THE DIFFA DIESEL POWER PLANT</h5>
        <p>ENERGY</p>
        <p class="card-text">
          The Diffa diesel power plant hybridization project is part of the Niger government's energy policy, which aims to increase the country's energy capacity in order to ...
        </p>
        <a href="{{URL::to('/en/projects16-investment-in-energy/hybridization-of-the-diesel-plant-of-diffa')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION OF A SOLAR PHOTOVOLTAIC POWER PLANT AT THE AXCILLIARIES OF THE 2 × 25 MW SONICHAR PLANT</h5>
        <p>ENERGY</p>
        <p class="card-text">
          The project to build a photovoltaic solar park in the Far North of Niger with a production capacity of 50 MW falls within the line of conduct of the national strategy focused on…
        </p>
        <a href="{{URL::to('/en/projects17-investment-in-energy/construction-dune-solar-photovoltaic-plant-in-axcilliaries-of-la')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">ESTABLISHMENT OF A SOLAR STREET LIGHTS PRODUCTION AND INSTALLATION UNIT</h5>
        <p>ENERGY</p>
        <p class="card-text">
          In Niger, there is a great disparity in the rate of access to modern energy services between the different zones.
        </p>
        <a href="{{URL::to('/en/projects18-investment-in-energy/setting-up-of-a-production-unit-and-installation-of-lampposts')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">RURAL TEACHERS AND HEALTH WORKERS KITS</h5>
        <p>ENERGY</p>
        <p class="card-text">
          In rural areas, a high rate of absenteeism and abandonment of teachers and nurses has been observed, who always prefer to serve in better living conditions (centers ...
        </p>
        <a href="{{URL::to('/en/projects19-investment-in-energy/rural-teachers-and-health-worker-kits')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION OF A 60 MW HYBRID THERMAL / SOLAR POWER PLANT IN SORAZ</h5>
        <p>ENERGY</p>
        <p class="card-text">
          The construction project of a hybrid thermal / solar power plant with a production capacity of 60 MW at Soraz aims to compensate for the recurring deficit in electrical energy in the Center-East of…
        </p>
        <a href="{{URL::to('/en/projects20-investment-in-energy/construction-dune-hybrid-thermal-solar-60-mw-soraz')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>
            
            <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/en/invest/1')}}" class="ot-btn btn-main-color" ><i class="fa fa-caret-square-o-left" aria-hidden="true"></i></a>
              <a href="{{URL::to('/en/invest3/3')}}" class="ot-btn btn-main-color" ><i style="" class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
            </div>

          </div>
        </div>
      </section>

    
      @endsection

     