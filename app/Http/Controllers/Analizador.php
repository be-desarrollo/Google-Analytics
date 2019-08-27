<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Analytics;
use Spatie\Analytics\Period;

class Analizador extends Controller
{
    //
    public function index(){
        $analyticsTopBrowsers = Analytics::fetchTopBrowsers(Period::days(7));
        $analyticsVisitorsAndPageViews = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $analyticsUserTypes = Analytics::fetchUserTypes(Period::days(7));
        $analyticsTopReferrers = Analytics::fetchTopReferrers(Period::days(7));
        $analyticsMostVisitedPages = Analytics::fetchMostVisitedPages(Period::days(7));

        dd($analyticsTopBrowsers, $analyticsVisitorsAndPageViews, $analyticsUserTypes, $analyticsTopReferrers, $analyticsMostVisitedPages);
    }
}

