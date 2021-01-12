<?php


namespace App\Model;


class CategoryManager
{
    protected $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnects();
    }

    public function getAllCategory()
    {
        $sqlQuery = "SELECT * FROM categorys";
        $stmt = $this->dbConnect->connect()->query($sqlQuery);
        $data = $stmt->fetchAll();
        $category = [];
        foreach ($data as $item) {
            $category[] = new Category($item['category_code'], $item['category_name'], $item['description']);
        }
        return $category;
    }

    public function addCategory($book)
    {
        $category_code = $book->getCategory_code();
        $category_name = $book->getCategory_name();
        $description = $book->getDescription();
        $sqlQuery = "INSERT INTO `categorys`(`category_code`, `category_name`, `description`) VALUES ('1','hóa học 11','sách giáo khoa')";
        $stmt = $this->dbConnect->connect()->prepare($sqlQuery);
        $stmt->execute();
    }
}