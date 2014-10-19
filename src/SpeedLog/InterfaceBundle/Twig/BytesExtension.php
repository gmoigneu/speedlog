<?php

namespace SpeedLog\InterfaceBundle\Twig;

class BytesExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('to_kb', array($this, 'to_kb')),
            new \Twig_SimpleFilter('to_mb', array($this, 'to_mb')),
        );
    }

    public function to_kb($size)
    {
      return round($size / 1024);
    }

    public function to_mb($size)
    {
      return round($size / (1024*1024));
    }

    public function getName()
    {
        return 'bytes_extension';
    }
}