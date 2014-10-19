<?php

namespace SpeedLog\InterfaceBundle\Twig;

use Carbon\Carbon;

class CarbonExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('human_date', array($this, 'humanDate')),
        );
    }

    public function humanDate($date)
    {
      $carbon = Carbon::instance($date);
      
      return $carbon->diffForHumans();
    }

    public function getName()
    {
        return 'acme_extension';
    }
}