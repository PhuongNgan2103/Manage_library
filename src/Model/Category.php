<?php


namespace App\Model;


class Category
{
    protected $category_code;
    protected $category_name;
    protected $description;

    /**
     * Category constructor.
     * @param $category_code
     * @param $category_name
     * @param $description
     */
    public function __construct($category_code, $category_name, $description)
    {
        $this->category_code = $category_code;
        $this->category_name = $category_name;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getCategoryCode()
    {
        return $this->category_code;
    }

    /**
     * @param mixed $category_code
     */
    public function setCategoryCode($category_code)
    {
        $this->category_code = $category_code;
    }

    /**
     * @return mixed
     */
    public function getCategoryName()
    {
        return $this->category_name;
    }

    /**
     * @param mixed $category_name
     */
    public function setCategoryName($category_name)
    {
        $this->category_name = $category_name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}