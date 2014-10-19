<?php

namespace SpeedLog\CoreBundle\Model;

use Doctrine\ODM\MongoDB\DocumentManager;

class Website
{
  protected $dm;

  public function __construct(DocumentManager $dm)
  {
    $this->dm = $dm;
  }
  
  public function getTimeEvolutionPerPage($website)
  {
    $timeEvolutionPerPage = [];
    $tmp = [];

    
    foreach ($website->getPages() as $page) {

      $reports= $this->dm->createQueryBuilder('SpeedLogCoreBundle:Report')
      ->field('page')->references($page)
      ->sort('created', 'desc')
      ->limit(8)
      ->hydrate(false)
      ->getQuery()
      ->execute();

      $i = 7;
      foreach ($reports as $r => $value) {
        $tmp[$i][$page->getId()] = $value['timeToLastByte'] + $value['domComplete'];
         $i--;
      }
     
    }


    for ($i=0; $i < 8; $i++) { 
      $arr = [];
      $arr['day'] = $i;
      foreach ($website->getPages() as $page) {
        $arr[$page->getId()] = $tmp[$i][$page->getId()];
      }
      $timeEvolutionPerPage[] = $arr;
    }

    return json_encode($timeEvolutionPerPage);
  }
}