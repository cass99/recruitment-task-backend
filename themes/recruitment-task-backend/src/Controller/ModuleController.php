<?php

namespace RecruitmentTaskBackend\Controller;

use RecruitmentTaskBackend\Helper\IconHelper;

class ModuleController extends BaseController
{
    /**
     *  @param \WP_REST_Request $request
     *  @return \WP_Error|\WP_HTTP_Response|\WP_REST_Response
     */
    public function getModule(\WP_REST_Request $request): \WP_Error|\WP_HTTP_Response|\WP_REST_Response
    {
        $moduleData = [
            'header' => 'Headline',
            'subheader' => 'Lorem ipsum dolor sit amet',
            'module' => [
                [
                    'icon' => IconHelper::get('HeadCircuit'),
                    'title' => '200',
                    'text' => 'Lorem ipsum dolor sit amet',
                ],
                [
                    'icon' => IconHelper::get('UsersThree'),
                    'title' => '120',
                    'text' => 'Lorem ipsum dolor sit amet',
                ],
                [
                    'icon' => IconHelper::get('Star'),
                    'title' => '10',
                    'text' => 'Lorem ipsum dolor sit amet',
                ],
            ]
        ];

        return $this->success($moduleData);
    }

    /**
     *  @return void
     */
    public function register_routes(): void
    {
        register_rest_route($this->namespace, '/module', [
            'methods'             => 'GET',
            'callback'            => [$this, 'getModule'],
        ]);
    }
}
