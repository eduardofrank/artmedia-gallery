<?php
class Default_action_RecyclerModule_6c83c16c5bb58836 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'Module';
    }
    public function hasLayout() {
        return true;
    }
    public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        $renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'bk2k' => 
  array (
    0 => 'BK2K\\BootstrapPackage\\ViewHelpers',
  ),
));
    }
    /**
 * section Content
 */
public function section_26298499e77d870c(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '

    <h1>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:recycler/Resources/Private/Language/locallang.xlf:title',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '</h1>

    <div id="recycler-index" class="tx_recycler_recycler">
        <form id="recycler-form">
            <div class="form-row">
                <div class="form-group align-self-end">
                    <div class="input-group">
                        <input type="text" name="search-text" class="form-control form-control-clearable" placeholder="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure4 = function() use ($renderingContext) {
return NULL;
};

$arguments3 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.enterSearchString',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '">
                        <button type="submit" class="btn btn-default disabled">
                            <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$arguments5 = [
'key' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'id' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.title.search',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '</span>
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure8 = function() use ($renderingContext) {
return NULL;
};

$arguments7 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-search',
];

$output0 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);

$output0 .= '
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="depth" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$arguments9 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:recycler/Resources/Private/Language/locallang.xlf:filter.depth',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '</label>
                    <select name="depth" id="depth" class="form-select">
                        <option value="0">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return NULL;
};

$arguments11 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_0',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output0 .= '</option>
                        <option value="1">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
return NULL;
};

$arguments13 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_1',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext)]);

$output0 .= '</option>
                        <option value="2">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_2',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '</option>
                        <option value="3">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
return NULL;
};

$arguments17 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_3',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext)]);

$output0 .= '</option>
                        <option value="4">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure20 = function() use ($renderingContext) {
return NULL;
};

$arguments19 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_4',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments19, $renderChildrenClosure20, $renderingContext)]);

$output0 .= '</option>
                        <option value="999">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure22 = function() use ($renderingContext) {
return NULL;
};

$arguments21 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.depth_infi',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output0 .= '</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pages" class="form-label">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$arguments23 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:recycler/Resources/Private/Language/locallang.xlf:filter.type',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext)]);

$output0 .= '</label>
                    <select name="pages" id="pages" class="form-select"></select>
                </div>
            </div>
        </form>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure26 = function() use ($renderingContext) {
return NULL;
};

$array27 = [
'allowDelete' => $renderingContext->getVariableProvider()->getByPath('allowDelete'),
];

$arguments25 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'multiRecordSelectionActions',
'arguments' => $array27,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments25, $renderChildrenClosure26, $renderingContext);

$output0 .= '
        <div class="table-fit mb-0">
            <table class="table table-hover" id="itemsInRecycler">
                <caption class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:recycler/Resources/Private/Language/locallang.xlf:table.caption.recently_deleted_records',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext)]);

$output0 .= '</caption>
                <thead>
                    <tr>
                        <th class="col-checkbox">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'partial' => NULL,
'delegate' => NULL,
'arguments' => [],
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'multiRecordSelectionCheckboxActions',
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output0 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:recycler/Resources/Private/Language/locallang.xlf:table.header.record',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output0 .= '</th>
                        <th class="col-datetime">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$arguments34 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:recycler/Resources/Private/Language/locallang.xlf:table.header.tstamp',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output0 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$arguments36 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:recycler/Resources/Private/Language/locallang.xlf:table.header.uid',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext)]);

$output0 .= '</th>
                        <th>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure39 = function() use ($renderingContext) {
return NULL;
};

$arguments38 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:recycler/Resources/Private/Language/locallang.xlf:table.header.pid',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext)]);

$output0 .= '</th>
                        <th class="col-control"></th>
                    </tr>
                </thead>
                <tbody data-multi-record-selection-row-selection="true">
                </tbody>
            </table>
        </div>
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure41 = function() use ($renderingContext) {
return NULL;
};

$array42 = [
'allowDelete' => $renderingContext->getVariableProvider()->getByPath('allowDelete'),
];

$arguments40 = [
'partial' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'multiRecordSelectionActions',
'arguments' => $array42,
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments40, $renderChildrenClosure41, $renderingContext);

$output0 .= '
        <nav>
        </nav>
    </div>

';

    return $output0;
}
/**
 * section multiRecordSelectionCheckboxActions
 */
public function section_b3a67ebd05994526(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output43 = '';

$output43 .= '
    <div class="btn-group dropdown">
        <button type="button" class="dropdown-toggle dropdown-toggle-link t3js-multi-record-selection-check-actions-toggle" data-bs-toggle="dropdown" data-bs-boundary="window" aria-expanded="false" aria-label="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return NULL;
};

$arguments44 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.openSelectionOptions',
];

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext)]);

$output43 .= '">
            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure47 = function() use ($renderingContext) {
return NULL;
};

$arguments46 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-selection',
'size' => 'small',
];

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments46, $renderChildrenClosure47, $renderingContext);

