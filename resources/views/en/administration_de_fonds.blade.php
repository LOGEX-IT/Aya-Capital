@extends('layout_en.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> FUND ADMINISTRATION</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> Home </a>
            </li>
            <li>
              <a href="#"> Ours Services     </a>
            </li>
            <li class="active">Fund administration</li>
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
                    At AYA CAPITAL, we provide fund managers with a reliable and secure platform to launch and host their investment funds in Africa. Our fund services range from advice, i.e. from structuring to back-office administration.
                      </p><br>

                      <p style="font-size: 16px; text-align: justify;">
                        With our services, we allow fund managers to focus on their expertise. Our fund reporting system produces accurate information in a
                      </p>

                      <br>

                      <p style="font-size: 16px; text-align: justify;">
                        Timely and efficient, allowing all stakeholders to make the best decision at all times.
                        Our goal is to be efficient by streamlining the information channel between fund management teams, the board of directors, the investment committee and investors.
 
                      </p>
                      <div class="row col-md-9">
                      <section class="no-padding sh-single-services">
                          <div class="sub-header ">
                         <p style="color: white !important; font-size: 20px;"> <b>Independent consultancy firm in financial engineering and fundraising, business sale and capital reorganization</b>
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

     