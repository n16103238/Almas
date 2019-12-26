<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sales;
class ReportController extends Controller
{
  public function add_reports()
  {
      return view('report.add_reports');
  }
//Add Reports
public function create_reports(Request $request)
{
  $from = $request -> from;
  $to= $request -> to;
  $reports = Sales::whereBetween('updated_at', [$from, $to])->get();
  return view('report.add_reports',compact('reports'));

  //dd($report);
}

  public function report_list()
  {

    $expenses = Reports::all();
      return view('reports.reports',compact('reports'));
  }
}
