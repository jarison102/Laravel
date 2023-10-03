<?php

namespace App\Http\Controllers;

use App\Models\Registrop;
use Illuminate\Http\Request;

/**
 * Class RegistropController
 * @package App\Http\Controllers
 */
class RegistropController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrops = Registrop::paginate();

        return view('registrop.index', compact('registrops'))
            ->with('i', (request()->input('page', 1) - 1) * $registrops->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registrop = new Registrop();
        return view('registrop.create', compact('registrop'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Registrop::$rules);

        $registrop = Registrop::create($request->all());

        return redirect()->route('registrop.index')
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
        $registrop = Registrop::find($id);

        return view('registrop.show', compact('registrop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registrop = Registrop::find($id);

        return view('registrop.edit', compact('registrop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Registrop $registrop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registrop $registrop)
    {
        request()->validate(Registrop::$rules);

        $registrop->update($request->all());

        return redirect()->route('registrop.index')
            ->with('success', 'Registrop updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $registrop = Registrop::find($id);

        if (!$registrop) {
            return redirect()->route('registrop.index')->with('error', 'Registrop not found');
        }
    
        $registrop->delete();
    
        return redirect()->route('registrop.index')->with('success', 'Registrop deleted successfully');
    }
}
