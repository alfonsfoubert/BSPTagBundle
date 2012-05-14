<?php 
namespace BSP\TagBundle\Form\Type;
  
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use BSP\TagBundle\Form\DataTransformer\TagsTransformer;
 
class TagsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->prependClientTransformer(new TagsTransformer());
    }
 
    public function getParent(array $options)
    {
        return 'text';
    }
 
    public function getName()
    {
        return 'tags';
    }
}