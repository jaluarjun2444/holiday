<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CustomSearch;
use Session;
use Datatables;


class CustomSearchController extends Controller
{

    public function __construct()
    {
        $this->common_data = [
            'title' => 'Custom Search',
            'view' => 'custom_search',
            'route' => 'admin/custom_search',
            'module' => 'Custom Search',
        ];
    }
    public function getData(Request $request)
    {
        $data = CustomSearch::with(['categoryData']);
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a href="' . url('admin/custom_search/' . $row->id . '/edit') . '" class="edit btn btn-primary btn-small"><i class="fa fa-pencil"></i> Edit</a> ';
                $btn .= '<button data-url="' . url('admin/custom_search/' . $row->id . '/delete') . '" class="btn deletebtn btn-small btn-danger" type="button"><i class="fa fa-trash-o"></i> Delete</button>';
                return $btn;
            })
            ->editColumn('category', function ($row) {
                // dd($row->categoryData);
                return $row->categoryData['name'];
            })
            ->rawColumns(['action', 'category'])
            ->make(true);
    }
    public function index()
    {
        $data = $this->common_data;
        $CustomSearch = CustomSearch::orderBy('id', 'desc')->get();
        return view($this->common_data['view'] . '.index', compact('data', 'CustomSearch'));
    }

    public function create()
    {
        $data = $this->common_data;
        $categorys = Category::orderBy('id', 'desc')->get();
        return view($this->common_data['view'] . '.create', compact('data', 'categorys'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'search' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        CustomSearch::create([
            'search' => $request->search,
            'category' => $request->category,
            'status' => $request->status,
            'current_page' => 1,
            'has_more' => 'true'
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
        $model = CustomSearch::find($id);
        $brands = Category::orderBy('id', 'desc')->get();
        return view($this->common_data['view'] . '.edit', compact('data', 'brands', 'model'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'search' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);

        $model = CustomSearch::find($id);
        $model->search = $request->get('search');
        $model->category = $request->get('category');
        $model->status = $request->get('status');
        $model->save();

        Helper::message_popup($this->common_data['module'] . ' Successfully Updated', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }

    public function destroy($id)
    {
        $model = CustomSearch::find($id);
        $model->delete();
        Helper::message_popup($this->common_data['module'] . ' Successfully Deleted', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }
    public function deleteData($id)
    {
        $model = CustomSearch::find($id);
        $model->delete();
        Helper::message_popup($this->common_data['module'] . ' Successfully Deleted', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }
}
