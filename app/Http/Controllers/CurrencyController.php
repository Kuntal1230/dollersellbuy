<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrencyController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function BuyCurrency()
  {
      return view('home.buy-currency');
  }

  public function SellCurrency()
  {
      return view('home.sell-currency');
  }

  public function ExchangeCurrency()
  {
      return view('home.exchange-currency');
  }

}
