<?php

namespace Geraldib\PortfolioSite\Controller;

use Geraldib\PortfolioSite\Domain\Repository\ProjectRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class ProjectController
 *
 * @package MyVendor\Project\Controller
 */
class ProjectController extends ActionController
{

    /**
     * @var ProductRepository
     */
    private $projectRepository;

    /**
     * Inject the project repository
     *
     * @param Geraldib\PortfolioSite\Domain\Repository\ProjectRepository $projectRepository
     */
    public function injectProjectRepository(ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * list Action
     *
     * @return void
     */
    public function listAction()
    {
        $projecs = $this->projectRepository->findAll();
        $this->view->assign('projects', $projecs);
    }
}
