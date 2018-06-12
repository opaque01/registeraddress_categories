<?php
namespace OD\RegisteraddressCategories\Domain\Model;

/***
 *
 * This file is part of the "Registeraddress Categories" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/

/**
 * Address
 */

class Address extends \AFM\Registeraddress\Domain\Model\Address
{

    /**
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\OD\RegisteraddressCategories\Domain\Model\NewsletterCategory>
     */
    protected $moduleSysDmailCategory;

    /**
     * __construct
     */
    public function __construct()
    {
        $this->initStorageObjects();
    }

    /**
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->moduleSysDmailCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * @param \OD\RegisteraddressCategories\Domain\Model\NewsletterCategory $moduleSysDmailCategory
     * @return void
     */
    public function addModuleSysDmailCategory(\OD\RegisteraddressCategories\Domain\Model\NewsletterCategory $moduleSysDmailCategory)
    {
        $this->moduleSysDmailCategory->attach($moduleSysDmailCategory);
    }

    /**
     * @param \OD\RegisteraddressCategories\Domain\Model\NewsletterCategory $moduleSysDmailCategory The Category to be removed
     * @return void
     */
    public function removeModuleSysDmailCategory(\OD\RegisteraddressCategories\Domain\Model\NewsletterCategory $moduleSysDmailCategory)
    {
        $this->moduleSysDmailCategory->detach($moduleSysDmailCategory);
    }

    /**
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\OD\RegisteraddressCategories\Domain\Model\NewsletterCategory> $moduleSysDmailCategory
     */
    public function getModuleSysDmailCategory()
    {
        return $this->moduleSysDmailCategory;
    }

    /**
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\OD\RegisteraddressCategories\Domain\Model\NewsletterCategory> $moduleSysDmailCategory
     * @return void
     */
    public function setModuleSysDmailCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $moduleSysDmailCategory)
    {
        $this->moduleSysDmailCategory = $moduleSysDmailCategory;
    }
}