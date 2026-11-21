<?php
require_once __DIR__ . '/includes/init.php';

header('Content-Type: application/json; charset=utf-8');

$page = isset($_POST['page']) ? (int) $_POST['page'] : 1;

$options['category_id'] = (isset($_POST['category_id']) ? $_POST['category_id'] : 0);

$options['search_keyword'] = (isset($_POST['search_keyword']) ? $_POST['search_keyword'] : '');

$fetchArticleList = fetchArticleList($page, $options);

echo json_encode(
    $fetchArticleList
);
?>