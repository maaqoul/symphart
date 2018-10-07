<?php
/**
 * Created by PhpStorm.
 * User: maaqoul
 * Date: 07/10/2018
 * Time: 18:41
 */
NameSpace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ArticleController extends Controller {
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index() {
        return $this->render();
    }
}