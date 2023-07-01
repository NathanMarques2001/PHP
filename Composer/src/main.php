<?php

require 'vendor/autoload.php';
require 'GET.php';

use Composer\GET\get;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$get = new get($client, $crawler);
$courses = $get->search('cursos-online-programacao/php');

foreach ($courses as $course) {
  echo $course . PHP_EOL;
}
