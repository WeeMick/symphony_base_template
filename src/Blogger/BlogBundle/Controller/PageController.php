<?php
namespace Blogger\BlogBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloggerBlogBundle:Page:index.html.twig', array(
            // ...
        ));
    }

    public function aboutAction()
    {
        return $this->render('BloggerBlogBundle:Page:about.html.twig');
    }

    public function helloAction()
    {
        return $this->render('BloggerBlogBundle:Page:hello.html.twig');
    }

    public function numberAction($number)
    {
        return $this->render('BloggerBlogBundle:Page:number.html.twig',
            array('number' => $number));
    }
}
