<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wy extends CI_Controller {
	
	private $api = "http://legimobile.fr/";
	
	public function getDocument() {
		$url = $this->api . str_replace('wy/', '', $this->uri->uri_string());
		$url = str_replace('fr/getDocument', '', $url);
		$html = file_get_contents($url);
		$explode = preg_split("/<h1 class=\"brf\">(.*)<\/h1>/", $html);
		$explode = preg_split("/<div class=\"ft\"(.*)/", $explode[1]);
		$explode = $explode[0];
		$explode = preg_replace('/href="(?!\/?fr\/)/', 'href="/' . $this->uri->uri_string().'/', $explode);
		
		$json = array(
			'data' => array(
				array(
					'type' => 'text',
					'data' => array(
						'text' => $explode,
					),
				)
			)
		);
		echo json_encode($json);
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