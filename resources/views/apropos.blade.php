@extends('layout.master')
@section('content')
              <section class="no-padding sh-about">
        <div class="sub-header ">
<!--           <span>COMPANY PROFILE</span>
 -->          <h3>A PROPOS DE AYA CAPITAL</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> Accueil</a>
            </li>
            <li>
              <a href="#"> a propos     </a>
            </li>
<!--             <li class="active">ABOUT US</li>
 -->          </ol>
        </div>
      </section>

      <style type="text/css">
        @media screen and (min-width: 378px) and (max-width: 991px) {
        .cons {
 
          margin-top: 30px;
        }
      }
      </style>

      <section class="no-padding">
        <div class="container">
          <div class="row">
            <div class="whyus-warp-h2 whyus-about">
              <div class="col-md-6">
                <div class="left-whyus-h2">
                  <div class="demo-style-1-warp">
                    <img src="{{URL::to('public/template/images/Content/demo-style-1.jpg')}}" class="img-responsive" alt="Image">
                    <div class="demo-style-1-box-text right cons">
                      <b style="margin-bottom: 35px;">Le Conseil,Autrement</b>
                    </div>
                  </div>
                </div>
              </div>
              <style type="text/css">
               .apropos{
                    border: 1px solid #4CAF50;
                }
            </style>
              <div class="col-md-6 apropos">
                <div class="right-whyus-h2">
                <div class="iconbox-warp ">
                  <!-- <h3 class="title-mix">Let<strong> tomorrow </strong> begin <strong> today</strong></h3> -->
                  <h3 class="demo-sub-about-text-2 mt--10" style=" color: green;">Cabinet indépendant de conseil en ingénierie financière et levée de fonds, cession d’entreprise et réorganisation de capital
                  </h3>
<!--                   <h4>Expertise</h4>
-->
               <p style="font-size: 16px; text-align: justify;">Fondé sur des valeurs d’expertise, d’écoute et d’exigence, AYA Capital est un cabinet conseil, indépendant, avec une expertise multisectorielle sur les marchés financiers.
              Nous accompagnons les dirigeants et actionnaires d’entreprises dans leurs opérations de financement et dossiers de fusion-acquisition, avec pour seuls objectifs : négocier au mieux les intérêts de nos clients et multiplier leurs chances de réussite dans leurs opérations de haut bilan. Une activité qui s’équilibre autour des opérations de financement et des dossiers de fusion-acquisition.
                </p><br>
               <h3 style="color: green;"> Notre expertise</h3>

                 <p style="font-size: 16px; text-align: justify;">
                   L’expertise du cabinet s’articule exclusivement autour de prestations de conseil. Nous accompagnons les dirigeants et les actionnaires d’entreprise dans leurs opérations de financement et les dossiers de fusion-acquisition, levée de fonds, réorganisation de capital, acquisition, cession, transmission d’entreprise. Nous suivons l’ensemble du processus, de la réflexion stratégique, aux négociations et jusqu’à la clôture de l’opération. Nous sommes un cabinet de conseil indépendant, entrepreneurial, et revendiquons la défense des intérêts de nos clients en totale confidentialité.
                 </p>

                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
<!--       <section class="bg-light-grey">
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
      <!-- about description -->

     <!--  <section class="no-padding bg-counter-h1">
        <div class="container">
          <div class="row">
            <div class="warp-counter">
              <div class="col-md-3 col-sm-6">
                <div class="counter-inline">
                  <span class="icon icon-stats-bars"></span>
                  <span class="counter">460</span>
                  <p>Projet soutenus</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="counter-inline">
                  <span class="icon icon-users"></span>
                  <span class="counter">29</span>
                  <p>Consultants</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="counter-inline">
                  <span class="icon icon-trophy"></span>
                  <span class="counter">18</span>
                  <p>Récompensé</p>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="counter-inline">
                  <span class="icon icon-library"></span>
                  <span class="counter">50</span>
                  <p>Années d'expériences</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- couterup -->


      @endsection

     