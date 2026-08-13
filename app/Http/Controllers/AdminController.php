<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype == 'admin'){
                return view('admin.index');
            }
            else if($usertype == 'user'){
                return view('home.index');
            }
        }
        else{
            return redirect()->back();
        }
    }

    public function category_page()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255'
        ]);

        $data = new Category();
        $data->cat_title = $request->category;
        $data->save();

        return redirect()->back()->with('message','Category added successfully');
    }

    public function cat_delete($id)
    {
        $data = Category::findOrFail($id);
        $data->delete();

        return redirect()->back()->with('message','Category deleted successfully');
    }

    public function edit_category($id)
    {
        $data = Category::findOrFail($id);
        return view('admin.edit_category', compact('data'));
    }

    public function update_category(Request $request, $id)
    {
        $request->validate([
            'cat_name' => 'required|string|max:255'
        ]);

        $data = Category::findOrFail($id);
        $data->cat_title = $request->cat_name;
        $data->save();

        return redirect('/category_page')->with('message','Category updated successfully');
    }

    public function add_book()
    {
        $data = Category::all();
        return view('admin.add_book', compact('data'));
    }

    public function store_book(Request $request)
    {
        $request->validate([
            'book_name' => 'required|string|max:255',
            'auther_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category' => 'required|exists:categories,id',
            'book_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'auther_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = new Book();
        $data->title = $request->book_name;
        $data->auther_name = $request->auther_name;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->description = $request->description;
        $data->category_id = $request->category;

        $book_image = $request->book_img;
        $auther_image = $request->auther_img;

        if($book_image){
            $book_image_name = time().'.'.$book_image->getClientOriginalExtension();
            $request->book_img->move('book', $book_image_name);
            $data->book_img = $book_image_name;
        }

        if($auther_image){
            $auther_image_name = time().'.'.$auther_image->getClientOriginalExtension();
            $request->auther_img->move('auther', $auther_image_name);
            $data->auther_img = $auther_image_name;
        }

        $data->save();

        return redirect()->back()->with('message','Book added successfully');
    }

    public function show_book()
    {
        $book = Book::all();
        return view('admin.show_book', compact('book'));
    }

    public function book_delete($id)
    {
        $data = Book::findOrFail($id);

        if($data->book_img && file_exists(public_path('book/'.$data->book_img))){
            unlink(public_path('book/'.$data->book_img));
        }
        if($data->auther_img && file_exists(public_path('auther/'.$data->auther_img))){
            unlink(public_path('auther/'.$data->auther_img));
        }

        $data->delete();

        return redirect()->back()->with('message','Book deleted successfully');
    }

    public function edit_book($id)
    {
        $data = Book::findOrFail($id);
        $category = Category::all();
        return view('admin.edit_book', compact('data', 'category'));
    }

    public function update_book(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'auther_name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'book_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'auther_img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = Book::findOrFail($id);
        $data->title = $request->title;
        $data->auther_name = $request->auther_name;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->description = $request->description;
        $data->category_id = $request->category_id;

        if($request->hasFile('book_img')){
            if($data->book_img && file_exists(public_path('book/'.$data->book_img))){
                unlink(public_path('book/'.$data->book_img));
            }
            $book_image_name = time().'_book.'.$request->file('book_img')->getClientOriginalExtension();
            $request->file('book_img')->move('book', $book_image_name);
            $data->book_img = $book_image_name;
        }

        if($request->hasFile('auther_img')){
            if($data->auther_img && file_exists(public_path('auther/'.$data->auther_img))){
                unlink(public_path('auther/'.$data->auther_img));
            }
            $auther_image_name = time().'_auther.'.$request->file('auther_img')->getClientOriginalExtension();
            $request->file('auther_img')->move('auther', $auther_image_name);
            $data->auther_img = $auther_image_name;
        }

        $data->save();

        return redirect('/show_book')->with('message','Book updated successfully');
    }
}
