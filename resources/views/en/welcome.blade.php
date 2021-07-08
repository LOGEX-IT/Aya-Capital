@extends('layout_en.master')
@section('homeactive','active')
@section('content')
      <!-- Slider -->
      <section id="slider" class="no-padding">
        <div id="slide_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
          <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
          <div id="slider_2" class="rev_slider fullwidthabanner slider-home2" style="display:none;" data-version="5.0.7">
            <ul>
              <!-- SLIDE  -->
              <li data-title="FOCUS ON">
                <!-- MAIN IMAGE -->
                <img src="{{URL::to('public/template/images/Slider/home2/3.png')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 0 -->
               <!--  <div class="tp-caption tp-resizeme " 
                   data-x="left" data-hoffset="" 
                   data-y="bottom" data-voffset=""
                   
                  data-transform_idle="o:1;"
                  data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-responsive_offset="on" 
                  ><img src="{{URL::to('public/template/images/Slider/home2/3.jpg')}}" class="img-responsive hidden-sm hidden-xs" alt="Image">
                </div> -->
                <!-- LAYER NR. 1 -->
              <!--   <div class="tp-caption tp-resizeme sl-s4" 
                   data-x="['center','left','left','left']" data-hoffset="['290','0','0','0']"
                   data-y="top" data-voffset="160"
                   data-width="['580','580','480','320']"
                  data-transform_idle="o:1;"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1500" 
                  data-whitespace="['nowrap','nowrap','nowrap','normal']"
                  data-fontsize="['32','28','21','16']"
                  data-responsive_offset="on" 
                  >
              </div> -->
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme sl-s2" 
                   data-x="['center','left','left','left']" data-hoffset="['290','0','0','0']"
                   data-y="center" data-voffset="['-55','-55','-75','-85']"
                   data-width="['580','580','480','320']"
                  data-transform_idle="o:1;"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  
                  data-start="1700"
                  data-whitespace="['nowrap','nowrap','nowrap','normal']"
                  data-fontsize="['60','50','40','30']" 
                  data-responsive_offset="on" 
                  >
<!--                   <p style="font-size:30px;">STAY SAFE WITH AYA CAPITAL</p>
 -->                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme sl-s3" 
                  data-x="['center','left','left','left']" data-hoffset="['290','0','0','0']"
                   data-y="center" data-voffset="['25','25','0','-35']"
                  data-width="['580','580','480','300']"
                  data-transform_idle="o:1;"
                  data-whitespace="['normal','normal','normal','normal']"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1900" 
                  data-fontsize="['16','16','14','12']"
                  data-lineheight="['24','24','18','16']"
                  data-responsive_offset="on" 
                  >
                  <!-- <p>Independent consultancy firm in financial engineering and fundraising, business transfer and capital reorganization.</p> -->
                </div>
               
                <div class="tp-caption" 
                   data-x="['center','left','left','left']" data-hoffset="['65','0','0','0']"
                   data-y="bottom" data-voffset="['160','160','200','240']"
                  data-transform_idle="o:1;"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                  data-start="2100" 
                  ><a href="#" class="sl-btn-1">Write us</a>
                </div>
              </li>
              <!-- SLIDE  -->
              <li data-title="FOCUS ON">
                <!-- MAIN IMAGE -->
                <img src="{{URL::to('public/template/images/Slider/home2/3.png')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 0 -->
                <!-- <div class="tp-caption tp-resizeme " 
                   data-x="left" data-hoffset="" 
                   data-y="bottom" data-voffset=""
                   
                  data-transform_idle="o:1;"
                  data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-responsive_offset="on" 
                  ><img src="{{URL::to('public/template/images/Slider/home2/2.jpg')}}" class="img-responsive hidden-sm hidden-xs" alt="Image">
                </div> -->
                <!-- LAYER NR. 1 -->
                <!-- <div class="tp-caption tp-resizeme sl-s4" 
                   data-x="['center','left','left','left']" data-hoffset="['290','0','0','0']"
                   data-y="top" data-voffset="160"
                   data-width="['580','580','480','320']"
                  data-transform_idle="o:1;"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1500" 
                  data-whitespace="['nowrap','nowrap','nowrap','normal']"
                  data-fontsize="['32','28','21','16']"
                  data-responsive_offset="on" 
                  >
               </div> -->
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme sl-s2" 
                   data-x="['center','left','left','left']" data-hoffset="['290','0','0','0']"
                   data-y="center" data-voffset="['-55','-55','-75','-85']"
                   data-width="['580','580','480','320']"
                  data-transform_idle="o:1;"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  
                  data-start="1700"
                  data-whitespace="['nowrap','nowrap','nowrap','normal']"
                  data-fontsize="['60','50','40','30']" 
                  data-responsive_offset="on" 
                  >
