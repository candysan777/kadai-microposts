<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class FavoritesController extends Controller
{
    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入り登録する
        \Auth::user()->favorite($id);
        //前のURLへリダイレクト
        return back();
    }

    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idの投稿をお気に入りから削除する
        \Auth::user()->unfavorite($id);
        //前のURLへリダイレクト
        return back();
        
    }
}