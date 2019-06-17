<?php

namespace App\Http\Controllers;

use App\Models\Entrance;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EntranceController extends Controller
{
    /**
     * @param Entrance $entrance
     * @return View
     */
    public function index(): View
    {
        return view('entrances.index', ['entrances' => Entrance::all()]);
    }


    /**
     * @return View
     */
    public function create(): View
    {
        return view('entrances.create');
    }


    /**
     * @param Request $request
     * @param Entrance $entrance
     * @return RedirectResponse
     */
    public function store(Request $request, Entrance $entrance): RedirectResponse
    {
        $entrance->create($request->all());
        return redirect()->route('entrances.index');
    }


    /**
     * @param Entrance $entrance
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Entrance $entrance): View

    {
        return view('entrances.show', ['entrance' => $entrance]);
    }


    /**
     * @param Entrance $entrance
     * @return View
     */
    public function edit(Entrance $entrance): View
    {
        return view('entrances.edit', ['entrance' => $entrance]);
    }


    /**
     * @param Request $request
     * @param Entrance $entrance
     * @return RedirectResponse
     */
    public function update(Request $request, Entrance $entrance): RedirectResponse
    {
        $entrance->update($request->all());
        return redirect()->route('entrances.index');
    }


    /**
     * @param Entrance $entrance
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Entrance $entrance): RedirectResponse
    {
        $entrance->delete();
        return redirect()->route('entrances.index');
    }
}