<!--                   <p style="font-size: 30px;">STAY SAFE WITH AYA CAPITAL</p>
 -->                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme sl-s3" 
                  data-x="['center','left','left','left']" data-hoffset="['290','0','0','0']"
                   data-y="center" data-voffset="['25','25','0','-35']"
                  data-width="['580','580','480','300']"
                  data-transform_idle="o:1;"
                  data-whitespace="['normal','normal','normal','normal']"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1900" 
                  data-fontsize="['16','16','14','12']"
                  data-lineheight="['24','24','18','16']"
                  data-responsive_offset="on" 
                  >
<!--                   <p>Independent consultancy firm in financial engineering and fundraising, business transfer and capital reorganization.</p>
 -->                </div>
                <div class="tp-caption" 
                   data-x="['center','left','left','left']" data-hoffset="['65','0','0','0']"
                   data-y="bottom" data-voffset="['160','160','200','240']"
                  data-transform_idle="o:1;"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                  data-start="2100" 
                  ><a href="#" class="sl-btn-1">Write us</a>
                </div>
                <!-- LAYER NR. 5 -->
               
              </li>
              <!-- SLIDE  -->
              <li data-title="FOCUS ON">
                <!-- MAIN IMAGE -->
                <img src="{{URL::to('public/template/images/Slider/home2/3.png')}}"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 0 -->
                <div class="tp-caption tp-resizeme " 
                   data-x="left" data-hoffset="" 
                   data-y="bottom" data-voffset=""
                   
                  data-transform_idle="o:1;"
                  data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1000" 
                  data-responsive_offset="on" 
                  ><img src="{{URL::to('public/template/images/Slider/home2/3.png')}}" class="img-responsive hidden-sm hidden-xs" alt="Image">
                </div>
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-resizeme sl-s4" 
                   data-x="['center','left','left','left']" data-hoffset="['290','0','0','0']"
                   data-y="top" data-voffset="160"
                   data-width="['580','580','480','320']"
                  data-transform_idle="o:1;"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1500" 
                  data-whitespace="['nowrap','nowrap','nowrap','normal']"
                  data-fontsize="['32','28','21','16']"
                  data-responsive_offset="on" 
                  >
<!--                   <p style="font-size: 25px;">RESTEZ EN SÉCURITÉ AVEC AYA CAPITAL</p>
 -->                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme sl-s2" 
                   data-x="['center','left','left','left']" data-hoffset="['290','0','0','0']"
                   data-y="center" data-voffset="['-55','-55','-75','-85']"
                   data-width="['580','580','480','320']"
                  data-transform_idle="o:1;"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"  
                  data-start="1700"
                  data-whitespace="['nowrap','nowrap','nowrap','normal']"
                  data-fontsize="['60','50','40','30']" 
                  data-responsive_offset="on" 
                  >
<!--                   <p style="font-size: 30px;">STAY SAFE WITH AYA CAPITAL</p>
 -->                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme sl-s3" 
                  data-x="['center','left','left','left']" data-hoffset="['290','0','0','0']"
                   data-y="center" data-voffset="['25','25','0','-35']"
                  data-width="['580','580','480','300']"
                  data-transform_idle="o:1;"
                  data-whitespace="['normal','normal','normal','normal']"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="1900" 
                  data-fontsize="['16','16','14','12']"
                  data-lineheight="['24','24','18','16']"
                  data-responsive_offset="on" 
                  >
