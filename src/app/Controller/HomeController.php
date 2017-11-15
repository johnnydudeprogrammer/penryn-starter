<?php

namespace App\Controller;

use \Engine\Controller\Controller;

class HomeController extends Controller {

    public function show () {

        /*------------------------------------
            MESSAGE
        ------------------------------------*/

        $this->data->msg = 'Home';

        /*------------------------------------
            HEAD
        ------------------------------------*/

        // SEO
        $this->head['title'] = 'Home';
        $this->head['description'] = '';
        $this->head['keywords'] = '';
        $this->head['opengraph'] = '/static/media/fav/open-graph/1200-630.png';

        // Robots
        $this->head['allow-robots'] = true;

        /*------------------------------------
            RENDER
        ------------------------------------*/

        $this->render('home');
    }

}
