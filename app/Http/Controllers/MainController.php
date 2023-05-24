<?php

namespace App\Http\Controllers;

use App\Models\BookDetails;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function home(){
        $listCategory = Category::all();
        $listBook = BookDetails::all();
        return view('mainpage', ['category' => $listCategory, 'books'=> $listBook]);
    }

    public function bookDetail($id){
        $books = DB::table('books_details')
        ->join('publishers', 'publishers.id_publisher', '=', 'books_details.id_publisher')
        ->where('books_details.id_book', '=', $id)
        ->get();

        $listCategory = Category::all();
        return view('bookDetail', ['booksId' => $books, 'category' => $listCategory]);
    }

    public function publisherAll(){
        $publisherAll = Publisher::all();
        $listCategory = Category::all();

        return view('publisher', ['publisher'=>$publisherAll, 'category' => $listCategory]);
    }

    public function publisher($id){
        $books = DB::table('books_details')
        ->join('publishers', 'publishers.id_publisher', '=', 'books_details.id_publisher')
        ->where('books_details.id_book', '=', $id)
        ->get();
        $listCategory = Category::all();

        $pub = Publisher::where('publishers.id_publisher',$id)->first();
        return view('publisherBooks', ['books'=>$books, 'category' => $listCategory, 'pub'=>$pub]);
    }

    public function category($id){
        $books = DB::table('books_details')
        ->join('books', 'books.id_book', '=', 'books_details.id_book')
        ->join('categories', 'categories.id_category', '=', 'books.id_category')
        ->where('categories.id_category', '=', $id)
        ->get();

        $listCategory = Category::all();
        $cat = Category::where('categories.id_category',$id)->first();
        return view('category', ['books'=>$books, 'category' => $listCategory, 'cat'=>$cat]);
    }

    public function contact(){
        $listCategory = Category::all();
        return view('contact', ['category' => $listCategory]);
    }
}
