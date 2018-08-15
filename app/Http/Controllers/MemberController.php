<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function index()
    {
    	$members = Member::paginate(3);
    	return view('member.index', ['members'=>$members]);
    }

    public function create()
    {
    	return view('member.create-member');
    }

    public function store(Request $request)
    {
    	$request->validate([
    		'nama'=>'required',
    		'alamat'=>'required',
    		'telepon'=>'required|max:12'
    	]);

    	$member = new Member;
    	$member->nama = $request->nama;
    	$member->alamat = $request->alamat;
    	$member->telepon = $request->telepon;
    	$member->save();

    	session()->flash('save', 'Data Berhasil Ditambahkan');

    	return redirect('/');
    }

    public function edit($id)
    {
    	$member = Member::find($id);
    	return view('member.edit-member', ['member'=>$member]);
    }

    public function update(Request $request, $id)
    {
    	$request->validate([
    		'nama'=>'required',
    		'alamat'=>'required',
    		'telepon'=>'required|max:12'
    	]);

    	$member = Member::Find($id);
    	$member->nama = $request->nama;
    	$member->alamat = $request->alamat;
    	$member->telepon = $request->telepon;
    	$member->save();

    	session()->flash('update', 'Data Berhasil Diubah');

    	return redirect('/');
    }

    public function destroy($id)
    {
    	$member = Member::Find($id);
    	$member->delete();

    	session()->flash('delete', 'Data Berhasil Dihapus');

    	return redirect('/');
    }
}
