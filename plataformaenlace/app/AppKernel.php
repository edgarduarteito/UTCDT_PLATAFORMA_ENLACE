<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel {

    public function registerBundles() {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new ItoSoftware\Base\AdminBundle\ItoAdminBundle(),
            new ItoSoftware\Base\ModelBundle\ItoModelBundle(),
            new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new SamJ\DoctrineSluggableBundle\SamJDoctrineSluggableBundle(),
            //BUNDLES DE SONATA PARA ADMIN GENERATOR
            new Sonata\CoreBundle\SonataCoreBundle(),
            new Sonata\BlockBundle\SonataBlockBundle(),
            new Sonata\AdminBundle\SonataAdminBundle(),
            new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            //BUNDLES PARA GESTIONAR USUARIOS
            new FOS\UserBundle\FOSUserBundle(),
            new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
            new Sonata\UserBundle\SonataUserBundle('FOSUserBundle'),
            new ItoSoftware\Base\UserBundle\ItoUserBundle(),
            new WebApp\AdminBundle\WebAppAdminBundle(),
            new WebApp\ModeloBundle\WebAppModeloBundle(),
            new ItoSoftware\Base\ToolBundle\ItoToolBundle(),
            //Bundle de aplicación
            new WebApp\FrontendBundle\WebAppFrontendBundle(),
            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle($this),
            new WebApp\ApiBundle\WebAppApiBundle(),
            //Bundle de mapa de google
            new Ivory\GoogleMapBundle\IvoryGoogleMapBundle(),
            //Filtro de formulario
            new Lexik\Bundle\FormFilterBundle\LexikFormFilterBundle(),
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
            new Genemu\Bundle\FormBundle\GenemuFormBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader) {
        $loader->load(__DIR__ . '/config/config_' . $this->getEnvironment() . '.yml');
    }

}
