@extends('layouts.app')

@section('author', 'Name : Kuntal Gupta, E-mail : kuntal1230@gmail.com, Cell : +8801744968888')

@section('title', 'ExchangeCurrency')

@section('class-exchange', 'current')

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
  <section id="content">

             <div class="content-wrap">

                 <div class="container clearfix">

                     <div class="row">
                         <div class="col-md-12">
                             <form method="GET" action="" accept-charset="UTF-8" class="form-horizontal">
                               <div class="form-body">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label class="col-sm-12">Select Currency : </label>
                                         <div class="col-sm-12">
                                             <select name="currency_id" id="rate" class="form-control input-lg" required>
                                                 <option value="">Select One</option>
                                                 <option value="12">BItcoin</option>
                                                 <option value="14">Neteller</option>
                                                 <option value="15">Payoneer</option>
                                                 <option value="16">Perfect Money</option>
                                                 <option value="17">Payza</option>
                                             </select>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label class="col-sm-12">Exchange Currency : </label>
                                         <div class="col-sm-12">
                                             <select name="exchange_currency_id" id="rate" class="form-control input-lg" required>
                                                 <option value="">Select One</option>
                                                 <option value="12">BItcoin</option>
                                                 <option value="14">Neteller</option>
                                                 <option value="15">Payoneer</option>
                                                 <option value="16">Perfect Money</option>
                                                 <option value="17">Payza</option>
                                             </select>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-12">
                                     <div class="form-group">
                                         <label class="col-sm-12">Currency Quantity: </label>
                                         <div class="col-sm-12">
                                             <input type="number" name="quantity" id="quantity" class="form-control input-lg" placeholder="Currency Quantity" required>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <div class="row">
                                         <div class="col-md-offset-3 col-md-6">
                                             <button type="submit" class="btn btn-success btn-block margin-top-10"><i class="fa fa-paper-plane"></i> Next</button>
                                         </div>
                                     </div>
                                 </div>
                               </div>
                             </form>
                             <div style="margin: 60px 0;" class="text-center">

                             </div>
                             <div class="row">
                               <div class="col-md-12">
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
                         </div>
                     </div>
                 </div>
             </div>
         </section>
  <!-- #content end -->
@endsection
