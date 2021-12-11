<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Activity;


class ActivitiesController extends Controller
{
    public function index(Request $request)
    {
        if ($request->input('typeOption') == 'all') {
            $products = Activity::join('categories', 'categories.id', '=', 'activities.id_categoria')
                        ->select('activities.*', 'categories.title as cat')
                        ->get()->toArray();
            return array_reverse($products);
        }else{
            $from = $request->input('start');
            $to = $request->input('end');
            $products = Activity::join('categories', 'categories.id', '=', 'activities.id_categoria')
                        ->select('activities.*', 'categories.title as cat')
                        ->whereBetween('activities.date_init', [$from, $to])
                        ->whereBetween('activities.date_final', [$from, $to])
                        ->get()->toArray();
            return array_reverse($products);
        }
    }
}
