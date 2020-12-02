<?php


namespace App\Controller;
//Response : allows to return a reply to the user (HTTP)
use Symfony\Component\HttpFoundation\Response;
//Instead of defining your route in YAML, Symfony also allows you to use annotation routes.
use Symfony\Component\Routing\Annotation\Route;



//Controller
class LuckyController
{
    /**
     * @Route("/lucky/number")
     */

    //When the class is loaded, it executes this function
    public function number(): Response
    {
        //Generate random int
        $number = random_int(0,100);
        
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}