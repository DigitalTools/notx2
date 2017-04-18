<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Report;

class DashboardController extends Controller {

    public function index() {

        $was_clean_count = Report::where('was_clean', 1)->count();;

        $bg_color = '';

        switch (true) {
            case $was_clean_count >= 21:
                $bg_color = 'aqua';
                break;

            case $was_clean_count >= 14:
                $priority = 'green';
                break;

            default:
                $bg_color = 'yellow';
                break;
        };

        $ddata = [
          'was_clean_count' => $was_clean_count,
          'bg_color' => $bg_color
        ];

        return view('vendor.backpack.base.dashboard', compact('ddata'));

    }

}
