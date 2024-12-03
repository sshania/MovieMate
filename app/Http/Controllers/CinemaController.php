<?php

namespace App\Http\Controllers;

use App\Http\Requests\CinemaCreateRequest;
use App\Http\Requests\CinemaCreateUpdateRequest;
use App\Models\Cinema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CinemaController extends Controller
{
    public function showList()
    {
        $Cinemas = Cinema::all();
        return view('main.cinema', compact('Cinemas'));
    }

    public function index()
    {
        $Cinemas = Cinema::get();
        return view('admin/cinema/index', ['CinemaList' => $Cinemas]);
    }

    public function create()
    {
        return view('admin/cinema/create');
    }


    public function store(CinemaCreateUpdateRequest $request)
    {

        $newCinema = $request->all();
        $newCinema['total_studios'] = 0;

        $Cinema = Cinema::create($newCinema);
        if($Cinema){
            Session::flash('status', 'success');
            Session::flash('message', 'add new Cinema success');
        }

        return redirect()->route('cinema.index');
    }

    public function show($id)
    {
        $Cinema = Cinema::findOrFail($id);
        return view('/admin/cinema/detail', ['CinemaDetail' => $Cinema]);
    }

    public function edit($id)
    {
        $Cinema = Cinema::findOrFail($id);
        return view('/admin/cinema/edit', ['CinemaData' => $Cinema]);
    }


    public function update(CinemaCreateUpdateRequest $request, $id)
    {
        $oldCinema = Cinema::findOrFail($id);
        $oldCinema->update($request->all());

        return redirect(route('cinema.index'))->with('success', 'Data Cinema berhasil di update');
    }


    public function destroy($id)
    {
        $cinemaDel = Cinema::findOrFail($id);
        $cinemaDel->delete();
        return redirect(route('cinema.index'))->with('success', 'Data Cinema berhasil di delete');
    }
}
