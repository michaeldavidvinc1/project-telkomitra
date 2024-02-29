<?php

namespace App\Livewire;

use App\Models\Site;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Chart2 extends Component
{
    public function render()
    {
        $totals = Site::leftJoin('task', 'site.siteId', '=', 'task.siteId')
        ->select('site.area', DB::raw('COUNT(task.id) as total_task'))
        ->groupBy('site.area')
        ->get();
        return view('livewire.chart2', compact('totals'));
    }
}
