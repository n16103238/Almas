<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Sales;
use App\AllSales;
use App\Expenses;
use App\SalesDetails;

class ReportController extends Controller
{

  //<!-- Sales report--!>

public function add_reports()
  {
      return view('report.add_reports');
  }

public function create_reports(Request $request)
{
  $from = $request -> from;
  $to= $request -> to;
  $reports = Sales::whereBetween('updated_at', [$from, $to])->get();
  return view('report.add_reports',compact('reports'));

  //dd($report);
}

//<!-- Sales Details report-->

public function add_reports_details()
  {
      return view('report.sales_details_report');
  }
public function create_reports_details(Request $request)
{
  $from = $request -> from;
  $to= $request -> to;
  $reports = SalesDetails::whereBetween('updated_at', [$from, $to])->get();
  return view('report.sales_details_report',compact('reports'));

  //dd($report);
}

//<!-- Expense report-->

public function add_reports2()
  {
      return view('report.expense_report');
  }
public function create_reports2(Request $request)
{
  $from = $request -> from;
  $to= $request -> to;
  $reports = Expenses::whereBetween('updated_at', [$from, $to])->get();
  return view('report.expense_report',compact('reports'));

  //dd($report);
}










}
