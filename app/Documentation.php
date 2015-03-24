<?php namespace App;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\Cache\Repository as Cache;
use League\CommonMark\CommonMarkConverter;


class Documentation {

	/**
	 * The filesystem implementation.
	 *
	 * @var Filesystem
	 */
	protected $files;

	/**
	 * The cache implementation.
	 *
	 * @var Cache
	 */
	protected $cache;

	/**
	 * Create a new documentation instance.
	 *
	 * @param  Filesystem  $files
	 * @param  Cache  $cache
	 * @return void
	 */
	public function __construct(Filesystem $files, Cache $cache)
	{
		$this->files = $files;
		$this->cache = $cache;
	}

	/**
	 * Get the documentation index page.
	 *
	 * @param  string  $version
	 * @return string
	 */
	public function getIndex($version)
	{
		return $this->get($version, 'documentation');
	}
	/**
	 * Get the given documentation page.
	 *
	 * @param  string  $version
	 * @param  string  $page
	 * @return string
	 */
	public function get($version, $page)
	{
		return $this->cache->remember('docs.'.$version.'.'.$page, 5, function() use ($version, $page) {
			$path = base_path('resources/documentation/'.$version.'/'.$page.'.md');
			if ($this->files->exists($path)) {
				return $this->files->get($path);
			}
			return null;
		});
	}

}