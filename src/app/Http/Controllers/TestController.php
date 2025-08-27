<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Contact;


class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(Request $request)
    {
        $contact = $request->only([/* あとで入力 フォーム入力ページ参照　　　*/]);
        return view('confirm', compact('contact'));
    }/* フォーム入力ページの送信ボタンを押した時の処理 */
    public function store(Request $request)
    {
        $contact = $request->only([/* あとで入力
       */]);
        Contact::create($contact);
        return view('thanks');
    }/* 入力内容確認ページの送信ボタンを押した時の処理 */
    public function thanks()
    {
        /* お問い合わせ完了のメッセージを入れる */
        return view('index')
    }
}


