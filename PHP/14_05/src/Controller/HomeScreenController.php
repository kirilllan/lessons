<?php


namespace App\Controller;


use App\Entity\Recipe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeScreenController extends AbstractController
{
  /**
   * @Route("/home", name="home_screen", methods={"DELETE"})
   */
  public function index(Request $request): Response{
    return $this->json([
      'message'=>$request->query->get('page'),
    ]);
  }

  /**
  * @Route("/recipe/{id}", name="get_a_recipe", methods={"GET"})
   */
  /*public function recipe($id, Request $request){
    return $this->json([
      'message' => 'Requesting recipe with id ' . $id,
      'page' => $request->query->get('page')
    ]);
  }*/

  /**
  * @Route("/recipe", name="add_new_recipe")
   */
  public function addRecipe(){
    $entityManager = $this->getDoctrine()->getManager();
    $newRecipe = new Recipe();
    $newRecipe->setName('Potatos');
    $newRecipe->setIngredients('potatos, water');
    $newRecipe->setDifficulty('meh');
    $newRecipe1 = new Recipe();
    $newRecipe1->setName('mashedPotatos');
    $newRecipe1->setIngredients('potatos, water');
    $newRecipe1->setDifficulty('meh');
    $entityManager->persist($newRecipe);
    $entityManager->persist($newRecipe1);
    $entityManager->flush();
    return new Response('trying to add a new recipe...')
      . $newRecipe->getId();
  }

  /**
  * @Route("recipe/all", name="get_all_recipe")
   */
  public function getAllRecipe(){
    $recipes = $this->getDoctrine()
      ->getRepository(Recipe::class)->findAll();
    $response = [];
    foreach($recipes as $recipe){
      $response[] = array(
        'name'=>$recipe->getName(),
        'ingredients'=>$recipe->getIngredients(),
        'difficulty'=>$recipe->getDifficulty()
      );
    }
    return $this->json($response);
  }

   /**
  * @Route("", name="get_all_recipes", methods={"GET"})
   */
  /*public function getAllRecipes() {
    $rootPath = $this->getParameter('kernel.project_dir');
    $recipes = file_get_contents($rootPath.'resources/recipes.json');
    $decodedRecipes = json_decode($recipes, true);
    return $this->json($decodedRecipes);
  }*/
}

