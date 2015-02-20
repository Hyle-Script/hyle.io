<?php namespace App\Http\Controllers;

use App\Documentation;

class DocumentationController extends Controller {

	protected $docs;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Documentation $docs)
	{
		$this->docs = $docs;
		$this->data = [
			'pagename' => 'docs',
			'description' => 'Showcase of examples of Hyle uses.'
		];
	}


	/**
	 * Show the root documentation page (/docs).
	 *
	 * @return Response
	 */
	public function showRootPage()
	{
		return redirect('docs/'.DEFAULT_VERSION);
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('site.pages.home', $this->data);
	}


	/**
	 * Determine if the given URL segment is a valid version.
	 *
	 * @param  string  $version
	 * @return bool
	 */
	protected function isVersion($version)
	{
		return in_array($version, ['v1']);
	}
	/**
	 * Get the available documentation versions.
	 *
	 * @return array
	 */
	protected function getDocVersions()
	{
		return [
			'master' => 'Master',
			'5.0' => '5.0',
			'4.2' => '4.2',
			'4.1' => '4.1',
			'4.0' => '4.0',
		];
	}

	/**
	 * Show a documentation page.
	 *
	 * @return Response
	 */
	public function show($version, $page = null)
	{
		if ( ! $this->isVersion($version)) {
			return redirect('docs/'.DEFAULT_VERSION.'/'.$page, 301);
		}

		$content = $this->docs->get($version, $page ?: 'introduction');

		$this->data['title'] = 'Hyle — ' . ($page ? ucwords(str_replace('-', ' ', $page)) : 'Introduction');

		$this->data += [
			'index' => $this->docs->getIndex($version),
			'content' => $content,
			'currentVersion' => $version,
			'versions' => $this->getDocVersions(),
		];
		return view('site.pages.docs', $this->data);
	}
}
