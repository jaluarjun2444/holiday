<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Destination;
use App\Models\Region;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapIndex;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Tags\Url;
use Illuminate\Support\Carbon;
use app\Models\Setting;

class FrontController extends Controller
{

    public function __construct()
    {
        $this->per_page = 9;
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
    public function contact_us()
    {
        $data = [];
        $setting = Setting::first();
        return view('front.contact', compact('data', 'setting'));
    }
    public function about_us()
    {
        $data = [];
        return view('front.about', compact('data'));
    }
    public function index()
    {
        $destinationData = Helper::getDestination();
        $packagesData = Packages::with('Destination')->paginate($this->per_page);
        $popularData = Packages::with('Destination')->where('is_popular', 'yes')->orderby('popular_sequence', 'asc')->get();
        $slider = Slider::orderBy('sequence', 'asc')->get();
        return view('front.index', compact('slider', 'destinationData', 'popularData', 'packagesData'));
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
        $setting = Setting::first();
        return view('front.package', compact('data','setting'));
    }
    public function packages()
    {
        $data = Packages::with('Destination')->paginate($this->per_page);
        $dest = [];
        return view('front.destination', compact('data', 'dest'));
    }
    public function regionSingle($id, $slug)
    {
        $data = Packages::with('Destination')->where('region_id', $id)->paginate($this->per_page);
        $dest = Region::find($id);
        return view('front.destination', compact('data', 'dest'));
    }
    public function destinationSingle($id, $slug)
    {
        $data = Packages::with('Destination')->where('destination_id', $id)->paginate($this->per_page);
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
