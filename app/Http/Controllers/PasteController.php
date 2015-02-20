<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\PasteRepository as PasteRepository;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use App\Paste;

class PasteController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(PasteRepository $paste)
	{
		$this->pasteRepository = $paste;
		$this->data = [
			'title' => 'Hyle — Paste',
			'description' => 'Use this page to save and share Hyle snippets.',
    		'pagename' => 'paste'
		];
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('site.resources.paste.create', $this->data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\CreatePasteRequest $request)
	{
	    $paste = $this->pasteRepository->create($request->all());
	    return redirect()->route('pastes.show', [base64_encode($paste->id)]);
	    // return redirect()->route('pastes.show', [base64_encode($paste->id)]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$data['paste'] = Paste::findOrFail(base64_decode($id));
		return view('site.resources.paste.show', $data);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function raw($id)
	{
		$paste = Paste::findOrFail(base64_decode($id));
		return $paste->paste;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
