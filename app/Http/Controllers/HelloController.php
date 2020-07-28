<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Providers\Address;
use App\Providers\News;


class HelloController extends Controller
{
    //
  public function index()
  {
    return view('hello');
  }

  public function detail()
  {
      $addresses = DB::table('addresses')->first();

      return view('company',['addresses' => $addresses]);
  }

  public function messe()
  {
      return view('contact');
  }

  public function recruit()
  {
      return view('recruit');
  }

  public function news()
  {
      $newses = DB::table('newses')->first();

      return view('news',['newses' => $newses]);
  }


}
