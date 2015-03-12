<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Documentation extends CI_Controller {
	public function index()
	{
		$this->load->database();
		require('simple_html_dom.php');
		
		$books = array('civil');
		
		foreach ($books as $bookname){
			$source = file_get_contents('livres/'. $bookname .'.html');
			preg_match_all("/<ul>(.*)<\/ul>/", $source, $ul);
			$ul = $ul[0][0];
			$json = html_to_obj($ul);
			$json = json_encode($json);
			$insert_book = array(
				'title' => 'code ' . $bookname,
				'list'  => $ul,
				'json'  => $json
			);
			//$this->db->insert('librairie', $insert_book);

			$html = str_get_html($ul);
			$html2 = str_get_html($source);
			$links = $html->find('a');
			foreach ($links as $link)
			{
				$id = str_replace('#', '', $link->href);
				echo $html2->find('a', 0)->plaintext;
				//$this->db->insert('librairie', $insert_book);
			}
			//print_r($articles);
		}
	}
	
	private function sample() {
	}
}

function html_to_obj($html) {
    $dom = new DOMDocument();
    $dom->loadHTML($html);
    return element_to_obj($dom->documentElement);
}
	
function element_to_obj($element) {
    $obj = array( "tag" => $element->tagName );
    foreach ($element->attributes as $attribute) {
        $obj[$attribute->name] = $attribute->value;
    }
    foreach ($element->childNodes as $subElement) {
        if ($subElement->nodeType == XML_TEXT_NODE) {
            $obj["html"] = $subElement->wholeText;
        }
        else {
            $obj["children"][] = element_to_obj($subElement);
        }
    }
    return $obj;
}