$output43 .= '
            <span class="visually-hidden">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'key' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'id' => 'LLL:EXT:recycler/Resources/Private/Language/locallang.xlf:button.dropdown.multiselect',
];

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output43 .= '</span>
        </button>
        <ul class="dropdown-menu t3js-multi-record-selection-check-actions">
            <li>
                <button type="button" class="dropdown-item disabled" data-multi-record-selection-check-action="check-all" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure51 = function() use ($renderingContext) {
return NULL;
};

$arguments50 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.checkAll',
];

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments50, $renderChildrenClosure51, $renderingContext)]);

$output43 .= '">
                    <span class="dropdown-item-columns">
                        <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$arguments52 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-selection-elements-all',
'size' => 'small',
];

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output43 .= '
                        </span>
                        <span class="dropdown-item-column dropdown-item-column-title">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure55 = function() use ($renderingContext) {
return NULL;
};

$arguments54 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.checkAll',
];

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]);

$output43 .= '
                        </span>
                    </span>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item disabled" data-multi-record-selection-check-action="check-none" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure57 = function() use ($renderingContext) {
return NULL;
};

$arguments56 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.uncheckAll',
];

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext)]);

$output43 .= '">
                    <span class="dropdown-item-columns">
                        <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};

$arguments58 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-selection-elements-none',
'size' => 'small',
];

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output43 .= '
                        </span>
                        <span class="dropdown-item-column dropdown-item-column-title">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};

$arguments60 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.uncheckAll',
];

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext)]);

$output43 .= '
                        </span>
                    </span>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item" data-multi-record-selection-check-action="toggle" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
return NULL;
};

$arguments62 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.toggleSelection',
];

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext)]);

$output43 .= '">
                    <span class="dropdown-item-columns">
                        <span class="dropdown-item-column dropdown-item-column-icon" aria-hidden="true">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure65 = function() use ($renderingContext) {
return NULL;
};

$arguments64 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-selection-elements-invert',
'size' => 'small',
];

$output43 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments64, $renderChildrenClosure65, $renderingContext);

$output43 .= '
                        </span>
                        <span class="dropdown-item-column dropdown-item-column-title">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure67 = function() use ($renderingContext) {
return NULL;
};

$arguments66 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.toggleSelection',
];

$output43 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext)]);

$output43 .= '
                        </span>
                    </span>
                </button>
            </li>
        </ul>
    </div>
';

    return $output43;
}
/**
 * section multiRecordSelectionActions
 */
public function section_806e2238aefea64f(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output68 = '';

$output68 .= '
    <div class="multi-record-selection-actions-wrapper">
        <div class="row row-cols-auto align-items-center g-2 t3js-multi-record-selection-actions hidden">
            <div class="col">
                <strong>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure70 = function() use ($renderingContext) {
return NULL;
};

$arguments69 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:core/Resources/Private/Language/locallang_core.xlf:labels.selection',
];

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext)]);

$output68 .= '</strong>
            </div>
            <div class="col">
                <button class="btn btn-default btn-sm" data-multi-record-selection-action="massundo" data-multi-record-selection-action-config=\'';

$output68 .= '{"idField": "uid"}';

$output68 .= '\'>
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure72 = function() use ($renderingContext) {
return NULL;
};

$arguments71 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-edit-undo',
];

$output68 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments71, $renderChildrenClosure72, $renderingContext);

$output68 .= '
                    <span class="text">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure74 = function() use ($renderingContext) {
return NULL;
};

$arguments73 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:recycler/Resources/Private/Language/locallang.xlf:button.undo',
];

$output68 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output68 .= '
                    </span>
                </button>
            </div>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array76 = [
'0' => $renderingContext->getVariableProvider()->getByPath('allowDelete'),
];

$expression77 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments75 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression77(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output78 = '';

$output78 .= '
                <div class="col">
                    <button class="btn btn-default btn-sm" data-multi-record-selection-action="massdelete" data-multi-record-selection-action-config=\'';

$output78 .= '{"idField": "uid"}';

$output78 .= '\'>
                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure80 = function() use ($renderingContext) {
return NULL;
};

$arguments79 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-edit-delete',
];

$output78 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments79, $renderChildrenClosure80, $renderingContext);

$output78 .= '
                        <span class="text">
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure82 = function() use ($renderingContext) {
return NULL;
};

$arguments81 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:recycler/Resources/Private/Language/locallang.xlf:button.delete',
];

$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext)]);

$output78 .= '
                        </span>
                    </button>
                </div>
            ';
return $output78;
},
];

$output68 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments75, static fn() => '', $renderingContext)
;

$output68 .= '
        </div>
    </div>
';

    return $output68;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output83 = '';

$output83 .= '

';

$output83 .= '';

$output83 .= '

';

$output83 .= '';

$output83 .= '


';

$output83 .= '';

$output83 .= '

';

$output83 .= '';

$output83 .= '


';

    return $output83;
}

}

#