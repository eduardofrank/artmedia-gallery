<?php
class partial_Backend_FormManager_Pagination_19d291d3076dca11 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
    public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
        return (string)'';
    }
    public function hasLayout() {
        return false;
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
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array2 = [
'0' => $renderingContext->getVariableProvider()->getByPath('paginator.numberOfPages'),
'1' => ' > 1',
];

$expression3 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 1);};

$arguments1 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression3(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array2)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output4 = '';

$output4 .= '
    <nav class="pagination-wrap">
        <ul class="pagination">
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array6 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber'),
'3' => ' >= ',
'4' => $renderingContext->getVariableProvider()->getByPath('pagination.firstPageNumber'),
];

$expression7 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) >= TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"])));};

$arguments5 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression7(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array6)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output8 = '';

$output8 .= '
                    <li class="page-item">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
$output14 = '';

$output14 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure16 = function() use ($renderingContext) {
return NULL;
};

$arguments15 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-view-paging-first',
];

$output14 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext);

$output14 .= '
                        ';
return $output14;
};

$array11 = [
'page' => 1,
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext) {
return NULL;
};

$arguments12 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'pagination.first',
];

$arguments9 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'action' => 'index',
'arguments' => $array11,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext),
'class' => 'page-link',
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
                    </li>
                    <li class="page-item">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure18 = function() use ($renderingContext) {
$output22 = '';

$output22 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure24 = function() use ($renderingContext) {
return NULL;
};

$arguments23 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-view-paging-previous',
];

$output22 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments23, $renderChildrenClosure24, $renderingContext);

$output22 .= '
                        ';
return $output22;
};

$array19 = [
'page' => $renderingContext->getVariableProvider()->getByPath('pagination.previousPageNumber'),
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return NULL;
};

$arguments20 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'pagination.previous',
];

$arguments17 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'action' => 'index',
'arguments' => $array19,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext),
'class' => 'page-link',
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);

$output8 .= '
                    </li>
                ';
return $output8;
},
'__else' => function() use ($renderingContext) {
$output25 = '';

$output25 .= '
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return NULL;
};

$arguments26 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'empty-empty',
];

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output25 .= '
                        </span>
                    </li>
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$arguments28 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'empty-empty',
];

$output25 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output25 .= '
                        </span>
                    </li>
                ';
return $output25;
},
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, static fn() => '', $renderingContext)
;

$output4 .= '
            <li class="page-item">
                <span class="page-link">
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure31 = function() use ($renderingContext) {
return NULL;
};

$arguments30 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'pagination.forms',
];

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext)]);

$output4 .= ' ';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.startRecordNumber')]);

$output4 .= ' - ';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.endRecordNumber')]);

$output4 .= '
                </span>
            </li>
            <li class="page-item">
                <span class="page-link">
                    ';
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
'key' => 'pagination.page',
];

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext)]);

$output4 .= '
                    <form style="display:inline;"
                        data-global-event="submit"
                        data-action-navigate="$form=~s/$value/"
                        data-navigate-value="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper
$renderChildrenClosure35 = function() use ($renderingContext) {
return NULL;
};

$array36 = [
'page' => '$[value]',
];

$arguments34 = [
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => 0,
'noCache' => NULL,
'language' => NULL,
'section' => '',
'format' => '',
'linkAccessRestrictedPages' => false,
'additionalParams' => [],
'absolute' => false,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => [],
'action' => 'index',
'arguments' => $array36,
];

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Uri\ActionViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output4 .= '"
                        data-value-selector="input[name=\'paginator-target-page\']">
                        <input
                            min="';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.firstPageNumber')]);

$output4 .= '"
                            max="';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber')]);

$output4 .= '"
                            data-number-of-pages="';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginator.numberOfPages')]);

$output4 .= '"
                            name="paginator-target-page"
                            class="form-control form-control-sm paginator-input"
                            size="5"
                            value="';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('paginator.currentPageNumber')]);

$output4 .= '"
                            type="number"/>
                    </form>
                    / ';

$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber')]);

$output4 .= '
                </span>
            </li>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array38 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber'),
'1' => ' && ',
'2' => $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber'),
'3' => ' <= ',
'4' => $renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber'),
];

$expression39 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) <= TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"])));};

$arguments37 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression39(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array38)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output40 = '';

$output40 .= '
                    <li class="page-item">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
$output46 = '';

$output46 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};

$arguments47 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-view-paging-next',
];

$output46 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                        ';
return $output46;
};

$array43 = [
'page' => $renderingContext->getVariableProvider()->getByPath('pagination.nextPageNumber'),
];
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
'key' => 'pagination.next',
];

$arguments41 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'action' => 'index',
'arguments' => $array43,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments44, $renderChildrenClosure45, $renderingContext),
'class' => 'page-link',
];

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output40 .= '
                    </li>
                    <li class="page-item">
                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
$output54 = '';

$output54 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure56 = function() use ($renderingContext) {
return NULL;
};

$arguments55 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-view-paging-last',
];

$output54 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments55, $renderChildrenClosure56, $renderingContext);

$output54 .= '
                        ';
return $output54;
};

$array51 = [
'page' => $renderingContext->getVariableProvider()->getByPath('pagination.lastPageNumber'),
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};

$arguments52 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'pagination.last',
];

$arguments49 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'action' => 'index',
'arguments' => $array51,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext),
'class' => 'page-link',
];

$output40 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext);

$output40 .= '
                    </li>
                ';
return $output40;
},
'__else' => function() use ($renderingContext) {
$output57 = '';

$output57 .= '
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure59 = function() use ($renderingContext) {
return NULL;
};

$arguments58 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'empty-empty',
];

$output57 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments58, $renderChildrenClosure59, $renderingContext);

$output57 .= '
                        </span>
                    </li>
                    <li class="page-item disabled">
                        <span class="page-link">
                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure61 = function() use ($renderingContext) {
return NULL;
};

$arguments60 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'empty-empty',
];

$output57 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);

$output57 .= '
                        </span>
                    </li>
                ';
return $output57;
},
];

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments37, static fn() => '', $renderingContext)
;

$output4 .= '
            <li class="page-item">
                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
$output67 = '';

$output67 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure69 = function() use ($renderingContext) {
return NULL;
};

$arguments68 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-refresh',
];

$output67 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);

$output67 .= '
                ';
return $output67;
};

$array64 = [
'page' => $renderingContext->getVariableProvider()->getByPath('paginator.currentPageNumber'),
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure66 = function() use ($renderingContext) {
return NULL;
};

$arguments65 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'pagination.refresh',
];

$arguments62 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'dir' => NULL,
'id' => NULL,
'lang' => NULL,
'style' => NULL,
'accesskey' => NULL,
'tabindex' => NULL,
'onclick' => NULL,
'name' => NULL,
'rel' => NULL,
'rev' => NULL,
'target' => NULL,
'controller' => NULL,
'extensionName' => NULL,
'pluginName' => NULL,
'pageUid' => NULL,
'pageType' => NULL,
'noCache' => NULL,
'language' => NULL,
'section' => NULL,
'format' => NULL,
'linkAccessRestrictedPages' => NULL,
'additionalParams' => NULL,
'absolute' => NULL,
'addQueryString' => false,
'argumentsToBeExcludedFromQueryString' => NULL,
'action' => 'index',
'arguments' => $array64,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext),
'class' => 'page-link',
];

$output4 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output4 .= '
            </li>
        </ul>
    </nav>
';
return $output4;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, static fn() => '', $renderingContext)
;

$output0 .= '
';

    return $output0;
}

}

#