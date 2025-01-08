<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function login(): string
    {
        return view('admin/login');
    }

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

    public function packages(): string
    {
        return view('admin/packages');
    }
    
    public function transactions(): string
    {
        return view('admin/transactions');
    }

    public function users(): string
    {
        return view('admin/users');
    }

    public function tables(): string
    {
        return view('admin/tables/basic-table');
    }
}
