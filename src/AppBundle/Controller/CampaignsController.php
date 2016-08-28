<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CampaignsController extends Controller
{
    /**
     * @Route("/campaigns/{campaignId}")
     * @param $campaignId
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction($campaignId)
    {
        $item = $this->dummyItem($campaignId);
        $mdText = "Hello *World*";
        $this->get('markdown.parser')
            ->transform($mdText);
        return $this->render('campaigns/show.html.twig',
            $item
        );
    }

    /**
     * @Route("/campaigns")
     */
    public function indexAction()
    {
        //http://nosp.da.naver.com/center/sales/campaign/list
        return $this->render('campaigns/index.html.twig',
            [
                '',
            ]
        );
    }

    /**
     * @param $campaignId
     * @return array
     */
    private function dummyItem($campaignId)
    {
        return [
            'id' => $campaignId,
            'name' => 'firstName',
            'address' => 'a b c d',
            'text' => 'random text is ' . rand(10000, 99999),
        ];
    }

    /**
     * @Route("/api/campaigns")
     */
    public function jsonIndexAction()
    {
        $dummies = $this->dummies();
        return new JsonResponse(['campaigns' => $dummies]);

    }

    /**
     * @return array
     */
    public function dummies()
    {
        return [
            $this->dummyItem(rand(1, 9999)),
            $this->dummyItem(rand(1, 9999)),
            $this->dummyItem(rand(1, 9999)),
            $this->dummyItem(rand(1, 9999)),
            $this->dummyItem(rand(1, 9999)),
        ];
    }
}
