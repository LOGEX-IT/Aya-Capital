@extends('layout_en.master')
@section('content')
            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> TRAINING AND COACHING</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> HOME </a>
            </li>
            <li>
              <a href="#"> Training and Coaching    </a>
            </li>
<!--             <li class="active">Mission</li>
 -->          </ol>
        </div>
      </section>
        
      <section>
        <div class="container">
          <div class="row">
           <!--  <div class="col-md-3">
              <div class="sideabar">
                <div class="widget widget-sidebar widget-list-link">
                  <h4 class="title-widget-sidebar">
                    Services
                  </h4>
                  <ul class="wd-list-link">
                    <li><a href="#">Corporate finance & Finance project</a></li>
                    <li><a href="#">Trade finance</a></li>
                    <li><a href="#">Stratégie</a></li>
                    <li><a href="#">Cession et acquisition </a></li>
                    <li><a href="#">Services corporatifs</a></li>

                  </ul>
                  <h4 class="title-widget-sidebar">
                    Donnateur
                  </h4>
                  <div class="wd-text-warp">Servir le bien commun
                    <p>Devenir donateur 
                       ou s’engager à nos côtés.</p>
                       <p>Servir le bien commun</p>
                       <p>Participer à des projets concrets à fort impact social et environnemental</p>
                       <p> Bénéficier d’une réduction d’impôts</p>
                    <a href="#" class="ot-btn btn-main-color" >
                      <i class="fa fa-edit" aria-hidden="true"></i>
                      Nous écrire</a>
                  </div>
                  
                </div>
               
              </div>
            </div> -->
                   
             <style type="text/css">
              
               .mission{
                    border: 1px solid #4CAF50;
                    
                }
            </style>




<div class="row">
                    <div class="col-md-6 col-sm-6">
                      <div class="item-team">
                        <img src="{{URL::to('public/template/images/expertise01.jpg')}}" class="img-responsive" alt="Image">
                        <div class="body-team">
                          <p style="font-size: 14px; text-align: justify; padding: 15px;"> Our training programs can also be personalized, adapted to the needs of our customers thanks to the implementation of a methodology for assessing needs and the level of knowledge at the start of training.</p>
                        </div>
                       
                      </div>
                    </div>
                    
                    <div class="col-md-6 col-sm-6">
                      <div class="item-team">
                        <img src="{{URL::to('public/template/images/expertise02.jpg')}}" class="img-responsive" alt="Image">
                        <div class="body-team">
                          <p style="font-size: 14px; text-align: justify; padding: 15px;">Our training offer geared towards skills development already includes several modules on themes relating to Finance and strategy, thanks to our large training catalog and our network of Partner Trainers.</p>
                        </div>
                       
                      </div>
                    </div>
                  
</div>


<!-- 
            <div class="row col-md-9">
              <div class="mission" style="font-size: 16px; text-align: justify; margin: 5px; padding: 70px; ">
                      <p style="font-size: 16px; text-align: justify;">
                     Notre offre de formation orientée vers le développement de compétences intègre déjà plusieurs modules sur des thèmes relatifs à la Finance et à la stratégie, et ce grâce à notre large catalogue de formation et à notre réseau de Formateurs Partenaires.
                      </p><br></br>

                      <p style="font-size: 16px; text-align: justify;">
                       Les programmes de nos formations peuvent être aussi personnalisés, adaptés aux besoins de nos clients grâce à la mise en place d’une méthodologie d’évaluation des besoins et du niveau des connaissances au début des formations.
                      </p>

                </div>
            </div> -->

           </div>
          </div>
        </div>
      </section>

    
      @endsection

     