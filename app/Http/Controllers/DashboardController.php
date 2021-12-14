<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //ecommerce
    public function dashboardEcommerce(){
        return view('pages.dashboard-ecommerce');
    }
    // analystic
    public function dashboardAnalytics(){
        return view('pages.dashboard-analytics');
    }

    public function dashboardIndex(){
        return view('pages.dashboard-index');
    }

    public function dashboardList(){
        //return view('pages.app-listpage');
        return view('pages.table-datatable');
    }

    public function dashboardProfile(){
        //return view('pages.app-listpage');
        return view('pages.tab_profile');
    }
    
}
