<?php

namespace App\Livewire;

use App\Models\Site;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Chart1 extends Component
{
    public function render()
    {
        $dataquery = DB::table('task')
    ->select('task.vendor', 'site.area', DB::raw('COUNT(*) as task_count'))
    ->join('site', 'task.siteId', '=', 'site.siteId')
    ->groupBy('task.vendor', 'site.area')
    ->get();

// Inisialisasi array untuk menyimpan data
$areaData = [];

// Inisialisasi array untuk menyimpan labels (vendor)
$labels = [];

// Loop through hasil query dan mengisi array data
foreach ($dataquery as $data) {
    $vendor = $data->vendor;
    $area = $data->area;
    $taskCount = $data->task_count;

    // Menambahkan vendor ke labels jika belum ada
    if (!in_array($vendor, $labels)) {
        $labels[] = $vendor;
    }

    // Menambahkan data ke array areaData
    $areaData[$area][$vendor] = $taskCount;
}

// Inisialisasi array untuk menyimpan hasil akhir dalam format yang diinginkan
$result = [
    "labels" => $labels,
    "datasets" => []
];

// Loop through setiap area dan membuat dataset
foreach ($areaData as $area => $vendorData) {
    $dataset = [
        "label" => "Area " . $area,
        "data" => []
    ];

    // Loop through setiap vendor dan menambahkan nilai ke dataset
    foreach ($labels as $label) {
        $dataset["data"][] = isset($vendorData[$label]) ? $vendorData[$label] : 0;
    }

    // Menambahkan dataset ke hasil akhir
    $result["datasets"][] = $dataset;
}




return view('livewire.chart1', compact('result'));

    }
}
