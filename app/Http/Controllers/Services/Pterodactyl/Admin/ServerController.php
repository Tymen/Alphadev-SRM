<?php

namespace App\Http\Controllers\Services\Pterodactyl\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ServerController extends Controller
{
    public function response_($data) {
        return response($data)->withHeaders([
            'Content-Type' => 'application/json']);
    }

    /*
    *   Http::pteroAdmin is a bootstrap macro for making api requests
    */
    public function getServers() {
        try {
            $response = Http::pteroAdmin()->get("/servers");
            return $this->response_($response);
        } catch (Exception $e) {
            return $e;
        }
    }
}
