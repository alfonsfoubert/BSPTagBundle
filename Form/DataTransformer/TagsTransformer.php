<?php
namespace BSP\TagBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class TagsTransformer implements DataTransformerInterface
{
    /**
      * Transforms the Document's value to a value for the form field
      */
    public function transform($tags)
    {
        if (!$tags) {
            $tags = array(); // default value
        }

        return implode(', ', $tags); // concatenate the tags to one string
    }

    /**
      * Transforms the value the users has typed to a value that suits the field in the Document
      */
    public function reverseTransform($tags)
    {
        if (!$tags) {
            $tags = ''; // default
        }

        return array_filter(array_map('trim', explode(',', $tags)));
        // 1. Split the string with commas
        // 2. Remove whitespaces around the tags
        // 3. Remove empty elements (like in "tag1,tag2, ,,tag3,tag4")
    }
}
