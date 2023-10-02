<?php

namespace App\Http\Controllers;

use App\Models\RegistroA;
use Illuminate\Http\Request;

/**
 * Class RegistroAController
 * @package App\Http\Controllers
 */
class RegistroAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroAs = RegistroA::paginate();

        return view('registro-a.index', compact('registroAs'))
            ->with('i', (request()->input('page', 1) - 1) * $registroAs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registroA = new RegistroA();
        return view('registro-a.create', compact('registroA'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RegistroA::$rules);

        $registroA = RegistroA::create($request->all());

        return redirect()->route('registro-a.index')
            ->with('success', 'RegistroA created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registroA = RegistroA::find($id);

        return view('registro-a.show', compact('registroA'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registroA = RegistroA::find($id);

        return view('registro-a.edit', compact('registroA'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RegistroA $registroA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroA $registroA)
    {
        request()->validate(RegistroA::$rules);

        $registroA->update($request->all());

        return redirect()->route('registro-a.index')
            ->with('success', 'RegistroA updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
{
    $registroA = RegistroA::find($id);

    if (!$registroA) {
        return redirect()->route('registro-a.index')->with('error', 'RegistroA not found');
    }

    $registroA->delete();

    return redirect()->route('registro-a.index')->with('success', 'RegistroA deleted successfully');
}

}
