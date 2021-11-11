<?php
class products
{
    private $code_product;
    private $name_product;
    private $id_category;
    private $id_presentation;
    private $image_product;
    private $price_product;
    private $id_potency;
    private $id_departament;

    public function __construct(
        $code_product,
        $name_product,
        $id_category,
        $id_presentation,
        $image_product,
        $price_product,
        $id_potency,
        $id_departament
    ) {
        $this->code_product = $code_product;
        $this->name_product = $name_product;
        $this->id_category = $id_category;
        $this->id_presentation = $id_presentation;
        $this->image_product = $image_product;
        $this->price_product = $price_product;
        $this->id_potency = $id_potency;
        $this->id_departament = $id_departament;
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

    public function getImage_product()
    {
        return $this->image_product;
    }

    public function getPrice_product()
    {
        return $this->price_product;
    }
    
    public function getId_potency()
    {
        return $this->id_potency;
    }

    public function getId_departament()
    {
        return $this->id_departament;
    }
}
