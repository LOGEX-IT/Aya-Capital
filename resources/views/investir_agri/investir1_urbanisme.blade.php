@extends('layout.master2')
@section('content')


            
      <section class="no-padding sh-single-services">
        <div class="sub-header ">
<!--           <span>WHAT WE DO</span>
 -->          <h3> PROJETS D'INVESTISSEMENT DU NIGER<br>EN URBANISME</h3>
          <!-- <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> ACCUEIL </a>
            </li>
            <li>
              <a href="#"> Investir    </a>
            </li>
            <li class="active">Projet d'investissement du Niger</li>
          </ol> -->
        </div>
      </section>


      <div class="w-10">
        <div class="row mt-0 bg-secondary" style="padding: 20px 0 20px 0;">

            <div class="row col-md-10 col-sm-12 mt-2">
              <div class="col-md-2 col-sm-0" align="center">
              </div>
              <div class="col-md-2 col-sm-6" onclick="location.href='{{URL::to('/investissement-en-agriculture/1')}}'"; align="center">
               <i class="fa fa-user text-white"></i><br/>
               <span class=" text-white" style="cursor: pointer;">AGRICULTURE</span> 
              </div>
              
              <div class="col-md-2 col-sm-6 text-white" onclick="location.href='{{URL::to('/investir/1')}}'"; align="center">
               <i class="fa fa-user text-white"></i><br/> 
               <span class="" style="cursor: pointer;">ENERGIE</span>
               </div>
              
              <div class="col-md-2 col-sm-6 text-white" align="center">
               <i class="fa fa-user text-white"></i><br/> 
               <span class="">MINES</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" align="center">
               <i class="fa fa-user text-white"></i><br/> 
               <span class="">TRANSPORT</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" align="center">
               <i class="fa fa-user text-white"></i><br/> 
               <span class="">ELEVAGE</span> 
              </div>
              <div class="col-md-2 col-sm-0" align="center">
              </div>
              <div class="col-md-2 col-sm-6 text-white" align="center">
               <i class="fa fa-user text-white"></i><br/> 
               <span class="">INDUSTRIE</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" align="center">
               <i class="fa fa-user text-white"></i><br/> 
               <span class="">URBANISME</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" align="center">
               <i class="fa fa-user text-white"></i><br/> 
               <span class="">TIC</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" align="center">
               <i i class="fa fa-subway text-white" aria-hidden="true"></i><br/> 
               <span class="">TOURISME</span> 
              </div>
              <div class="col-md-2 col-sm-6 text-white" align="center">
               <i class="fa fa-university text-white" aria-hidden="true"></i><br/> 
               <span class="">FINANCES</span> 
              </div>
            </div>

            <style type="text/css">
              .agriculture{
                background-image: url('https://www.nigerrenaissant.org/themes/custom/rdn/assets/images/icons/tourisme.png');
                background-repeat: no-repeat;
               /* margin-top: 20px;
                height: 35px;*/
              }
            </style>


            <hr class="my-4">
           <!--  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
                    
        </div>
      </div>


        
        <section>
        <div class="container">
          <div class="row">

            <div class="category-case-warp category-case-warp-h5 category-case-warp-page">
              <div class="casesFilter">
                                <a href="#" data-filter="*" class="current ">Niger</a>
                                <a href="#" data-filter=".Tokyo" class="">Cote d'ivoire</a>
                                <a href="#" data-filter=".Cairo" class="">Guinnée</a>
                                <a href="#" data-filter=".London" class="">Guinée</a>
                                <a href="#" data-filter=".Rome" class="">Guinée Bissau</a>
                                <a href="#" data-filter=".Rome" class="">Libéria</a>
                                <a href="#" data-filter=".Rome" class="">Togo</a>
              </div> <!-- End Project Fillter -->

            </div>
            
