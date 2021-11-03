<?php
class products
{
    private $id_product;
    private $code_product;
    private $name_product;
    private $id_category;
    private $id_presentation;
    private $description_product;
    private $image_product;
    private $price_product;
    private $modificated_date;
    private $created_date;

    public function __construct(
        $id_product,
        $code_product,
        $name_product,
        $id_category,
        $id_presentation,
        $description_product,
        $image_product,
        $price_product,
        $modificated_date,
        $created_date
    ) {
        $this->id_product = $id_product;
        $this->code_product = $code_product;
        $this->name_product = $name_product;
        $this->id_category = $id_category;
        $this->id_presentation = $id_presentation;
        $this->description_product = $description_product;
        $this->description_product = $description_product;
        $this->image_product = $image_product;
        $this->price_product = $price_product;
        $this->modificated_date = $modificated_date;
        $this->created_date = $created_date;
    }

    public function getId_product()
    {
        return $this->id_product;
    }

    public function setId_product($id_product)
    {
        $this->id_product = $id_product;

        return $this;
    }

    public function getCode_product()
    {
        return $this->code_product;
    }

    public function setCode_product($code_product)
    {
        $this->code_product = $code_product;

        return $this;
    }

    public function getName_product()
    {
        return $this->name_product;
    }

    public function setName_product($name_product)
    {
        $this->name_product = $name_product;

        return $this;
    }

    public function getId_category()
    {
        return $this->id_category;
    }

    public function setId_category($id_category)
    {
        $this->id_category = $id_category;

        return $this;
    }

    public function getId_presentation()
    {
        return $this->id_presentation;
    }

    public function setId_presentation($id_presentation)
    {
        $this->id_presentation = $id_presentation;

        return $this;
    }

    public function getDescription_product()
    {
        return $this->description_product;
    }

    public function setDescription_product($description_product)
    {
        $this->description_product = $description_product;

        return $this;
    }

    public function getImage_product()
    {
        return $this->image_product;
    }

    public function setImage_product($image_product)
    {
        $this->image_product = $image_product;

        return $this;
    }

    public function getPrice_product()
    {
        return $this->price_product;
    }

    public function setPrice_product($price_product)
    {
        $this->price_product = $price_product;

        return $this;
    }

    public function getModificated_date()
    {
        return $this->modificated_date;
    }

    public function setModificated_date($modificated_date)
    {
        $this->modificated_date = $modificated_date;

        return $this;
    }

    public function getCreated_date()
    {
        return $this->created_date;
    }

    public function setCreated_date($created_date)
    {
        $this->created_date = $created_date;

        return $this;
    }
}
