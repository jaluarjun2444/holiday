<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Region;
use Session;


class RegionController extends Controller
{

    public function __construct()
    {
        $this->common_data = [
            'title' => 'Region',
            'view' => 'region',
            'route' => 'admin/region',
            'module' => 'Region',
        ];
    }
    public function index()
    {
        $data = $this->common_data;
        $categorys = Region::orderBy('id', 'desc')->get();
        return view($this->common_data['view'] . '.index', compact('data', 'categorys'));
    }

    public function getDestinations(Request $request)
    {
        $data = Helper::getDestination($request->id);

        $final_data = "<option>Select</option>";

        if (!empty($data)) {
            foreach ($data as $key => $value) {
                $final_data .= '<option value="' . $value['id'] . '">' . $value['name'] . '</option>';
            }
        }

        return $final_data;
        }
    public function create()
    {
        $data = $this->common_data;
        return view($this->common_data['view'] . '.create', compact('data'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);


        Region::create([
            'name' => $request->name
        ]);
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
        $category = Region::find($id);
        return view($this->common_data['view'] . '.edit', compact('data', 'category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Region::find($id);
        $category->name = $request->get('name');
        $category->save();

        Helper::message_popup($this->common_data['module'] . ' Successfully Updated', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }

    public function destroy($id)
    {
        $category = Region::find($id);
        $category->delete();
        Helper::message_popup($this->common_data['module'] . ' Successfully Deleted', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }
}
