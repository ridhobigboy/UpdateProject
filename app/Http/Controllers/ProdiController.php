<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index(){
        $prodi = DB::table('Prodi')->get();

        return view('Prodi',['Prodi'=>$Prodi]);
    }
    public function tambah(){
        return view('tambahprodi');
    }
    public function new(Request $request){
        DB::table('prodi')->insert([
            'id' => $request->id,
            'nama' => $request->nama
        ]);
        return redirect('/prodi');
    }
    public function edit($id){
        $prodi = DB::table('prodi')->where('id',$id)->get();

        return view('editprodi',['prodi'=>$prodi]);
    }
    public function update(Request $request){
        DB::table('prodi')->where('id',$request->id)->update([
            'id' => $request->id,
            'nama' =>$request->nama
        ]);
        return redirect('/prodi');
    }
    public function hapus($id){
        Db::table('prodi')->where('id',$id)->delete();

        return redirect('/prodi');
    }
}
