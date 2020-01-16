<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{

// YI KING SHIT
    
    /**
     * @Route("/tirageyiking")
     */
    public function tirage()
    {
        // manque la balise d entree {}
//       for($i=1; i <=6; $i++){
//      '$number'.$i = random_int(0,1);
//
//        '$number.{{i}} = random_int(0,1)';
//        {% endfor %}

        $number1 = random_int(0,1);
        $number2 = random_int(0,1);
        $number3 = random_int(0,1);
        $number4 = random_int(0,1);
        $number5 = random_int(0,1);
        $number6 = random_int(0,1);
        
        $totaljet = ($number6 + $number5 + $number4 + $number3 + $number2 + $number1);
       
       
        return new Response(
            '<html><body>1er trait : '.$number6.'</br>2eme trait : '.$number5.'</br>3eme trait : '.$number4.'</br>4eme trait : '.$number3.'</br>5eme trait : '.$number2.'</br>6eme trait : '.$number1.'</br>Le total du premier jet est donc egal à '.$totaljet);
    }

//HOMEPAGE ROUTE
    
    /**
     * @Route("/")
     */
    public function homepage()
    {

        
        return new Response(
            '<html><body>AVE</body></html>'
            );
    }
//SLUG TEST        
         
//     /**
//     * @Route("/news/{slug}")
//     */

//     public function show($slug)
//     {
        
        
//         return new Response(sprintf(
//             'AVE!NEWS!OLA! %s',
//             $slug
//             ));
//     }

//SLUG TEST

    /**
    * @Route("/demotwig/{slug}")
    */
    
    public function show($slug)
    {
        
        
        return $this->render('article/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
        ]);
    }
}

?>