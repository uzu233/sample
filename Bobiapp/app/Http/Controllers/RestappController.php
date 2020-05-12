<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restdata;

class RestappController extends Controller
{

    //一覧表示用
    public function index()
    {
        $items = Restdata::all();
        return $items->toArray();
    }

    //新規作成
    public function create()
    {
        return view('rest.create');
    }

    //新規作成
    public function store(Request $request)
    {
        $restdata = new Restdata;
        $form = $request->all();
        unset($form['_token']);
        $restdata->fill($form)->save();
        return redirect('/rest');
    }

    //レコード表示
    public function show($id)
    {
        $item = Restdata::find($id);
        return $item->toArray();
    }

    //更新処理
    public function edit($id)
    {
        //
    }

    //更新処理
    public function update(Request $request, $id)
    {
        //
    }

    //削除処理
    public function destroy($id)
    {
        //
    }
}
