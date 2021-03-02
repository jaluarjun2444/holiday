<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Region;
use Illuminate\Support\Facades\Session;


class Helper extends Controller
{
    public static function getDestination($region_id = 'all')
    {
        if ($region_id != 'all') {
            return Destination::with('region')->where('region_id', $region_id)->get();
        } else {
            return Destination::with('region')->get();
        }
    }
    public static function getRegion()
    {
        return Region::with(['Destination'])->get();
    }
    public static function message_popup($title, $message, $type)
    {
        Session::flash('title', $title);
        Session::flash('message', $message);
        Session::flash('type', $type);
    }
}
