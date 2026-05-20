<?php
class layout_Module_html_fda5604843dcdf6f extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$array3 = [
'0' => 'true',
];

$expression4 = function($context) {return TRUE;};

$arguments1 = [
'partial' => NULL,
'delegate' => NULL,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Before',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression4(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)),
    $renderingContext
),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

<div class="module ';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleClass')]);

$output0 .= '" data-module-id="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleId')]);

$output0 .= '" data-module-name="';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('moduleName')]);

$output0 .= '">
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array6 = [
'0' => $renderingContext->getVariableProvider()->getByPath('docHeader.enabled'),
];

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

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
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure10 = function() use ($renderingContext) {
return NULL;
};

$array11 = [
'docHeader' => $renderingContext->getVariableProvider()->getByPath('docHeader'),
];

$arguments9 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'DocHeader',
'arguments' => $array11,
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext);

$output8 .= '
    ';
return $output8;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, static fn() => '', $renderingContext)
;

$output0 .= '
    <div class="module-body t3js-module-body">
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array13 = [
'0' => $renderingContext->getVariableProvider()->getByPath('uiBlock'),
];

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments12 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression14(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array13)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output15 = '';

$output15 .= '
            <div id="t3js-ui-block" class="ui-block">
                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure17 = function() use ($renderingContext) {
return NULL;
};

$arguments16 = [
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'spinner-circle',
'size' => 'large',
];

$output15 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output15 .= '
            </div>
        ';
return $output15;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments12, static fn() => '', $renderingContext)
;

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper
$renderChildrenClosure19 = function() use ($renderingContext) {
return NULL;
};

$arguments18 = [
'as' => NULL,
'queueIdentifier' => $renderingContext->getVariableProvider()->getByPath('flashMessageQueueIdentifier'),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FlashMessagesViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure21 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('headerContent');
};

$arguments20 = [
'value' => NULL,
];

$output0 .= isset($arguments20['value']) ? $arguments20['value'] : $renderChildrenClosure21();

$output0 .= '
        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$array24 = [
'0' => 'true',
];

$expression25 = function($context) {return TRUE;};

$arguments22 = [
'partial' => NULL,
'delegate' => NULL,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'Content',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output0 .= '
        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure27 = function() use ($renderingContext) {
return $renderingContext->getVariableProvider()->getByPath('footerContent');
};

$arguments26 = [
'value' => NULL,
];

$output0 .= isset($arguments26['value']) ? $arguments26['value'] : $renderChildrenClosure27();

$output0 .= '
    </div>
</div>

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure29 = function() use ($renderingContext) {
return NULL;
};

$array30 = [
'0' => 'true',
];

$expression31 = function($context) {return TRUE;};

$arguments28 = [
'partial' => NULL,
'delegate' => NULL,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'section' => 'After',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
'optional' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression31(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)),
    $renderingContext
),
];

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output0 .= '


';

    return $output0;
}

}

#