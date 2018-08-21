<?php
namespace Us\Crawler\Storage;

interface StorageInterface
{

    /**
     * Insert List
     */
    public function insertList($array, $board_name);

    /**
     * Insert Article
     */
    public function insertArticle($array, $board_name);

    public function insertComments($article_id, $article_time, $comment_array);

    public function getArticleByArticleId($article_id);
}
