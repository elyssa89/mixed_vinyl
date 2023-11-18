<?php
##App pointe to src directoy on peut metre el controlleur dans n'imooret quel aurre dssier
##mais il faut que le namespace est adéquat au namespace ca commence par APP apres le dossier name 
### the name of the file must match the class nmae .php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class vinylController
{
    #[Route(path:"/", name:"homepage")]
    public function homepage(){
        return new Response("helooo again ");
    }
    #[Route(path:"/browse/{slug}", name:"")]
    public function browse(string $slug = null ): Response{
        $title = str_replace("-"," ",$slug);
        return new Response('Genre: '.$title);
    }
}
