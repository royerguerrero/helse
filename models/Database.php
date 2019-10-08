<?php

    class Database {
        public function connect(){
            try {
              return new PDO('mysql:host=localhost;dbname=helse;charset=utf8;',
                'root',
                '',[
                    //manejo de errores
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
                ]);
            } catch (Exception $e) {
                die($e->getMessage());
            }
          }
    }