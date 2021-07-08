@extends('layout.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> SERVICES CORPORATIFS</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> ACCUEIL </a>
            </li>
            <li>
              <a href="#"> Nos services     </a>
            </li>
            <li class="active">Services corporatifs</li>
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
                      <!-- <h4 style="color: #70c36b !important;">« Vous souhaitez VENDRE partiellement ou totalement votre entreprise »</h4>
                      <span class="bottom-title"></span><br></br> -->

                      <!-- <p style="font-size: 16px; text-align: justify;">Quelle est la valeur réelle de votre société ?</p>
                      <p style="font-size: 16px; text-align: justify;">Est-ce le bon moment pour vendre ? </p>
                      <p style="font-size: 16px; text-align: justify;">Quel est le meilleur acquéreur ?</p>
                      <br></br> -->

                      <p style="font-size: 16px; text-align: justify;">
                     Chez AYA CAPITAL, nous comprenons la nécessité de fournir rapidement des services aux entreprises et aux institutions financières opérant dans un environnement de plus en plus axé sur la conformité. Notre objectif est de vous aider avec des services d'entreprise conformément au cadre juridique existant afin que vous soyez libre de vous concentrer sur d'autres aspects de votre entreprise.
                      </p><br></br>

                      <p style="font-size: 16px; text-align: justify;">
                        Nous nous appuyons sur l'expérience significative acquise au fil des années d'activité dans le secteur, une main-d'œuvre bilingue et des membres du personnel qualifiés allant des comptables accrédités aux secrétaires d'entreprise. Nous reconnaissons que la rentabilité est une condition préalable pour nos clients, plus encore pendant les périodes difficiles, et nous sommes fiers d'offrir de la valeur pour nos services.
                      </p>
            </div>

           </div>
          </div>
        </div>
      </section>

    
      @endsection

     