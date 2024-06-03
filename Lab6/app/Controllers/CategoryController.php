<?php
namespace app\Controllers;

use app\Models\Category;
use PDO;

class CategoryController {
    private Category $categoryModel;
    private PDO $db;

    public function __construct(PDO $pdo) {
        $this->categoryModel = new Category();
        $this->db = $pdo;
    }

    public function getAllCategories($userId):array {
        return $this->categoryModel->getAll($userId);
    }

    public function addCategory($name, $type, $color, $userId) {
        return $this->categoryModel->addCategory($name, $type, $color, $userId);
    }

    public function deleteCategory($categoryId, $userId) {
        return $this->categoryModel->deleteCategory($categoryId, $userId);
    }

    public function handleCategoryForm() : void{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $categoryName = $_POST["category_name"];
            $categoryType = $_POST["category_type"];
            $categoryColor = $_POST["category_color"];
            $userId = $_SESSION['user_id']; // Припускається, що ми маємо user_id у сесії
            $this->addCategory($categoryName, $categoryType, $categoryColor, $userId);
        }

        if (isset($_GET["delete_category"])) {
            $categoryId = $_GET["delete_category"];
            $userId = $_SESSION['user_id']; // Припускається, що ми маємо user_id у сесії
            $this->deleteCategory($categoryId, $userId);
        }
    }
}
