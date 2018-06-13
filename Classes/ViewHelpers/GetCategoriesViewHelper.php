<?php

namespace OD\RegisteraddressCategories\ViewHelpers;

class GetCategoriesViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * @return void
     */
    public function initializeArguments() {
        $this->registerArgument('table', 'string', 'The table of the record.', false, 'tt_content');
        $this->registerArgument('uid', 'int', 'The uid of the record.', true);
    }
 
    /**
     * @return array|bool
     */
    public function render() {
        $result = BackendUtility::getRecord($this->arguments['table'], $this->arguments['uid']);
        return (empty($result) === false) ? $result : false;
    }

}
