<?php


namespace App\Http\Controllers;


use Illuminate\Http\TestRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Test;
use App\models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class TestController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }
    public function confirm(TestRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'category_id',  'detail']);
        $category = Category::find($contact['category_id']);
        return view('confirm', compact('contact', 'category'));
    }
    public function store(TestRequest $request)
    {
        $contact = $request->only(['fullname' => $request->last_name . $request->first_name] + $request->only(['gender', 'email', 'tel', 'address', 'building', 'detail']));
        Test::create($contact);
        return view('thanks');
    }
    public function show(Request $request)
    {
        $contact = Contact::with($contact['contact_id']);
        $category = Category::with($contact['category_id']);
        return view('admin', compact('contact', 'category'));
    }

    public function register(Request $request)
    {
        $contact = $request->all('fullname', 'email', 'password');
        $users = User::find($contact['user_id']);
        return redirect('register', compact('contact', 'users'));
    }

    public function login(Request $request)
    {
        $contact = $users->only('email','password');
        return view('login');
    }


}


