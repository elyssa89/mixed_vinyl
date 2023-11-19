<?php
##App pointe to src directoy on peut metre el controlleur dans n'imooret quel aurre dssier
##mais il faut que le namespace est adéquat au namespace ca commence par APP apres le dossier name 
### the name of the file must match the class nmae .php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class vinylController extends AbstractController
{
    #[Route(path:"/", name:"homepage")]
    public function homepage(){
        return new Response("helooo again ");
    }
    #[Route(path:"/news/{slug}", name:"")]
    public function browse(string $slug = null ) :Response{
        $comments = [
            "first"=> "firstComment",
            "second" => "second comment",
            "third" => "third comment",

        ];
        return $this->render("articles/show.html.twig", ['title'=> $slug,'comments'=> $comments]);
    }
}
