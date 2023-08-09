<?php

namespace App\Http\Controllers\Panel\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\Xui\XuiService;
use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    protected XuiService $service;
    public function __construct(XuiService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $service = $this->service->make();
        $result = $service->api->users();
        dd($result);
    }
}
