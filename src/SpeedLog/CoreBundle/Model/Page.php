<?php

namespace SpeedLog\CoreBundle\Model;

use Doctrine\ODM\MongoDB\DocumentManager;

class Page
{
  protected $dm;

  public function __construct(DocumentManager $dm)
  {
    $this->dm = $dm;
  }
  
  public function getLastReport($page)
  {
    $report = $this->dm->createQueryBuilder('SpeedLogCoreBundle:Report')
      ->field('page')->references($page)
      ->sort('created', 'desc')
      ->getQuery()
      ->getSingleResult();

    return $report;
  }
}