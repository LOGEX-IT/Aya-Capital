@extends('layout.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> TRADE FINANCE</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> ACCUEIL     </a>
            </li>
            <li>
              <a href="#"> Nos services     </a>
            </li>
            <li class="active">Trade finance</li>
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
                 <div class="widget widget-sidebar widget-text-block" style="font-size: 16px;">
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
                    

            <div class="col-md-9">
                     <div class="">
                      <h3 style="color: #70c36b !important; margin-left: 25px;">
                        <b>« Spécialiste en financement du commerce international »
                        </b>
                      </h3>
                      <span class="bottom-title"></span>
                      <p style="font-size: 16px; text-align: justify; margin-left: 25px;">
                        AYA Capital est en partenariat avec plusieurs institutions financières à travers le monde pour offrir des services qui incluent le financement de projets et de commerce international.
                        Grâce à nos services, vous pouvez: 
                      </p>
                    </div>

              <div class="benefit-services-warp-2 desk-pdt-60" style="margin-left: 25px;">
                <div class="row">
                  <div class="col-md-4">
                    <div class="iconbox">
                      <span class="icon icon-stats-bars2"></span>
                      <p style="font-size: 16px;">Augmentez votre facilité de commerce avec vos fournisseurs</p>
                     <!--  <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.
                      </p> -->
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="iconbox">
                      <span class="icon icon-briefcase"></span>
                      <P style="font-size: 16px;">Trouvez de nouveaux fournisseurs avec moins de risques</P>
                      <!-- <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.</p> -->
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="iconbox">
                      <span class="icon icon-library"></span>
                      <P style="font-size: 16px;">Éliminez vos risques de lier votre trésorerie</P>
                      
                    </div>
                  </div>
                 
                <!--  <p style="font-size: 15px;">A quoi vous engagez-vous en ouvrant votre capital à un fonds d’investissement ?
                L’équipe de AYA Capital sera votre partenaire de confiance pour vous orienter vers la typologie d’investisseurs la plus adaptée à votre projet : investisseurs institutionnels ou entrepreneuriaux, sectoriels ou généralistes, majoritaires ou minoritaires, spécialisés en capital développement ou en transmission, etc.
                 </p> -->

                
                </div>
                 <div class=""><br>
                      <h3 style="color: #70c36b !important;"><b>Nous facilitons :</b></h3>
                      <span class="bottom-title"></span>
                      <p style="font-size: 16px; text-align: justify;">
                        AYA Capital est en partenariat avec plusieurs institutions financières à travers le monde pour offrir des services qui incluent le financement de projets et de commerce international.
                        Grâce à nos services, vous pouvez: 
                      </p>
                    </div>
              </div>
                
             
            </div>
            <div class="col-md-9">


              <div class="benefit-services-warp-2 desk-pdt-60" style="margin-left: 25px;">
                <div class="row">
                  <div class="col-md-3">
                    <div class="iconbox">
                      <span class="icon icon-stats-bars2"></span>
                      <P style="font-size: 16px;">Lettres de crédit (LC)</P>
                     <!--  <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.
                      </p> -->
                    </div>
                  </div>
                   <div class="col-md-3">
                    <div class="iconbox">
                     <span class="icon icon-credit-card"></span>
                      <P style="font-size: 16px;">Lettres de crédit stand-by (SBLC)</P>
                     <!--  <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.
                      </p> -->
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="iconbox">
                      <span class="icon icon-trophy"></span>
                      <P style="font-size: 16px;">Bank guarantee (BG)</P>
                      <!-- <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.</p> -->
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="iconbox">
                      <span class="icon icon-ticket"></span>
                      <P style="font-size: 16px;">Financement des factures</P>
                      
                    </div>
                  </div>
                  
                </div>
                
              </div>
                
             
            </div>

            <div class="col-md-9">
              <div class="benefit-services-warp-2 desk-pdt-60" style="margin-left: 25px;">
                <div class="row">
                  <div class="col-md-3">
                    <div class="iconbox">
                      <span class="icon icon-cog"></span>
                      <P style="font-size: 16px;">Escompte des effets de commerce</P>
                     <!--  <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.
                      </p> -->
                    </div>
                  </div>
                   <div class="col-md-3">
                    <div class="iconbox">
                      <span class="icon icon-ticket"></span>
                      <P style="font-size: 16px;">Crédits de trésorerie</P>
                     <!--  <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.
                      </p> -->
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="iconbox">
                      <span class="icon icon-home"></span>
                      <P style="font-size: 16px;">Garantie et caution de soumission</P>
                      <!-- <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.</p> -->
                    </div>
                  </div>
                  
                </div>
                
              </div>
                
             
            </div>



          </div>
        </div>
      </section>

    
      @endsection

     