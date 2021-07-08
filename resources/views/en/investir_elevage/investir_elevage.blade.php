@extends('layout_en.master2')
@section('content')


            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> NIGER LIVESTOCK INVESTMENT PROJECTS</h3>
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
        <h5 class="card-title">INTENSIVE FISH PRODUCTION</h5>
        <p>BREEDING</p>
        <p class="card-text">
        Niger has a vast water network made up mainly of the Niger River, Lake Chad, the Komadougou Yobé as well as countless permanent and semi-permanent ponds.
        </p>
        <a href="{{URL::to('/en/livestock-investment-projects1/prodution-intensive-de-poisson')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION OF A MODERN SLAUGHTERHOUSE IN NIAMEY</h5>
        <p>BREEDING</p>
        <p class="card-text">
         The goal of this project is to create a modern slaughterhouse with a large slaughter capacity to efficiently meet the growing demand for meat in Niamey's city markets ...
        </p>
        <a href="{{URL::to('/en/livestock-investment-projects2/creation-dun-abattoir-moderne-niamey')}}" class="btn btn-default">READ MORE</a>
      </div>
    </div>
  </div>
</div>

            
           <!--  <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/investir2/2')}}" class="ot-btn btn-main-color" ><i style="" class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
            </div> -->

          </div>
        </div>
      </section>

    
      @endsection

     