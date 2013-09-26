# BSPTagBundle

This bundle adds provides easy integration with array of strings for Symfony2. For example with this bundle, the following is possible:

``` php
$builder->add( 'tags', 'tags' );
```

This will perform the transformation between `[ "tag1", "tag2", "tag3" ]` into `tag1, tag2, tag3` and viceversa.

## Installation

Installation is a 2 step process:

1. Download BSPTagBundle using composer
2. Enable de Bundle

### Step 1: Download BSPTagBundle using composer

``` js
{
	"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/D3r3ck/BSPTagBundle"
        }
    ],
    "require": {
        "d3r3ck/bsp-tag-bundle": "v1.0"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update avalanche123/imagine-bundle
```

Composer will install the bundle to your project's `vendor/d3r3ck/bsp-tag-bundle` directory.

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new BSP\TagBundle\BSPTagBundle(),
    );
}
```

And you are done!

## Basic Usage

This bundle works adding the tags type into your Symfony2 form types:

``` php
$builder->add( 'tags', 'tags' );
```

This is particullary usefull when using a MongoDB ODM structure, because you can map a `Hash` type into `tags` form type.

``` php
...
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
...
class MyClass
{
    /**
     * @MongoDB\Hash
     */
    protected $tags = array();
}
```

Besides, it includes a twig helper to explode the tags:

``` jinja
{{ MyClass.tags | tag_split }}
```

## Extra

You can use this bundle in combination of [jQuery Tags Input][xoxco/jquery-tags-input]


[xoxco/jquery-tags-input]: https://github.com/xoxco/jQuery-Tags-Input