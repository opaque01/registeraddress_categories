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

       debugBegin();
debug ($categoryUid, 'render $categoryUid');
        debug ($_REQUEST, '$_REQUEST');

        $request = $this->controllerContext->getRequest()->getOriginalRequest();

    //    debug($request,"$request renderfunktion");
        
        // if form is not submitted the default is unchecked
        if (!$request) {
            $checked = false;
        } else {
            $checked = in_array($categoryUid, $request->getArgument('newAddress')['moduleSysDmailCategory']);
        }

       debug($checked, 'render $checked ende');
        
       debugEnd();
        
        return $checked;
    }
}