<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTUCTION ET D'EXPLOITATION D’UN HYPER MARCHE A NIAMEY PAR LA SOCIETE JANZORZO</h5>
        <p>URBANISME</p>
        <p class="card-text">
          Le projet a pour objet l’aménagement et l’exploitation d’un complexe commercial moderne qui servira comme hyper-marché, avec des bureaux locatifs au quartier Janzorzo à Niamey. Ce complexe sera…
        </p>
        <a href="{{URL::to('/projets-investissement-urbanisme1/constuction-et-dexploitation-dun-hyper-marche-niamey-par-la-societe-janzorzo')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION D’UNE SOCIETE DE LOCATION DE MATERIELS BTP ET DE MANUTENTION</h5>
        <p>URBANISME</p>
        <p class="card-text">
         L’objectif visé par le projet est la création d’une société de location de matériels BTP et de manutention à Niamey qui permettra de mettre à la disposition des sociétés des BTP, et des sociétés d…
        </p>
        <a href="{{URL::to('/projets-investissement-urbanisme2/creation-dune-societe-de-location-de-materiels-btp-et-de-manutention')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">
         AMENAGEMENT GLOBAL DES BERGES
        </h5>
        <p>URBANISME</p>
        <p class="card-text">
         L'objectif visé par le projet est l'aménagement des berges du fleuve Niger sur un périmètre de 44 km à travers la construction des routes, des logements, des parkings, des parcs d'attraction et…
        </p>
        <a href="{{URL::to('/projets-investissement-urbanisme3/amenagement-global-des-berges')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION D'IMMEUBLE AU CENTRE VILLE DE NIAMEY</h5>
        <p>URBANISME</p>
        <p class="card-text">
          Le projet vise la construction des immeubles pour répondre à une demande croissante des particuliers et des entreprises en immobilier dans la ville de Niamey.
        </p>
        <a href="{{URL::to('/projets-investissement-urbanisme4/creation-dimmeuble-au-centre-ville-de-niamey')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION DE LOGEMENTS SOCIAUX</h5>
        <p>URBANISME</p>
        <p class="card-text">
          Pour un grand nombre de Nigériens, le logement est aujourd'hui une source d'inquiétude. Les ménages modestes, en particulier les jeunes fonctionnaires sont les principales victimes de la crise de…
        </p>
        <a href="{{URL::to('/projets-investissement-urbanisme5/construction-de-logements-sociaux')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION D’UN CAMPUS UNIVERSITAIRE PRIVE A NIAMEY</h5>
        <p>URBANISME</p>
        <p class="card-text">
          L’objectif visé par le projet est la création d’un campus universitaire privé répondant aux normes internationales avec une capacité d’accueil de 15000 étudiants, une résidence universitaire de…
        </p>
        <a href="{{URL::to('/projets-investissement-urbanisme6/construction-dun-campus-universitaire-prive-niamey')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CREATION D’UN HÔPITAL MODERNE A TAHOUA</h5>
        <p>URBANISME</p>
        <p class="card-text">
         Au Niger plus des deux-tiers des 19 millions d'habitants vivent avec moins d'un dollar par jour et sont dans l'impossibilité de s'offrir des soins adéquats.
        </p>
        <a href="{{URL::to('/projets-investissement-urbanisme7/creation-dun-hopital-moderne-tahoua')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">CONSTRUCTION DE LOGEMENTS SOCIAUX A NIAMEY</h5>
        <p>URBANISME</p>
        <p class="card-text">
          Pour un grand nombre de Nigériens, le logement est aujourd'hui une source d'inquiétude. Les ménages modestes, en particulier les jeunes fonctionnaires sont les principales victimes de la crise de…
        </p>
        <a href="{{URL::to('/projets-investissement-urbanisme8/cconstruction-de-logements-sociaux-niamey')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-4" >
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">DRAINAGE DE TRAITEMENT ET DEVALORISATIONS DES EAUX USEES DE LA VILLE DE NIAMEY</h5>
        <p>URBANISME</p>
        <p class="card-text">
          Niamey, capitale du Niger, enregistre une croissance soutenue de sa population et voit sa superficie s’agrandir.
        </p>
        <a href="{{URL::to('/projets-investissement-urbanisme9/drainage-de-traitement-et-devalorisations-des-eaux-usees-de-la-ville-de')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">PROJET DE CREATION D'UNE CITE RESIDENTIELLE</h5>
        <p>URBANISME</p>
        <p class="card-text">
         SAS KANA est une société opérant dans les spécialisés aux entreprises, le développement des compétences et la valorisation des talents.
        </p>
        <a href="{{URL::to('/projets-investissement-urbanisme10/projet-de-creation-dune-cite-residentielle')}}" class="btn btn-default">VOIR PLUS</a>
      </div>
    </div>
  </div>
</div>
            
            <div class="col-md-12 text-center mt-4">
              <a href="{{URL::to('/investir2-urbanisme/1')}}" class="ot-btn btn-main-color" ><i style="" class="fa fa-caret-square-o-right" aria-hidden="true"></i></a>
            </div>

          </div>
        </div>
      </section>

    
      @endsection

     