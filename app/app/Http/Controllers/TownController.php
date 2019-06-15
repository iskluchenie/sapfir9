<?php

namespace App\Http\Controllers;

use App\Models\Town;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TownController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('towns.index', ['towns' => Town::all()]);
    }


    /**
     * @return View
     */
    public function create(): View
    {
        return view('towns.create');
    }


    /**
     * @param Request $request
     * @param Town $town
     * @return RedirectResponse
     */
    public function store(Request $request, Town $town): RedirectResponse
    {
        $town->create($request->all());
        return redirect()->route('towns.index');
    }


    /**
     * @param Town $town
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Town $town): View
    {
        return view('towns.show', ['town' => Town::findOrFail($town)]);
    }


    /**
     * @param Town $town
     * @return View
     */
    public function edit(Town $town): View
    {
        return view('towns.edit', ['town' => Town::findOrFail($town)]);
    }


    /**
     * @param Request $request
     * @param Town $town
     * @return RedirectResponse
     */
    public function update(Request $request, Town $town): RedirectResponse
    {
        $town->update($request->all());
        return redirect()->route('towns.index');
    }


    /**
     * @param Town $town
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Town $town): RedirectResponse
    {
        $town->delete();
        return redirect()->route('towns.index');
    }
}
