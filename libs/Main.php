<?php

@session_start();

class Main {
    /* link
     * http://url/Controller/Method/Parameter1/Parameter2/Parameter3/
     */

    private $_url = null;
    private $_controller = null;
    private $_controllerPath = 'controllers/';
    private $_modelPath = 'models/';
    private $_defaultController = 'home';
    private $_errorController = 'error';
    private $_profileController = 'profile';
    private $_profileMethod = 'student';

    public function _init() {
        $this->_getUrl();
        if (empty($this->_url[0])) {
            $this->_loadDefaultController();
            $this->_callControllerMethod();
        } else if ($this->_isRollNumber()) {
            $this->_loadProfileController();
            $this->_callProfileMethod();
        } else {
            $this->_loadExistingController();
            $this->_callControllerMethod();
        }
    }

    private function _getUrl() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        if (!(strtolower($url) == $url)) {
            $url = strtolower($url);
            header('Location:' . URL . $url);
        }
        $this->_url = explode('/', $url);
    }

    private function _loadDefaultController() {
        require($this->_controllerPath . $this->_defaultController . '.php');
        $this->_controller = new $this->_defaultController;
    }

    private function _isRollNumber() {
        if (preg_match('/^([a-z][a-z]\d\d[a-z]\d\d\d)$/i', $this->_url[0])) {
            return 1;
        }
    }

    private function _loadProfileController() {
        if (isset($this->_url[1])) {
            header('Location:' . URL . $this->_url[0]);
        }
        require($this->_controllerPath . $this->_profileController . '.php');
        $this->_controller = new $this->_profileController();
        $this->_controller->loadModel('profile', $this->_modelPath);
    }

    private function _callProfileMethod() {
        $this->_controller->{$this->_profileMethod}($this->_url[0]);
    }

    private function _loadExistingController() {
        $file = $this->_controllerPath . $this->_url[0] . '.php';
        if (file_exists($file)) {
            require($file);
            $this->_controller = new $this->_url[0];
            $this->_controller->loadModel($this->_url[0], $this->_modelPath);
        } else {
            $this->_error(404);
            return FALSE;
        }
    }

    /* link
     * http://url/Controller/Method/Parameter1/Parameter2/Parameter3/
     * $_url[0] = Controller;
     * $_url[1] = Method;
     * $_url[2] = Parameter1;
     * $_url[3] = Parameter2;
     * $_url[4] = Parameter3;
     */

    private function _callControllerMethod() {
        $length = count($this->_url);
        if ($length > 1) {
            if (!method_exists($this->_controller, $this->_url[1])) {
                $this->_error(404);
                return FALSE;
            }
        }
        switch ($length) {
            case 5 :
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
                break;
            case 4 :
                $this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
                break;
            case 3 :
                $this->_controller->{$this->_url[1]}($this->_url[2]);
                break;
            case 2 :
                $this->_controller->{$this->_url[1]}();
                break;
            default :
                $this->_controller->index();
        }
    }

    private function _error($code) {
        require($this->_controllerPath . $this->_errorController . '.php');
        $this->_controller = new $this->_errorController($code);
        exit;
    }

}
