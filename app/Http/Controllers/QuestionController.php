<?php

namespace App\Http\Controllers;

use App\Models\CustomSearch;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Answer;
use Session;
use Datatables;

class QuestionController extends Controller
{

    public function __construct()
    {
        $this->common_data = [
            'title' => 'Question',
            'view' => 'question',
            'route' => 'admin/question',
            'module' => 'Question',
        ];
    }
    public function index()
    {
        $data = $this->common_data;
        return view($this->common_data['view'] . '.index', compact('data'));
    }

    public function getData(Request $request)
    {
        $data = Question::with(['categoryData'])->orderby('id', 'desc');
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . url('admin/question/' . $row->id . '/edit') . '" class="edit btn btn-primary btn-small"><i class="fa fa-pencil"></i> Edit</a> ';
                $btn .= '<button data-url="' . url('admin/question/' . $row->id . '/delete') . '" class="btn deletebtn btn-small btn-danger" type="button"><i class="fa fa-trash-o"></i> Delete</button>';
                return $btn;
            })
            ->editColumn('category', function ($row) {
                return $row->categoryData['name'];
            })
            ->rawColumns(['action', 'category'])
            ->make(true);
    }

    public static function getCustomSearch()
    {
        ini_set('max_execution_time', -1);
        $data = CustomSearch::where('has_more', 'true')
            ->where('status', 'active')
            ->orderby('current_page', 'asc')
            ->limit(1)
            ->get();
        // dd($data->pluck('id'));
        if ($data->count() > 0) {
            foreach ($data as $item) {
                $page = $item->current_page;
                $search = urlencode($item->search);

                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.stackexchange.com/2.2/search/advanced?page=' . $page . '&pagesize=100&order=desc&min=10&sort=votes&q=' . $search . '&site=stackoverflow&filter=!*0Op.1GC7fNFvOeQ*54BKQBJHLzI(Oio30_Ps7RT9&key=78rjZg2x1Zo7pSqooZLrcg((',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        // 'Cookie: prov=b38bc4c2-105f-4b27-94c9-20fabf06db74'
                    ),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                $resp = json_decode($response);

                if (count($resp->items) > 0) {

                    foreach ($resp->items as $q) {
                        if ($q->is_answered == true) {

                            $answers = $q->answers;
                            $question = Question::create([
                                'custom_search_id' => $item->id,
                                'q_id' => $q->question_id,
                                'title' => $q->title,
                                'body' => $q->body ?? '',
                                'tags' => implode(',', $q->tags),
                                'category' => $item->category,
                                'creation_date' => $q->creation_date,
                                'status' => 'active',
                                'is_answered' => 'yes',
                                'views' => 0,
                            ]);

                            foreach ($answers as $a) {
                                Answer::create([
                                    'answer_id' => $a->answer_id,
                                    'question_id' => $a->question_id,
                                    'q_id' => $question->id,
                                    'body' => $a->body ?? "",
                                    'status' => 'active'
                                ]);
                                echo $a->answer_id . "<br>";
                            }
                        }
                    }
                }
                $cur_page = $item['current_page'] + 1;
                $has_more = $resp->has_more;
                if ($has_more == true) {
                    $has_more = 'true';
                } else {
                    $has_more = 'false';
                }
                CustomSearch::where('id', $item->id)
                    ->update([
                        'current_page' => $cur_page,
                        'has_more' => $has_more
                    ]);
            }
        }
    }
    public static function getAnswers()
    {
        $data = Question::where('is_answered', 'no')
            ->where('status', 'active')
            ->limit(10)
            ->orderby('id', 'asc')
            ->get();
        // dd($data);
        if ($data->count() > 0) {
            foreach ($data as $item) {

                // dd($item->q_id);

                $page = $item->current_page;
                $search = urlencode($item->search);

                $curl = curl_init();
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.stackexchange.com/2.2/questions/' . $item->q_id . '/answers?pagesize=10&order=desc&sort=votes&site=stackoverflow&filter=!-.AG)rX2RGrL&key=78rjZg2x1Zo7pSqooZLrcg((',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                        // 'Cookie: prov=b38bc4c2-105f-4b27-94c9-20fabf06db74'
                    ),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                $resp = json_decode($response);
                if (count($resp->items) > 0) {
                    foreach ($resp->items as $q) {
                        Answer::create([
                            'answer_id' => $q->answer_id,
                            'question_id' => $q->question_id,
                            'q_id' => $item->id,
                            'body' => $q->body ?? "",
                            'status' => 'active'
                        ]);
                    }
                    Question::where('id', $item->id)
                        ->update([
                            'is_answered' => 'yes'
                        ]);
                }
            }
        }
    }

    public function apiTest()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.stackexchange.com/2.2/search/advanced?page=1&pagesize=100&order=desc&min=100&sort=votes&q=php&site=stackoverflow&filter=!BGqAa)e-gwPHlz)SpXa*J*3pbbwN59&key=78rjZg2x1Zo7pSqooZLrcg((',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                // 'Cookie: prov=b38bc4c2-105f-4b27-94c9-20fabf06db74'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        dd(json_decode($response));
    }


    public function deleteData($id)
    {
        $model = Question::find($id);
        $model->delete();
        Helper::message_popup($this->common_data['module'] . ' Successfully Deleted', '', 'success');
        return redirect('/' . $this->common_data['route']);
    }
}
