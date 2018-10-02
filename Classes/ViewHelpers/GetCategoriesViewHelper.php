<?php

namespace OD\RegisteraddressCategories\ViewHelpers;

use TYPO3\CMS\Core\Database\DatabaseConnection;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;

class GetCategoriesViewHelper extends AbstractViewHelper {

    /**
     * Get the array value from given key
     *
     * @param string $key
     * @return string
     */
    public function render() {
        
        if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('fh_debug')) {
            debugBegin();
            debug ($_REQUEST, '$_REQUEST');
        }
        
        
        $settings = $this->renderingContext->getVariableProvider()->get('settings');
        $categoryPid = $settings['categoriesStoragePid'];

        //$result = $this->getDatabase()->exec_SELECTgetRows('uid', 'sys_dmail_category', 'pid=' . (int) $categoryPid);

        //$result = $this->getDatabase()->exec_SELECTgetRows('uid,category' , 'sys_dmail_category', 'pid>0');
        
        $cObjRenderer = new \TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer();
        $result = $this->getDatabase()->exec_SELECTgetRows('uid,category' , 'sys_dmail_category', 'pid>0' . $cObjRenderer->enableFields('sys_dmail_category') );
        
        
        if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('fh_debug')) {
            //debug($settings,"$settings settings");
            //debug($categoryPid,"$categoryPid page ID");
            debug($result, 'render $result');
            debugEnd();
        }
        return $result;
    }

    /**
     * @return DatabaseConnection
     */
    protected function getDatabase() {
        return $GLOBALS['TYPO3_DB'];
    }

}
