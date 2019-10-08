  
<?php
  class Home extends Database{
      public static function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM post INNER JOIN users ON post.id_user = users.id_user");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
      }
      public function find($id){
          try{
              $result = parent::connect()->prepare("SELECT * FROM post WHERE id_post     = ?");
              $result->bindParam(1, $id, PDO::PARAM_INT);
              $result->execute();
              return $result->fetch();
          }catch(Exception $e){
              die($e->getMessage());
          }
      }
      public function create($data){
          try{
              $result = parent::connect()->prepare("INSERT INTO post (title, description, url, id_user) VALUES (?,?,?,?)");
              $result->bindParam(1, $data['title'], PDO::PARAM_STR);
              $result->bindParam(2, $data['description'], PDO::PARAM_STR);
              $result->bindParam(3, $data['img-post'], PDO::PARAM_STR);
              $result->bindParam(4, $_SESSION['user']->id_user, PDO::PARAM_INT);
              return $result->execute();
          }catch (Exception $e){
              die("Error User->register() " . $e->getMessage());
          }
      }
      public function update($data){
          try{
              if(isset($data['img-post']) && $data['img-post']  != ""){
                  $result = parent::connect()->prepare("UPDATE post SET title = ?, description = ?, url = ?  WHERE id_post = ?");
                  $result->bindParam(1, $data['title'], PDO::PARAM_STR);
                  $result->bindParam(2, $data['description'], PDO::PARAM_STR);
                  $result->bindParam(3, $data['img-post'], PDO::PARAM_STR);
                  $result->bindParam(4, $data['id_post'], PDO::PARAM_INT);
                  return $result->execute();
              }else{
                  $result = parent::connect()->prepare("UPDATE post SET title = ?, description = ?  WHERE id_post = ?");
                  $result->bindParam(1, $data['title'], PDO::PARAM_STR);
                  $result->bindParam(2, $data['description'], PDO::PARAM_STR);
                  $result->bindParam(3, $data['id_post'], PDO::PARAM_INT);
                  return $result->execute();
              }
          }catch (Exception $e){
              die("Error User->update_register() " . $e->getMessage());
          }
      }
      public function delete_post($id)
      {
          try{
              $result = parent::connect()->prepare("DELETE FROM post WHERE id_post = ?");
              $result->bindParam(1,$id, PDO::PARAM_STR);
              return $result->execute();
          }catch (Exception $e){
              die("Error User->update_register() " . $e->getMessage());
          }
      }
  }
