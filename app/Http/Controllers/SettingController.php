<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Packages;
use App\Models\PackageImages;
use App\Models\PackageInclusion;
use App\Models\PackageExclusion;
use App\Models\PackageItinerary;
use App\Models\Setting;
use Session;
use  App\Http\Controllers\Helper;
use DataTables;

class SettingController extends Controller
{

    public function __construct()
    {
        $this->common_data = [
            'title' => 'Setting',
            'view' => 'setting',
            'route' => 'admin/setting',
            'module' => 'Setting',
        ];
    }
    public function index(Request $request)
    {
        $data = $this->common_data;
        $setting = Setting::first();
        return view($this->common_data['view'] . '.index', compact('data', 'setting'));
    }

    public function store(Request $request)
    {



        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $name = rand(1111111111, 9999999999) . '_logo_' . $file->getClientOriginalName();
            $file->move('uploads/logo/', $name);
        } else {
            $name = Setting::first();
            $name = $name['logo'] ?? '';
        }
        // dd($name);
        $package = Setting::updateOrCreate(
            ['id' => 1],
            [
                'name' => $request->name ?? '',
                'logo' => $name,
                'mobile' => $request->mobile ?? '',
                'mobile_2' => $request->mobile_2 ?? '',
                'email' => $request->email ?? '',
                'address' => $request->address ?? '',
                'google_map' => $request->google_map ?? '',
                'pay_us_link' => $request->pay_us_link ?? '',
                'top_msg' => $request->top_msg ?? '',
                'link_1_name' => $request->link_1_name ?? '',
                'link_1_url' => $request->link_1_url ?? '',
                'link_2_name' => $request->link_2_name ?? '',
                'link_2_url' => $request->link_2_url ?? '',
                'custom_script' => $request->custom_script ?? '',
                'custom_style' => $request->custom_style ?? '',
            ]
        );

        $package_id = $package['id'];

        Helper::message_popup($this->common_data['module'] . ' Successfully Updated', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }
}
