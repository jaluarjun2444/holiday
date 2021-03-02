<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Destination;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Tags\Url;
use Illuminate\Support\Carbon;

class FrontController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index2()
    {
        // $this->middleware('auth');
    }
    public function sitemap()
    {
        $sitemapPath = 'sitemap/sitemap.xml';

        SitemapIndex::create()
            ->add('sitemap/sitemap_3.xml')
            ->writeToFile($sitemapPath);
        dd('a');
        $sitemapPath = 'sitemap/sitemap_2.xml';

        $sitemap = Sitemap::create()
            ->add('/page1')
            ->add('/page2')
            // ->add('/page3')->setLastModificationDate(Carbon::create('2016', '1', '1'))
            ->writeToFile($sitemapPath);
        dd($sitemap);
    }
    public function index()
    {

        $slider = Slider::orderBy('sequence', 'asc')->get();
        return view('front.index', compact('slider'));
    }
    public function packagesSingle($id, $slug)
    {
        $data = Packages::with(
            [
                'Destination',
                'Region',
                'Images',
                'Inclusion',
                'Exclusion',
                'Itinerary'
            ]
        )->where('id', $id)->first();
        return view('front.package', compact('data'));
    }
    public function destinationSingle($id, $slug)
    {
        $data = Packages::with('Destination')->where('destination_id', $id)->paginate(6);
        $dest = Destination::find($id);
        return view('front.destination', compact('data', 'dest'));
    }
    public function category($id, $slug)
    {
        $question = Question::where('category', $id)->paginate(10);
        return view('front.index', compact('question'));
    }
    public function single($id, $slug)
    {
        $question = Question::where('id', $id)->with(['answerData', 'categoryData'])->first();
        Question::where('id', $id)->update(['views' => ($question['views'] + 1)]);
        return view('front.single', compact('question'));
    }
}
