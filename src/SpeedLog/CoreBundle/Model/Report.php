<?php

namespace SpeedLog\CoreBundle\Model;

use SpeedLog\CoreBundle\Document\Page;
use SpeedLog\CoreBundle\Document\Report as ReportEntity;
use Symfony\Component\Process\Process;
use Doctrine\ODM\MongoDB\DocumentManager;

class Report
{
  protected $page;
  protected $dm;

  public function __construct(Page $page, DocumentManager $dm)
  {
    $this->dm = $dm;
    $this->page = $page;
  }

  public function generate()
  {

    $process = new Process('phantomas ' . $this->page->getUrl() . ' --reporter=json');
    $process->run();

    $report = new ReportEntity();

    if (!$process->isSuccessful()) {
        throw new \RuntimeException($process->getErrorOutput());
    }

    $data = json_decode($process->getOutput(), true);
    $class = new \ReflectionClass('SpeedLog\CoreBundle\Document\Report');

    foreach ($data['metrics'] as $key => $value) {

      if (preg_match('/@MongoDB\\\+([^\s]+)/', $class->getProperty($key)->getDocComment(), $matches)) {
        list(, $type) = $matches;
        if($type == "Collection") {
          $value = explode(',', $value);
        }
      }

      $report->__set($key, $value);
      $this->dm->persist($report);
      $this->dm->flush();
    }
  }
}