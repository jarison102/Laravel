<?php

namespace App\Http\Controllers;

use App\Models\Registrom;
use Illuminate\Http\Request;

/**
 * Class RegistromController
 * @package App\Http\Controllers
 */
class RegistromController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroms = Registrom::paginate();

        return view('registrom.index', compact('registroms'))
            ->with('i', (request()->input('page', 1) - 1) * $registroms->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registrom = new Registrom();
        return view('registrom.create', compact('registrom'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Registrom::$rules);
 
        $registrom = Registrom::create($request->all());

        return redirect()->route('registrom.index')
            ->with('success', 'Registrop created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registrom = Registrom::find($id);

        return view('registrom.show', compact('registrom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registrom = Registrom::find($id);

        return view('registrom.edit', compact('registrom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Registrom $registrom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registrom $registrom)
    {
        request()->validate(Registrom::$rules);

        $registrom->update($request->all());

        return redirect()->route('registrom.index')
            ->with('success', 'Registrom updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)

    {
        $registrom = Registrom::find($id)->delete();

        return redirect()->route('registrom.index')
            ->with('success', 'Registrod deleted successfully');
    }
}
