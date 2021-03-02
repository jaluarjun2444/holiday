<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Packages;
use App\Models\PackageImages;
use App\Models\PackageInclusion;
use App\Models\PackageExclusion;
use App\Models\PackageItinerary;
use Session;
use  App\Http\Controllers\Helper;
use DataTables;

class PackagesController extends Controller
{

    public function __construct()
    {
        $this->common_data = [
            'title' => 'Packages',
            'view' => 'packages',
            'route' => 'admin/packages',
            'module' => 'Packages',
        ];
    }
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data = Packages::with(['Destination']);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('destination_id', function ($row) {
                    return $row->Destination['name'];
                })
                ->addColumn('main_image', function ($row) {
                    return "<img src='" . url('uploads/packages') . '/' . $row['main_image'] . "' style='width:150px; height:100px;' />";
                })
                ->addColumn('action', function ($row) {
                    // data-toggle="modal" data-target="#ViewModal"
                    $btn = '<button name=""view_btn" id="view_btn" data-id="' . $row['id'] . '" type="button" class="mr_top_10 mr_right_10 view_btn btn btn-primary btn-sm" >View</button>';
                    $btn .= '<a href="javascript:void(0)" class="mr_top_10 mr_right_10 edit_btn btn btn-success btn-sm">Edit</a>';
                    $btn .= '<a href="javascript:void(0)" class="mr_top_10 mr_right_10 delete_btn btn btn-danger btn-sm">Delete</a>';
                    return $btn;
                })
                ->rawColumns(['action', 'main_image'])
                ->make(true);
        }

        $data = $this->common_data;
        return view($this->common_data['view'] . '.index', compact('data'));
    }

    public function viewPackage(Request $request)
    {
        $id = $request->get('id');

        $packageData = Packages::with(
            [
                'Destination',
                'Region',
                'Images',
                'Inclusion',
                'Exclusion',
                'Itinerary'
            ]
        )->where('id', $id)->first();
        // return dd($packageData->Images);
        $returnHTML = view($this->common_data['view'] . '.viewPackage')->with('packageData', $packageData)->render();
        return response()->json(array('success' => true, 'html' => $returnHTML));
    }
    public function create()
    {
        $data = $this->common_data;
        $regions = Helper::getRegion();
        $destinations = Helper::getDestination();
        return view($this->common_data['view'] . '.create', compact('data', 'regions', 'destinations'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $name = "default.jpg";
        // if ($request->hasfile('image')) {
        //     $file = $request->file('image');
        //     $name = rand(1111111111, 9999999999) . '_package_' . $file->getClientOriginalName();
        //     $file->move('uploads/packages/', $name);
        // }


        $package = Packages::create([
            'name' => $request->name ?? '',
            'destination_id' => $request->destination_id ?? '',
            'region_id' => $request->region_id ?? '',
            'description' => $request->description_detail,
            'main_image' => $name,
            'meta_key' => $request->meta_key ?? '',
            'meta_desc' => $request->meta_desc ?? '',
            'price' => $request->price ?? '',
            'duration_day' => $request->duration_day ?? '',
            'duration_night' => $request->duration_night ?? '',
            'star_rating' => $request->star_rating ?? '',
            'status' => $request->status ?? 'active',
            'views' => $request->views ?? '0',
            'created_by' => 1,
        ]);

        $package_id = $package['id'];



        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $name = rand(1111111111, 9999999999) . '_package_' . $file->getClientOriginalName();
                $file->move('uploads/packages/', $name);
                PackageImages::create([
                    'package_id' => $package_id,
                    'image' => $name
                ]);
            }
        }

        foreach ($request->get('inclusion') as $key => $inclusion) {
            PackageInclusion::create([
                'package_id' => $package_id,
                'title' => $inclusion,
                'description' => ''
            ]);
        }
        foreach ($request->get('exclusion') as $key => $exclusion) {
            PackageExclusion::create([
                'package_id' => $package_id,
                'title' => $exclusion,
                'description' => ''
            ]);
        }

        $itinerary = $request->get('itinerary');
        $itinerary_detail = $request->get('itinerary_detail');
        foreach ($itinerary as $key => $itinerary) {
            PackageItinerary::create([
                'package_id' => $package_id,
                'title' => $itinerary,
                'description' => $itinerary_detail[$key],
            ]);
        }

        Helper::message_popup($this->common_data['module'] . ' Successfully Added', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }

    public function show($id)
    {
        dd('show');
    }

    public function edit($id)
    {
        $data = $this->common_data;
        $category = Slider::find($id);
        return view($this->common_data['view'] . '.edit', compact('data', 'category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'sequence' => 'required'
        ]);

        $category = Slider::find($id);
        $category->title = $request->get('title') ?? '';
        $category->link = $request->get('link') ?? '';
        $category->sequence = $request->get('sequence');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $name = rand(1111111111, 9999999999) . '_slider_' . $file->getClientOriginalName();
            $file->move('uploads/slider/', $name);
            $category->image = $name;
        }
        $category->save();

        Helper::message_popup($this->common_data['module'] . ' Successfully Updated', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }

    public function destroy($id)
    {
        $category = Slider::find($id);
        $category->delete();
        Helper::message_popup($this->common_data['module'] . ' Successfully Deleted', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }
}
