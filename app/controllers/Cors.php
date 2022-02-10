<?php
    class Core {
        protected $currentController = 'Pages';
        protected $currentMethod = 'Index';
        protected $params = [];

        public function __construct()
        {
            
        }

        public function getUrl() {
            if(isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/');
                // flitre l'url des character spécial
                $url = filter_var($url, FILTER_SANITIZE_URL);
                // creer une array
                $url = explode('/', $url);
                return $url;
            }
        }
    }