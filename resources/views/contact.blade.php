@extends('layout.master')
@section('contactive','active')
@section('content')


    <!-- <script src="switcher/demo.js"></script> -->

        <section class="no-padding sh-contact">
        <div class="sub-header ">
<!--           <span>CONNECT WITH US</span>
 -->          <h3>NOUS CONTACTER</h3>
          <ol class="breadcrumb">
            <li>
              <a href="#"><i class="fa fa-home"></i> Accueil     </a>
            </li>
            
            <li class="active">nous contacter</li>
          </ol>
        </div>
      </section>
      <!-- /subheader -->
      
      <section>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="iconbox-inline">
                <span class="icon icon-location2"></span>
                <h4>Localisation</h4>
                <p>AYA CAPITAL SA, sise siège social à Bamako, Qtier Baco Djicoroni ACI Près de INTEC, Mali</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="iconbox-inline">
                <span class="icon icon-phone"></span>
                <h4>Téléphone</h4>
                <p>Mali (+223)61879090 / 74665579</p>
                <p>Togo (+228)97709494</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="iconbox-inline">
                <span class="icon icon-envelop"></span>
                <h4>Adresse Email</h4>
                <p>contact@aya-capital.com</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /Iconbxo -->
        

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3893.8660175513096!2d-8.021956485181947!3d12.591080691106308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDM1JzI3LjkiTiA4wrAwMScxMS4yIlc!5e0!3m2!1sfr!2stg!4v1623183685257!5m2!1sfr!2stg" width="100%" height="390" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


      <!-- /Map -->

      <section>
        <div class="container"> 
          <div class="row">
            <div class="col-md-12">
              <div class="title-block title-contact">
                <h3>Envoyez un message</h3>
                <span class="bottom-title"></span>
              </div>
            </div>
            <div class="form-contact-warp">
              <div class="col-md-4">
                <input type="text"   class="form-control" value="" required="required" title="" placeholder="Full Name">
              </div>
              <div class="col-md-4">
                <input type="text"   class="form-control" value="" required="required" title="" placeholder="Email Address">
              </div>
              <div class="col-md-4">
                <input type="text"   class="form-control" value="" required="required" title="" placeholder="Subject">
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <textarea   id="textarea" class="form-control" rows="5" required="required" placeholder="Comment"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn-main-color"><i class="fa fa-paper-plane" aria-hidden="true"></i> nous faire parvenir</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      @include('layout.script')
      
      @endsection
      

     