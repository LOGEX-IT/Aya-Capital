@extends('layout_en.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> FUND ADMINISTRATION</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> HOME </a>
            </li>
            <li>
              <a href="#"> Ours services     </a>
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
                 <div class="widget widget-sidebar widget-text-block">
                  <h4 class="title-widget-sidebar">
                    Donor
                  </h4>
                  <div class="wd-text-warp">Serve the common good
                    <p>Become a donor or get involved with us.</p>
                       <p>Serve the common good</p>
                       <p>Participate in concrete projects with a strong social and environmental impact</p>
                       <p> Benefit from a tax reduction</p>
                    <a href="{{URL::to('/en/contact')}}" class="ot-btn btn-main-color" >
                      <i class="fa fa-edit" aria-hidden="true"></i>
                      Write us</a>
                  </div>
                </div>
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
                      </p><br></br>

                      <p style="font-size: 16px; text-align: justify;">
                        With our services, we allow fund managers to focus on their expertise. Our fund reporting system produces accurate information in a
                      </p>

                      <br></br>

                      <p style="font-size: 16px; text-align: justify;">
                       Timely and efficient, allowing all stakeholders to make the best decision at all times.
                        Our goal is to be efficient by streamlining the information channel between fund management teams, the board of directors, the investment committee and investors.
 
                      </p>
            </div>

           </div>
          </div>
        </div>
      </section>

    
      @endsection

     