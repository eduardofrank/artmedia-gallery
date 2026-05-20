<?php
class FormManager_action_backend_FormManager_Index_fcf3e16740467479 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {
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

    ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper
$renderChildrenClosure2 = function() use ($renderingContext) {
return NULL;
};

$arguments1 = [
'pageTitle' => '',
'includeJsFiles' => NULL,
'addJsInlineLabels' => NULL,
'includeJavaScriptModules' => NULL,
'includeRequireJsModules' => NULL,
'addInlineSettings' => NULL,
'includeCssFiles' => $renderingContext->getVariableProvider()->getByPath('stylesheets'),
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Be\PageRendererViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= '

    <h1>';
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
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.headline',
];

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext)]);

$output0 .= '</h1>
    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array6 = [
'0' => $renderingContext->getVariableProvider()->getByPath('paginator.paginatedItems'),
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
            <div class="table-fit">
                <table id="forms" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th></th>
                            <th>';
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
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.form_name',
];

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output8 .= '</th>
                            <th>';
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
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.location',
];

$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments11, $renderChildrenClosure12, $renderingContext)]);

$output8 .= '</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure14 = function() use ($renderingContext) {
$output15 = '';

$output15 .= '
                            <tr>
                                <td class="col-icon">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array17 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.invalid'),
];

$expression18 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments16 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression18(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array17)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output19 = '';

$output19 .= '
                                            <span title="';
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
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.invalid',
];

$output19 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output19 .= '">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure23 = function() use ($renderingContext) {
return NULL;
};

$arguments22 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'overlay-missing',
];

$output19 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output19 .= '
                                            </span>
                                        ';
return $output19;
},
'__else' => function() use ($renderingContext) {
$output31 = '';

$output31 .= '
                                            <span title="id=';

$output31 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier')]);

$output31 .= '">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure33 = function() use ($renderingContext) {
return NULL;
};

$arguments32 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'content-form',
];

$output31 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments32, $renderChildrenClosure33, $renderingContext);

$output31 .= '
                                            </span>
                                        ';
return $output31;
},
'__elseIf' => [
    0 => [
        'condition' => function() use ($renderingContext) {

$array24 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.duplicateIdentifier'),
];

$expression25 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

return TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression25(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array24)),
    $renderingContext
);
},
        'body' => function() use ($renderingContext) {
$output26 = '';

$output26 .= '
                                            <span title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext) {
return NULL;
};

$arguments27 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_identifier',
];

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext)]);

$output26 .= ' ';

$output26 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier')]);

$output26 .= '">
                                                ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure30 = function() use ($renderingContext) {
return NULL;
};

$arguments29 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'overlay-missing',
];

$output26 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$output26 .= '
                                            </span>
                                        ';
return $output26;
}
    ],
],
];

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, static fn() => '', $renderingContext)
;

$output15 .= '
                                </td>
                                <td class="col-title">
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array35 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.invalid'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('form.readOnly'),
];

$expression36 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments34 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression36(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output37 = '';

$output37 .= '
                                                <div title="';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name')]);

$output37 .= '">';

$output37 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name')]);

$output37 .= '</div>
                                            ';
return $output37;
},
'__else' => function() use ($renderingContext) {
$output38 = '';

$output38 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure40 = function() use ($renderingContext) {
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name')]);
};

$array41 = [
'formPersistenceIdentifier' => $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier'),
];
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure43 = function() use ($renderingContext) {
return NULL;
};

$arguments42 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form',
];

$arguments39 = [
'additionalAttributes' => NULL,
'data' => NULL,
'aria' => NULL,
'class' => NULL,
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
'controller' => 'FormEditor',
'action' => 'index',
'arguments' => $array41,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments42, $renderChildrenClosure43, $renderingContext),
];

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext);

$output38 .= '
                                            ';
return $output38;
},
];

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments34, static fn() => '', $renderingContext)
;

$output15 .= '
                                </td>
                                <td><code>';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier')]);

$output15 .= '</code></td>
                                <td>
                                    ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array45 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.referenceCount'),
];

$expression46 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments44 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression46(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array45)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output47 = '';

$output47 .= '
                                            <a href="#" data-identifier="showReferences" data-form-persistence-identifier="';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier')]);

$output47 .= '" data-form-name="';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name')]);

$output47 .= '">
                                                <span class="badge badge-info">
                                                    ';

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount')]);

$output47 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure49 = function() use ($renderingContext) {
return NULL;
};

$arguments48 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references',
];

$output47 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext)]);

$output47 .= '
                                                </span>
                                            </a>
                                        ';
return $output47;
},
'__else' => function() use ($renderingContext) {
$output50 = '';

$output50 .= '
                                            <span class="badge badge-default">
                                                ';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.referenceCount')]);

$output50 .= ' ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext) {
return NULL;
};

