<?php

namespace Geraldib\PortfolioSite\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Project extends AbstractEntity
{

    /**
     * The name of the project
     *
     * @var string
     **/
    protected $name = '';

    /**
     * The description of the project
     *
     * @var string
     **/
    protected $description = '';

    /**
     * The image in the store inventory
     *
     * @var int
     **/
    protected $image = 0;

    /**
     * project constructor.
     *
     * @param string $name
     * @param string $description
     * @param int $image
     */
    public function __construct($name = '', $description = '', $image = 0)
    {
        $this->setName($name);
        $this->setDescription($description);
        $this->setImage($image);
    }

    /**
     * Sets the name of the project
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Gets the name of the project
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the description of the project
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Gets the description of the project
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the image in the store inventory of the project
     *
     * @param int $image
     */
    public function setImage(int $image)
    {
        $this->image = $image;
    }

    /**
     * Gets the image in the store inventory of the project
     *
     * @return int
     */
    public function getImage()
    {
        return $this->image;
    }
}
