<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request /*PostRequest $request*/)
    {   
        $validator = Validator::make($request->all(), [
            'hatali' => 'required|max:255',
            'author[name]' => 'required',
            'bail' => 'required'
        ],[
            'required'=>'Attiribute zorunludur'
        ])->validate();
 
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }
        //validate yakalama
        //$valitade=$request->validated();
        //dd($valitade);

        
        /*
        $validated=$request->validate([
            //postun kontrolünü validate ile yapabiliyoruz
            'author.name'=>'required|max:100',
            'hatali'=>'required|max:100',
            //boş bırakabilr
            'bail'=>'nullable|max:100'
            //'name'=>['required','max:100']
        ]);
        */
        /*
        $validated=$request->validateWithBag('post',[
            //postun kontrolünü validate ile yapabiliyoruz
            'name'=>['required','max:100'],
            //bail-> bailden sonra required işlemi başarız ise ondan sonrakileri kontrol etmez
            'bail'=>['bail','required','max:100']
           
        ]);
        */
        echo 'Validate geçildi';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
