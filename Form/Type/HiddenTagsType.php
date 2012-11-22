<?php
namespace BSP\TagBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use BSP\TagBundle\Form\DataTransformer\TagsTransformer;

class HiddenTagsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->prependClientTransformer(new TagsTransformer());
    }

    public function getParent()
    {
        return 'hidden';
    }

    public function getName()
    {
        return 'hidden_tags';
    }
}
