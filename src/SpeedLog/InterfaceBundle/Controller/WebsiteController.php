<?php

namespace SpeedLog\InterfaceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use SpeedLog\CoreBundle\Document\Website;
use SpeedLog\InterfaceBundle\Form\WebsiteType;

/**
 * Website controller.
 *
 * @Route("/website")
 */
class WebsiteController extends Controller
{
    /**
     * Lists all Website documents.
     *
     * @Route("/", name="website")
     * @Template()
     *
     * @return array
     */
    public function indexAction()
    {
        $dm = $this->getDocumentManager();
        $documents = $this->getUser()->getGroup()->getWebsites();

        return array('documents' => $documents);
    }

    /**
     * Displays a form to create a new Website document.
     *
     * @Route("/new", name="website_new")
     * @Template()
     *
     * @return array
     */
    public function newAction()
    {
        $document = new Website();
        $form = $this->createForm(new WebsiteType(), $document);

        return array(
            'document' => $document,
            'form'     => $form->createView()
        );
    }

    /**
     * Creates a new Website document.
     *
     * @Route("/create", name="website_create")
     * @Method("POST")
     * @Template("SpeedLogCoreBundle:Website:new.html.twig")
     *
     * @param Request $request
     *
     * @return array
     */
    public function createAction(Request $request)
    {
        $document = new Website();
        $form     = $this->createForm(new WebsiteType(), $document);
        $form->bind($request);

        if ($form->isValid()) {
            $dm = $this->getDocumentManager();
            $dm->persist($document);
            $dm->flush();

            return $this->redirect($this->generateUrl('website_show', array('id' => $document->getId())));
        }

        return array(
            'document' => $document,
            'form'     => $form->createView()
        );
    }

    /**
     * Finds and displays a Website document.
     *
     * @Route("/{id}/show", name="website_show")
     * @Template()
     *
     * @param string $id The document ID
     *
     * @return array
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If document doesn't exists
     */
    public function showAction($id)
    {
        $dm = $this->getDocumentManager();

        $document = $dm->getRepository('SpeedLogCoreBundle:Website')->find($id);

        if (!$document) {
            throw $this->createNotFoundException('Unable to find Website document.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'document' => $document,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Website document.
     *
     * @Route("/{id}/edit", name="website_edit")
     * @Template()
     *
     * @param string $id The document ID
     *
     * @return array
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If document doesn't exists
     */
    public function editAction($id)
    {
        $dm = $this->getDocumentManager();

        $document = $dm->getRepository('SpeedLogCoreBundle:Website')->find($id);

        if (!$document) {
            throw $this->createNotFoundException('Unable to find Website document.');
        }

        $editForm = $this->createEditForm($document);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'document'    => $document,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Website document.
     *
     * @Route("/{id}/update", name="website_update")
     * @Method("POST")
     * @Template("SpeedLogCoreBundle:Website:edit.html.twig")
     *
     * @param Request $request The request object
     * @param string $id       The document ID
     *
     * @return array
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If document doesn't exists
     */
    public function updateAction(Request $request, $id)
    {
        $dm = $this->getDocumentManager();

        $document = $dm->getRepository('SpeedLogCoreBundle:Website')->find($id);

        if (!$document) {
            throw $this->createNotFoundException('Unable to find Website document.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm   = $this->createEditForm($document);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $dm->persist($document);
            $dm->flush();

            return $this->redirect($this->generateUrl('website_edit', array('id' => $id)));
        }

        return array(
            'document'    => $document,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Website document.
     *
     * @Route("/{id}/delete", name="website_delete")
     * @Method("POST")
     *
     * @param Request $request The request object
     * @param string $id       The document ID
     *
     * @return array
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException If document doesn't exists
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $dm = $this->getDocumentManager();
            $document = $dm->getRepository('SpeedLogCoreBundle:Website')->find($id);

            if (!$document) {
                throw $this->createNotFoundException('Unable to find Website document.');
            }

            $dm->remove($document);
            $dm->flush();
        }

        return $this->redirect($this->generateUrl('website'));
    }

    private function createEditForm(Website $document)
    {
        $form = $this->createForm(new WebsiteType(), $document, array(
            'action' => $this->generateUrl('website_update', array('id' => $document->getId())),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
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