$arguments51 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.references',
];

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output50 .= '
                                            </span>
                                        ';
return $output50;
},
];

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments44, static fn() => '', $renderingContext)
;

$output15 .= '
                                </td>
                                <td class="col-control">
                                    <div class="btn-group" role="group">
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array54 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.invalid'),
'1' => ' || ',
'2' => $renderingContext->getVariableProvider()->getByPath('form.readOnly'),
];

$expression55 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) || TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]));};

$arguments53 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression55(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array54)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output56 = '';

$output56 .= '
                                                <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext) {
return NULL;
};

$arguments57 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form_not_allowed',
];

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure60 = function() use ($renderingContext) {
return NULL;
};

$arguments59 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-open',
];

$output56 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output56 .= '</button>
                                            ';
return $output56;
},
'__else' => function() use ($renderingContext) {
$output61 = '';

$output61 .= '
                                                ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure63 = function() use ($renderingContext) {
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure68 = function() use ($renderingContext) {
return NULL;
};

$arguments67 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-open',
];
return TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments67, $renderChildrenClosure68, $renderingContext);
};

$array64 = [
'formPersistenceIdentifier' => $renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier'),
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
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.edit_form',
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
'controller' => 'FormEditor',
'action' => 'index',
'arguments' => $array64,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext),
'class' => 'btn btn-default form-record-open',
];

$output61 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);

$output61 .= '
                                            ';
return $output61;
},
];

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments53, static fn() => '', $renderingContext)
;

$output15 .= '
                                        ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array70 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.invalid'),
];

$expression71 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments69 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression71(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array70)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output72 = '';

$output72 .= '
                                            <button class="btn btn-default form-record-readonly" disabled="disabled" title="';
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
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_form_not_allowed',
];

$output72 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments73, $renderChildrenClosure74, $renderingContext)]);

$output72 .= '">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure76 = function() use ($renderingContext) {
return NULL;
};

$arguments75 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-duplicate',
];

$output72 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output72 .= '</button>
                                        ';
return $output72;
},
];

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, static fn() => '', $renderingContext)
;

$output15 .= '
                                        <div class="btn-group dropdown">
                                            <a href="#actions-';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier')]);

$output15 .= '" class="btn btn-default dropdown-toggle dropdown-toggle-no-chevron" data-bs-toggle="dropdown" data-bs-boundary="window" aria-expanded="false">';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure78 = function() use ($renderingContext) {
return NULL;
};

$arguments77 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-menu-alternative',
];

$output15 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output15 .= '</a>
                                            <ul id="actions-';

$output15 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.identifier')]);

$output15 .= '" class="dropdown-menu">
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array80 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.invalid'),
];

$expression81 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments79 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression81(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array80)),
    $renderingContext
),
'__else' => function() use ($renderingContext) {
$output82 = '';

$output82 .= '
                                                        <li>
                                                            <a href="#" class="dropdown-item" data-bs-original-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext) {
return NULL;
};

$arguments83 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form',
];

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext)]);

$output82 .= '" data-identifier="duplicateForm" data-form-persistence-identifier="';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier')]);

$output82 .= '" data-form-name="';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name')]);

$output82 .= '">
                                                                <span class="dropdown-item-columns">
                                                                    <span class="dropdown-item-column dropdown-item-column-icon text-';

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('cacheAction.severity')]);

$output82 .= '">
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure86 = function() use ($renderingContext) {
return NULL;
};

$arguments85 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-duplicate',
];

$output82 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);

$output82 .= '
                                                                    </span>
                                                                    <span class="dropdown-item-column dropdown-item-column-text">
                                                                        ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure88 = function() use ($renderingContext) {
return NULL;
};

$arguments87 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.duplicate_this_form',
];

$output82 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments87, $renderChildrenClosure88, $renderingContext)]);

$output82 .= '
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    ';
return $output82;
},
];

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments79, static fn() => '', $renderingContext)
;

$output15 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array90 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.referenceCount'),
];

$expression91 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};

$arguments89 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression91(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array90)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output92 = '';

$output92 .= '
                                                    <li>
                                                        <a href="#" class="dropdown-item" data-bs-original-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure94 = function() use ($renderingContext) {
return NULL;
};

$arguments93 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.show_references',
];

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments93, $renderChildrenClosure94, $renderingContext)]);

$output92 .= '" data-identifier="showReferences" data-form-persistence-identifier="';

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier')]);

$output92 .= '" data-form-name="';

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.name')]);

$output92 .= '">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure96 = function() use ($renderingContext) {
return NULL;
};

$arguments95 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-eye-link',
];

$output92 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments95, $renderChildrenClosure96, $renderingContext);

$output92 .= '
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext) {
return NULL;
};

$arguments97 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.show_references',
];

$output92 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext)]);

