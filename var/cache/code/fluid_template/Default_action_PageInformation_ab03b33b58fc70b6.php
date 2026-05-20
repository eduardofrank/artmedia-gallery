<?php
class Default_action_PageInformation_ab03b33b58fc70b6 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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
'0' => '@typo3/backend/context-menu.js',
'1' => '@typo3/backend/element/immediate-action-element.js',
];

$arguments1 = [
'pageTitle' => '',
'includeCssFiles' => NULL,
'includeJsFiles' => NULL,
'addJsInlineLabels' => NULL,
'includeRequireJsModules' => NULL,
'addInlineSettings' => NULL,
'includeJavaScriptModules' => $array3,
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array5 = [
'0' => $renderingContext->getVariableProvider()->getByPath('accessContent'),
];

$expression6 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments4 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression6(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output7 = '';

$output7 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper
$renderChildrenClosure9 = function() use ($renderingContext) {
return NULL;
};

$array10 = [
'0' => 'web',
'1' => $renderingContext->getVariableProvider()->getByPath('id'),
];

$arguments8 = [
'name' => 'args',
'value' => $array10,
];
$renderChildrenClosure9 = ($arguments8['value'] !== null) ? function() use ($arguments8) { return $arguments8['value']; } : $renderChildrenClosure9;
$output7 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3Fluid\Fluid\ViewHelpers\VariableViewHelper::renderStatic($arguments8, $renderChildrenClosure9, $renderingContext)]);

$output7 .= '
        <typo3-immediate-action
            action="TYPO3.Backend.Storage.ModuleStateStorage.update"
            args="';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\HtmlspecialcharsViewHelper
$renderChildrenClosure12 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper
$renderChildrenClosure15 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('args');
};

$arguments14 = [
'value' => NULL,
'forceObject' => false,
];
$renderChildrenClosure15 = ($arguments14['value'] !== null) ? function() use ($arguments14) { return $arguments14['value']; } : $renderChildrenClosure15;return TYPO3\CMS\Fluid\ViewHelpers\Format\JsonViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
};

$arguments11 = [
'value' => NULL,
'keepQuotes' => false,
'encoding' => 'UTF-8',
'doubleEncode' => true,
];
$value13 = ($arguments11['value'] !== null ? $arguments11['value'] : $renderChildrenClosure12());

$output7 .= !is_string($value13) && !(is_object($value13) && method_exists($value13, '__toString')) ? $value13 : htmlspecialchars($value13, ($arguments11['keepQuotes'] ? ENT_NOQUOTES : ENT_QUOTES), $arguments11['encoding'], $arguments11['doubleEncode']);

$output7 .= '"
        ></typo3-immediate-action>
    ';
return $output7;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments4, static fn() => '', $renderingContext)
;

$output0 .= '
';

    return $output0;
}
/**
 * section Content
 */
public function section_26298499e77d870c(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output16 = '';

$output16 .= '

    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array18 = [
'0' => $renderingContext->getVariableProvider()->getByPath('accessContent'),
];

$expression19 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments17 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression19(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output20 = '';

$output20 .= '
            <h1>';
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
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:page_title',
];

$output20 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext)]);

$output20 .= '</h1>
            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array24 = [
'0' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments23 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output26 = '';

$output26 .= '
                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array28 = [
'0' => $renderingContext->getVariableProvider()->getByPath('content'),
];

$expression29 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments27 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression29(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output30 = '';

$output30 .= '
                            <form action="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper
$renderChildrenClosure32 = function() use ($renderingContext) {
return NULL;
};

$array33 = [
'id' => $renderingContext->getVariableProvider()->getByPath('pageUid'),
];

$arguments31 = [
'referenceType' => 'absolute',
'route' => 'web_info_overview',
'parameters' => $array33,
];

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\UriViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext)]);

