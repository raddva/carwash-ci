<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('admin/index');
    }

    public function buttons(): string
    {
        return view('admin/ui-features/buttons');
    }

    public function dropdowns(): string
    {
        return view('admin/ui-features/dropdowns');
    }

    public function typography(): string
    {
        return view('admin/ui-features/typography');
    }

    public function icons(): string
    {
        return view('admin/icons/mdi');
    }
    
    public function forms(): string
    {
        return view('admin/forms/basic_elements');
    }

    public function charts(): string
    {
        return view('admin/charts/chartjs');
    }

    public function tables(): string
    {
        return view('admin/tables/basic-table');
    }
}
