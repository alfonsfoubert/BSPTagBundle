<?php
namespace BSP\TagBundle\Extension\Twig;

class TagSplitExtension extends \Twig_Extension
{

    public function getFilters()
    {
        return array(
            'tag_split'	=> new \Twig_Filter_Method( $this, 'tagSplit' ),
        );
    }

    public function tagSplit( $string, $delimiter )
    {
    	return explode( $delimiter, $string );
    }
    
    
    public function getName()
    {
        return 'tag_split_extension';
    }

}
