<?php

namespace App\Services;


use App\Models\Article;
use App\Models\Collections\ArticlesCollection;
use Carbon\Carbon;
use jcobhams\NewsApi\NewsApi;


class IndexArticleService
{
    private NewsApi $api;

    public function __construct()
    {

        $this->api = new NewsApi('bf0fd39e04b94ed08c3f5e3551b1451d');

//        $this->api = new NewsApi($dotenv->load()["SECRET_KEY"]);
    }


    public function execute(string $search, ?string $category = null): ArticlesCollection
    {


        $articlesApiResponse = $this->getArticles($search, $category);

        $articles = new ArticlesCollection();
        foreach ($articlesApiResponse->articles as $article) {
            $articles->add(new Article(
                $article->title,
                $article->url,
                $article->description,
                Carbon::createFromDate($article->publishedAt)->format('d/m/y h:i'),
                $article->urlToImage
            ));
        }

        return $articles;
    }


    private function getArticles(string $search, $category)
    {

        if (!$category) {
            return $this->api->getEverything($search);
        }

        return $this->api->getTopHeadLines($category);
    }


}
