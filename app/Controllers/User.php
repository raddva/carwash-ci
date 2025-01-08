<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index(): string
    {
        return view('user/index');
    }

    public function buttons(): string
    {
        return view('user/ui-features/buttons');
    }

    public function dropdowns(): string
    {
        return view('user/ui-features/dropdowns');
    }

    public function typography(): string
    {
        return view('user/ui-features/typography');
    }

    public function icons(): string
    {
        return view('user/icons/mdi');
    }
    
    public function forms(): string
    {
        return view('user/forms/basic_elements');
    }

    public function charts(): string
    {
        return view('user/charts/chartjs');
    }

    public function tables(): string
    {
        return view('user/tables/basic-table');
    }
}
