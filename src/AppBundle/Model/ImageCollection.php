<?php


namespace AppBundle\Repository\Model;

use JMS\Serializer\Annotation as Serializer;
use Doctrine\Common\Collections\ArrayCollection;

class ImageCollection extends ArrayCollection
{
    /**
     * @var array
     * @Serializer\Type("array<AppBundle\Model\Image>")
     */
    private $_elements;
}
