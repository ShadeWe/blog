<?php


namespace App\Controller;

use App\Entity\Articles;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function mainpage()
    {
        $data = $this->getArticlesFromDB();
        if ($data == 0) {
          return $this->render('blog.html.twig');
        } else {
          return $this->render('blog.html.twig', [ 'articles' => $data ]);
        }
    }

    public function getArticlesFromDB() {

      $article = $this->getDoctrine()->getRepository(Articles::class)->findAll();

      if (!$article) {
        return 0;
      }

      $count = sizeof($article);

      $data;

      for ($i = 0; $i < $count; $i++) {
        $data[$i] = [
          'author' => $article[$i]->getAuthor(),
          'article_title' => $article[$i]->getArticleTitle(),
          'article_contents' => $article[$i]->getArticleContents()
        ];
      }

      return $data;


    }
}
