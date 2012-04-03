<?php

namespace BSP\TagBundle\Model;

interface TaggableInterface
{	
    function addTag($tag);

    function hasTag($tag);

    function getTags();

    function removeTag($tag);

    function setTags(array $tags);
}