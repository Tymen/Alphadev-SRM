<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Services\Pterodactyl\Admin\ServerController;

class PagesController extends Controller
{
    protected $ServerController;

    public function __construct() {
        $this->ServerController = new ServerController;
    }
    public function dashboard() {
        $servers =  $this->ServerController->getServers();
        // dd($servers);
        return view("index")->with("servers", $servers);
    }
}
