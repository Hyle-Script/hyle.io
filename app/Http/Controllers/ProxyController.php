<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProxyController extends Controller {

	public function get(Requests\GetFromProxyRequest $request)
	{
		$url    = $request->get('url');
		$client = new \GuzzleHttp\Client();
		$data   = $client->get($url);
   		return $data->getBody();
	}

}
