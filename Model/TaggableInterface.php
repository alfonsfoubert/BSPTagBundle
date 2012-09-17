<?php

namespace BSP\TagBundle\Model;

interface TaggableInterface
{
    public function addTag($tag);

    public function hasTag($tag);

    public function getTags();

    public function removeTag($tag);

    public function setTags(array $tags);
}
