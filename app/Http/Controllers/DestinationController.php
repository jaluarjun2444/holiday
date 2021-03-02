<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Session;


class DestinationController extends Controller
{

    public function __construct()
    {
        $this->common_data = [
            'title' => 'Destination',
            'view' => 'destination',
            'route' => 'admin/destination',
            'module' => 'Destination',
        ];
    }
    public function index()
    {
        $data = $this->common_data;
        $categorys = Destination::with('region')->orderBy('id', 'desc')->get();
        return view($this->common_data['view'] . '.index', compact('data', 'categorys'));
    }

    public function create()
    {
        $data = $this->common_data;
        $regions = Helper::getRegion();
        return view($this->common_data['view'] . '.create', compact('data', 'regions'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
        ]);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $name = rand(1111111111, 9999999999) . '_category_' . $file->getClientOriginalName();
            $file->move('uploads/destination/', $name);
        }
        if ($request->hasfile('cover_image')) {
            $file1 = $request->file('cover_image');
            $name1 = rand(1111111111, 9999999999) . '_category_' . $file1->getClientOriginalName();
            $file1->move('uploads/destination/', $name1);
        }

        Destination::create([
            'name' => $request->name,
            'image' => $name,
            'cover_image' => $name1,
            'region_id' => $request->region_id
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
        $category = Destination::find($id);
        $regions = Helper::getRegion();
        return view($this->common_data['view'] . '.edit', compact('data', 'category', 'regions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Destination::find($id);
        $category->name = $request->get('name');
        $category->region_id = $request->get('region_id');
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $name = rand(1111111111, 9999999999) . '_category_' . $file->getClientOriginalName();
            $file->move('uploads/destination/', $name);
            $category->image = $name;
        }
        if ($request->hasfile('cover_image')) {
            $file1 = $request->file('cover_image');
            $name1 = rand(1111111111, 9999999999) . '_category_' . $file1->getClientOriginalName();
            $file1->move('uploads/destination/', $name1);
            $category->cover_image = $name1;
        }
        $category->save();

        Helper::message_popup($this->common_data['module'] . ' Successfully Updated', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }

    public function destroy($id)
    {
        $category = Destination::find($id);
        $category->delete();
        Helper::message_popup($this->common_data['module'] . ' Successfully Deleted', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }
}