$output92 .= '
                                                        </a>
                                                    </li>
                                                ';
return $output92;
},
];

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments89, static fn() => '', $renderingContext)
;

$output15 .= '
                                                ';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper

$array100 = [
'0' => $renderingContext->getVariableProvider()->getByPath('form.removable'),
'1' => ' && (',
'2' => $renderingContext->getVariableProvider()->getByPath('form.invalid'),
'3' => ' == \'0\') && (',
'4' => $renderingContext->getVariableProvider()->getByPath('form.referenceCount'),
'5' => ' == \'0\')',
];

$expression101 = function($context) {return ((TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node2"]) == '0')) && (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node4"]) == '0'));};

$arguments99 = [
'then' => NULL,
'else' => NULL,
'condition' => TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
    $expression101(TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array100)),
    $renderingContext
),
'__then' => function() use ($renderingContext) {
$output102 = '';

$output102 .= '
                                                    <li>
                                                        <a href="#" class="dropdown-item" data-bs-original-title="';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure104 = function() use ($renderingContext) {
return NULL;
};

$arguments103 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form',
];

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext)]);

$output102 .= '" data-identifier="removeForm" data-form-persistence-identifier="';

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('form.persistenceIdentifier')]);

$output102 .= '">
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Core\ViewHelpers\IconViewHelper
$renderChildrenClosure106 = function() use ($renderingContext) {
return NULL;
};

$arguments105 = [
'size' => 'small',
'overlay' => NULL,
'state' => 'default',
'alternativeMarkupIdentifier' => NULL,
'title' => NULL,
'identifier' => 'actions-edit-delete',
];

$output102 .= TYPO3\CMS\Core\ViewHelpers\IconViewHelper::renderStatic($arguments105, $renderChildrenClosure106, $renderingContext);

$output102 .= '
                                                            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure108 = function() use ($renderingContext) {
return NULL;
};

$arguments107 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.delete_form',
];

$output102 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments107, $renderChildrenClosure108, $renderingContext)]);

$output102 .= '
                                                        </a>
                                                    </li>
                                                ';
return $output102;
},
];

$output15 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments99, static fn() => '', $renderingContext)
;

$output15 .= '
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        ';
return $output15;
};

$arguments13 = [
'key' => NULL,
'reverse' => false,
'iteration' => NULL,
'each' => $renderingContext->getVariableProvider()->getByPath('paginator.paginatedItems'),
'as' => 'form',
];

$output8 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments13, $renderChildrenClosure14, $renderingContext);

$output8 .= '
                    </tbody>
                </table>
            </div>
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure110 = function() use ($renderingContext) {
return NULL;
};

$arguments109 = [
'section' => NULL,
'delegate' => NULL,
'optional' => false,
'default' => NULL,
'contentAs' => NULL,
'debug' => true,
'partial' => 'Backend/FormManager/Pagination',
'arguments' => $renderingContext->getVariableProvider()->getAll(),
];

$output8 .= TYPO3\CMS\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);

$output8 .= '
        ';
return $output8;
},
'__else' => function() use ($renderingContext) {
$output111 = '';

$output111 .= '
            ';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper
$renderChildrenClosure113 = function() use ($renderingContext) {
$output116 = '';

$output116 .= '
                <p>';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure118 = function() use ($renderingContext) {
return NULL;
};

$arguments117 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.message',
];

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments117, $renderChildrenClosure118, $renderingContext)]);

$output116 .= '</p>
                <a class="btn btn-primary" href="#" data-identifier="newForm">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext) {
return NULL;
};

$arguments119 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.create_new_form',
];

$output116 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext)]);

$output116 .= '</a>
            ';
return $output116;
};
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext) {
return NULL;
};

$arguments114 = [
'id' => NULL,
'default' => NULL,
'arguments' => NULL,
'extensionName' => NULL,
'languageKey' => NULL,
'alternativeLanguageKeys' => NULL,
'key' => 'LLL:EXT:form/Resources/Private/Language/Database.xlf:formManager.forms_not_found.title',
];

$arguments112 = [
'message' => NULL,
'iconName' => NULL,
'disableIcon' => false,
'state' => -1,
'title' => TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext),
];
$renderChildrenClosure113 = ($arguments112['message'] !== null) ? function() use ($arguments112) { return $arguments112['message']; } : $renderChildrenClosure113;
$output111 .= TYPO3\CMS\Fluid\ViewHelpers\Be\InfoboxViewHelper::renderStatic($arguments112, $renderChildrenClosure113, $renderingContext);

$output111 .= '
        ';
return $output111;
},
];

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments5, static fn() => '', $renderingContext)
;

$output0 .= '

';

    return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
    $output121 = '';

$output121 .= '

';

$output121 .= '';

$output121 .= '

';

$output121 .= '';

$output121 .= '


';

    return $output121;
}

}

#