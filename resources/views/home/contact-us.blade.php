@extends('layouts.app')

@section('author', 'Name : Kuntal Gupta, E-mail : kuntal1230@gmail.com, Cell : +8801744968888')

@section('title', 'ContactUs')

@section('class-contactus', 'current')

@section('session_message')
  <!--SESSION MESSAGES  -->
  <div class="row" style="margin-top: 20px;margin-right: 0px!important;">
      <div class="col-md-6 col-md-offset-3">
        <div style="margin-top: 20px;" class="text-center">
        </div>
      </div>
  </div>
  <!--  SESSION MESSAGES END -->
@endsection

@section('content')
  <!-- Content-->
  <div class="gt_main_content_wrap" style="overflow: hidden;padding-top: 70px;">
                   <section class="gt_c_bg">
                       <!--Contact Info Wrap Start-->
                       <div class="container">
                           <div class="gt_contact_info_outer_wrap">
                               <div class="row">
                                   <div class="col-md-4 col-sm-6">
                                       <div class="gt_contact_info_element_wrap">
                                           <i class="fa fa-map-marker"></i>
                                           <h5>ADDRESS</h5>
                                           <p>Garden Street, Ring Road, Shyamoli, Dhaka</p>
                                       </div>
                                   </div>
                                   <div class="col-md-4 col-sm-6">
                                       <div class="gt_contact_info_element_wrap active">
                                           <i class="fa fa-phone"></i>
                                           <h5>Phone Number</h5>
                                           <p>+1234567890</p>
                                       </div>
                                   </div>
                                   <div class="col-md-4 col-sm-6">
                                       <div class="gt_contact_info_element_wrap">
                                           <i class="fa fa-envelope-o"></i>
                                           <h5>Email Address</h5>
                                           <p>software@thesoftking.com</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!--Contact Info Wrap End-->


                   <!--Map Wrap Start-->
                       <div class="default_width">
                           <!--Map Wrap End-->
                           <div class="gt_form_map">
                               <div class="gt_hdg_1">
                                   <h3 style="text-align: center">Send Us a Message</h3>
                               </div>
                               <div class="message" style="text-align: center;width:400px;margin: 0 auto">
                                                               </div>
                               <form class="gt_contact_form" id="contact-form" action="http://exchange.thesoftking.com/contact-send" method="post">
                                   <input type="hidden" name="_token" value="aAfOicyZtWsN7aPv75h5XO8OQhXXLwuvbNIJIvzx">
                                   <div class="col-md-4">
                                       <div class="gt_contact_us_field">
                                           <input class="c_ph" type="text" placeholder="Your Name" id="name" name="contact-name" required>
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="gt_contact_us_field">
                                           <input class="c_ph" type="text" placeholder="Email Address:" id="email" name="contact-email" required>
                                       </div>
                                   </div>
                                   <div class="col-md-4">
                                       <div class="gt_contact_us_field">
                                           <input class="c_ph" type="text" placeholder="Phone Number" id="subject" name="contact-subject" required>
                                       </div>
                                   </div>
                                   <div class="col-md-12">
                                       <div class="gt_contact_us_field">
                                           <textarea class="gt_c_bg" name="message" id="message" placeholder="Message" required></textarea>
                                       </div>
                                   </div>
                                   <div class="col-md-12">
                                       <div class="gt_contact_us_field">
                                           <input id="submit-message" type="submit" value="Send Now" name="submit_msg">
                                       </div>
                                       <!--Alert Message-->
                                       <div id="contact-result">
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                   </section>
               </div>
  <!-- #content end -->
@endsection
