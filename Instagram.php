<?php

/**
 * Instagram Photo
 * @author Martin Dobry
 * @link http://webscript.cz
 * @version 1.0
 */

namespace InstagramPhotos;

class Photos {

    public $Token;
    public $URI;
	
	public function __construct($ic = null) {
	    $this->Token = "";
		$this->URI = "https://api.instagram.com/v1/users/self/media/recent/?access_token=".$this->Token;
	}
	
	private function file_get_contents_curl($url) {
	    $ch = curl_init();
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_URL, $url);
	    $data = curl_exec($ch);
	    curl_close($ch);
	    return $data;
	}
	
	private function echoImage($value) {
        $link = $value["link"];
        $thumb = $value["images"]["standard_resolution"]["url"];
        return '<a href="'.$link.'"><img src="'.$thumb.'" alt="" width="100%" /></a>';
    }
	
	public function Images() {
	    $result = $this->file_get_contents_curl($this->URI);
	    
	    $json = json_decode($result, 1);
	    
	    foreach ($json['data'] as $value)
	        $photo[] = $this->echoImage($value);
	    
        return json_encode($photo);
        
	}
	
}

?>