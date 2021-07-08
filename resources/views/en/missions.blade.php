@extends('layout_en.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> MISSION</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> HOME </a>
            </li>
            <li>
              <a href="#"> AYA FUND    </a>
            </li>
            <li class="active">Mission</li>
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
                   
             <style type="text/css">
              
               .mission{
                    border: 1px solid #4CAF50;
                    
                }
            </style>

            <div class="row col-md-9">
              <div class="mission" style="font-size: 16px; text-align: justify; margin: 5px; padding: 70px; ">
                      <p style="font-size: 16px; text-align: justify;">
                     The "AYA Fund" endowment fund was created in March 2020, with the desire to promote professional integration and fight against the loss of social ties while seeking to guarantee a healthier and more sustainable environment. "AYA Fund" particularly supports:
                      </p><br></br>

                      <p style="font-size: 16px; text-align: justify;">
                       The most fragile education and reintegration projects through employment and training;
                      </p>

                       <p style="font-size: 16px; text-align: justify;">
                       Islamic micro-finance ;
                      </p>

                       <p style="font-size: 16px; text-align: justify;">
                       Social real estate projects.
                      </p>

                       <p style="font-size: 16px; text-align: justify;">
                     It is also an opportunity for our teams to be able to invest in extra-professional projects and to reconcile their convictions with their professional know-how.
                      </p><br></br>
                </div>
            </div>

           </div>
          </div>
        </div>
      </section>

    
      @endsection

     