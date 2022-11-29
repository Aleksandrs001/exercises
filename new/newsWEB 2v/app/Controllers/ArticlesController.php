<?php

namespace App\Controllers;

use App\Services\IndexArticleService;
use App\Template;

class ArticlesController

{
    public function index(): Template
    {
        $search = $_GET['search'] ?? 'tesla';
        $category = $_GET['category'] ?? null;

      $articles = (new IndexArticleService())->execute($search,$category);

        return new Template('articles/index.twig',
            [
                'articles' => $articles->get(),
                'searchValue'=>$search
            ]
        );
    }
}