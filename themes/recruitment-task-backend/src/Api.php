<?php

namespace RecruitmentTaskBackend;

use RecruitmentTaskBackend\Controller\ModuleController;

class Api
{
    /** @var \WP_REST_Controller[] */
    protected array $controllers = [];

    public function __construct() {
        $this->registerController(new ModuleController());
        $this->registerRoutes();
    }

    /**
     *  @param \WP_REST_Controller $controller
     *  @return void
     */
    protected function registerController(\WP_REST_Controller $controller): void
    {
        $this->controllers[] = $controller;
    }

    /**
     *  @return void
     */
    protected function registerRoutes(): void
    {
        add_action('rest_api_init', function () {
            foreach ($this->controllers as $controller) {
                $controller->register_routes();
            }
        });
    }
}