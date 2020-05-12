<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    //リスト6-40
    public function index(Request $request)
    {
        $hasItems = Person::has('boards')->get();
        $noItems = Person::doesntHave('boards')->get();
        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('person.index', $param);
    }
    
    public function find(Request $request)
    {
        return view('person.find', ['input' => '']);
    }


    //リスト6-14
    public function search(Request $request)
    {
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)->
            ageLessThan($max)->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }


    //リスト6-20
    public function add(Request $request)
    {
        return view('person.add');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = new Person;
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }


    //リスト6-23
    public function edit(Request $request)
    {
        $person = Person::find($request->id);
        return view('person.edit', ['form' => $person]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Person::$rules);
        $person = Person::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $person->fill($form)->save();
        return redirect('/person');
    }


    //リスト6-25
    public function delete(Request $request)
    {
        $person = Person::find($request->id);
        return view('person.del', ['form' => $person]);
    }
    
    public function remove(Request $request)
    {
        Person::find($request->id)->delete();
        return redirect('/person');
    }
}
