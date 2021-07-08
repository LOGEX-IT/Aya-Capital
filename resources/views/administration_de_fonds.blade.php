@extends('layout.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> ADMINISTRATION DES FONDS</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> ACCUEIL </a>
            </li>
            <li>
              <a href="#"> Nos services     </a>
            </li>
            <li class="active">Administration des fonds</li>
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
                      <p style="font-size: 16px; text-align: justify;">
                     Chez AYA CAPITAL, nous fournissons aux gestionnaires de fonds une plate-forme fiable et sûre pour lancer et héberger leurs fonds d'investissement en Afrique. Nos services de fonds vont du conseil, c'est-à-dire de la structuration à l'administration back-office.
                      </p><br>

                      <p style="font-size: 16px; text-align: justify;">
                        Grâce à nos services, nous permettons aux gestionnaires de fonds de se concentrer sur leur expertise. Notre système de reporting des fonds produit des informations précises de manière 
                      </p>

                      <br>

                      <p style="font-size: 16px; text-align: justify;">
                        opportune et efficace, permettant ainsi à toutes les parties prenantes de prendre la meilleure décision à tout moment.
                        Notre objectif est d'être efficace en rationalisant le canal d'information entre les équipes de gestion de fonds, le conseil d'administration, le comité d'investissement et les investisseurs.
 
                      </p>
                      <div class="row col-md-9">
                      <section class="no-padding sh-single-services">
                          <div class="sub-header ">
                         <p style="color: white !important; font-size: 20px;"> <b>Cabinet indépendant de conseil en ingénierie financière et levée de fonds, cession d’entreprise et réorganisation de capital</b>
                         </p>
                            <ol class="breadcrumb">
                              
                              
                            </ol>
                          </div>
                     </section>
                   </div>
                  </div>


           </div>
          </div>
        </div>
      </section>

    
      @endsection

     