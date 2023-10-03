<?php

namespace App\Http\Controllers;

use App\Models\Registrod;
use Illuminate\Http\Request;

/**
 * Class RegistrodController
 * @package App\Http\Controllers
 */
class RegistrodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrods = Registrod::paginate();

        return view('registrod.index', compact('registrods'))
            ->with('i', (request()->input('page', 1) - 1) * $registrods->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registrod = new Registrod();
        return view('registrod.create', compact('registrod'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Registrod::$rules);

        $registrod = Registrod::create($request->all());

        return redirect()->route('registrods.index')
            ->with('success', 'Registrod created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registrod = Registrod::find($id);

        return view('registrod.show', compact('registrod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registrod = Registrod::find($id);

        return view('registrod.edit', compact('registrod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Registrod $registrod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registrod $registrod)
    {
        request()->validate(Registrod::$rules);

        $registrod->update($request->all());

        return redirect()->route('registrods.index')
            ->with('success', 'Registrod updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $registrod = Registrod::find($id)->delete();

        return redirect()->route('registrods.index')
            ->with('success', 'Registrod deleted successfully');
    }
}
