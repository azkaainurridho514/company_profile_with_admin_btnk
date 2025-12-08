<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;
use App\Models\Menu;
use App\Models\Categories;
use App\Models\Event;

class HomeController extends Controller
{
    public function index(){
        $master = Master::latest()->limit(1)->get();
        $menu = Menu::latest()->where("is_best", true)->get();
        $event = Event::latest()->limit(3)->get();
        return view('index', ["master" => $master[0], "menu" => $menu, "event" => $event]);
    }
    public function about(){
        $master = Master::latest()->limit(1)->get();
        return view('about', ["master" => $master[0]]);
    }
    public function menu(Request $request){
        $master = Master::latest()->limit(1)->get();
        $category = Categories::latest()->get();
        $menuQuery = Menu::with('category')->latest();

        if ($request->has('category') && $request->category != '') {
            $menuQuery->where('category_id', $request->category);
        }
        $menu = $menuQuery->get();
        return view('menu', ["master" => $master[0], "categories" => $category, "menu" => $menu]);
    }
    public function event (Request $request)
    {
        $master = Master::latest()->first();

        $query = Event::query();

        if ($request->filled('year')) {
            $query->whereYear('date', $request->year);
        }

        if ($request->filled('month')) {
            $query->whereMonth('date', $request->month);
        }

        $events = $query->latest()->paginate(10);

        return view('event', [
            'master' => $master,
            'events' => $events
        ]);
    }
}
