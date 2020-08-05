<?php
// module/App/src/Model/AlbumModel.php

namespace App\Repository;

use App\Entity\Album;

class AlbumRepository
{
    
    private $data = [
        1 => [
            'id'    => 10,
            'title' => 'Hello World #1',
            'artist'  => 'This is our first blog post!',
        ],
        2 => [
            'id'    => 20,
            'title' => 'Hello World #2',
            'artist'  => 'This is our second blog post!',
        ],
        3 => [
            'id'    => 30,
            'title' => 'Hello World #3',
            'artist'  => 'This is our third blog post!',
        ],
        4 => [
            'id'    => 40,
            'title' => 'Hello World #4',
            'artist'  => 'This is our fourth blog post!',
        ],
        5 => [
            'id'    => 50,
            'title' => 'Hello World #5',
            'artist'  => 'This is our fifth blog post!',
        ],
    ];

    /* ********************************************************************** */
    
    /**
     * POPULATE ENTITY
     * @param array $row
     * @return object
     */
    public function populateEntity(array $row)
    {
        $album = new Album();
        foreach($row as $key=>$val):
            $method = 'set'.\ucfirst($key);
            if(\method_exists($album, $method)):
                $album->$method($val);
            endif;
        endforeach;
        return $album;
    }

    /**
     * POPULATE ENTITIES
     * @param array $rows
     * @return array
     */
    public function populateEntities(array $rows)
    {
        $entities = [];
        foreach($rows as $row):
            $entities[] = $this->populateEntity($row);
        endforeach;
        return $entities;
    }

    /* ********************************************************************** */

    /**
     * {@inheritDoc}
     */
    public function findAll()
    {
        $datas = $this->populateEntities($this->data);
        return $datas;
//        return $this->data;
    }


}