<!--                   <p>Independent consultancy firm in financial engineering and fundraising, business transfer and capital reorganization.</p>
 -->                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption" 
                   data-x="['center','left','left','left']" data-hoffset="['65','0','0','0']"
                   data-y="bottom" data-voffset="['160','160','200','240']"
                  data-transform_idle="o:1;"
                  data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" 
                  data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                  data-start="2100" 
                  ><a href="#" class="sl-btn-1">Write us</a>
                </div>
                <!-- LAYER NR. 5 -->
               
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- /Slider -->

      <section id="offer" class="offer-h2">
        <div class="container">
          <div class="row">

            <div class="col-md-12">
              <div class="demo-offer-h2">
                <div class="title-block">
                  <span class="top-title" style="color: #478e4c;"></span>
                  <h2>What we offer</h2>
                  <p class="sub-title">As always, partners grows with you!</p>
                  <span class="bottom-title"></span>
                </div>
                
                <div class="warp-full-width offer-h2-warp">
                  <div id="offer-h2" class="owl-offer-h2">
                    <div class="item-offer" >
                      <div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
                        <span class="lnr lnr-pie-chart"></span>
                        <h4>Taxation</h4>
                        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic.</p>
                        
                      </div>
                    </div>
                    <div class="item-offer" >
                      <div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
                        <span class="lnr lnr-calendar-full" style="color: green;"></span>
                        <h4>Accumulation</h4>
                        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic.</p>
                        
                      </div>
                    </div>
                    <div class="item-offer" >
                      <div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
                        <span class="lnr lnr-briefcase"></span>
                        <h4>Business Planning</h4>
                        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic.</p>
                        
                      </div>
                    </div>
                    <div class="item-offer" >
                      <div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
                        <span class="lnr lnr-layers"></span> 
                        <h4>Risk Management</h4>
                        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic.</p>
                        
                      </div>
                    </div>
                    <div class="item-offer" >
                      <div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
                        <span class="lnr lnr-briefcase"></span>
                        <h4>Business Planning</h4>
                        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic.</p>
                        
                      </div>
                    </div>
                    <div class="item-offer" >
                      <div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
                        <span class="lnr lnr-layers"></span> 
                        <h4>Risk Management</h4>
                        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic.</p>
                        
                      </div>
                    </div>
                    <div class="item-offer" >
                      <div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
                        <span class="lnr lnr-calendar-full"></span>
                        <h4>Accumulation</h4>
                        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic.</p>
                        
                      </div>
                    </div>
                    <div class="item-offer" >
                      <div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
                        <span class="lnr lnr-briefcase"></span>
                        <h4>Business Planning</h4>
                        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic.</p>
                        
                      </div>
                    </div>
                    <div class="item-offer" >
                      <div class="iconbox-type-xs iconbox-overlay-bg text-center bg-light-grey">
                        <span class="lnr lnr-layers"></span> 
                        <h4>Risk Management</h4>
                        <p>Now that we know who you are, I know who I am. I'm not a mistake! It all makes sense! In a comic.</p>
                        
                      </div>
                    </div>
                  </div>
                  <div class="customNavigation">
                            <a class="btn-1 prev-offer-h2"><i class="fa fa-angle-left"></i></a>
                            <a class="btn-1 next-offer-h2"><i class="fa fa-angle-right"></i></a>
                      </div><!-- End owl button -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /offer -->

      <section class="bg-quote-h2">
        <div class="quote-inner quote-inner-h2">
          <p>For expert financial advice, you can trust <span> AYA CAPITAL</span></p>
          <a href="{{URL::to('/contact')}}" class="ot-btn btn-sub-color">Contact us</a>
        </div>
      </section>
      <!-- /Quote -->
      <section id="chooseus" class="padding-lg whyus-h2-warp">
        <div class="container">
          <div class="row">
            <div class="title-block text-center">
              <span class="top-title "></span>
              <h2>Why choose us</h2>
              <p class="sub-title">Customer value chain</p>
              <span class="bottom-title"></span>
            </div>
            <div class="whyus-warp-h2">
              <div class="col-md-6">
                <div class="left-whyus-h2">
                <div class="demo-style-1-warp">
                  <img src="{{URL::to('public/template/images/Content/demo-style-1.jpg')}}" class="img-responsive" alt="Image">
                  <div class="demo-style-1-box-text right">
                    <p>Today,</p>
                    <p>Tomorrow,</p>
                    <p>Together.</p>
                  </div>
                </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-whyus-h2">
                <div class="iconbox-warp ">
                  <h3 class="title-mix"><strong> May tomorrow start today</strong></h3>
                  <p class="demo-sub-about-text-2" style="text-align: justify;">
                    
                   The firm's expertise revolves exclusively around consulting services. We support company executives and shareholders in their financing transactions and mergers and acquisitions files. Fundraising, capital reorganization, acquisition, sale, business transfer ... We follow the entire process, from strategic thinking, to negotiations and until the closing of the transaction. We are an independent, entrepreneurial consulting firm, and claim to defend the interests of our clients in total confidentiality.
                  </p>
                  <div class="iconbox">
                   <span class="icon icon-library"></span>
                    <h4>Advice on reorganization and transfer of capital</h4>
                   <p>
                     Reorganization of capital.
                   </p>
                  </div>

                  <div class="iconbox">
                    <span class="icon icon-library"></span>
                    <h4>Fundraising</h4>
                    <p>
                      Support and advice in fundraising.
                    </p>
                    <p>
                      Financial engineering.
                    </p>
                     <p>
                     Structuring of the operation
                    </p>

                  </div>
                  <div class="iconbox">


                    <span class="icon icon-trophy"></span>
                    <h4>Business transfer</h4>
                    <p>
                      Support and advice on business transfers
                    </p>
                    <p>
                      Identification of buyers (legal or natural persons).
                    </p>
                    <p>
                      Structuring of the operation
                    </p>



                  </div>
                  <div class="iconbox">
                    <span class="icon icon-briefcase"></span>
                    <h4>Acquisition</h4>
                   <p>
                      Identification of targets (competitor, distributor, customer, supplier) in France and internationally.
                    </p>
                    <p>
                      Search for financing for the operation.
                    </p>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Why choose us -->
      <section class="no-padding">
          <div class="title-warp bg-pricing-h2" >
            <div class="title-block title-on-dark text-center">
              <span class="top-title "></span>
              <h2>OUR EXPERTISE</h2>
              <p class="sub-title">As always, partners grow with you!</p>
              <span class="bottom-title"></span>
            </div>
          </div>
