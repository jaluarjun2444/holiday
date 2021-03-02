<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tags;
use Session;


class TagsController extends Controller
{

    public function __construct()
    {
        $this->common_data = [
            'title' => 'Tags',
            'view' => 'tags',
            'route' => 'admin/tags',
            'module' => 'Tags',
        ];
    }
    public function index()
    {
        $data = $this->common_data;
        $tags = Tags::orderBy('id', 'desc')->get();
        return view($this->common_data['view'] . '.index', compact('data', 'tags'));
    }

    public function create()
    {
        $data = $this->common_data;
        $tags = Tags::orderBy('id', 'desc')->get();
        return view($this->common_data['view'] . '.create', compact('data', 'tags'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Tags::create([
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
        $tags = Tags::find($id);
        return view($this->common_data['view'] . '.edit', compact('data', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $tags = Tags::find($id);
        $tags->name = $request->get('name');
        $tags->save();

        Helper::message_popup($this->common_data['module'] . ' Successfully Updated', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }

    public function destroy($id)
    {
        $tags = Tags::find($id);
        $tags->delete();
        Helper::message_popup($this->common_data['module'] . ' Successfully Deleted', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }
}
