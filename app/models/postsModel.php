<?php
/* 
  ./app/models/postsModel.php
*/

namespace App\Models\PostsModel;


/**
 * findOne post by ID
 *
 * @param \PDO $conn
 * @param integer $id
 * @return array
 */
function findOne(\PDO $conn, int $id) :array {
  $sql = 'SELECT *
          FROM posts
          WHERE id = :id;';
  $rs = $conn->prepare($sql);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}


/**
 * findAll posts
 *
 * @param \PDO $conn
 * @return array
 */
function findAll(\PDO $conn, int $limit = 10, int $offset = 0) :array {
  $sql = 'SELECT *
          FROM posts
          ORDER BY datePublication DESC
          LIMIT :limit
          OFFSET :offset;';
  $rs = $conn->prepare($sql);
  $rs->bindValue(':limit', $limit, \PDO::PARAM_INT);
  $rs->bindValue(':offset', $offset, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}


/**
 * updateOne field of post by ID
 *
 * @param \PDO $conn
 * @param integer $id
 * @param string $field
 * @param string $data
 * @return void
 */
function updateOne(\PDO $conn, int $id, string $field, string $data) {
  $sql = "UPDATE posts
          SET $field = :data
          WHERE id = :id;";
  
  $rs = $conn->prepare($sql);
  $rs->bindValue(':data', $data, \PDO::PARAM_STR);
  $rs->bindValue(':id', $id, \PDO::PARAM_INT);
  $rs->execute();       
}