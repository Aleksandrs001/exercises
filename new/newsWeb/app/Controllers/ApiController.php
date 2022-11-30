<?php

namespace App\Controllers;

use App\Models\Article;
use jcobhams\NewsApi\NewsApi;
use jcobhams\NewsApi\NewsApiException;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

class ApiController

{
    public array $articles;
    public array $safe;


    public function __construct($method, $dotenv)
    {
        $newsApi = new NewsApi($dotenv->load()["SECRET_KEY"]);
        $articlesApiResponse = $newsApi->getEverything($method);

        $articles = [];
        foreach ($articlesApiResponse->articles as $article) {
            $articles [] = new Article(
                $article->title,
                $article->url,
                $article->description,
                $article->urlToImage
            );
            $this->articles = $articles;

        }
        return $this->getArticles($articles);
    }

    /**
     * @throws SyntaxError
     * @throws RuntimeError
     * @throws LoaderError
     */
    public function getArticles($articles)
    {

        $loader = new FilesystemLoader('views');
        $twig = new Environment($loader);
        $plusTen = "10<<prew";
        $minusTen = "next>>10";

        echo $twig->render('index.html.twig.php', ['article' => $articles, 'plusTen' => $plusTen, 'minusTen' => $minusTen]);
        return $this->articles;
    }
}