$output30 .= '" method="post">
                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label" for="depth">
                                            ';
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
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:moduleFunctions.depth',
];

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output30 .= '
                                        </label>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure37 = function() use ($renderingContext) {
return NULL;
};

$array38 = [
'name' => 'depth',
'id' => 'depth',
'options' => $renderingContext->getVariableProvider()->getByPath('depthDropdownOptions'),
'currentValue' => $renderingContext->getVariableProvider()->getByPath('depthDropdownCurrentValue'),
];

$arguments36 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'DropdownMenu',
'arguments' => $array38,
];

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output30 .= '
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="pages">
                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return NULL;
};

$arguments39 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:moduleFunctions.type',
];

$output30 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output30 .= '
                                        </label>
                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure42 = function() use ($renderingContext) {
return NULL;
};

$array43 = [
'name' => 'pages',
'id' => 'pages',
'options' => $renderingContext->getVariableProvider()->getByPath('pagesDropdownOptions'),
'currentValue' => $renderingContext->getVariableProvider()->getByPath('pagesDropdownCurrentValue'),
];

$arguments41 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'DropdownMenu',
'arguments' => $array43,
];

$output30 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output30 .= '
                                    </div>
                                </div>
                            </form>
                            ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure45 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('content');
};

$arguments44 = [
'value' => NULL,
];

$output30 .= isset($arguments44['value']) ? $arguments44['value'] : $renderChildrenClosure45();

$output30 .= '
                        ';
return $output30;
},
'__else' => function() use ($renderingContext) {
$output46 = '';

$output46 .= '
                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure48 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure50 = function() use ($renderingContext) {
return NULL;
};

$arguments49 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:info.noContent.message',
];

$arguments47 = [
'title' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments49, $renderChildrenClosure50, $renderingContext)]),
'state' => -2,
];
$renderChildrenClosure48 = ($arguments47['message'] !== null) ? function() use ($arguments47) { return $arguments47['message']; } : $renderChildrenClosure48;
$output46 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments47, $renderChildrenClosure48, $renderingContext);

$output46 .= '
                        ';
return $output46;
},
];

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments27, static fn() => '', $renderingContext)
;

$output26 .= '
                ';
return $output26;
},
'__else' => function() use ($renderingContext) {
$output51 = '';

$output51 .= '
                    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure53 = function() use ($renderingContext) {
return NULL;
};
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
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:info.noPageSelected.message',
];

$arguments52 = [
'title' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments54, $renderChildrenClosure55, $renderingContext)]),
'state' => -1,
];
$renderChildrenClosure53 = ($arguments52['message'] !== null) ? function() use ($arguments52) { return $arguments52['message']; } : $renderChildrenClosure53;
$output51 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments52, $renderChildrenClosure53, $renderingContext);

$output51 .= '
                ';
return $output51;
},
];

$output20 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments23, static fn() => '', $renderingContext)
;

$output20 .= '
        ';
return $output20;
},
'__else' => function() use ($renderingContext) {
$output56 = '';

$output56 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};

$arguments59 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:error.noAccess.title',
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure62 = function() use ($renderingContext) {
return NULL;
};

$arguments61 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:info/Resources/Private/Language/locallang_webinfo.xlf:error.noAccess.message',
];

$arguments57 = [
'iconName' => NULL,
'disableIcon' => false,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext),
'message' => call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments61, $renderChildrenClosure62, $renderingContext)]),
'state' => 2,
];
$renderChildrenClosure58 = ($arguments57['message'] !== null) ? function() use ($arguments57) { return $arguments57['message']; } : $renderChildrenClosure58;
$output56 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext);

$output56 .= '
        ';
return $output56;
},
];

$output16 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments17, static fn() => '', $renderingContext)
;

$output16 .= '

';

    return $output16;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output63 = '';

$output63 .= '

';

$output63 .= '';

$output63 .= '

';

$output63 .= '';

$output63 .= '

';

$output63 .= '';

$output63 .= '


';

    return $output63;
}

}

#