<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index(Request $request)
    {
        if ($request->input('typeOption') == 'all') {
            $products = Book::join('customers', 'customers.id', '=', 'books.id_customers')
                        ->join('activities', 'activities.id', '=', 'books.id_activities')
                        ->select('books.*', 'customers.name as cuname', 'customers.email as cuemail', 'activities.title as actitle','activities.price_adult','activities.price_child')
                        ->get()->toArray();
            return array_reverse($products);
        }else{
            return null;
        }
    }

    public function store(Request $request)
    {
        $idc = DB::table('customers')->insertGetId(
            [
                'name' => $request->input('name'),
                'surname' => $request->input('surname'),
                'email' => $request->input('email'),
                'mobile_number' => $request->input('mobile_number')
            ]
        );

        $product = new Book([
            'adult_number' => $request->input('adults'), 
            'child_number' => $request->input('childs'),
            'date' => date("Y-m-d"),
            'date_activity' => $request->input('dater'),
            'id_activities' => $request->input('id'),
            'id_customers' => $idc
        ]);
        $product->save();

        return response()->json('Book created!');
    }
}
