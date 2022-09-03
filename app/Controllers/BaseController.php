<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];
    protected $context = [];

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        $this->context = [];
    }

    public function reset_context() {
        $this->context = array();
    }

    public function set_context($key, $val) {
        $this->context[$key] = $val;
    }

    public function get_context($key) {
        return $this->context[$key];
    }

    public function renderOnce($name) {
        return view($name, $this->context);
    }

    public function set_user_data() {
        $session = \Config\Services::session();
        $userModel = new \App\Models\UserModel();

        $refresh_token = $session->get("token");
        
        $mtoken_data = $userModel->valid_token($refresh_token);
        if ($mtoken_data) {
            $userData = $userModel->find_all_by_id($mtoken_data['id']);
            $this->set_context('userData', $userData);
        }
    }

    public function set_breadchumb($name, $url, $isactive = false) {
        if (!isset($this->context['breadchumbs'])) {
            $this->set_context('breadchumbs', []);
        }

        $breadchumbs = $this->context['breadchumbs'];
        $breadchumbs[] = [
            'name' => $name,
            'url' => $url,
            'active' => $isactive
        ];
        $this->set_context('breadchumbs', $breadchumbs);
    }

    public function render_error($code) {
        $this->response->setStatusCode(403);
        return $this->renderOnce('errors/' . $code . '.php');
    }
}
