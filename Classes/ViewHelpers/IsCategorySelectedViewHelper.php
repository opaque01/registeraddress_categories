<?php

namespace OD\RegisteraddressCategories\ViewHelpers;

class IsCategorySelectedViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{

   
    /**
     * @param int $categoryUid
     *
     * @return array
     */
    public function render($categoryUid)
    {

       if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('fh_debug')) {
         debugBegin();
         debug ($categoryUid, 'render $categoryUid');
         debug ($_REQUEST, '$_REQUEST');
       }
        $request = $this->controllerContext->getRequest()->getOriginalRequest();

    
        
        // if form is not submitted the default is unchecked
        if (!$request) {
            $checked = false;
        } else {
            $checked = in_array($categoryUid, $request->getArgument('newAddress')['moduleSysDmailCategory']);
        }

       if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('fh_debug')) {
         debug($checked, 'render $checked ende');
         debugEnd();
       } 
       return $checked;
    }
}
