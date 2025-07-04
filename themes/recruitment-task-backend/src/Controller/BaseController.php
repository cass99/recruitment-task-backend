<?php

namespace RecruitmentTaskBackend\Controller;

class BaseController extends \WP_REST_Controller
{
    public function __construct()
    {
        $this->namespace = 'api/v1';
    }

    /**
     *  @param mixed $data
     *  @param int $status the HTTP status code
     *  @return \WP_Error|\WP_HTTP_Response|\WP_REST_Response
     */
    protected function success(mixed $data = [], int $status = 200) : \WP_Error|\WP_HTTP_Response|\WP_REST_Response
    {
        return rest_ensure_response(new \WP_REST_Response($data, $status));
    }

    /**
     *  @param mixed $errorMessage
     *  @param int $status the HTTP status code
     *  @param array $errors associative array of key => description
     *  @return \WP_Error|\WP_HTTP_Response|\WP_REST_Response
     */
    protected function error(mixed $errorMessage, int $status = 400, array $errors = []) : \WP_Error|\WP_HTTP_Response|\WP_REST_Response
    {
        $result = [
            'error' => [
                'code'    => $status,
                'message' => $errorMessage,
            ],
        ];

        return rest_ensure_response(new \WP_REST_Response($result, $status));
    }
}
