<?php
class Default_action_RecordList_f24dde8616340f5b extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
 * section Before
 */
public function section_ed3696630fa71e53(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output0 = '';

$output0 .= '
    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => '@typo3/backend/recordlist.js',
'1' => '@typo3/backend/record-download-button.js',
'2' => '@typo3/backend/clear-cache.js',
'3' => '@typo3/backend/record-search.js',
'4' => '@typo3/backend/ajax-data-handler.js',
'5' => '@typo3/backend/column-selector-button.js',
'6' => '@typo3/backend/multi-record-selection.js',
'7' => '@typo3/backend/clipboard-panel.js',
'8' => '@typo3/backend/new-content-element-wizard-button.js',
'9' => '@typo3/backend/element/immediate-action-element.js',
'10' => '@typo3/backend/context-menu.js',
'11' => '@typo3/backend/element/editable-page-title.js',
];

$array4 = [
'editablePageTitle.input.field.label' => 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:editPageTitle.input.field.label',
'editablePageTitle.button.edit.label' => 'LLL:EXT:backend/Resources/Private/Language/locallang_layout.xlf:editPageTitle',
'editablePageTitle.button.save.label' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:save',
'editablePageTitle.button.cancel.label' => 'LLL:EXT:core/Resources/Private/Language/locallang_common.xlf:cancel',
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'includeRequireJsModules' => NULL,
'addInlineSettings' => NULL,
'includeJavaScriptModules' => $array3,
'addJsInlineLabels' => $array4,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure6 = function() use ($renderingContext) {
return NULL;
};

$array7 = [
'0' => 'web',
'1' => $renderingContext->getVariableProvider()->getByPath('pageId'),
];

$arguments5 = [
'name' => 'immediateActionArgs',
'value' => $array7,
];
$renderChildrenClosure6 = ($arguments5['value'] !== null) ? function() use ($arguments5) { return $arguments5['value']; } : $renderChildrenClosure6;
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments5, $renderChildrenClosure6, $renderingContext)]);

$output0 .= '
    <typo3-immediate-action
        action="TYPO3.Backend.Storage.ModuleStateStorage.update"
        args="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('immediateActionArgs');
};

$arguments11 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure12 = ($arguments11['value'] !== null) ? function() use ($arguments11) { return $arguments11['value']; } : $renderChildrenClosure12;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext);
};

$arguments8 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value10 = ($arguments8['value'] !== null ? $arguments8['value'] : $renderChildrenClosure9());

$output0 .= !is_string($value10) && !(is_object($value10) && method_exists($value10, '__toString')) ? $value10 : htmlspecialchars($value10, ($arguments8['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments8['encoding'], $arguments8['doubleEncode']);

$output0 .= '"
    ></typo3-immediate-action>
';

    return $output0;
}
/**
 * section Content
 */
public function section_26298499e77d870c(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output13 = '';

$output13 .= '
    <typo3-backend-editable-page-title
        pageTitle="';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageTitle')]);

$output13 .= '"
        pageId="';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageId')]);

$output13 .= '"
        ';
// Rendering TernaryExpression node
$array14 = array (
  0 => '{isPageEditable ? \'editable\' : \'\'}',
  1 => '{isPageEditable ? \'editable\' : \'\'}',
);
$ternaryExpression15 = function($context, $renderingContext) {
    $check = 'isPageEditable';
    $parser = new \TYPO3Fluid\Fluid\Core\Parser\BooleanParser();
    $checkResult = $parser->evaluate($check, $context);
    if ($checkResult) {
        return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::getTemplateVariableOrValueItself('\'editable\'', $renderingContext);
    }
    return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::getTemplateVariableOrValueItself('\'\'', $renderingContext);
};

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$ternaryExpression15(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\Expression\TernaryExpressionNode::gatherContext($renderingContext, $array14[1]), $renderingContext)]);

$output13 .= '
    >
        ';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('pageTitle')]);

$output13 .= '
    </typo3-backend-editable-page-title>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('additionalContentTop');
};

$arguments16 = [
'value' => NULL,
];

$output13 .= isset($arguments16['value']) ? $arguments16['value'] : $renderChildrenClosure17();

$output13 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('languageSelectorHtml');
};

$arguments18 = [
'value' => NULL,
];

$output13 .= isset($arguments18['value']) ? $arguments18['value'] : $renderChildrenClosure19();

$output13 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('searchBoxHtml');
};

$arguments20 = [
'value' => NULL,
];

$output13 .= isset($arguments20['value']) ? $arguments20['value'] : $renderChildrenClosure21();

$output13 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('pageTranslationsHtml');
};

$arguments22 = [
'value' => NULL,
];

$output13 .= isset($arguments22['value']) ? $arguments22['value'] : $renderChildrenClosure23();

$output13 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure25 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('tableListHtml');
};

$arguments24 = [
'value' => NULL,
];

$output13 .= isset($arguments24['value']) ? $arguments24['value'] : $renderChildrenClosure25();

$output13 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('clipboardHtml');
};

$arguments26 = [
'value' => NULL,
];

$output13 .= isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();

$output13 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('additionalContentBottom');
};

$arguments28 = [
'value' => NULL,
];

$output13 .= isset($arguments28['value']) ? $arguments28['value'] : $renderChildrenClosure29();

$output13 .= '
';

    return $output13;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output30 = '';

$output30 .= '

';

$output30 .= '';

$output30 .= '

';

$output30 .= '';

$output30 .= '

';

$output30 .= '';

$output30 .= '


';

    return $output30;
}

}

#