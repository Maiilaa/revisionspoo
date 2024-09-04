<?php 
    class Product {
        private $id;
        public $name;
        public $photos;
        private $price;
        public $description;
        private $quantity;
        private $createdAt;
        private $updatedAt;

        public function __construct($id, $name, $photos, $price, $description, $quantity, DateTime $createdAt, DateTime $updatedAt) {
            $this->setId($id);
            $this->name = $name;
            $this->photos = $photos;
            $this->setPrice($price);
            $this->description = $description;
            $this->setQuantity($quantity);
            $this->createdAt = $createdAt;
            $this->updatedAt = $updatedAt;
        }


        public function getId() {
            return $this->id;
        }

        public function setId($id) {
            if (is_int($id) && $id > 0) {
                $this->id = $id;
            } else {
                    throw new Exception("L'id doit être un entier positif.");
        }
    }

        public function getPrice() {
            return $this->price;
        }

        // Setter pour $price
        public function setPrice($price) {
            if (is_int($price) && $price > 0) {
                $this->price = $price;
            } else {
                throw new Exception("Le prix doit être un entier positif.");
            }
     }

        // Getter pour $quantity
        public function getQuantity() {
            return $this->quantity;
        }

        // Setter pour $quantity
        public function setQuantity($quantity) {
            if (is_int($quantity) && $quantity >= 0) {
                $this->quantity = $quantity;
            } else {
                throw new Exception("La quantité doit être un entier naturel.");
            }
        }

        // Getter pour $createdAt
        public function getCreatedAt() {
            return $this->createdAt;
        }

        // Setter pour $createdAt
        public function setCreatedAt(DateTime $createdAt) {
            $this->createdAt = $createdAt;
        }

        // Getter pour $updatedAt
        public function getUpdatedAt() {
            return $this->updatedAt;
        }

        // Setter pour $updatedAt
        public function setUpdatedAt(DateTime $updatedAt) {
            $this->updatedAt = $updatedAt;
        }
    }





?>