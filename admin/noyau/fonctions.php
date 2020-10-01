<?php
/*
 ./admin/noyau/fonctions.php
*/
namespace Noyau\Fonctions;


function slugify(string $str) :string {
		   return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
		 }
