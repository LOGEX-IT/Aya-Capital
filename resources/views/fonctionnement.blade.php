@extends('layout.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> FONCTIONNEMENT</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> ACCUEIL </a>
            </li>
            <li>
              <a href="#"> AYA FUND    </a>
            </li>
            <li class="active">Fonctionnement</li>
          </ol>
        </div>
      </section>
        
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-3">
             <div class="sideabar">
                <div class="widget widget-sidebar widget-list-link">
                  <h4 class="title-widget-sidebar">
                    Services
                  </h4>
                  <ul class="wd-list-link">
                    <li><a href="{{URL::to('corporate-finance-projet')}}">Corporate finance project</a></li>
                    <li><a href="{{URL::to('trade-finance')}}">Trade finance</a></li>
                    <li><a href="{{URL::to('strategie')}}">Stratégie</a></li>
                    <li><a href="{{URL::to('cession')}}">Cession</a></li>
                    <li><a href="{{URL::to('acquisition')}}">Acquisition </a></li>
                    <li><a href="{{URL::to('service-corpatif')}}">Services corporatifs</a></li>
                    <li><a href="{{URL::to('/investir/1')}}">Investir</a></li>
                    <li><a href="{{URL::to('formation-et-coaching')}}">Formations et Coaching</a></li>

                  </ul>
                </div>
                <!--  <div class="widget widget-sidebar widget-text-block">
                  <h4 class="title-widget-sidebar">
                    Donnateur
                  </h4>
                  <div class="wd-text-warp">Servir le bien commun
                    <p>Devenir donateur 
                       ou s’engager à nos côtés.</p>
                       <p>Servir le bien commun</p>
                       <p>Participer à des projets concrets à fort impact social et environnemental</p>
                       <p> Bénéficier d’une réduction d’impôts</p>
                    <a href="{{URL::to('/contact')}}" class="ot-btn btn-main-color" >
                      <i class="fa fa-edit" aria-hidden="true"></i>
                      Nous écrire</a>
                  </div>
                       
                 
                </div> -->
              </div>
            </div>
                   

            <div class="row col-md-9">

                      <div class="fonct" style="font-size: 16px; text-align: justify; margin: 5px; padding: 70px; ">
                      <p>
                        <h3>
                          <strong>Il repose sur un financement mixte :</strong>
                        </h3>
                      </p><br></br>
                      <p>
                      <h3>-1% du chiffre d’affaires de AYA Capital est reversé au fonds de dotation.<br>
                      </h3>
                     </p>
                      <p>
                      <h3>-La possibilité est offerte à nos partenaires, ainsi qu'à nos clients de compléter le financement.
                      </h3>
                     </p>
                      </div>

            <style type="text/css">
              
               .fonct{
                    border: 1px solid #4CAF50;
                    
                }
            </style>

           </div>
          </div>
        </div>
      </section>

    
      @endsection

     