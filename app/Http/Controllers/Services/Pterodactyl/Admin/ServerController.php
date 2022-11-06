<?php

namespace App\Http\Controllers\Services\Pterodactyl\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ServerController extends Controller
{
    public static function response_($data) {
        return response($data)->withHeaders([
            'Content-Type' => 'application/json']);
    }

    /*
    *   Http::pteroAdmin is a bootstrap macro for making api requests
    */
    public static function getServers() {
        try {
            $response = Http::pteroAdmin()->get("/servers");
            return $response["data"];
        } catch (Exception $e) {
            return $e;
        }
    }

    public static function getServerDetails(Request $request, $id) {
        $serverId = null;

        if (!is_null($request->id)) {
            $serverId = $request->id;
        } else if(!is_null($id)) {
            $serverId = $id;
        }
        try {
            $response = Http::pteroAdmin()->get("/servers/" . $serverId);
            return $this->response_($response);
        } catch(Exception $e) {
            return $e;
        }
    } 
}
