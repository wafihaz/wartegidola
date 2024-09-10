<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Warteg;

class WartegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data']=Warteg::All();
        return view('content.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('content.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=> 'required',
            'harga'=>'required',
            'deskripsi'=>'nullable',
            'foto'=>'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:20048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000'
        ]);
        $input = $request->all();

        if ($gambar = $request->file('foto')) {
            $destinationPath = 'global/img/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }

        Warteg::create($input);

        return redirect()->route('index')->with('success','Menu Telah Ditambahkan');
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
        $data=Warteg::find($id);
        return view('content.edit',compact('data'));
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
        $data=Warteg::find($id);
        $data->foto=$request->input('foto');
        $data->nama=$request->input('nama');
        $data->harga=$request->input('harga');
        $data->deskripsi=$request->input('deskripsi');

        $input=$request->all();
        if ($gambar = $request->file('foto')) {
            $destinationPath = 'global/img/';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['foto'] = "$profileImage";
        }
        $data->update($input);

        return redirect()->route('index')->with('success','Menu Telah Diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Warteg::find($id);
        $data->delete();

        return redirect()->route('index')->with('success','Menu Telah Dihapus');
    }

    public function home()
    {
        $data['data']=Warteg::paginate(3);
        return view('content.home',$data);
    }
    public function menu()
    {
        $data['data']=Warteg::All();
        return view('content.menu',$data);
    }
}
