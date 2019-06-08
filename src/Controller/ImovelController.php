<?php


namespace App\Controller;


use App\Entity\Imovel;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class ImovelController extends AbstractController
{

    public function index()
    {

        return $this->render("imovel.html.twig");
    }

    /**
     * @Route("imovel/cadastro", name="imovel_cadatro")
     * @param Request $request
     */
    public function cadastroImovel(Request $request)
    {
        $imovel = new Imovel();
        $imovel->setStatus("nome");
        $imovel->setCaracteristicas("caracteristicas");
        $imovel->setObservacao("observacao");
        $imovel->setDtCadastro("10/10/2000");

        $em = $this->getDoctrine()->getManager();
        $em->persist($imovel);
        $em->flush();
    }
}