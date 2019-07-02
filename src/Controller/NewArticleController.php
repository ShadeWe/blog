<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewArticleController extends AbstractController {

  public function newarticle() {


    return $this->render("addArticle.html");
  }

}

?>
