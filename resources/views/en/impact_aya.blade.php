@extends('layout_en.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3>IMPACT  AYA</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> HOME </a>
            </li>
            <li>
              <a href="#"> Investment funds     </a>
            </li>
            <li class="active">Impact AYA</li>
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
                          <div id="collapseThree" class="panel-collapse collapse in">
                            <div class="panel-body " style="text-align: justify; font-size: 16px; margin: 15px 15px;">
                              <b>Our world and our societies are undergoing profound change. The social and human impact of the technological upheavals underway, health and food concerns, the climate and ecological emergency, all of these major issues challenge us. 
                              </b><br><br>

                              New development models are being put in place where they are yet to be imagined. The circular economy intended to replace the linear economy, micro-credit, social and solidarity economy, responsible consumption and sharing economy now structure the way of producing, selling and buying with the idea that we do not can no longer ignore what is happening on the other side of the planet. <br>

                             Individually, many people choose to act in their privacy in a socially responsible manner. These personal convictions very often impact their professional environment. <br>

                              Collectively, more and more businesses are now realizing that finding solutions for the common good must become a priority. They have understood that they must change their practices and are constantly acting in this direction to improve their societal impact.<br>

                             Investment professionals are also mobilizing with "impact investing". The pursuit of profit is no longer the only goal. The investment must also generate a positive environmental and social impact.<br>

                              Attention is therefore also paid to qualitative criteria. This form of investment goes beyond taking ESG criteria (the current benchmark) into account, to give them equal importance to the expected financial return.<br><br>

                              <b>AYA Capital has chosen to be at the forefront of this movement.
                              </b> <br>

                              These developments have therefore led us to rethink our modes of production, consumption and work. From this journey emerged the idea that AYA could stand ready to support clients who have or who wish to commit their company to the service of these environmental and societal issues.<br>

                             This new "AYA impact" activity is part of a benevolent consultancy approach in order to share these common values ​​with our customers, and to make this support part of a logic of sustainable partnership.

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

     