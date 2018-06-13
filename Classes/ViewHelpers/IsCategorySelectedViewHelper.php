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
        $request = $this->controllerContext->getRequest()->getOriginalRequest();

        // if form is not submitted the default is checked
        if (!$request) {
            $checked = true;
        } else {
            $checked = in_array($categoryUid, $request->getArgument('newAddress')['moduleSysDmailCategory']);
        }

        return $checked;
    }
}
