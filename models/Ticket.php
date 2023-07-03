<?php

    namespace Model;

    use Model\ActiveRecord;

    class Ticket extends ActiveRecord {
        protected static $table = "tickets";
        protected static $dbColumns = ["id", "name", "surname", "email", "quantity", "category"];
        
        public $id;
        public $name;
        public $surname;
        public $email;
        public $quantity;
        public $category;
        
        public function __construct($args = []) {
            $this->id = $args["id"] ?? null;
            $this->name = $args["name"] ?? "";
            $this->surname = $args["surname"] ?? "";
            $this->email = $args["email"] ?? "";
            $this->quantity = $args["quantity"] ?? "";
            $this->category = $args["category"] ?? "";
        }
    }