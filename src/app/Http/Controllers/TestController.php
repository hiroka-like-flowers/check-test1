<?php


namespace App\Http\Controllers;


use App\Http\Requests\TestRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Contact;
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
        $contact = $request->only([
            'last_name',
            'first_name',
            'gender',
            'email',
            'tel1',
            'tel2',
            'tel3',
            'address',
            'building',
            'category_id',
            'detail'
        ]);
        $category = Category::find($contact['category_id'] ?? null);
        return view('confirm', compact('contact', 'category'));
    }
    public function store(TestRequest $request)
    {
        $contactData = $request->only([
            'last_name',
            'first_name',
            'gender',
            'email',
            'tel1',
            'tel2',
            'tel3',
            'address',
            'building',
            'category_id',
            'detail'
        ]);
        $contactData['tel'] = $contactData['tel1'] . '-' . $contactData['tel2'] . '-' . $contactData['tel3'];
        unset($contactData['tel1'], $contactData['tel2'], $contactData['tel3']);
        Contact::create($contactData);
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


