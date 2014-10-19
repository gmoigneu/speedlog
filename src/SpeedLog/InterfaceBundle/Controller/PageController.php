<?php

namespace SpeedLog\InterfaceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SpeedLog\CoreBundle\Document\Website;
use SpeedLog\InterfaceBundle\Form\WebsiteType;
use Carbon\Carbon;

/**
 * Page controller.
 *
 * @Route("/website/page")
 */
class PageController extends Controller
{

    /**
     * Finds and displays a Page document.
     *
     * @Route("/{wid}/{pid}/show", name="page_show")
     * @Template()
     *
     * @param string $wid The Website ID
     * @param string $pid The Page ID
     *
     * @return array
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If document doesn't exists
     */
    public function showAction($wid, $pid)
    {
        $dm = $this->getDocumentManager();

        $page = $this->get('speedlog_core.page')->findPage($wid, $pid);

        if (!$page) {
            throw $this->createNotFoundException('Unable to find Page document.');
        }

        $page->lastReport = $this->get('speedlog_core.page')->getLastReport($page);

        // Charts
        $reports = $dm->createQueryBuilder('SpeedLogCoreBundle:Report')
          ->field('page')->references($page)
          ->sort('created', 'desc')
          ->limit(8)
          ->hydrate(false)
          ->getQuery()
          ->execute();

          foreach ($reports as $r => $value) {
            $value['period'] = Carbon::createFromTimeStamp($value['created']->sec)->toFormattedDateString();
            array_walk($value, function(&$v, $k) {
                if(in_array($k, ['htmlSize', 'cssSize', 'jsSize', 'jsonSize', 'imageSize', 'webfontSize', 'videoSize', 'base64Size', 'otherSize'])) {
                    $v = round($v / 1024);
                }
            });
            $ds[] = $value;
          }


        return array(
            'wid' => $wid,
            'page' => $page,
            'ds' => json_encode(array_reverse($ds))
        );
    }

    /**
     * Returns the DocumentManager
     *
     * @return DocumentManager
     */
    private function getDocumentManager()
    {
        return $this->get('doctrine.odm.mongodb.document_manager');
    }
}
