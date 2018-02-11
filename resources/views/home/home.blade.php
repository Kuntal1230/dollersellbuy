@extends('layouts.app')

@section('author', 'Name : Kuntal Gupta, E-mail : kuntal1230@gmail.com, Cell : +8801744968888')

@section('title', 'Home')

@section('class-home', 'current')

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

@section('banar')
  <!--slider -->
  <section id="slider">
      <img src="images\1489954482.jpg" alt="banar photo">
  </section>
  <!--slider end-->
@endsection

@section('content')
  <!-- Content-->
  <section id="content">
      <div class="content-wrap">
          <div class="promo promo-light promo-full bottommargin-lg header-stick notopborder" style="background-color: #fff;">
              <div class="container clearfix">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="headlines" style="font-weight: bold; font-size: 20px; color:#86a821 !important;">
                              <marquee behavior="scroll" direction="left" scrollamount="2">
                                  <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                                  <a style="text-decoration: none" >Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</a>
                              </marquee>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="promo promo-light promo-full bottommargin-lg header-stick notopborder">
              <div class="container clearfix">
                  <h3 class="text-center">We are The Best Currency Exchanger in World</h3>
              </div>
          </div>
          <div class="container clearfix">
              <div class="col_one_fourth nobottommargin">
                  <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                      <div class="fbox-icon">
                          <a href="#"><i class="i-alt noborder icon-money"></i></a>
                      </div>
                      <h3>Lowest Profitable<span class="subtitle">Transportation is the movement of people, animals and goods from one location to another.</span></h3>
                  </div>
              </div>
              <div class="col_one_fourth nobottommargin">
                  <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                      <div class="fbox-icon">
                          <a href="#"><i class="i-alt noborder icon-money"></i></a>
                      </div>
                      <h3>Best Currency Price<span class="subtitle">Transportation is the movement of people, animals and goods from one location to another.</span></h3>
                  </div>
              </div>
              <div class="col_one_fourth nobottommargin">
                  <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                      <div class="fbox-icon">
                          <a href="#"><i class="i-alt noborder icon-money"></i></a>
                      </div>
                      <h3>Best Exchanger<span class="subtitle">Transportation is the movement of people, animals and goods from one location to another. </span></h3>
                  </div>
              </div>
              <div class="col_one_fourth nobottommargin">
                  <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                      <div class="fbox-icon">
                          <a href="#"><i class="i-alt noborder icon-money"></i></a>
                      </div>
                      <h3>Quickly Exchnager<span class="subtitle">Transportation is the movement of people, animals and goods from one location to another. </span></h3>
                  </div>
              </div>
              <div class="clear"></div>
          </div>
          <div class="section topmargin-lg" style="margin-bottom: -10px;">
              <div class="container clearfix">
                  <div class="heading-block center">
                      <h2>Our Payment Proof</h2>
                  </div>
                  <hr>
                  <div class="row">
                      <div class="col-md-4">
                          <div class="text-center">
                              <h3>Sell Currency Proof</h3>
                          </div>
                          <div class="table-responsive">
                              <table class="table table-responsive table-bordered text-center">
                                  <thead>
                                  <tr>
                                      <th class="text-center">Date</th>
                                      <th class="text-center">Seller Name</th>
                                      <th class="text-center">Currency</th>
                                      <th class="text-center">Quantity</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>04-July-2017</td>
                                          <td>Rifayet Rifat</td>
                                          <td width="25%">
                                              <img src="images/1495822936.png" alt="BItcoin">
                                          </td>
                                          <td>2345</td>
                                      </tr>
                                      <tr>
                                          <td>31-May-2017</td>
                                          <td>Tanzila Anni</td>
                                          <td width="25%">
                                              <img src="images/1489954623.png" alt="Payoneer">
                                          </td>
                                          <td>20</td>
                                      </tr>
                                      <tr>
                                          <td>26-May-2017</td>
                                          <td>Md.Tipu</td>
                                          <td width="25%">
                                              <img src="images/1489954623.png" alt="Payoneer">
                                          </td>
                                          <td>100</td>
                                      </tr>
                                      <tr>
                                          <td>24-May-2017</td>
                                          <td>Harun Rasid</td>
                                          <td width="25%">
                                              <img src="images/1489954657.png" alt="Perfect Money">
                                          </td>
                                          <td>50</td>
                                      </tr>
                                      <tr>
                                          <td>23-May-2017</td>
                                          <td>Habiba Himu</td>
                                          <td width="25%">
                                              <img src="images/1489954583.jpg" alt="Neteller">
                                          </td>
                                          <td>30</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                      <div class="col-md-4">
                            <div class="text-center">
                                <h3>Buy Currency Proof</h3>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-responsive table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Buyer Name</th>
                                        <th class="text-center">Currency</th>
                                        <th class="text-center"> Quantity</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>26-May-2017</td>
                                            <td>Md.Tipu</td>
                                            <td width="25%">
                                                <img src="images/1489954583.jpg" alt="Neteller">
                                            </td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>23-May-2017</td>
                                            <td>Habiba Himu</td>
                                            <td width="25%">
                                                <img src="images/1489954623.png" alt="Payoneer">
                                            </td>
                                            <td>14</td>
                                        </tr>
                                        <tr>
                                            <td>23-May-2017</td>
                                            <td>Habiba Himu</td>
                                            <td width="25%">
                                                <img src="images/1489954583.jpg" alt="Neteller">
                                            </td>
                                            <td>10</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                      <div class="col-md-4">
                          <div class="text-center">
                              <h3>Exchange Currency Proof</h3>
                          </div>
                          <div class="table-responsive">
                              <table class="table table-responsive table-bordered text-center">
                                  <thead>
                                  <tr>
                                      <th class="text-center">Date</th>
                                      <th class="text-center">Exchanger Name</th>
                                      <th class="text-center">From</th>
                                      <th class="text-center">To</th>
                                      <th class="text-center">Quantity</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                        <tr>
                                          <td>26-May-2017</td>
                                          <td>Md.Tipu</td>
                                          <td width="20%">
                                              <img src="images/1495822936.png" alt="BItcoin">
                                          </td>
                                          <td width="20%">
                                              <img src="images/1489954657.png" alt="Perfect Money">
                                          </td>

                                          <td> 100 - 97.5</td>

                                      </tr>
                                      <tr>
                                          <td>23-May-2017</td>
                                          <td>Habiba Himu</td>
                                          <td width="20%">
                                              <img src="images/1489954583.jpg" alt="Neteller">
                                          </td>
                                          <td width="20%">
                                              <img src="images/1489954623.png" alt="Payoneer">
                                          </td>

                                          <td> 20 - 19.5</td>

                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                  <div class="clear"></div>

              </div>
          </div>
          <div class="section topmargin-lg">
            <div class="container clearfix">
              <div class="heading-block center">
                <h2>We Accept</h2>
              </div>
              <hr>
              <div class="row">
                <div class="col-md-6">
                  <ul class="accept-list">
                    <li class="accept-list-item"><a href="https://www.payza.com" target="_blank" tabindex="-1"><img src="{{ asset('images/payza.jpg') }}" class="img-responsive"></a>
          					</li>
                    <li class="accept-list-item"><a href="https://perfectmoney.is/login.html" target="_blank" tabindex="-1"><img src="{{ asset('images/perfectmoney.jpg') }}" class="img-responsive"></a>
          					</li>
                    <li class="accept-list-item"><a href="https://www.skrill.com/en/" target="_blank" tabindex="-1"><img src="{{ asset('images/skrill.jpg') }}" class="img-responsive"></a>
          					</li>
                    <li class="accept-list-item"><a href="https://www.neteller.com/en/" target="_blank" tabindex="-1"><img src="{{ asset('images/neteller.jpg') }}" class="img-responsive"></a>
          					</li>
                    <li class="accept-list-item"><a href="https://advcash.com/en/" target="_blank" tabindex="-1"><img src="{{ asset('images/advcash.jpg') }}" class="img-responsive"></a>
                  </li>
                  </ul>
                  </div>
                <div class="col-md-6">
                  <ul class="accept-list">
                    <li class="accept-list-item"><a href="https://www.payoneer.com/main" target="_blank" tabindex="-1"><img src="{{ asset('images/payneer.jpg') }}" class="img-responsive"></a>
                    </li>
                    <li class="accept-list-item"><a href="https://www.dutchbanglabank.com/" target="_blank" tabindex="-1"><img src="{{ asset('images/dbbl.jpg') }}" class="img-responsive"></a>
          					</li>
                    <li class="accept-list-item"><a href="https://www.bracbank.com/" target="_blank" tabindex="-1"><img src="{{ asset('images/bracbank.jpg') }}" class="img-responsive"></a>
          					</li>
                    <li class="accept-list-item"><a href="https://www.bkash.com/" target="_blank" tabindex="-1"><img src="{{ asset('images/bkash.jpg') }}" class="img-responsive"></a>
          					</li>
                    <li class="accept-list-item"><a href="https://www.dutchbanglabank.com/rocket/rocket.html" target="_blank" tabindex="-1"><img src="{{ asset('images/rocket.jpg') }}" class="img-responsive"></a>
          				 </li>
                  </ul>
                </div>

              </div>
            </div>

          </div>
      </div>
  </section>
  <!-- #content end -->
@endsection
