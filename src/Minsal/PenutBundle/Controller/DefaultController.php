<?php

namespace Minsal\PenutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
     /**
     * @Route("/consulta/{coddep}")
     * @Template("MinsalPenutBundle:Default:consulta.html.twig")
     */
    public function consultaAction($coddep)
    {
        $em = $this->getDoctrine()->getManager();

        $q = $em->createQuery("select a.id,a.nombreDepartamento,a.director,b.nombreEmpleado,b.categoria,"
                . "b.dedicacion from Minsal\PenutBundle\Entity\Departamento a,"
                . "Minsal\PenutBundle\Entity\Empleado b where a.codigo='$coddep' and b.idDepartamento=a.id");
        $entities = $q->getResult();

        return array('entities' => $entities,);
    }
}
