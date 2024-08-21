<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\AgentReceiving;
use App\Models\Agreement;
use App\Models\Employee;
use App\Models\Expense;
use App\Models\Grant;
use App\Models\Intiqal;
use App\Models\Salary;
use App\Models\PatwariPayment;
use App\Models\PartnerPayment;
use App\Models\AgreementPayment;

use DB;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
      return view('welcome');
    }
}
