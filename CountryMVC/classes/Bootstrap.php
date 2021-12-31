<?php 

    class Bootstrap {
        private $controller;
        private $action;
        private $request;

        public function __construct($request) {
            $this->request = $request;

            if($this->request['controller'] == "") {
                $this->controller = 'home';
            } else {
                $this->controller = $this->request['controller'];
            }
            
            if($this->request['action'] == "") {
                $this->action = 'index';
            } else {
                $this->action = $this->request['action'];
            }   
        }

        public function createController() {
            if(class_exists($this->controller)) {
                $parents = class_parents($this->controller);

                if(in_array("Controller", $parents)) {
                    // Check method exists in class
                    if(method_exists($this->controller, $this->action)) {
                        return new $this->controller($this->action, $this->request);
                    } else {
                        // Method does not exist
                        echo "<h1>Method does not exist</h1>";
                        return;
                    }
                }
                else {
                    // Base controller does not exist
                    echo "<h1>Base controller does not exist</h1>";
                    return;
                }
            }
            else {
                // Controller class does not exist
                echo "<h1>Controller class does not exist</h1>";
                return;
            }
        }

    }

?>