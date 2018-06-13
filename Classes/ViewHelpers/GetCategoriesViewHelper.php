<?php

namespace OD\RegisteraddressCategories\ViewHelpers;
use TYPO3\CMS\Core\Database\DatabaseConnection;

class GetCategoriesViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {
    
    /**
     * TYPO3 Database connection
     *
     * @var DatabaseConnection
     */
    protected $databaseConnection;
    
    /**
     * @return array
     */
    public function render() {
        $settings = $this->renderingContext->getVariableProvider()->get('settings');
        $categoryPid = $settings['categoriesStoragePid'];
        $result = $this->databaseConnection->exec_SELECTgetRows('category, pid', 'sys_dmail_category','pid='.(int)$categoryPid );
        return $result;
    }
}