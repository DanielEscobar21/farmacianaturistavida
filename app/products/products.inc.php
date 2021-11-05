<?php
class products
{
    private $code_product;
    private $name_product;
    private $id_category;
    private $id_presentation;
    private $description_product;
    private $image_product;
    private $price_product;

    public function __construct(
        $code_product,
        $name_product,
        $id_category,
        $id_presentation,
        $description_product,
        $image_product,
        $price_product
    ) {
        $this->code_product = $code_product;
        $this->name_product = $name_product;
        $this->id_category = $id_category;
        $this->id_presentation = $id_presentation;
        $this->description_product = $description_product;
        $this->description_product = $description_product;
        $this->image_product = $image_product;
        $this->price_product = $price_product;
    }


    public function getCode_product()
    {
        return $this->code_product;
    }
    public function getName_product()
    {
        return $this->name_product;
    }

    public function getId_category()
    {
        return $this->id_category;
    }

    public function getId_presentation()
    {
        return $this->id_presentation;
    }

    public function getDescription_product()
    {
        return $this->description_product;
    }

    public function getImage_product()
    {
        return $this->image_product;
    }

    public function getPrice_product()
    {
        return $this->price_product;
    }
}
