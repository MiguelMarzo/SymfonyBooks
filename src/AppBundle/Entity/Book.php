<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Represents a book.
 *
 * @author Eugenia Pérez <info@eugeniaperez.es>
 * 
 *  * @ORM\Entity
 */
class Book {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")     
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $coverUrl;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $author;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    private $price;
    
    function getId() {
        return $this->id;
    }

    function getCoverUrl() {
        return $this->coverUrl;
    }

    function getTitle() {
        return $this->title;
    }

    function getAuthor() {
        return $this->author;
    }

    function getPrice() {
        return $this->price;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCoverUrl($coverUrl) {
        $this->coverUrl = $coverUrl;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setAuthor($author) {
        $this->author = $author;
    }

    function setPrice($price) {
        $this->price = $price;
    }


}
?>