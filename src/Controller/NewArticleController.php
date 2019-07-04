<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use App\Entity\Articles;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NewArticleController extends AbstractController {

  public function index() {

    $request = Request::createFromGlobals();

    // if it's request for creating an article ...
    if ($request->request->get('article-contents') != '') {
      $this->createArticle($request->request->get('article-contents'), $request->request->get('article-title'));
      return $this->redirect('/');

    // if it's not a request for creating an article, return the default page
    } else {
      return $this->render("addArticle.html");
    }
  }

  public function createArticle($contents, $title) {

    $entityManager = $this->getDoctrine()->getManager();

    $article = new Articles();
    $article->setAuthor('Виктор Федоров');
    $article->setArticleTitle($title);
    $article->setArticleContents($contents);

    // saving the article (no queries yet)
    $entityManager->persist($article);

    // actually executes the queries (i.e. the INSERT query)
    $entityManager->flush();
  }

}

?>
