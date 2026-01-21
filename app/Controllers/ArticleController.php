<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use PDO;

class ArticleController extends Controller
{
    public function show()
    {
        $db = Database::getInstance();

        $sql = "        
            SELECT 
                a.id AS article_id,
                a.titre AS article_titre,
                a.content,
                a.date_creation,
                c.titre AS category_titre
            FROM articles a
            LEFT JOIN article_categories ac ON a.id = ac.id_article
            LEFT JOIN categories c ON ac.id_categorie = c.id
            ORDER BY a.date_creation DESC
        ";

        $stmt = $db->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $articles = [];

        foreach ($rows as $row) {
            $id = $row['article_id'];

            if (!isset($articles[$id])) {
                $articles[$id] = [
                    'id' => $id,
                    'titre' => $row['article_titre'],
                    'content' => $row['content'],
                    'date_creation' => $row['date_creation'],
                    'categories' => []
                ];
            }

            if (!empty($row['category_titre'])) {
                $articles[$id]['categories'][] = $row['category_titre'];
            }
        }

        return $articles ;
    }
}
