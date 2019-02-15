<?php

namespace App\Models;

use App\Controllers\AppController;
use Core\AbstractMapper;
use Core\TSingletone;

/**
 * Class ProductsModel
 * @package AppModel\Models
 */
class ProductsModel extends AbstractMapper
{
    use TSingletone;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $brand;

    /**
     * @var string
     */
    protected $alias;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var float
     */
    protected $price;

    /**
     * @var float
     */
    protected $old_price;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var int
     */
    protected $count;

    /**
     * @var int
     */
    protected $id_category;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param $brand
     * @return ProductsModel
     */
    public function setBrand($brand): ProductsModel
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }

    /**
     * @param $alias
     * @return ProductsModel
     */
    public function setAlias($alias): ProductsModel
    {
        $this->alias = $alias;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param $description
     * @return ProductsModel
     */
    public function setDescription($description): ProductsModel
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param $price
     * @return ProductsModel
     */
    public function setPrice($price): ProductsModel
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return float
     */
    public function getOldPrice(): float
    {
        return $this->old_price;
    }

    /**
     * @param $oldPrice
     * @return ProductsModel
     */
    public function setOldPrice($oldPrice): ProductsModel
    {
        $this->old_price = $oldPrice;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param $url
     * @return ProductsModel
     */
    public function setUrl($url): ProductsModel
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }

    /**
     * @param $count
     * @return ProductsModel
     */
    public function setCount($count): ProductsModel
    {
        $this->count = $count;
        return $this;
    }

    /**
     * @return int
     */
    public function getIdCategory(): int
    {
        return $this->id_category;
    }

    /**
     * @param $id_category
     * @return ProductsModel
     */
    public function setIdCategory($id_category): ProductsModel
    {
        $this->id_category = $id_category;
        return $this;
    }

    /**
     * @param $products
     * @return mixed
     */
    public function getImages($products)
    {
        $productsImages = AppController::getInstance()->getProductsImages();
        $images = AppController::getInstance()->getImages();

        foreach ($products as $key => $value) {
            foreach ($productsImages as $productsImage) {
                if ($value['id'] == $productsImage['id_product']) {
                    foreach ($images as $image) {
                        if ($image['id'] == $productsImage['id_galary']) {
                            $products[$key]['file_name'][] = $image['file_name'];
                        }
                    }
                }
            }
        }
        return $products;
    }

    /**
     * @param $product
     * @return mixed
     */
    public function getImage($product)
    {
        $productsImages = AppController::getInstance()->getProductsImages();
        $images = AppController::getInstance()->getImages();
        foreach ($productsImages as $productsImage) {
            if ($product['id'] == $productsImage['id_product']) {
                foreach ($images as $image) {
                    if ($image['id'] == $productsImage['id_galary']) {
                        $product['file_name'][] = $image['file_name'];
                    }
                }
            }
        }

        return $product;
    }

    /**
     * @param $products
     * @return mixed
     */
    public function getCategories($products)
    {
        $categories = AppController::getInstance()->getCategories();

        foreach ($products as $key => $value) {
            foreach ($categories as $category) {
                if ($value['id_category'] == $category['id']) {
                    $products[$key]['category'] = $category['title'];
                    $products[$key]['category_alias'] = $category['alias'];
                }
            }
        }
        return $products;
    }

    /**
     * @param $product
     * @return mixed
     */
    public function getCategory($product)
    {
        $categories = AppController::getInstance()->getCategories();

        foreach ($categories as $category) {
            if ($product['id_category'] == $category['id']) {
                $product['category'] = $category['title'];
                $product['category_alias'] = $category['alias'];
            }
        }
        return $product;
    }

    /**
     * @param $products
     * @return mixed
     */
    public function getKeyWords($products)
    {
        $keyWords = AppController::getInstance()->getKeyWords();
        foreach ($products as $key => $value) {
            foreach ($keyWords as $keyWord) {
                if ($value['id_key_word'] == $keyWord['id']) {
                    $products[$key]['id_key_word'][] = $keyWord['id'];
                    $products[$key]['key_words'][] = $keyWord['name'];
                }
            }
        }
        return $products;
    }

    /**
     * @param $product
     * @return mixed
     */
    public function getKeyWord($product)
    {
        $keyWords = AppController::getInstance()->getKeyWords();
        $productsKeyWords = AppController::getInstance()->getProductsKeyWords();

        foreach ($productsKeyWords as $productsKeyWord) {
            if ($product['id'] == $productsKeyWord['id_product']) {
                foreach ($keyWords as $keyWord) {
                    if ($productsKeyWord['id_key_word'] == $keyWord['id']) {
                        $product['id_key_word'][] = $keyWord['id'];
                        $product['key_words'][] = $keyWord['name'];
                    }
                }
            }
        }
        return $product;
    }
}
