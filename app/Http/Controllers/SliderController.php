<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Session;


class SliderController extends Controller
{

    public function __construct()
    {
        $this->common_data = [
            'title' => 'Slider',
            'view' => 'slider',
            'route' => 'admin/slider',
            'module' => 'Slider',
        ];
    }
    public function index()
    {
        $data = $this->common_data;
        $categorys = Slider::orderBy('sequence', 'asc')->get();
        return view($this->common_data['view'] . '.index', compact('data', 'categorys'));
    }

    public function create()
    {
        $data = $this->common_data;
        return view($this->common_data['view'] . '.create', compact('data'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'sequence' => 'required',
        ]);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $name = rand(1111111111, 9999999999) . '_slider_' . $file->getClientOriginalName();
            $file->move('uploads/slider/', $name);
        }

        Slider::create([
            'title' => $request->title ?? '',
            'link' => $request->link ?? '',
            'image' => $name,
            'sequence' => $request->sequence
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
