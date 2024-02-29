<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    public function index(){
        $hasilA = DB::table('task')
            ->join('site', 'task.siteId', '=', 'site.siteId')
            ->select('site.area', 'task.vendor', DB::raw('COUNT(task.id) as jumlah_task'))
            ->groupBy('site.area', 'task.vendor')
            ->get();

        $hasilB = Site::leftJoin('task', 'site.siteId', '=', 'task.siteId')
        ->select('site.area', 
            DB::raw('SUM(CASE WHEN task.vendor = "ai" THEN 1 ELSE 0 END) AS ai'),
            DB::raw('SUM(CASE WHEN task.vendor = "bo" THEN 1 ELSE 0 END) AS bo'),
            DB::raw('SUM(CASE WHEN task.vendor = "ba" THEN 1 ELSE 0 END) AS ba'),
            DB::raw('SUM(CASE WHEN task.vendor = "ne" THEN 1 ELSE 0 END) AS ne'),
            DB::raw('SUM(CASE WHEN task.vendor = "o2" THEN 1 ELSE 0 END) AS o2'))
        ->groupBy('site.area')
        ->get();

        $hasilC = Site::leftJoin('task', 'site.siteId', '=', 'task.siteId')
        ->select('site.area', DB::raw('COUNT(task.id) as total_task'))
        ->groupBy('site.area')
        ->get();

        return view('welcome', [
            'hasil_a' => $hasilA,
            'hasil_b' => $hasilB,
            'hasil_c' => $hasilC,
        ]);
    }
}
