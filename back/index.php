<?php
header("Access-Control-Allow-Origin: *");

require 'google-search-results-php/google-search-results.php';
require 'google-search-results-php/restclient.php';

$q = $_GET['q'];

$query = [
    "engine" => "google",
    "q" => $q,
    "location" => "Brazil",
    "google_domain" => "google.com.br",
    "gl" => "br",
    "hl" => "pt"
  ];
  
  $client = new GoogleSearch("d49f022d650fd2326ab54d82afbc81495812ee2f63ba8b1ddc39970114a558cb");
  $json_results = $client->get_json($query);
  echo json_encode($json_results->organic_results);