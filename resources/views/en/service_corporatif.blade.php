@extends('layout.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> CORPORATE SERVICES</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> Home </a>
            </li>
            <li>
              <a href="#"> Our services     </a>
            </li>
            <li class="active">Corporate services</li>
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
                    <li><a href="{{URL::to('strategie')}}">Strategy</a></li>
                    <li><a href="{{URL::to('cession')}}">Assignment</a></li>
                    <li><a href="{{URL::to('acquisition')}}">Acquisition </a></li>
                    <li><a href="{{URL::to('service-corpatif')}}">Corporate services</a></li>
                    <li><a href="{{URL::to('/investir/1')}}">Invest</a></li>
                    <li><a href="{{URL::to('formation-et-coaching')}}">Training and Coaching</a></li>

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
                     At AYA CAPITAL, we understand the need to quickly deliver services to businesses and financial institutions operating in an increasingly compliance-driven environment. Our aim is to assist you with business services in accordance with the existing legal framework so that you are free to focus on other aspects of your business.
                      </p><br></br>

                      <p style="font-size: 16px; text-align: justify;">
                        We rely on the significant experience gained over years of activity in the sector, a bilingual workforce and qualified staff members ranging from certified accountants to corporate secretaries. We recognize that profitability is a prerequisite for our clients, even more so during tough times, and we pride ourselves on delivering value for our services.
                      </p>
            </div>

           </div>
          </div>
        </div>
      </section>

    
      @endsection

     