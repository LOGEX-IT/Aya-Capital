@extends('layout.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3>GOUVERNANCE</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> ACCUEIL </a>
            </li>
            <li>
              <a href="#"> Fonds d'investissements     </a>
            </li>
            <li class="active">Gouvernance</li>
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
                 <!-- <div class="widget widget-sidebar widget-text-block">
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
               <!--  <div class="widget widget-sidebar widget-text-block">
                  <h4 class="title-widget-sidebar">
                    Company in Lines
                  </h4>
                  <div class="wd-text-warp">
                    <p>Temporibus autem quibusdam et aut officiis debitis is  necessitatibus saepes eveniet ut et seo repudiandae sint et molestiae non Creating futures seon through world.</p>
                    <a href="#" class="ot-btn btn-main-color" >
                      <i class="fa fa-download" aria-hidden="true"></i>
                      Download Presentation</a>
                  </div>
                </div> -->
               
              </div>
            </div>
                   

            <div class="">
                     
              <div class="statements-warp">
<!--                 <h3>Financial Statements</h3>
 -->               <div class="col-md-9">
                <div class="statements-accordion">
                    <div class="panel-group accordion-2" id="accordion">
                     
                      <div class="panel panel-default">
                          <div class="panel-heading">
                            <h4 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                IMPACT AYA
                              </a>
                            </h4>
                          </div>
                          <div id="" class="panel-collapse collapse in">
                            <div class="" style="font-size: 20px; text-align: justify; padding: 30px 30px; margin-top: -60px;">
                              <p>Le Conseil d’Administration procède à la validation des donations, à la réflexion stratégique pour le développement. Il détermine le programme d’actions, supervise, contrôle la gestion et règle, par ses délibérations, les affaires du fonds de dotation. Le Président instruit toutes les affaires soumises au Conseil d’Administration et pourvoit à l’exécution de ses délibérations<br>
                              Les membres du conseil d’administration : <br>
                              </p>
                               - A<br>
                               - B<br>
                               - C<br>
                               - D<br>
                               - E

                            </div>
                          </div>
                      </div>

                       
                </div>
                </div>
              </div>
              </div>

                     
            </div>

           </div>
          </div>
        </div>
      </section>

    
      @endsection

     