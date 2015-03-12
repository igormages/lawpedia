<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	
	private $api = "http://legimobile.fr/";
	
	
	public function index()
	{
		echo "";
	}
	
	public function q() {
		require('simple_html_dom.php');
		$url = $this->api . 'search?q=' . $this->uri->segment(3);
		$html = file_get_html($url);
		$links = $html->find('ul.sres li a');
		$titles = $html->find('ul.sres span.rlib');
		$i = 0;
		foreach ($titles as $key => $title){
			$suggestion[$i++]['title'] = $title->plaintext;
			if ($i == 5)
				break;
		}
		$i = 0;
		foreach ($links as $key => $link){
			$suggestion[$i++]['link'] = $link->href;
			if ($i == 5)
				break;
		}
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($suggestion);
	}
	
	public function b() {
		require('simple_html_dom.php');
		$url = $this->api . 'search?q=' . $this->uri->segment(3);
		$html = file_get_html($url);
		$links = $html->find('ul.sres li a');
		$titles = $html->find('ul.sres span.rlib');
		$descs = $html->find('ul.sres span.rhl');
		$fils = $html->find('ul.sres span.ctxt');
		$i = 0;
		foreach ($titles as $key => $title){
			$suggestion[$i++]['title'] = $title->plaintext;
		}
		$i = 0;
		foreach ($links as $key => $link){
			$suggestion[$i++]['link'] = $link->href;
		}
		$i = 0;
		foreach ($fils as $key => $fil){
			$suggestion[$i++]['fil'] = $fil->plaintext;
		}
		$i = 0;
		foreach ($descs as $key => $desc){
			$suggestion[$i++]['desc'] = $desc->plaintext;
		}
		header('Content-type: application/json; charset=utf-8');
		echo json_encode($suggestion);
	}
	
}