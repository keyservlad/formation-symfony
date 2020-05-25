<?php

namespace App\Controller;

use App\Service\Stats;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_dashboard")
     */
    public function index(EntityManagerInterface $manager, Stats $stats)
    {
        $statistiques = $stats->getStats();
        $bestAds = $stats->getAdsStats('DESC');
        $worstAds = $stats->getAdsStats('ASC');


        return $this->render('admin/dashboard/index.html.twig', [
            'stats' => $statistiques,
            'bestAds' => $bestAds,
            'worstAds' => $worstAds
        ]);
    }
}
