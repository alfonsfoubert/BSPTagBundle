<?php
// StoreBundle/Extension/StoreTwigExtension.php
namespace BSP\TagBundle\Extension;

class TagTwigExtension extends \Twig_Extension
{

    public function getFilters()
    {
        return array(
            'tagSplit'	=> new \Twig_Filter_Function('explode'),
        );
    }

    public function getName()
    {
        return 'Tag_twig_extension';
    }

}
