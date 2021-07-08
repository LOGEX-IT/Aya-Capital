@extends('layout.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3>IMPACT  AYA</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> ACCUEIL </a>
            </li>
            <li>
              <a href="#"> Fonds d'investissements     </a>
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
                    <li><a href="{{URL::to('strategie')}}">Stratégie</a></li>
                    <li><a href="{{URL::to('cession')}}">Cession</a></li>
                    <li><a href="{{URL::to('acquisition')}}">Acquisition </a></li>
                    <li><a href="{{URL::to('service-corpatif')}}">Services corporatifs</a></li>
                    <li><a href="{{URL::to('/investir/1')}}">Investir</a></li>
                    <li><a href="{{URL::to('formation-et-coaching')}}">Formations et Coaching</a></li>

                  </ul>
                </div>
                 <div class="widget widget-sidebar widget-text-block">
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
                            <div class="panel-body" style="text-align: justify; font-size: 16px; margin: 15px 15px;">
                              <b>Notre monde et nos sociétés sont en profonde mutation. L’impact social et humain des bouleversements technologiques en cours, les préoccupations sanitaires et alimentaires, l’urgence climatique et écologique, tous ces enjeux majeurs nous interpellent. 
                              </b><br>

                              De nouveaux modèles de développement se mettent en place où sont encore à imaginer. L’économie circulaire à vocation à remplacer l’économie linéaire, micro-crédit, économie sociale et solidaire, consommation responsable et économie du partage structurent désormais la manière de produire, de vendre et d’acheter avec l’idée que l’on ne peut plus méconnaitre ce qui se passe à l’autre bout de la planète. <br>

                              Individuellement, de nombreuses personnes choisissent d’agir dans leur vie privée de manière socialement responsable. Ces convictions personnelles impactent bien souvent leur environnement professionnel. <br>

                              Collectivement, de plus en plus d’entreprises réalisent désormais que la recherche de solutions pour le bien commun doit devenir une priorité. Elles ont compris qu’elles doivent modifier leurs pratiques et agissent en ce sens de manière constante pour améliorer leur impact sociétal.<br>

                              Les professionnels de l’investissement aussi se mobilisent avec « l’impact investing ». La recherche de profit n’est plus l’unique but. Il faut également que l’investissement génère un impact environnemental et social positif.<br>

                              L’attention est donc aussi portée sur des critères qualitatifs. Cette forme d’investissement va au-delà de la prise en compte des critères ESG (la référence actuelle), pour leur accorder une importance équivalente au rendement financier attendu.<br>

                              <b>AYA Capital a choisi d’être à l’avant-garde de ce mouvement.
                              </b> <br>

                              Ces évolutions nous ont donc conduits à repenser nos modes de production, de consommation, et de travail. De ce cheminement a émergé l’idée que AYA puisse se tenir prêt à accompagner des clients qui ont ou qui souhaitent engager leur entreprise au service de ces enjeux environnementaux et sociétaux.<br>

                              Cette nouvelle activité « d’impact AYA » s’inscrit dans une démarche bienveillante de conseil en vue de partager ces valeurs communes avec nos clients, et d’inscrire cet accompagnement dans une logique de partenariat durable.


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

     