<!--           <div class="container">
            <div class="row">
              <div class="fix-position-pricing-home2">
                <div class="col-md-3 col-sm-6">
                  <div class="pricing-table">
                    <div class="plan">
                        <h3>Cession d’entreprise
                          <span class="price">
                            <span class="price-inner"> </span>
                          </span> 
                        </h3>

                        <div class="body-table">
                          
                          <ul>
                              <li>Accompagnement et conseil en cession d’entreprise</li>
                              <li>dentification des acquéreurs (personnes morales ou physiques).</li>
                              <li>Structuration de l’opération</li><br><br>
                          </ul> 
                          <a href="#" class="ot-btn btn-main-color" >Get Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="pricing-table pt-most-popular">
                    <div class="plan">
                        <h3>Levée de fonds
                          <span class="price">
                            <span class="price-inner"></span>
                          </span> 
                        </h3>

                        <div class="body-table">
                          
                          <ul>
                              <li>Accompagnement et conseils en levées de fonds.</li>
                              <li>Ingénierie financière.</li>
                              <li>Structuration de l’opération</li><br><br>
                          </ul> 
                          <a href="#" class="ot-btn btn-sub-color" >Get Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="pricing-table">
                    <div class="plan">
                        <h3>Acquisition
                          <span class="price">
                            <span class="price-inner">
                            </span>
                          </span> 
                        </h3>

                        <div class="body-table">
                          
                          <ul>
                              <li>Accompagnement et conseil en acquisition</li>
                              <li>Identification des cibles (concurrent, distributeur, client, fournisseur) en France et à l’international.</li>
                              <li>Recherche de financements de l’opération.</li>
                          </ul> 
                          <a href="#" class="ot-btn btn-main-color" >Get Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6">
                  <div class="pricing-table">
                    <div class="plan">
                        <h3>Corporation
                          <span class="price">
                            <span class="price-inner">
                              <span class="big-num">98.</span><span class="small-num">00 $</span>
                              <span class="perm">Per month</span>
                            </span>
                          </span> 
                        </h3>

                        <div class="body-table">
                          
                          <ul>
                              <li> Strategic Alliance</li>
                              <li>Growth Expansion</li>
                              <li>Business Planning</li>
                              <li>Contract Negotiation</li>
                              <li>Market Positioning</li>
                          </ul> 
                          <a href="#" class="ot-btn btn-main-color" >Get Plan</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
      </section>
      <!-- /Pricing Table -->


      

      <section>
        <div class="cb-warp-h2">
          <div class="left-bg-cb-h2 image-container">
            <div class="background-image" style="background: url(https://www.info-afrique.com/wp-content/uploads/2012/09/investissement-afrique.jpg) ;"></div>
          </div>
          <div class="right-bg-cb-h2 image-container image-container-right">
            <div class="background-image" style="background: #f6f6f6 ;"></div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-md-5">
                <div class="cb-info-warp-h2">
                  <div class="title-block title-on-dark title-pd">
                    <!-- <span class="top-title "></span>
                    <p class="sub-title">Our financial advisers always help you</p>
                    <span class="bottom-title"></span> -->
                  </div>

                  <p>
                    <!-- Temporibus autem quibusdam et aut officiis debitis is aut rerum necessitatibus saepes eveniet ut et seo lage volupta repudiandae sint et molestiae non mes. -->
                  </p>

                 <!--  <div class="cb-info-h2">
                    <p><span class="icon icon-clock"></span> Mon-Sat   10.00am - 6.00p.m <br> Sun  11.30am - 3.00p.m</p>
                    <p><span class="icon icon-phone"></span> +1 1234-456-789</p>
                    <p><span class="icon icon-envelop"></span> admin@amwal.com</p>
                  </div> -->
                </div>
              </div>
              <div class="col-md-7">
                <div class="form-cb-warp cb-form-h2">
                  <form class="cb-form">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" placeholder="Your Name*">
                    </div>

                   <!--  <select class="cb">
                      <option value="">I would like to discuss</option>
                      <option>Strategic Decision Making</option>
                      <option>International Finance Resources</option>
                      <option>Hedging & Risk Management</option>
                      <option>International Capital Markets</option>
                      <option>Foreign Exchange Markets</option>
                      <option>International Finance & Global Markets</option>
                      <option>International Finance Tutorial</option>
                    </select> -->

                    <div class="form-group">
                      <input type="email" class="form-control"   placeholder="Your Email*">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="phone" placeholder="Your Phone Number*">
                    </div>
                    
                    <button type="submit" class="btn-main-color"><i class="fa fa-paper-plane" aria-hidden="true"></i> Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Call back -->
      
