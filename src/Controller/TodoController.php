<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;

use function PHPSTORM_META\type;

class TodoController extends AbstractController
{
    #[Route('/todo', name: 'app_todo')]
    public function index(Request $request): Response
    {     
        $session = $request->getSession();
        //Afficher  notre tableau  de todo
        // sinon je l'initialise uis j'affiche
        if(!$session->has(name:'todos')){
            $todos = [
                'achat' => 'acheter clé USD' ,
                'cours' => 'Finaliser mon cours' ,
                'correction' => 'corriger mes examens' 
            ];
            $session->set('todos',$todos);
         $this->$this->addFlash( type:'info', message:"La liste des todos viens d'etre initialisée");
        }
        //si jai mon tableau de todo dans ma session je  ne fait que l'afficher
        
        return $this->render('todo/index.html.twig');
    }
    #[Route('/todo/{name}/{content}')]
    public function addTodo(Request $request, $name,$content){

        $session = $request->getSession();
                // Vérifier si j'ai mon tableau de todo dans la session
        if($session->has(name:'todos') ){

            // si oui 
            // verifier si on n'a deja un todo avec le meme name 
            $todos = $session->get(name:'todos');
            if(isset($todos[$name])){
                
            } 
            // si oui afficher l'erreur 
             // si non on l'ajout et on affiche un message ed succes
    } else{
        // si non 
        // afficher une erreur et on va rediriger vers le controlleur index
        $this->$this->addFlash( type:'error', message:"La liste des todos viens n'est pas encore initialisée");
    }
      return $this->redirectToRoute(route:'todo');
    }
}
