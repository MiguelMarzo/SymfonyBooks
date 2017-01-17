<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BookController extends Controller {

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request) {
        $books = $this->getDoctrine()->getRepository('AppBundle:Book')
                ->findAll();

        return $this->render('books/index.html.twig', array('books' => $books));
    }

    /**
     * Busca libros por nombre.
     * 
     * @Route("/book/search", name="search_books")
     */
    public function searchAction(Request $request) {
        $books = array();
        $searchTerm = $request->get('searchTerm');
        $em = $this->getDoctrine();

        //Si la cadena de búsqueda no está definida o es vacía
        if (!isset($searchTerm) || trim($searchTerm) === '') {
            $books = $em->getRepository('AppBundle:Book')
                    ->findAll();
        } else {
            //Buscar libros cuyo título contenga la cadena de búsqueda
            $books = $em->getRepository("AppBundle:Book")->createQueryBuilder('b')
                            ->where('b.title LIKE :searchTerm')
                            ->setParameter("searchTerm", '%' . $searchTerm . '%')
                            ->getQuery()->getResult();
        }

        return $this->render('book/index.html.twig', array('books' => $books));
    }

    /**
     * Muestra el formulario de creación de libros.
     * 
     * @Route("/book/create", name="create_book")
     */
    public function createAction() {
        return $this->render('books/create.html.twig');
    }

    /**
     * Recibe el nuevo libro a crear y lo persiste en la base de datos.
     * 
     * @Route("/book/new", name="new_book")
     */
    public function newAction(Request $request) {
        $postData = $request->request;

        $book = new Book($postData->get("cover"), $postData->get("title"), $postData->get("author"), $postData->get("price"));
        $em = $this->getDoctrine()->getManager();
        $em->persist($book);
        $em->flush();

        return $this->forward('AppBundle:Book:index');
    }

    /**
     * Borra un libro de la base de datos.
     * 
     * @Route("/book/delete/{id}", name="delete_book")
     */
    public function deleteAction($id) {
        $book = $this->getDoctrine()->getRepository('AppBundle:Book')
                ->find($id);

        if ($book) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($book);
            $em->flush();
            return $this->forward('AppBundle:Book:index');
        }
    }

    /**
     * Muestra el formulario con el detalle del libro para su edición.
     * 
     * @Route("/book/edit/{id}", name="edit_book")
     */
    public function editAction($id) {
        $book = $this->getDoctrine()->getRepository('AppBundle:Book')
                ->find($id);

        if ($book) {
            return $this->render('book/edit.html.twig', array('book' => $book));
        } else {
            return $this->forward('AppBundle:Book:index');
        }
    }

    /**
     * Recibe el libro con sus campos modificados para su actualización.
     * 
     * @Route("/book/update", name="update_book")
     */
    public function updateAction(Request $request) {
        $postData = $request->request;
        $book = $this->getDoctrine()->getRepository('AppBundle:Book')
                ->find($postData->get("id"));

        $book->setCoverUrl($postData->get("cover"));
        $book->setTitle($postData->get("title"));
        $book->setAuthor($postData->get("author"));
        $book->setPrice($postData->get("price"));

        $em = $this->getDoctrine()->getManager();
        $em->merge($book);
        $em->flush();

        return $this->forward('AppBundle:Book:index');
    }

}
