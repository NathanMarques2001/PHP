<?php

namespace Composer\GET;

use GuzzleHttp\ClientInterface;
use Symfony\Component\DomCrawler\Crawler;

class get
{

  private $httpClient;
  private $crawler;

  public function __construct(ClientInterface $httpClient, Crawler $crawler)
  {
    $this->httpClient = $httpClient;
    $this->crawler = $crawler;
  }

  public function search(string $url): array
  {
    $response = $this->httpClient->request('GET', $url);

    $html = $response->getBody();
    $this->crawler->addHtmlContent($html);

    $courses = $this->crawler->filter('span.card-curso__nome');
    $coursesArr = [];

    foreach ($courses as $course) {
      $coursesArr[] = $course->textContent;
    }
    
    return $coursesArr;
  }
}
