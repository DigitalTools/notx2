<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Report;

class DashboardController extends Controller {

    public function index() {

        $was_clean_count = Report::where('was_clean', 1)->count();;

        $ddata = [
          'was_clean_count' => $was_clean_count
        ];

        return view('vendor.backpack.base.dashboard', compact('ddata'));

    }

}
