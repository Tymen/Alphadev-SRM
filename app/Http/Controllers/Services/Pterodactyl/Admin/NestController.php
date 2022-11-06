<?php

namespace App\Http\Controllers\Services\Pterodactyl\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class EggController extends Controller
{
    public static function getNests() {
        try {
            $response = Http::pteroAdmin()->get("/nests");
            return $response["data"];
        } catch (Exception $e) {
            return $e;
        }
    }
    public static function getEggs() {
        try {
            $response = Http::pteroAdmin()->get("/nests");
            return $response["data"];
        } catch (Exception $e) {
            return $e;
        }
    }
}
