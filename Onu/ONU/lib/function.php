<?php

class Functions {

	public function post($post) {
        if(isset($_POST[$post]) ? $post = $_POST[$post] : "");
        return $post;
    }

    public function toUpper($txt) {
    	return strtoupper($txt);
    }

}