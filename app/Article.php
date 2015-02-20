<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use League\CommonMark\CommonMarkConverter;

class Article extends Model {

	protected $appends = ['parsed_content', 'excerpt', 'link', ];

	public function getParsedContentAttribute() {
		$converter = new CommonMarkConverter();
		return $converter->convertToHtml($this->content);
	}

	public function getExcerptAttribute() {
		$parts = explode("<!-- more -->", $this->content);
		$converter = new CommonMarkConverter();
		$excerpt = $converter->convertToHtml($parts[0]);
		return $excerpt;
	}

	public function getLinkAttribute() {
		return url('blog/'.$this->slug);
	}

}
