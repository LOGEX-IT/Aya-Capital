@extends('layout.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> CORPORATE FINANCE & FINANCE PROJETS</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> ACCUEIL     </a>
            </li>
            <li>
              <a href="#"> Nos services     </a>
            </li>
            <li class="active">Corporate finance & finance projets</li>
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

            
          
           
            <div class="col-md-9">
              <h3 style="color: #70c36b !important; margin-left: 40px;">
                <b>« Financer votre croissance et sécuriser votre patrimoine professionnel en conservant le contrôle de votre entreprise »</b>
             </h3>

              <div class="benefit-services-warp-2 desk-pdt-60" style="margin-left: 35px;">
                <div class="row">
                  <div class="col-md-4">
                    <div class="iconbox">
                      <span class="icon icon-stats-bars2"></span>
                      <h5>Vous cherchez les bons moyens de financer votre développement ?</h5>
                     <!--  <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.
                      </p> -->
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="iconbox">
                      <span class="icon icon-briefcase"></span>
                      <h5>Comment présenter et valoriser au mieux votre société ?  </h5>
                      <!-- <p>Lorem ipsum dolor sit , consectet adipisi elit, sed do eiusmod tempor for enim adesg ens minim veniam.</p> -->
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="iconbox">
                      <span class="icon icon-library"></span>
                      <h5>Quels sont les projets de développement financés par des investisseurs ? </h5>
                      
                    </div>
                  </div>
                 
                 <p style="font-size: 16px; text-align: justify; margin-left: 20px;">
                    A quoi vous engagez-vous en ouvrant votre capital à un fonds d’investissement ?
                    L’équipe de AYA Capital sera votre partenaire de confiance pour vous orienter vers la typologie d’investisseurs la plus adaptée à votre projet : investisseurs institutionnels ou entrepreneuriaux, sectoriels ou généralistes, majoritaires ou minoritaires, spécialisés en capital développement ou en transmission, etc.
                 </p><br>

            
              <h3 style="color: #70c36b !important; margin-left: 25px; font-style: bold;">
              <b>Un accompagnement personnalisé</b>
              </h3>

              <p style="font-size: 16px; text-align: justify; margin: 20px;">
                Notre équipe est là pour vous proposer un accompagnement personnalisé, et vous guider tout au long de l’opération : définition de votre besoin, préparation de la levée, rencontre avec les investisseurs, accompagnement dans les négociations et finalisation de l’opération.<br>
              Nous réfléchissons avec vous à une structuration intelligente de votre financement afin de préserver votre patrimoine professionnel et optimiser la structure financière de votre entreprise.

            </p>

            <div class="col-md-12">
              <div class="benefit-services-warp-2 desk-pdt-60">
                <div class="row">
                 <!--  <div class="col-md-4">
                    <div class="iconbox">
                     <h3 style="color: #1f64a9 !important;">STRATÉGIE</h3>
                      <p>Travaillons ensemble sur votre stratégie</p>
                      <p style="color: #70c36b !important; size: 18px;"><b>Objectif</b></p>
                      <p>
                        <ul style="text-align: justify;">
                          <li>Susciter l’appétence : apporter aux investisseurs potentiels l’éclairage le plus avantageux possible sur l’opportunité que représente leur entrée au capital de votre société : potentiel de croissance, solidité du modèle économique et de la base de clientèle, facteurs de création de valeur.</li>
                          <li>Démontrer la capacité de votre entreprise à délivrer ses promesses : compétences de votre équipe, stratégie de développement, maîtrise de la technologie et / ou des services proposés.</li>
                        </ul>
                      </p>
                       <p>Notre valeur ajoutée</p>
                      <p>
                        <ul style="text-align: justify;">
                          <li>Marketing : cibler le message et positionner le ton du discours pour s’adapter aux attentes des différents profils d’investisseurs et ainsi s’assurer de leur adhésion.</li>
                          <li>Vision stratégique : construire un plan stratégique crédible et ambitieux, identifier les zones de risques du dossier, mettre en œuvre les solutions permettant d’optimiser sa valorisation.</li>
                        </ul>
                      </p>
                    </div>
                  </div> -->
 <!--      <div class="col-md-4">
                    <div class="iconbox">
           <h3 style="color: #1f64a9 !important;">PILOTAGE</h3>
                  <p>Nous pilotons votre levée de fonds en toute transparence.</p>
                    <p style="color: #70c36b !important; size: 18px;"><b>Objectif : avoir la certitude de lever des fonds</b></p>
                      <p>
                        <ul style="text-align: justify;">
                          <li>Auprès du meilleur investisseur possible : « le meilleur prix / le meilleur avenir / la meilleure sécurité ».
                          </li>
                          <li>Aux conditions optimales : financières (dans la durée) et également humaines, afin de protéger les valeurs que vous portez et l’ADN de votre entreprise
                          </li>
                        </ul>
                      </p>
                       <p>Notre valeur ajoutée</p>
                      <p>
                        <ul style="text-align: justify;">
                          <li>Apporter intelligence et stratégie dans le ciblage : identifier les investisseurs pour lesquels l’investissement représentera les plus forts effets de levier.
                          </li>
                          <li>Maximiser la valorisation de votre entreprise : orchestrer un processus concurrentiel en menant une stratégie propre à chaque investisseur potentiel.
                          </li>
                          <li>Gagner du temps : anticiper les points de blocage par la connaissance intime du fonctionnement de votre société et limiter les allers-retours.
                          </li>
                        </ul>
                      </p>
                    </div>
                  </div> -->

<!--         <div class="col-md-4">
                    <div class="iconbox">
           <h3 style="color: #1f64a9 !important;">NÉGOCIATION</h3>
                  <p>Nous vous accompagnons pour la négociation & la finalisation.</p>
                    <p style="color: #70c36b !important; size: 18px;"><b>Objectifs</b></p>
                      <p>
                        <ul style="text-align: justify;">
                          <li>Faire aboutir l’opération dans le respect du calendrier envisagé et des conditions attendues.
                          </li>
                          <li>Vous accompagner dans la phase d’audit et tout au long des négociations et vous assurer de n’être sollicité que lorsque nécessaire.
                          </li>
                        </ul>
                      </p>
                    <p>Notre valeur ajoutée</p>
                      <p>
                        <ul style="text-align: justify;">
                          <li>Protection : constituer une « zone tampon » entre vous – dirigeants et actionnaires – et les investisseurs afin de mener sereinement l’opération à son terme, y compris lors des phases de négociations dures.
                          </li>
                          <li>Décodage : vous apporter une vision « opérationnelle » des conditions juridiques.
                          </li>
                          <li>Vision long terme : sécuriser le développement de votre société et anticiper les conditions des prochains tours de table.
                          </li>
                           <li>Conformité : garantir la retranscription fidèle de « l’esprit » des négociations dans la documentation juridique afin d’éviter toute source ultérieure de désaccord.
                          </li>
                        </ul>
                      </p>

                    </div>
                  </div> -->
                  
                </div>
                
              </div>
                
             
            </div>

             
             <div class="row">
                    <div class="col-md-4 col-sm-6">
                      <div class="item-team">
                        <img src="{{URL::to('public/template/images/expertise01.jpg')}}" class="img-responsive" alt="Image">
                        <div class="body-team">

                      <h3 style="color: #1f64a9 !important;">STRATÉGIE</h3>
                      <p>Travaillons ensemble sur votre stratégie</p>
                     <!--  <p style="color: #70c36b !important; size: 18px;"><b>Objectif</b></p> -->


                        <!--   <p style="font-size: 14px; text-align: justify; padding: 15px;"> <li>Susciter l’appétence : apporter aux investisseurs potentiels l’éclairage le plus avantageux possible sur l’opportunité que représente leur entrée au capital de votre société : potentiel de croissance, solidité du modèle économique et de la base de clientèle, facteurs de création de valeur.</p> -->
                        </div>
                        <div class="footer-team">
                          <a class="facebook" href="#">LIRE PLUS</a>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6">
                      <div class="item-team">
                        <img src="{{URL::to('public/template/images/expertise02.jpg')}}" class="img-responsive" alt="Image">
                        <div class="body-team">
                           <h3 style="color: #1f64a9 !important;">PILOTAGE</h3>
                           <p>Nous pilotons votre levée de fonds en toute transparence.</p>
                          <!--  <p style="color: #70c36b !important; size: 18px;"><b>Objectif : avoir la certitude de lever des fonds</b></p> -->
                          <!--  <p style="font-size: 14px; text-align: justify; padding: 15px;">
                             
                              Auprès du meilleur investisseur possible : « le meilleur prix / le meilleur avenir / la meilleure sécurité ».<br>
                          
                              Aux conditions optimales : financières (dans la durée) et également humaines, afin de protéger les valeurs que vous portez et l’ADN de votre entreprise
                           </p> -->
                        </div>
                        <div class="footer-team">
                          <a class="facebook" href="#">LIRE PLUS</a>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                      <div class="item-team">
                        <img src="{{URL::to('public/template/images/expertise02.jpg')}}" class="img-responsive" alt="Image">
                        <div class="body-team">
                          <p style="font-size: 14px; text-align: justify;">
                            <h3 style="color: #1f64a9 !important;">NÉGOCIATION</h3>
                            <p>Nous vous accompagnons pour la négociation & la finalisation.</p>
                            <!-- <p style="color: #70c36b !important; size: 18px;">
                              <b>Objectifs</b>
                            </p> -->
                            <!-- <P>Faire aboutir l’opération dans le respect du calendrier envisagé et des conditions attendues.
                            </P>
                            <P>Vous accompagner dans la phase d’audit et tout au long des négociations et vous assurer de n’être sollicité que lorsque nécessaire.
                          </P> -->

                          </p>
                        </div>
                        <div class="footer-team">
                          <a class="facebook" href="#">LIRE PLUS</a>
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

     