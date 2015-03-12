<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fr extends CI_Controller {
	
	private $api = "http://legimobile.fr/";
	
	
	public function index()
	{
		$tab = array(
			array('href' => '/fr/lr', 'title' => 'LÉGISLATION ET RÉGLEMENTATION'),
			array('href' => '/fr/jp', 'title' => 'JURISPRUDENCE'),
			array('href' => '/fr/cc', 'title' => 'CONVENTIONS COLLECTIVES'),
			array('href' => '/fr/cnil', 'title' => 'CNIL')
		);	
		$this->to_ul($tab);
	}
	
	public function base() {
		require('simple_html_dom.php');
		$url = $this->api . $this->uri->uri_string();
		$html = file_get_html($url);
		$links = $html->find('ul.nav li a');
		foreach ($links as $link) {
			$tab[] = array('href' => '/' . $this->uri->uri_string() . '/' . $link->href, 'title' => $link->plaintext);
		}
		if (isset($tab))
			$this->to_ul($tab);
		else
			echo 0, $this->getDocument();
	}
	
	public function getDocument() {
		$url = $this->api . $this->uri->uri_string();
		$url = str_replace('fr/getDocument', '', $url);
		$html = file_get_contents($url);
		$explode = preg_split("/<h1 class=\"brf\">(.*)<\/h1>/", $html);
		$explode = preg_split("/<div class=\"ft\"(.*)/", $explode[1]);
		$explode = $explode[0];
		$explode = preg_replace('/href="(?!\/?fr\/)/', 'href="/' . $this->uri->uri_string().'/', $explode);
		echo $explode;
	}
	
	private function to_ul($tab) {
		$now = $this->uri->uri_string();
		$max = $this->uri->total_segments();
		$back = str_replace('/'. $this->uri->segment($max), '', $now);
		
		if ($this->uri->uri_string() != 'fr')
			echo '<li><a href="/'. $back .'"><i class="fa fa-reply"></i> REVENIR</a></li>';
		foreach ($tab as $li) {
			echo '<li><a href="'. $li['href'] .'">'. $li['title'] .'</a></li>';
		}
	}
}