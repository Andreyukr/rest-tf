<?php

namespace App\Controller\Api;

use App\Entity\CreditProducts;
use App\Entity\CustomerSelection;
use App\Entity\Personal;
use App\Repository\ClientApplications\AddClient;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;

class GetClientsAnnotations extends FOSRestController
{
    /**
     * @param AddClient $client
     * @Rest\Post("/applications")
     * @return View
     */

    public function getAnnotations(AddClient $client)
    {
        $client->addNewClient();

        return $this->view(null, Response::HTTP_CREATED);
    }

    /**
     * @Rest\Get("/{clientId}/list-products")
     */

    public function listProducts($clientId): View
    {
        $doctrine = $this->getDoctrine();

        /**
         * @var CreditProducts $listProducts
         */
        $listProducts = $doctrine->getRepository(CreditProducts::class)->findAll();

        $client = $doctrine->getRepository(Personal::class)->find($clientId);

        if (empty($listProducts)){
            throw $this->createNotFoundException('No found any products!');
        }

        $response =[];
        /**
         * @var CreditProducts $product
         * @var Personal $client
         */
        foreach ($listProducts as $product) {
            $response[] = [
                'data' => [
                    'type' => 'Credit Products',
                    'id' => $product->getId(),
                    'attributes' => [
                        'name' => $product->getNameProduct(),
                        'type' => $product->getTypeProduct(),
                        'conditions' => $product->getConditions(),
                    ],
                    'links' => [
                        'self' => \sprintf('/api/%d/product/%d', $client->getId(), $product->getId()),
                    ],
                ],
            ];
        }

        return $this->view($response, Response::HTTP_OK);

    }

    /**
     * @param int $id
     * @return View
     * @Rest\Post("/{clientId}/product/{id}")
     */
    public function getProduct(int $id, int $clientId): View
    {
        $doctrine = $this->getDoctrine();

        $product = $doctrine->getRepository(CreditProducts::class)->find($id);

        if (empty($product)){
            throw $this->createNotFoundException('Resource with ID - '.$id.' not found!');
        }

        $customerSelection = new CustomerSelection();

        $customerSelection->setProductId($id);
        $customerSelection->setPersonalId($clientId);
        $em = $doctrine->getManager();
        $em->persist($customerSelection);
        $em->flush();

        return $this->view($product, Response::HTTP_OK);
    }

    /**
     * @param int $clientId
     * @return View
     * @Rest\Patch("/approve/{clientId}")
     */
    public function getPositiveStatus(int $clientId): View
    {
        $doctrine = $this->getDoctrine();

        /**
         * @var CustomerSelection $approve
         */
        $approve = $doctrine->getRepository(CustomerSelection::class)
            ->findOneBy(['personalId'=> $clientId]);

        if (empty($approve)){
            throw $this->createNotFoundException('Client with ID - '.$clientId.' not selected a product!');
        }

        $approve->setConfirmed(true);

        $em = $doctrine->getManager();
        $em->persist($approve);
        $em->flush();

        return $this->view(null, Response::HTTP_ACCEPTED);
    }

    /**
     * @param int $clientId
     * @return View
     * @Rest\Patch("/denial/{clientId}")
     */
    public function getNegativeStatus(int $clientId): View
    {
        $doctrine = $this->getDoctrine();

        /**
         * @var CustomerSelection $denial
         */
        $denial = $doctrine->getRepository(CustomerSelection::class)
            ->findOneBy(['personalId'=> $clientId]);

        if (empty($denial)){
            throw $this->createNotFoundException('Client with ID - '.$clientId.' not selected a product!');
        }

        $denial->setConfirmed(false);

        $em = $doctrine->getManager();
        $em->persist($denial);
        $em->flush();

        return $this->view(null, Response::HTTP_ACCEPTED);
    }

    /**
     * @param int $clientId
     * @return View
     * @Rest\Patch("/{clientId}/print-form")
     */
    public function printForm(int $clientId): View
    {
        $doctrine = $this->getDoctrine();

        /**
         * @var CustomerSelection $printForm
         */
        $printForm = $doctrine->getRepository(CustomerSelection::class)
            ->findOneBy(['personalId'=> $clientId]);

        if (empty($printForm)){
            throw $this->createNotFoundException('Client with ID - '.$clientId.' not selected a product!');
        }

        if (false === $printForm->getConfirmed()){
            throw $this->createNotFoundException('Client with ID - '.$clientId.' not approved a product!');
        }

        $printForm->setPrintFormStatus(true);

        $em = $doctrine->getManager();
        $em->persist($printForm);
        $em->flush();

        return $this->view($printForm, Response::HTTP_ACCEPTED);

    }
}