<!--       <section>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="partner-h2" class="owl-partner-h2">
                <div class="item-partner" >
                  <a href="#"><img src="http://placehold.it/269x160/ccc.jpg" class="img-responsive partner-img" alt="Image"></a>              
                </div>
                <div class="item-partner" >
                  <a href="#"><img src="http://placehold.it/269x160/ccc.jpg" class="img-responsive partner-img" alt="Image"></a>              
                </div>
                <div class="item-partner" >
                  <a href="#"><img src="http://placehold.it/269x160/ccc.jpg" class="img-responsive partner-img" alt="Image"></a>              
                </div>
                <div class="item-partner" >
                  <a href="#"><img src="http://placehold.it/269x160/ccc.jpg" class="img-responsive partner-img" alt="Image"></a>              
                </div>
                <div class="item-partner" >
                  <a href="#"><img src="http://placehold.it/269x160/ccc.jpg" class="img-responsive partner-img" alt="Image"></a>              
                </div>
                <div class="item-partner" >
                  <a href="#"><img src="http://placehold.it/269x160/ccc.jpg" class="img-responsive partner-img" alt="Image"></a>              
                </div>
                <div class="item-partner" >
                  <a href="#"><img src="http://placehold.it/269x160/ccc.jpg" class="img-responsive partner-img" alt="Image"></a>              
                </div>
                <div class="item-partner" >
                  <a href="#"><img src="http://placehold.it/269x160/ccc.jpg" class="img-responsive partner-img" alt="Image"></a>              
                </div>
                <div class="item-partner" >
                  <a href="#"><img src="http://placehold.it/269x160/ccc.jpg" class="img-responsive partner-img" alt="Image"></a>              
                </div>
                <div class="item-partner" >
                  <a href="#"><img src="http://placehold.it/269x160/ccc.jpg" class="img-responsive partner-img" alt="Image"></a>              
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- /Partner -->

      
      
      <section class="bg-social-h2">
        <div class="social-inner social-inner-h2">
          <p>We are <span>lovely</span> social</p>
          <ul class="widget widget-footer widget-footer-social-1 social-hover-defaul">
            <li><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a class="google" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a class="flickr" href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </section>
      <!-- /Social -->
      @endsection

     