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
     * project main image
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * use TYPO3\CMS\Extbase\Annotation\ORM\Cascade
     */
    protected $mainImage = null;

    /**
     * project constructor.
     *
     * @param string $name
     * @param string $description
     * @param int $image
     */
    public function __construct($name = '', $description = '')
    {
        $this->setName($name);
        $this->setDescription($description);
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
     * Get main image
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     */
    public function getMainImage()
    {
        return $this->mainImage;
    }



    /**
     * Set main image
     *
     * param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $mainImage
     *
     * @return void
     */
    public function setMainImage($mainImage)
    {
        $this->mainImage = $mainImage;
    }



    /**
     * Add project main image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function addMainImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->mainImage->attach($image);
    }



    /**
     * Remove project main image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     */
    public function removeMainImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->mainImage->detach($image);
    }
}
