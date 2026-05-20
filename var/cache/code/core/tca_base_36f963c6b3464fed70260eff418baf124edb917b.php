<?php
return array (
  'tca' => 
  array (
    'be_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'adminOnly' => true,
        'groupName' => 'backendaccess',
        'rootLevel' => 1,
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-backend',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups',
        'useColumnsForDefaultValues' => 'file_permissions',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 50,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:db_mountpoints',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                'value' => '--div--',
                'icon' => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                'value' => 'readFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                'value' => 'writeFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                'value' => 'addFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                'value' => 'renameFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                'value' => 'moveFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                'value' => 'copyFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                'value' => 'deleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                'value' => 'recursivedeleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                'value' => '--div--',
                'icon' => 'mimetypes-other-other',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                'value' => 'readFile',
                'icon' => 'mimetypes-other-other',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                'value' => 'writeFile',
                'icon' => 'mimetypes-other-other',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                'value' => 'addFile',
                'icon' => 'mimetypes-other-other',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                'value' => 'renameFile',
                'icon' => 'mimetypes-other-other',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                'value' => 'replaceFile',
                'icon' => 'mimetypes-other-other',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                'value' => 'moveFile',
                'icon' => 'mimetypes-other-other',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                'value' => 'copyFile',
                'icon' => 'mimetypes-other-other',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                'value' => 'deleteFile',
                'icon' => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
        ),
        'pagetypes_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.pagetypes_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailablePageTypes',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'tables_modify' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableTables',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'tables_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableTables',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'non_exclude_fields' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExcludeFields',
            'size' => 25,
            'autoSizeMax' => 50,
          ),
        ),
        'explicit_allowdeny' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.explicit_allowdeny',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExplicitAuthValues',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
          ),
        ),
        'custom_options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.custom_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateCustomPermissionOptions',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'groupMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableUserModules',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'mfa_providers' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:mfa_providers',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Authentication\\Mfa\\MfaProviderRegistry->allowedProvidersItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'subgroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'AND NOT({#be_groups}.{#uid} = ###THIS_UID###)',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
        'availableWidgets' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:availableWidgets',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Dashboard\\WidgetRegistry->widgetItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,subgroup,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.base_rights,
                groupMods, availableWidgets, mfa_providers, tables_select, tables_modify, pagetypes_select, non_exclude_fields, explicit_allowdeny, allowed_languages, custom_options,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.mounts_and_workspaces,
                workspace_perms, db_mountpoints, file_mountpoints, file_permissions, category_perms,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'be_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'default_sortby' => 'admin, username',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'type' => 'admin',
        'typeicon_column' => 'admin',
        'typeicon_classes' => 
        array (
          0 => 'status-user-backend',
          1 => 'status-user-admin',
          'default' => 'status-user-backend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,options,db_mountpoints,file_mountpoints,file_permissions,userMods',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'username,email,realName',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'required' => true,
            'eval' => 'nospace,trim,lower,unique',
            'autocomplete' => false,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.password',
          'config' => 
          array (
            'type' => 'password',
            'passwordPolicy' => 'default',
            'size' => 20,
            'required' => true,
          ),
        ),
        'mfa' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.mfa',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'mfaInfo',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'size' => 5,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_list_title',
                ),
              ),
            ),
          ),
        ),
        'avatar' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
          'config' => 
          array (
            'type' => 'file',
            'maxitems' => 1,
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'avatar',
              'tablenames' => 'be_users',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 20,
          ),
        ),
        'realName' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'disable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isRecordCurrentUser:false',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
            'default' => 1,
          ),
        ),
        'admin' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.admin',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'fieldInformation' => 
            array (
              'adminIsSystemMaintainer' => 
              array (
                'renderType' => 'adminIsSystemMaintainer',
              ),
            ),
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
              ),
            ),
            'default' => 3,
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                'value' => '--div--',
                'icon' => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                'value' => 'readFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                'value' => 'writeFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                'value' => 'addFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                'value' => 'renameFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                'value' => 'moveFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                'value' => 'copyFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                'value' => 'deleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                'value' => 'recursivedeleteFolder',
                'icon' => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                'value' => '--div--',
                'icon' => 'mimetypes-other-other',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                'value' => 'readFile',
                'icon' => 'mimetypes-other-other',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                'value' => 'writeFile',
                'icon' => 'mimetypes-other-other',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                'value' => 'addFile',
                'icon' => 'mimetypes-other-other',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                'value' => 'renameFile',
                'icon' => 'mimetypes-other-other',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                'value' => 'replaceFile',
                'icon' => 'mimetypes-other-other',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                'value' => 'moveFile',
                'icon' => 'mimetypes-other-other',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                'value' => 'copyFile',
                'icon' => 'mimetypes-other-other',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                'value' => 'deleteFile',
                'icon' => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
        ),
        'lang' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.lang',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSystemLanguagesForBackend',
            'default' => 'default',
            'items' => 
            array (
            ),
            'itemGroups' => 
            array (
              'installed' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.installed',
              'unavailable' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.unavailable',
            ),
          ),
        ),
        'userMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableUserModules',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'lastlogin' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
            'default' => 0,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                admin, username, password, mfa, usergroup, lang, lastlogin,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.personal_data,
                realName, email, avatar,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.rights,
                userMods, allowed_languages,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.mounts_and_workspaces,
                workspace_perms, db_mountpoints, options, file_mountpoints, file_permissions, category_perms,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                disable, --palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        1 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                admin, username, password, mfa, usergroup, lang, lastlogin,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.personal_data,
                realName, email, avatar,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,
                TSconfig, db_mountpoints, options, file_mountpoints,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                disable, --palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'pages' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'rowDescription',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages',
        'type' => 'doktype',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'crdate' => 'crdate',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'editlock' => 'editlock',
        'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'doktype',
        'typeicon_classes' => 
        array (
          1 => 'apps-pagetree-page-default',
          '1-hideinmenu' => 'apps-pagetree-page-hideinmenu',
          '1-root' => 'apps-pagetree-page-domain',
          3 => 'apps-pagetree-page-shortcut-external',
          '3-hideinmenu' => 'apps-pagetree-page-shortcut-external-hideinmenu',
          '3-root' => 'apps-pagetree-page-shortcut-external-root',
          4 => 'apps-pagetree-page-shortcut',
          '4-hideinmenu' => 'apps-pagetree-page-shortcut-hideinmenu',
          '4-root' => 'apps-pagetree-page-shortcut-root',
          6 => 'apps-pagetree-page-backend-users',
          '6-hideinmenu' => 'apps-pagetree-page-backend-users-hideinmenu',
          '6-root' => 'apps-pagetree-page-backend-users-root',
          7 => 'apps-pagetree-page-mountpoint',
          '7-hideinmenu' => 'apps-pagetree-page-mountpoint-hideinmenu',
          '7-root' => 'apps-pagetree-page-mountpoint-root',
          199 => 'apps-pagetree-spacer',
          '199-hideinmenu' => 'apps-pagetree-spacer-hideinmenu',
          '199-root' => 'apps-pagetree-page-domain',
          254 => 'apps-pagetree-folder-default',
          '254-hideinmenu' => 'apps-pagetree-folder-default',
          '254-root' => 'apps-pagetree-page-domain',
          255 => 'apps-pagetree-page-recycler',
          '255-hideinmenu' => 'apps-pagetree-page-recycler',
          'contains-shop' => 'apps-pagetree-folder-contains-shop',
          'contains-approve' => 'apps-pagetree-folder-contains-approve',
          'contains-fe_users' => 'apps-pagetree-folder-contains-fe_users',
          'contains-board' => 'apps-pagetree-folder-contains-board',
          'contains-news' => 'apps-pagetree-folder-contains-news',
          'page-contentFromPid' => 'apps-pagetree-page-content-from-page',
          'page-contentFromPid-root' => 'apps-pagetree-page-content-from-page-root',
          'page-contentFromPid-hideinmenu' => 'apps-pagetree-page-content-from-page-hideinmenu',
          'default' => 'apps-pagetree-page-default',
          'contains-newsplugins' => 'apps-pagetree-page-contains-news',
        ),
        'searchFields' => 'title,nav_title,subtitle,url,slug,keywords,description,abstract,author,author_email',
      ),
      'interface' => 
      array (
        'maxDBListItems' => 30,
        'maxSingleDBListItems' => 50,
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
                'value' => '--div--',
                'group' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                'value' => '1',
                'icon' => 'apps-pagetree-page-default',
                'group' => 'default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                'value' => '6',
                'icon' => 'apps-pagetree-page-backend-users',
                'group' => 'default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
                'value' => '--div--',
                'group' => 'link',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                'value' => '4',
                'icon' => 'apps-pagetree-page-shortcut',
                'group' => 'link',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                'value' => '7',
                'icon' => 'apps-pagetree-page-mountpoint',
                'group' => 'link',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
                'value' => '3',
                'icon' => 'apps-pagetree-page-shortcut-external',
                'group' => 'link',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
                'value' => '--div--',
                'group' => 'special',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                'value' => '254',
                'icon' => 'apps-pagetree-folder-default',
                'group' => 'special',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.2',
                'value' => '255',
                'icon' => 'apps-filetree-folder-recycler',
                'group' => 'special',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                'value' => '199',
                'icon' => 'apps-pagetree-spacer',
                'group' => 'special',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
              'link' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
              'special' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
            ),
            'default' => '1',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'slug' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.slug',
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Compatibility\\PseudoSiteTcaDisplayCondition->isInPseudoSite:pages:false',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'fieldSeparator' => '/',
              'prefixParentPageSlug' => true,
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
          ),
        ),
        'TSconfig' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'php_tree_stop' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:php_tree_stop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.hidden_toggle',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'pages',
            'foreign_table_where' => 'AND {#pages}.{#uid}=###CURRENT_PID### AND {#pages}.{#sys_language_uid} = 0',
            'default' => 0,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'pages',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 7,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'extendToSubpages' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_hide' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_toggle',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'target' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 80,
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'eval' => 'trim',
          ),
        ),
        'url' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
            'eval' => 'trim',
            'softref' => 'url',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'lastUpdated' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'newUntil' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'cache_timeout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.1',
                'value' => 60,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.2',
                'value' => 300,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.3',
                'value' => 900,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.4',
                'value' => 1800,
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.5',
                'value' => 3600,
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.6',
                'value' => 14400,
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.7',
                'value' => 86400,
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.8',
                'value' => 172800,
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.9',
                'value' => 604800,
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.10',
                'value' => 2678400,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cache_tags' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_tags',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'no_search' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.shortcut_page',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.2',
                'value' => 2,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                'value' => 3,
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'content_from_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'mount_pid' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 23,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media',
          'config' => 
          array (
            'type' => 'file',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
              'tablenames' => 'pages',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'is_siteroot' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'mount_pid_ol' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.1',
                'value' => 1,
              ),
            ),
          ),
        ),
        'module' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module.I.4',
                'value' => 'fe_users',
                'icon' => 'status-user-frontend',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:news-folder',
                'value' => 'news',
                'icon' => 'apps-pagetree-folder-contains-news',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:news-page',
                'value' => 'newsplugins',
                'icon' => 'apps-pagetree-page-contains-news',
              ),
            ),
            'default' => '',
          ),
        ),
        'l18n_cfg' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.1',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.2',
              ),
            ),
          ),
        ),
        'backend_layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                'value' => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'fieldInformation' => 
            array (
              'backendLayoutFromParentPage' => 
              array (
                'renderType' => 'backendLayoutFromParentPage',
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'backend_layout_next_level' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                'value' => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'EXT:news :: Restrict pages to news records (news)',
                'value' => 'EXT:news/Configuration/TSconfig/Page/news_only.tsconfig',
              ),
              1 => 
              array (
                'label' => 'Bootstrap Package: Backend Layouts (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig',
              ),
              2 => 
              array (
                'label' => 'Bootstrap Package: TCEMAIN (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/TCEMAIN.tsconfig',
              ),
              3 => 
              array (
                'label' => 'Bootstrap Package: TCEFORM (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/TCEFORM.tsconfig',
              ),
              4 => 
              array (
                'label' => 'Bootstrap Package: All Content Elements (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/All.tsconfig',
              ),
              5 => 
              array (
                'label' => 'Bootstrap Package: Categories for Content Elements (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Categories.tsconfig',
              ),
              6 => 
              array (
                'label' => 'Bootstrap Package Content Element: Accordion (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Accordion.tsconfig',
              ),
              7 => 
              array (
                'label' => 'Bootstrap Package Content Element: Audio (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Audio.tsconfig',
              ),
              8 => 
              array (
                'label' => 'Bootstrap Package Content Element: Bullet List (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Bullets.tsconfig',
              ),
              9 => 
              array (
                'label' => 'Bootstrap Package Content Element: Card Group (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/CardGroup.tsconfig',
              ),
              10 => 
              array (
                'label' => 'Bootstrap Package Content Element: Carousel (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Carousel.tsconfig',
              ),
              11 => 
              array (
                'label' => 'Bootstrap Package Content Element: Carousel Small (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/CarouselSmall.tsconfig',
              ),
              12 => 
              array (
                'label' => 'Bootstrap Package Content Element: Carousel Fullscreen (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/CarouselFullscreen.tsconfig',
              ),
              13 => 
              array (
                'label' => 'Bootstrap Package Content Element: CSV (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Csv.tsconfig',
              ),
              14 => 
              array (
                'label' => 'Bootstrap Package Content Element: External Media (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/ExternalMedia.tsconfig',
              ),
              15 => 
              array (
                'label' => 'Bootstrap Package Content Element: Header (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Header.tsconfig',
              ),
              16 => 
              array (
                'label' => 'Bootstrap Package Content Element: Icon Group (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/IconGroup.tsconfig',
              ),
              17 => 
              array (
                'label' => 'Bootstrap Package Content Element: Image (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Image.tsconfig',
              ),
              18 => 
              array (
                'label' => 'Bootstrap Package Content Element: List Group (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/ListGroup.tsconfig',
              ),
              19 => 
              array (
                'label' => 'Bootstrap Package Content Element: Media (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Media.tsconfig',
              ),
              20 => 
              array (
                'label' => 'Bootstrap Package Content Element: Menu Cards (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuCardList.tsconfig',
              ),
              21 => 
              array (
                'label' => 'Bootstrap Package Content Element: Menu Cards of subpages (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuCardDir.tsconfig',
              ),
              22 => 
              array (
                'label' => 'Bootstrap Package Content Element: Menu Thumbnails (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuThumbnailList.tsconfig',
              ),
              23 => 
              array (
                'label' => 'Bootstrap Package Content Element: Menu Thumbnails of subpages (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuThumbnailDir.tsconfig',
              ),
              24 => 
              array (
                'label' => 'Bootstrap Package Content Element: Panel (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Panel.tsconfig',
              ),
              25 => 
              array (
                'label' => 'Bootstrap Package Content Element: Quote (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Quote.tsconfig',
              ),
              26 => 
              array (
                'label' => 'Bootstrap Package Content Element: Social Links (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/SocialLinks.tsconfig',
              ),
              27 => 
              array (
                'label' => 'Bootstrap Package Content Element: Tab (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Tab.tsconfig',
              ),
              28 => 
              array (
                'label' => 'Bootstrap Package Content Element: Table (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Table.tsconfig',
              ),
              29 => 
              array (
                'label' => 'Bootstrap Package Content Element: Text (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Text.tsconfig',
              ),
              30 => 
              array (
                'label' => 'Bootstrap Package Content Element: Text in Columns (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textcolumn.tsconfig',
              ),
              31 => 
              array (
                'label' => 'Bootstrap Package Content Element: Text and Icon (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Texticon.tsconfig',
              ),
              32 => 
              array (
                'label' => 'Bootstrap Package Content Element: Text and Media (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textmedia.tsconfig',
              ),
              33 => 
              array (
                'label' => 'Bootstrap Package Content Element: Text and Images (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textpic.tsconfig',
              ),
              34 => 
              array (
                'label' => 'Bootstrap Package Content Element: Text with Teaser (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textteaser.tsconfig',
              ),
              35 => 
              array (
                'label' => 'Bootstrap Package Content Element: Timeline (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Timeline.tsconfig',
              ),
              36 => 
              array (
                'label' => 'Bootstrap Package Content Element: File Links (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Uploads.tsconfig',
              ),
              37 => 
              array (
                'label' => 'Bootstrap Package Content Element: Gallery (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Gallery.tsconfig',
              ),
              38 => 
              array (
                'label' => 'artmediagallery12 (artmediagallery12)',
                'value' => 'EXT:artmediagallery12/Configuration/TsConfig/Page/All.tsconfig',
              ),
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.seo_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'no_index' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'onChange' => 'reload',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_index_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'no_follow' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_follow_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'sitemap_changefreq' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.always',
                'value' => 'always',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.hourly',
                'value' => 'hourly',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.daily',
                'value' => 'daily',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.weekly',
                'value' => 'weekly',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.monthly',
                'value' => 'monthly',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.yearly',
                'value' => 'yearly',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.never',
                'value' => 'never',
              ),
            ),
          ),
        ),
        'sitemap_priority' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_priority',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => '0.5',
            'items' => 
            array (
              0 => 
              array (
                'label' => '0.0',
                'value' => '0.0',
              ),
              1 => 
              array (
                'label' => '0.1',
                'value' => '0.1',
              ),
              2 => 
              array (
                'label' => '0.2',
                'value' => '0.2',
              ),
              3 => 
              array (
                'label' => '0.3',
                'value' => '0.3',
              ),
              4 => 
              array (
                'label' => '0.4',
                'value' => '0.4',
              ),
              5 => 
              array (
                'label' => '0.5',
                'value' => '0.5',
              ),
              6 => 
              array (
                'label' => '0.6',
                'value' => '0.6',
              ),
              7 => 
              array (
                'label' => '0.7',
                'value' => '0.7',
              ),
              8 => 
              array (
                'label' => '0.8',
                'value' => '0.8',
              ),
              9 => 
              array (
                'label' => '0.9',
                'value' => '0.9',
              ),
              10 => 
              array (
                'label' => '1.0',
                'value' => '1.0',
              ),
            ),
          ),
        ),
        'canonical_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
          'description' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link.description',
          'displayCond' => 'FIELD:no_index:=:0',
          'config' => 
          array (
            'type' => 'link',
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'url',
              2 => 'record',
            ),
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
              'allowedOptions' => 
              array (
                0 => 'params',
                1 => 'rel',
              ),
            ),
          ),
        ),
        'og_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'og_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'og_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'og_image',
              'tablenames' => 'pages',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'twitter_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'twitter_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'twitter_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'twitter_image',
              'tablenames' => 'pages',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'twitter_card' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 'summary',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card.summary',
                'value' => 'summary',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card.summary_large_image',
                'value' => 'summary_large_image',
              ),
            ),
          ),
        ),
        'nav_icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
        ),
        'nav_icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon',
          'displayCond' => 'FIELD:nav_icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'nav_icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
        ),
        'nav_icon' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:pages.nav_icon',
          'displayCond' => 'FIELD:nav_icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,png,svg',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'nav_icon',
              'tablenames' => 'pages',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'thumbnail' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:pages.thumbnail',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'thumbnail',
              'tablenames' => 'pages',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
          'l10n_mode' => 'exclude',
        ),
        'tx_yoastseo_snippetpreview' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:snippetPreview',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_hide_snippet_preview:REQ:false',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'snippetPreview',
            'settings' => 
            array (
              'titleField' => 'seo_title',
              'descriptionField' => 'description',
            ),
          ),
        ),
        'tx_yoastseo_readability_analysis' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:analysis',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_hide_snippet_preview:REQ:false',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'readabilityAnalysis',
          ),
        ),
        'tx_yoastseo_focuskeyword' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:seoFocusKeyword',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_hide_snippet_preview:REQ:false',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tx_yoastseo_focuskeyword_analysis' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:analysis',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_hide_snippet_preview:REQ:false',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'focusKeywordAnalysis',
            'settings' => 
            array (
              'focusKeywordField' => 'tx_yoastseo_focuskeyword',
            ),
          ),
        ),
        'tx_yoastseo_cornerstone' => 
        array (
          'label' => '',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'default' => 0,
            'renderType' => 'cornerstone',
          ),
        ),
        'tx_yoastseo_score_readability' => 
        array (
          'label' => '',
          'exclude' => false,
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_yoastseo_score_seo' => 
        array (
          'label' => '',
          'exclude' => false,
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_yoastseo_focuskeyword_related' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.fields.tx_yoastseo_focuskeyword_related',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_yoastseo_related_focuskeyword',
            'foreign_field' => 'uid_foreign',
            'foreign_table_field' => 'tablenames',
            'maxitems' => 5,
          ),
        ),
        'tx_yoastseo_insights' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.fields.tx_yoastseo_insights',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'insights',
          ),
        ),
        'tx_yoastseo_focuskeyword_synonyms' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:synonyms',
          'exclude' => true,
          'displayCond' => 'FIELD:tx_yoastseo_hide_snippet_preview:REQ:false',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tx_yoastseo_robots_noimageindex' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.fields.robots.noimageindex',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'invertStateDisplay' => true,
                'label' => '',
              ),
            ),
          ),
        ),
        'tx_yoastseo_robots_noarchive' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.fields.robots.noarchive',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'invertStateDisplay' => true,
                'label' => '',
              ),
            ),
          ),
        ),
        'tx_yoastseo_robots_nosnippet' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.fields.robots.nosnippet',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'invertStateDisplay' => true,
                'label' => '',
              ),
            ),
          ),
        ),
        'tx_yoastseo_hide_snippet_preview' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:hideSnippetPreview',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;title, nav_icon_set, nav_icon, nav_icon_identifier, --div--;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.tabs.seo, --palette--;Label;yoast-snippetpreview, , --palette--;;seo, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.readability;yoast-readability, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.focusKeyphrase;yoast-focuskeyword, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.focusRelatedKeyphrases;yoast-relatedkeywords, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.insights;yoast-insights, , --palette--;;robots, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.robots;yoast-advanced-robots, , --palette--;;canonical, --palette--;;sitemap, --div--;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.tabs.socialmedia, --palette--;;opengraph, --palette--;;twittercards, --palette--;LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:pages.palettes.advances;yoast-advanced, ,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout, thumbnail,
                    --palette--;;replace,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        6 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;title,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                    --palette--;;replace,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title, nav_icon_set, nav_icon, nav_icon_identifier,
                    --palette--;;external,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout, thumbnail,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title, nav_icon_set, nav_icon, nav_icon_identifier,
                    --palette--;;shortcut,
                    --palette--;;shortcutpage,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout, thumbnail,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        7 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title,
                    --palette--;;mountpoint,
                    --palette--;;mountpage,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        199 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;backend_layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;config,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        254 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;backend_layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;hiddenonly,
                    --palette--;;adminsonly,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        255 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;hiddenonly,
                    --palette--;;adminsonly,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'standard' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard',
          'showitem' => 'doktype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode_formlabel',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_formlabel',
        ),
        'mountpoint' => 
        array (
          'showitem' => 'mount_pid_ol;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol_formlabel',
        ),
        'mountpage' => 
        array (
          'showitem' => 'mount_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_formlabel',
        ),
        'external' => 
        array (
          'showitem' => 'url;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url_formlabel, target',
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title',
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, slug, --linebreak--, nav_title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle_formlabel',
        ),
        'titleonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title',
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, slug',
        ),
        'visibility' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.hidden_toggle_formlabel, nav_hide;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_toggle_formlabel',
        ),
        'hiddenonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access',
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel, extendToSubpages;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages_formlabel, --linebreak--, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_group_formlabel, --linebreak--,editlock',
        ),
        'abstract' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract',
          'showitem' => 'abstract;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract_formlabel',
        ),
        'metatags' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags',
          'showitem' => 'keywords;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.keywords_formlabel',
        ),
        'editorial' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial',
          'showitem' => 'author;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel, lastUpdated;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated_formlabel',
        ),
        'layout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout',
          'showitem' => 'layout, newUntil;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil_formlabel, --linebreak--, backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'backend_layout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout',
          'showitem' => 'backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'module' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.module',
          'showitem' => 'module;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module_formlabel',
        ),
        'replace' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.replace',
          'showitem' => 'content_from_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid_formlabel',
        ),
        'links' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links',
          'showitem' => 'target;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target_formlabel',
        ),
        'caching' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.caching',
          'showitem' => 'cache_timeout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout_formlabel, cache_tags',
        ),
        'language' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language',
          'showitem' => 'l18n_cfg;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg_formlabel',
        ),
        'miscellaneous' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous',
          'showitem' => 'is_siteroot;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot_formlabel, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, php_tree_stop;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.php_tree_stop_formlabel',
        ),
        'adminsonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous',
          'showitem' => 'editlock;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.editlock_formlabel',
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media',
          'showitem' => 'media;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media_formlabel',
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config',
          'showitem' => 'tsconfig_includes;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes, --linebreak--, TSconfig;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.TSconfig_formlabel',
        ),
        'seo' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.seo',
          'showitem' => '--linebreak--, tx_yoastseo_snippetpreview, --linebreak--, seo_title;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.seo_title, --linebreak--, --linebreak--, tx_yoastseo_cornerstone, --linebreak--, description;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
        ),
        'robots' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.robots',
          'showitem' => 'no_index;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_index_formlabel, no_follow;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_follow_formlabel',
        ),
        'canonical' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.canonical',
          'showitem' => 'canonical_link',
        ),
        'sitemap' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.sitemap',
          'showitem' => 'sitemap_changefreq, sitemap_priority',
        ),
        'opengraph' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.opengraph',
          'showitem' => 'og_title, --linebreak--, og_description, --linebreak--, og_image',
        ),
        'twittercards' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.twittercards',
          'showitem' => 'twitter_title, --linebreak--, twitter_description, --linebreak--, twitter_image, --linebreak--, twitter_card',
        ),
        'yoast-readability' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_readability_analysis',
        ),
        'yoast-focuskeyword' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_focuskeyword, --linebreak--, tx_yoastseo_focuskeyword_synonyms, --linebreak--, tx_yoastseo_focuskeyword_analysis',
        ),
        'yoast-relatedkeywords' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_focuskeyword_related ',
        ),
        'yoast-insights' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_insights',
        ),
        'yoast-advanced-robots' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_robots_noimageindex, tx_yoastseo_robots_noarchive, tx_yoastseo_robots_nosnippet',
        ),
        'yoast-advanced' => 
        array (
          'showitem' => '--linebreak--, tx_yoastseo_hide_snippet_preview',
        ),
      ),
    ),
    'sys_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'versioningWS' => true,
        'rootLevel' => -1,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'searchFields' => 'title,description',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_category',
        ),
        'security' => 
        array (
          'ignoreRootLevelRestriction' => true,
        ),
        'label_userFunc' => 'GeorgRinger\\News\\Hooks\\Labels->getUserLabelCategory',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title, slug, parent,
                --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.items,
                    items,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,--palette--;;timeRestriction, --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.tabs.seo, seo_title, seo_description, seo_headline, seo_text,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.options, images, description, single_pid, shortcut,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND {#sys_category}.{#pid}=###CURRENT_PID### AND {#sys_category}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.title',
          'config' => 
          array (
            'type' => 'input',
            'width' => 200,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.description',
          'config' => 
          array (
            'type' => 'text',
            'default' => '',
          ),
        ),
        'parent' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.parent',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.items',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => '*',
            'MM' => 'sys_category_record_mm',
            'MM_oppositeUsage' => 
            array (
              'tx_news_domain_model_news' => 
              array (
                0 => 'categories',
              ),
              'pages' => 
              array (
                0 => 'categories',
              ),
              'sys_file_metadata' => 
              array (
                0 => 'categories',
              ),
              'tt_content' => 
              array (
                0 => 'categories',
              ),
            ),
            'size' => 10,
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sorting' => 
        array (
          'label' => 'sorting',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'images' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.image',
          'config' => 
          array (
            'type' => 'file',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
              'showPossibleLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'images',
              'tablenames' => 'sys_category',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'single_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.single_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'searchWholePhrase' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.shortcut',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'searchWholePhrase' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'import_id' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'import_source' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_source',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'seo_headline' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_headline',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_title',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'seo_text' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_category.seo.seo_text',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
          ),
        ),
        'slug' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.slug',
          'displayCond' => 'VERSION:IS:false',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'replacements' => 
              array (
                '/' => '-',
              ),
            ),
            'fallbackCharacter' => '-',
            'eval' => 'unique',
            'default' => '',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'sys_file' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'type' => 'type',
        'hideTable' => true,
        'rootLevel' => 1,
        'default_sortby' => 'name ASC',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          1 => 'mimetypes-text-text',
          2 => 'mimetypes-media-image',
          3 => 'mimetypes-media-audio',
          4 => 'mimetypes-media-video',
          5 => 'mimetypes-application',
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'name, type, mime_type',
      ),
      'columns' => 
      array (
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.storage',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'maxitems' => 1,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.identifier',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.name',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.unknown',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.text',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.image',
                'value' => 2,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.audio',
                'value' => 3,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.video',
                'value' => 4,
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.software',
                'value' => 5,
              ),
            ),
          ),
        ),
        'mime_type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.mime_type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sha1' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.sha1',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'size' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.size',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'number',
            'size' => 8,
            'default' => 0,
          ),
        ),
        'missing' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.missing',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.metadata',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'inline',
            'foreign_table' => 'sys_file_metadata',
            'foreign_field' => 'file',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'fileinfo, storage, missing',
        ),
      ),
      'palettes' => 
      array (
      ),
    ),
    'sys_file_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-filetree-folder-media',
          'static' => 'apps-clipboard-images',
          'folder' => 'apps-filetree-folder-media',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'files,title',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND {#sys_file_collection}.{#pid}=###CURRENT_PID### AND {#sys_file_collection}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.0',
                'value' => 'static',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.1',
                'value' => 'folder',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.2',
                'value' => 'category',
              ),
            ),
          ),
        ),
        'files' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.files',
          'config' => 
          array (
            'type' => 'file',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'files',
              'tablenames' => 'sys_file_collection',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'folder_identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.folder',
          'config' => 
          array (
            'type' => 'folder',
            'minitems' => 1,
            'maxitems' => 1,
            'size' => 1,
          ),
        ),
        'recursive' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.recursive',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.category',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'static' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'folder' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,folder_identifier, recursive,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'category' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,category,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file_metadata' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata',
        'label' => 'file',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'type' => 'file:type',
        'hideTable' => true,
        'rootLevel' => 1,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'title,description,alternative',
      ),
      'columns' => 
      array (
        'crdate' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'sys_file_metadata',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_metadata',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'file' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:=:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file',
            'foreign_table_where' => 'AND {#sys_file}.{#uid} = ###REC_FIELD_file###',
            'minitems' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.title',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'placeholder' => '__row|file|name',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'alternative' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'width' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file.width',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'height' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file.height',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                fileinfo, alternative, description, title, --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
    ),
    'sys_file_reference' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference',
        'label' => 'uid_local',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'type' => 'uid_local:type',
        'hideTable' => true,
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'rootLevel' => -1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'title,description,alternative',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_reference',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'uid_local' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_local',
          'config' => 
          array (
            'type' => 'group',
            'size' => 1,
            'maxitems' => 1,
            'allowed' => 'sys_file',
            'hideSuggest' => true,
          ),
        ),
        'uid_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_foreign',
          'config' => 
          array (
            'type' => 'number',
            'size' => 10,
          ),
        ),
        'tablenames' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.tablenames',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fieldname' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.fieldname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sorting_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.sorting_foreign',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|title',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 20,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
            ),
          ),
        ),
        'description' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 5,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'alternative' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'nullable' => true,
            'placeholder' => '__row|uid_local|metadata|alternative',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'crop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
          'config' => 
          array (
            'type' => 'imageManipulation',
          ),
        ),
        'autoplay' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.autoplay',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'showinpreview' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_media.showinviews.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        1 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        2 => 
        array (
          'showitem' => '
				--palette--;;imageoverlayPalette,
				--palette--;;filePalette',
        ),
        3 => 
        array (
          'showitem' => '
				--palette--;;audioOverlayPalette,
				--palette--;;filePalette',
        ),
        4 => 
        array (
          'showitem' => '
				--palette--;;videoOverlayPalette,
				--palette--;;filePalette',
        ),
        5 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
      ),
      'palettes' => 
      array (
        'basicoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette',
          'showitem' => 'title,description',
        ),
        'imageoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette',
          'showitem' => '
				alternative,description,--linebreak--,
				link,title,--linebreak--,crop
				',
        ),
        'videoOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'audioOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'filePalette' => 
        array (
          'showitem' => 'uid_local, hidden, sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
        'newsPalette' => 
        array (
          'showitem' => 'showinpreview',
        ),
      ),
    ),
    'sys_file_storage' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'rootLevel' => 1,
        'groupName' => 'system',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'enablecolumns' => 
        array (
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_file_storage',
        ),
        'searchFields' => 'name,description',
      ),
      'columns' => 
      array (
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'is_browsable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_browsable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_default' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_default',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'eval' => 'maximumRecordsChecked',
            'validation' => 
            array (
              'maximumRecordsChecked' => 1,
            ),
          ),
        ),
        'is_public' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_public',
          'config' => 
          array (
            'default' => 1,
            'type' => 'user',
            'renderType' => 'userSysFileStorageIsPublic',
          ),
        ),
        'is_writable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_writable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_online' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_online',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'auto_extract_metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.auto_extract_metadata',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'processingfolder' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder.placeholder',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
          ),
        ),
        'driver' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.driver',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              'Local' => 
              array (
                'label' => 'Local filesystem',
                'value' => 'Local',
              ),
            ),
            'default' => 'Local',
            'onChange' => 'reload',
          ),
        ),
        'configuration' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.configuration',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'driver',
            'ds' => 
            array (
              'Local' => 'FILE:EXT:core/Configuration/Resource/Driver/LocalDriverFlexForm.xml',
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    name, driver, configuration, is_default, auto_extract_metadata, processingfolder,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:accesscapabilities,
                    --palette--;Capabilities;capabilities,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    is_online,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'capabilities' => 
        array (
          'showitem' => 'is_browsable, is_public, is_writable',
        ),
      ),
    ),
    'sys_filemounts' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_filemounts',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title,path',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.identifier',
          'config' => 
          array (
            'type' => 'folder',
            'required' => true,
            'maxitems' => 1,
            'size' => 1,
          ),
        ),
        'read_only' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.read_only',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title, identifier, read_only,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
    ),
    'sys_log' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_log',
        'label' => 'details',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => 1,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'userid' => 
        array (
          'label' => 'userid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'action' => 
        array (
          'label' => 'action',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recpid' => 
        array (
          'label' => 'recpid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'error' => 
        array (
          'label' => 'error',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details' => 
        array (
          'label' => 'details',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'type' => 
        array (
          'label' => 'type',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details_nr' => 
        array (
          'label' => 'details_nr',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'IP' => 
        array (
          'label' => 'IP',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'log_data' => 
        array (
          'label' => 'log_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'event_pid' => 
        array (
          'label' => 'event_pid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'workspace' => 
        array (
          'label' => 'workspace',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'NEWid' => 
        array (
          'label' => 'NEWid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'channel' => 
        array (
          'label' => 'channel',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'level' => 
        array (
          'label' => 'level',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'tstamp, userid, action, recuid, tablename, recpid, error, details, type, details_nr, IP, log_data, event_pid, workspace, NEWid',
        ),
      ),
    ),
    'sys_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_news',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_news',
        ),
        'searchFields' => 'title,content',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 5,
            'enableRichtext' => true,
            'richtextConfiguration' => 'sys_news',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.creationDate',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,content,crdate,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden, --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tx_scheduler_task_group' => 
    array (
      'ctrl' => 
      array (
        'label' => 'groupName',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-tx_scheduler_task_group',
        ),
        'adminOnly' => true,
        'groupName' => 'system',
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'searchFields' => 'groupName',
      ),
      'columns' => 
      array (
        'groupName' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.groupName',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'required' => true,
            'eval' => 'unique,trim',
            'softref' => 'substitute',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:scheduler/Resources/Private/Language/locallang_tca.xlf:tx_scheduler_task_group.description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    groupName,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
    ),
    'backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'groupName' => 'system',
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-backend_layout',
        ),
        'selicon_field' => 'icon',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'required' => true,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 25,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.icon',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'maxitems' => 1,
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon',
              'tablenames' => 'backend_layout',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,icon,config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
    ),
    'fe_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'groupName' => 'frontendaccess',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups',
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-frontend',
        ),
        'searchFields' => 'title,description',
        'type' => 'tx_extbase_type',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'required' => true,
            'eval' => 'trim',
          ),
        ),
        'subgroup' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'AND NOT({#fe_groups}.{#uid} = ###THIS_UID###)',
            'size' => 6,
            'autoSizeMax' => 10,
            'maxitems' => 20,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUserGroup',
                'value' => 'Tx_Extbase_Domain_Model_FrontendUserGroup',
              ),
            ),
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,subgroup,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUserGroup' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,subgroup,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
      ),
    ),
    'fe_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'default_sortby' => 'username',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'groupName' => 'frontendaccess',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'status-user-frontend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,disable,starttime,endtime',
        'searchFields' => 'username,name,first_name,last_name,middle_name,address,telephone,fax,email,title,zip,city,country,company,description',
        'type' => 'tx_extbase_type',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'required' => true,
            'eval' => 'nospace,trim,lower,uniqueInPid',
            'autocomplete' => false,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.password',
          'config' => 
          array (
            'type' => 'password',
            'passwordPolicy' => 'default',
            'size' => 20,
            'required' => true,
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'size' => 6,
            'minitems' => 1,
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'eval' => 'trim',
            'max' => 160,
          ),
        ),
        'first_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.first_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'middle_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.middle_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'last_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.last_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 3,
          ),
        ),
        'telephone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.phone',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 30,
          ),
        ),
        'fax' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fax',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
          ),
        ),
        'email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'email',
            'size' => 20,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title_person',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'zip' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.zip',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 10,
            'max' => 10,
          ),
        ),
        'city' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'country' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'www' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.www',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'company' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.company',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'maxitems' => 6,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'fe_users',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'disable' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'lastlogin' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
            'default' => 0,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser',
                'value' => 'Tx_Extbase_Domain_Model_FrontendUser',
              ),
            ),
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    username,password,usergroup,lastlogin,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personalData,
                    company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,
                    TSconfig,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    disable,--palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUser' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    username,password,usergroup,lastlogin,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personalData,
                    company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,
                    TSconfig,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    disable,--palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        2 => 
        array (
          'showitem' => 'first_name,--linebreak--,middle_name,--linebreak--,last_name',
        ),
      ),
    ),
    'sys_template' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template',
        'groupName' => 'system',
        'origUid' => 't3_origuid',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'adminOnly' => true,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'root',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-template-extension',
          1 => 'mimetypes-x-content-template',
        ),
        'searchFields' => 'title,constants,config',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'required' => true,
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
        ),
        'root' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.root',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.rootDescription',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'clear' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clear',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clearDescription',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Constants',
              ),
              1 => 
              array (
                'label' => 'Setup',
              ),
            ),
          ),
        ),
        'constants' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.constants',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 15,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
          ),
        ),
        'include_static_file' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_file',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_fileDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'maxitems' => 100,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'Form (form)',
                'value' => 'EXT:form/Configuration/TypoScript/',
              ),
              1 => 
              array (
                'label' => 'Fluid Content Elements (fluid_styled_content)',
                'value' => 'EXT:fluid_styled_content/Configuration/TypoScript/',
              ),
              2 => 
              array (
                'label' => 'Fluid Content Elements CSS (optional) (fluid_styled_content)',
                'value' => 'EXT:fluid_styled_content/Configuration/TypoScript/Styling/',
              ),
              3 => 
              array (
                'label' => 'XML Sitemap (seo)',
                'value' => 'EXT:seo/Configuration/TypoScript/XmlSitemap',
              ),
              4 => 
              array (
                'label' => 'News (news)',
                'value' => 'EXT:news/Configuration/TypoScript',
              ),
              5 => 
              array (
                'label' => 'News Sitemap (deprecated) (news)',
                'value' => 'EXT:news/Configuration/TypoScript/Sitemap',
              ),
              6 => 
              array (
                'label' => 'News Sitemap (tx_seo) (news)',
                'value' => 'EXT:news/Configuration/TypoScript/SeoSitemap',
              ),
              7 => 
              array (
                'label' => 'News Styles Twitter Bootstrap (news)',
                'value' => 'EXT:news/Configuration/TypoScript/Styles/Twb',
              ),
              8 => 
              array (
                'label' => 'News Styles Twitter Bootstrap V5 (news)',
                'value' => 'EXT:news/Configuration/TypoScript/Styles/Twb5',
              ),
              9 => 
              array (
                'label' => 'Bootstrap Package: Full Package (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TypoScript',
              ),
              10 => 
              array (
                'label' => 'Bootstrap Package: Content Elements (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TypoScript/ContentElement',
              ),
              11 => 
              array (
                'label' => 'Bootstrap Package: Bootstrap 5.x (SCSS) (bootstrap_package)',
                'value' => 'EXT:bootstrap_package/Configuration/TypoScript/Bootstrap5',
              ),
              12 => 
              array (
                'label' => 'artmediagallery12 (artmediagallery12)',
                'value' => 'EXT:artmediagallery12/Configuration/TypoScript',
              ),
              13 => 
              array (
                'label' => 'CKEditor Image Support (rte_ckeditor_image)',
                'value' => 'EXT:rte_ckeditor_image/Configuration/TypoScript/ImageRendering',
              ),
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'basedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOnDescription',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_template',
            'maxitems' => 50,
            'autoSizeMax' => 10,
            'default' => '',
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_edit',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_add',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'includeStaticAfterBasedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOnDescription',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.config',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 15,
            'cols' => 48,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'static_file_mode' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_modeDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title, constants, config,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.options,
                clear, root, include_static_file, basedOn, includeStaticAfterBasedOn, static_file_mode,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,--palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tt_content' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'subheader,bodytext',
        'descriptionColumn' => 'rowDescription',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'editlock' => 'editlock',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:tt_content',
        'delete' => 'deleted',
        'versioningWS' => true,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'type' => 'CType',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'colPos,sys_language_uid',
        'useColumnsForDefaultValues' => 'colPos,sys_language_uid,CType',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'previewRenderer' => 'TYPO3\\CMS\\Backend\\Preview\\StandardContentPreviewRenderer',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'CType',
        'typeicon_classes' => 
        array (
          'header' => 'mimetypes-x-content-header',
          'text' => 'mimetypes-x-content-text',
          'textpic' => 'mimetypes-x-content-text-picture',
          'image' => 'mimetypes-x-content-image',
          'textmedia' => 'mimetypes-x-content-text-media',
          'bullets' => 'mimetypes-x-content-list-bullets',
          'table' => 'mimetypes-x-content-table',
          'uploads' => 'mimetypes-x-content-list-files',
          'list' => 'mimetypes-x-content-plugin',
          'shortcut' => 'mimetypes-x-content-link',
          'script' => 'mimetypes-x-content-script',
          'div' => 'mimetypes-x-content-divider',
          'html' => 'mimetypes-x-content-html',
          'default' => 'mimetypes-x-content-text',
          'menu_abstract' => 'content-menu-abstract',
          'menu_categorized_content' => 'content-menu-categorized',
          'menu_categorized_pages' => 'content-menu-categorized',
          'menu_pages' => 'content-menu-pages',
          'menu_subpages' => 'content-menu-pages',
          'menu_recently_updated' => 'content-menu-recently-updated',
          'menu_related_pages' => 'content-menu-related',
          'menu_sitemap' => 'content-menu-sitemap',
          'menu_sitemap_pages' => 'content-menu-sitemap-pages',
          'menu_section' => 'content-menu-section',
          'menu_section_pages' => 'content-menu-section',
          'form_formframework' => 'content-form',
          'news_pi1' => 'ext-news-plugin-news-list',
          'news_newsliststicky' => 'ext-news-plugin-news-list-sticky',
          'news_newsdetail' => 'ext-news-plugin-news-detail',
          'news_newsdatemenu' => 'ext-news-plugin-news-date-menu',
          'news_newssearchform' => 'ext-news-plugin-news-search-form',
          'news_newssearchresult' => 'ext-news-plugin-news-search-result',
          'news_newsselectedlist' => 'ext-news-plugin-news-selected-list',
          'news_categorylist' => 'ext-news-plugin-category-list',
          'news_taglist' => 'ext-news-plugin-tag-list',
          'accordion' => 'content-bootstrappackage-accordion',
          'audio' => 'content-audio',
          'card_group' => 'content-bootstrappackage-card-group',
          'carousel' => 'content-bootstrappackage-carousel',
          'carousel_small' => 'content-bootstrappackage-carousel',
          'carousel_fullscreen' => 'content-bootstrappackage-carousel',
          'csv' => 'content-bootstrappackage-csv',
          'external_media' => 'content-bootstrappackage-externalmedia',
          'icon_group' => 'content-bootstrappackage-icon-group',
          'listgroup' => 'content-bootstrappackage-listgroup',
          'media' => 'mimetypes-x-content-multimedia',
          'menu_card_list' => 'content-bootstrappackage-menu-card',
          'menu_card_dir' => 'content-bootstrappackage-menu-card',
          'menu_thumbnail_list' => 'content-menu-thumbnail',
          'menu_thumbnail_dir' => 'content-menu-thumbnail',
          'panel' => 'content-panel',
          'quote' => 'content-quote',
          'social_links' => 'content-bootstrappackage-social-links',
          'tab' => 'content-bootstrappackage-tab',
          'textcolumn' => 'content-text-columns',
          'texticon' => 'content-bootstrappackage-texticon',
          'textteaser' => 'content-text-teaser',
          'timeline' => 'content-bootstrappackage-timeline',
          'gallery' => 'content-bootstrappackage-gallery',
        ),
        'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'CType' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
                'value' => '--div--',
                'group' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.0',
                'value' => 'header',
                'icon' => 'content-header',
                'group' => 'default',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.1',
                'value' => 'text',
                'icon' => 'content-text',
                'group' => 'default',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.2',
                'value' => 'textpic',
                'icon' => 'content-textpic',
                'group' => 'default',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.3',
                'value' => 'image',
                'icon' => 'content-image',
                'group' => 'default',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia',
                'value' => 'textmedia',
                'icon' => 'content-textmedia',
                'group' => 'default',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
                'value' => '--div--',
                'group' => 'lists',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.4',
                'value' => 'bullets',
                'icon' => 'content-bullets',
                'group' => 'lists',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.5',
                'value' => 'table',
                'icon' => 'content-table',
                'group' => 'lists',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.6',
                'value' => 'uploads',
                'icon' => 'content-special-uploads',
                'group' => 'lists',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
                'value' => '--div--',
                'group' => 'menu',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract',
                'value' => 'menu_abstract',
                'icon' => 'content-menu-abstract',
                'group' => 'menu',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content',
                'value' => 'menu_categorized_content',
                'icon' => 'content-menu-categorized',
                'group' => 'menu',
              ),
              13 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages',
                'value' => 'menu_categorized_pages',
                'icon' => 'content-menu-categorized',
                'group' => 'menu',
              ),
              14 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages',
                'value' => 'menu_pages',
                'icon' => 'content-menu-pages',
                'group' => 'menu',
              ),
              15 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages',
                'value' => 'menu_subpages',
                'icon' => 'content-menu-pages',
                'group' => 'menu',
              ),
              16 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated',
                'value' => 'menu_recently_updated',
                'icon' => 'content-menu-recently-updated',
                'group' => 'menu',
              ),
              17 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages',
                'value' => 'menu_related_pages',
                'icon' => 'content-menu-related',
                'group' => 'menu',
              ),
              18 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section',
                'value' => 'menu_section',
                'icon' => 'content-menu-section',
                'group' => 'menu',
              ),
              19 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages',
                'value' => 'menu_section_pages',
                'icon' => 'content-menu-section',
                'group' => 'menu',
              ),
              20 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap',
                'value' => 'menu_sitemap',
                'icon' => 'content-menu-sitemap',
                'group' => 'menu',
              ),
              21 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages',
                'value' => 'menu_sitemap_pages',
                'icon' => 'content-menu-sitemap-pages',
                'group' => 'menu',
              ),
              22 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
                'value' => '--div--',
                'group' => 'special',
              ),
              23 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.13',
                'value' => 'shortcut',
                'icon' => 'content-special-shortcut',
                'group' => 'special',
              ),
              24 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.14',
                'value' => 'list',
                'icon' => 'content-plugin',
                'group' => 'special',
              ),
              25 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.16',
                'value' => 'div',
                'icon' => 'content-special-div',
                'group' => 'special',
              ),
              26 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.17',
                'value' => 'html',
                'icon' => 'content-special-html',
                'group' => 'special',
              ),
              27 => 
              array (
                'label' => 'LLL:EXT:form/Resources/Private/Language/locallang.xlf:form_new_wizard_title',
                'value' => 'form_formframework',
                'icon' => 'content-form',
                'group' => 'forms',
                'description' => 'LLL:EXT:form/Resources/Private/Language/locallang.xlf:form_new_wizard_description',
              ),
              28 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_list.title',
                'value' => 'news_pi1',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
                'description' => '',
              ),
              29 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_list_sticky.title',
                'value' => 'news_newsliststicky',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
                'description' => '',
              ),
              30 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_detail.title',
                'value' => 'news_newsdetail',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
                'description' => '',
              ),
              31 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_date_menu.title',
                'value' => 'news_newsdatemenu',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
                'description' => '',
              ),
              32 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_search_form.title',
                'value' => 'news_newssearchform',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
                'description' => '',
              ),
              33 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_search_result.title',
                'value' => 'news_newssearchresult',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
                'description' => '',
              ),
              34 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.news_selected_list.title',
                'value' => 'news_newsselectedlist',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
                'description' => '',
              ),
              35 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.category_list.title',
                'value' => 'news_categorylist',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
                'description' => '',
              ),
              36 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_be.xlf:plugin.tag_list.title',
                'value' => 'news_taglist',
                'icon' => 'EXT:news/Resources/Public/Icons/Extension.svg',
                'group' => 'news',
                'description' => '',
              ),
              37 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.accordion',
                'value' => 'accordion',
                'icon' => 'content-bootstrappackage-accordion',
                'group' => 'bootstrap_package',
              ),
              38 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.audio',
                'value' => 'audio',
                'icon' => 'content-audio',
                'group' => 'bootstrap_package',
              ),
              39 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.card_group',
                'value' => 'card_group',
                'icon' => 'content-bootstrappackage-card-group',
                'group' => 'bootstrap_package',
              ),
              40 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel',
                'value' => 'carousel',
                'icon' => 'content-bootstrappackage-carousel',
                'group' => 'bootstrap_package',
              ),
              41 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel_small',
                'value' => 'carousel_small',
                'icon' => 'content-bootstrappackage-carousel',
                'group' => 'bootstrap_package',
              ),
              42 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel_fullscreen',
                'value' => 'carousel_fullscreen',
                'icon' => 'content-bootstrappackage-carousel',
                'group' => 'bootstrap_package',
              ),
              43 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.csv',
                'value' => 'csv',
                'icon' => 'content-bootstrappackage-csv',
                'group' => 'bootstrap_package',
              ),
              44 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.external_media',
                'value' => 'external_media',
                'icon' => 'content-bootstrappackage-externalmedia',
                'group' => 'bootstrap_package',
              ),
              45 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.gallery',
                'value' => 'gallery',
                'icon' => 'content-bootstrappackage-gallery',
                'group' => 'bootstrap_package',
              ),
              46 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.icon_group',
                'value' => 'icon_group',
                'icon' => 'content-bootstrappackage-icon-group',
                'group' => 'bootstrap_package',
              ),
              47 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.listgroup',
                'value' => 'listgroup',
                'icon' => 'content-bootstrappackage-listgroup',
                'group' => 'bootstrap_package',
              ),
              48 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.media',
                'value' => 'media',
                'icon' => 'mimetypes-x-content-multimedia',
                'group' => 'bootstrap_package',
              ),
              49 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card_list',
                'value' => 'menu_card_list',
                'icon' => 'content-bootstrappackage-menu-card',
                'group' => 'bootstrap_package',
              ),
              50 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card_dir',
                'value' => 'menu_card_dir',
                'icon' => 'content-bootstrappackage-menu-card',
                'group' => 'bootstrap_package',
              ),
              51 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_list',
                'value' => 'menu_thumbnail_list',
                'icon' => 'content-menu-thumbnail',
                'group' => 'bootstrap_package',
              ),
              52 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_dir',
                'value' => 'menu_thumbnail_dir',
                'icon' => 'content-menu-thumbnail',
                'group' => 'bootstrap_package',
              ),
              53 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.panel',
                'value' => 'panel',
                'icon' => 'content-panel',
                'group' => 'bootstrap_package',
              ),
              54 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.quote',
                'value' => 'quote',
                'icon' => 'content-quote',
                'group' => 'bootstrap_package',
              ),
              55 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.social_links',
                'value' => 'social_links',
                'icon' => 'content-bootstrappackage-social-links',
                'group' => 'bootstrap_package',
              ),
              56 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.tab',
                'value' => 'tab',
                'icon' => 'content-bootstrappackage-tab',
                'group' => 'bootstrap_package',
              ),
              57 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.textcolumn',
                'value' => 'textcolumn',
                'icon' => 'content-text-columns',
                'group' => 'bootstrap_package',
              ),
              58 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.texticon',
                'value' => 'texticon',
                'icon' => 'content-bootstrappackage-texticon',
                'group' => 'bootstrap_package',
              ),
              59 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.textteaser',
                'value' => 'textteaser',
                'icon' => 'content-text-teaser',
                'group' => 'bootstrap_package',
              ),
              60 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.timeline',
                'value' => 'timeline',
                'icon' => 'content-bootstrappackage-timeline',
                'group' => 'bootstrap_package',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
              'bootstrap_package' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:theme_name',
              'lists' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
              'menu' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
              'forms' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.forms',
              'special' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
            ),
            'default' => 'text',
            'authMode' => 'explicitAllow',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'tt_content',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l18n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND {#tt_content}.{#pid}=###CURRENT_PID### AND {#tt_content}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'frame_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_before',
                'value' => 'ruler-before',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_after',
                'value' => 'ruler-after',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent',
                'value' => 'indent',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_left',
                'value' => 'indent-left',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_right',
                'value' => 'indent-right',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.none',
                'value' => 'none',
              ),
            ),
            'default' => 'default',
          ),
          'onChange' => 'reload',
        ),
        'space_before_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                'value' => 'extra-small',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                'value' => 'small',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                'value' => 'medium',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                'value' => 'large',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                'value' => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'space_after_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                'value' => 'extra-small',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                'value' => 'small',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                'value' => 'medium',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                'value' => 'large',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                'value' => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'bullets_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'colPos' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->colPosListItemProcFunc',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.0',
                'value' => '1',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.normal',
                'value' => '0',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.3',
                'value' => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
            'default' => 0,
          ),
        ),
        'header' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                'value' => '5',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                'value' => '100',
              ),
            ),
            'default' => 0,
          ),
        ),
        'header_position' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                'value' => 'center',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                'value' => 'right',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                'value' => 'left',
              ),
            ),
            'default' => '',
          ),
        ),
        'header_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
            ),
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'bodytext' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 80,
            'rows' => 15,
            'softref' => 'typolink_tag,email[subst],url,rtehtmlarea_images',
            'search' => 
            array (
              'andWhere' => '{#CType}=\'text\' OR {#CType}=\'textpic\' OR {#CType}=\'textmedia\'',
            ),
          ),
        ),
        'image' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tt_content',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'assets' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'assets',
              'tablenames' => 'tt_content',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'imagewidth' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagewidth',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'range' => 
            array (
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageheight' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageheight',
          'config' => 
          array (
            'type' => 'number',
            'size' => 4,
            'range' => 
            array (
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageorient' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
                'value' => 0,
                'icon' => 'content-beside-text-img-above-center',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.1',
                'value' => 1,
                'icon' => 'content-beside-text-img-above-right',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.2',
                'value' => 2,
                'icon' => 'content-beside-text-img-above-left',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
                'value' => 8,
                'icon' => 'content-beside-text-img-below-center',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.4',
                'value' => 9,
                'icon' => 'content-beside-text-img-below-right',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.5',
                'value' => 10,
                'icon' => 'content-beside-text-img-below-left',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.6',
                'value' => 17,
                'icon' => 'content-inside-text-img-right',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.7',
                'value' => 18,
                'icon' => 'content-inside-text-img-left',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                'value' => 25,
                'icon' => 'content-beside-text-img-right',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                'value' => 26,
                'icon' => 'content-beside-text-img-left',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.imageorient.125',
                'value' => '125',
                'icon' => 'content-bootstrappackage-beside-text-img-centered-right',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.imageorient.126',
                'value' => '126',
                'icon' => 'content-bootstrappackage-beside-text-img-centered-left',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'imageborder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageborder',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '1',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => '2',
                'value' => 2,
              ),
              2 => 
              array (
                'label' => '3',
                'value' => 3,
              ),
              3 => 
              array (
                'label' => '4',
                'value' => 4,
              ),
              4 => 
              array (
                'label' => '5',
                'value' => 5,
              ),
              5 => 
              array (
                'label' => '6',
                'value' => 6,
              ),
              6 => 
              array (
                'label' => '7',
                'value' => 7,
              ),
              7 => 
              array (
                'label' => '8',
                'value' => 8,
              ),
            ),
            'default' => 2,
          ),
        ),
        'cols' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => '1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => '2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => '3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => '4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => '5',
                'value' => '5',
              ),
              6 => 
              array (
                'label' => '6',
                'value' => '6',
              ),
              7 => 
              array (
                'label' => '7',
                'value' => '7',
              ),
              8 => 
              array (
                'label' => '8',
                'value' => '8',
              ),
              9 => 
              array (
                'label' => '9',
                'value' => '9',
              ),
            ),
            'default' => 0,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.startingpoint',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 50,
          ),
        ),
        'recursive' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.recursive',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.0',
                'value' => '0',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.1',
                'value' => '1',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.2',
                'value' => '2',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.3',
                'value' => '3',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.4',
                'value' => '4',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.5',
                'value' => '250',
              ),
            ),
            'default' => 0,
          ),
        ),
        'list_type' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
                'group' => 'none',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
            ),
            'sortItems' => 
            array (
              'label' => 'asc',
            ),
            'default' => '',
            'authMode' => 'explicitAllow',
          ),
        ),
        'file_collections' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections',
          'config' => 
          array (
            'type' => 'group',
            'localizeReferencesAtParentLocalization' => true,
            'allowed' => 'sys_file_collection',
            'foreign_table' => 'sys_file_collection',
            'size' => 5,
            'fieldControl' => 
            array (
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'config' => 
          array (
            'type' => 'file',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
              'tablenames' => 'tt_content',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'filelink_size' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'filelink_sorting' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.extension',
                'value' => 'extension',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.name',
                'value' => 'name',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.type',
                'value' => 'type',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.size',
                'value' => 'size',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.creation_date',
                'value' => 'creation_date',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.modification_date',
                'value' => 'modification_date',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.title',
                'value' => 'title',
              ),
            ),
          ),
        ),
        'filelink_sorting_direction' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.ascending',
                'value' => 'asc',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.descending',
                'value' => 'desc',
              ),
            ),
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'default' => '',
          ),
        ),
        'records' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'tt_content,tx_news_domain_model_news',
            'size' => 5,
            'maxitems' => 200,
          ),
        ),
        'sectionIndex' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'linkToTop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'pi_flexform' => 
        array (
          'l10n_display' => 'hideDiff',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pi_flexform',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'list_type,CType',
            'ds' => 
            array (
              'default' => '
                        <T3DataStructure>
                          <ROOT>
                            <type>array</type>
                            <el>
                                <!-- Repeat an element like "xmlTitle" beneath for as many elements you like. Remember to name them uniquely  -->
                              <xmlTitle>
                                <label>The Title:</label>
                                <config>
                                    <type>input</type>
                                    <size>48</size>
                                </config>
                              </xmlTitle>
                            </el>
                          </ROOT>
                        </T3DataStructure>
                    ',
              '*,form_formframework' => 'FILE:EXT:form/Configuration/FlexForms/FormFramework.xml',
              '*,news_pi1' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_list.xml',
              '*,news_newsliststicky' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_list.xml',
              '*,news_newsdetail' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_detail.xml',
              '*,news_newsdatemenu' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_date_menu.xml',
              '*,news_newssearchform' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_search_form.xml',
              '*,news_newssearchresult' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_list.xml',
              '*,news_newsselectedlist' => 'FILE:EXT:news/Configuration/FlexForms/flexform_news_selected_list.xml',
              '*,news_categorylist' => 'FILE:EXT:news/Configuration/FlexForms/flexform_category_list.xml',
              '*,news_taglist' => 'FILE:EXT:news/Configuration/FlexForms/flexform_tag_list.xml',
              '*,accordion' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Accordion.xml',
              '*,card_group' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/CardGroup.xml',
              '*,carousel' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              '*,carousel_small' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              '*,carousel_fullscreen' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              '*,icon_group' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/IconGroup.xml',
              '*,menu_card_list' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuCard.xml',
              '*,menu_card_dir' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuCard.xml',
              '*,menu_thumbnail_list' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuThumbnail.xml',
              '*,menu_thumbnail_dir' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuThumbnail.xml',
              '*,tab' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Tab.xml',
              '*,timeline' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Timeline.xml',
            ),
            'search' => 
            array (
              'andWhere' => '{#CType}=\'list\'',
            ),
          ),
        ),
        'accessibility_title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'accessibility_bypass' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'accessibility_bypass_text' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'selected_categories' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:selected_categories',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
        'category_field' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:category_field',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'maxitems' => 1,
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableCategoryFields',
            'itemsProcConfig' => 
            array (
              'table' => 'tt_content',
            ),
          ),
        ),
        'table_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.default',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.striped',
                'value' => 'striped',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.bordered',
                'value' => 'bordered',
              ),
            ),
            'default' => '',
          ),
        ),
        'table_caption' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_caption',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'table_delimiter' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.124',
                'value' => 124,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.59',
                'value' => 59,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.44',
                'value' => 44,
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.58',
                'value' => 58,
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.9',
                'value' => 9,
              ),
            ),
            'default' => 124,
          ),
        ),
        'table_enclosure' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.39',
                'value' => 39,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.34',
                'value' => 34,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_header_position' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_tfoot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_tfoot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'uploads_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'uploads_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.1',
                'value' => 1,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.2',
                'value' => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_news_related_news' => 
        array (
          'label' => 'tx_news_related_news',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_bootstrappackage_accordion_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_accordion_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'tx_bootstrappackage_card_group_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_card_group_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'external_media_source' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.external_media_source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'max' => 1024,
          ),
        ),
        'external_media_ratio' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.external_media_ratio',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '16:9',
                'value' => '16by9',
              ),
              1 => 
              array (
                'label' => '4:3',
                'value' => '4by3',
              ),
            ),
          ),
        ),
        'tx_bootstrappackage_icon_group_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_icon_group_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'panel_class' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.panel_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.primary',
                'value' => 'primary',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.secondary',
                'value' => 'secondary',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.tertiary',
                'value' => 'tertiary',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.quaternary',
                'value' => 'quaternary',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.success',
                'value' => 'success',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.info',
                'value' => 'info',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.warning',
                'value' => 'warning',
              ),
              8 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.danger',
                'value' => 'danger',
              ),
              9 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.lighter',
                'value' => 'lighter',
              ),
              10 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.light',
                'value' => 'light',
              ),
              11 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.dark',
                'value' => 'dark',
              ),
              12 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.darker',
                'value' => 'darker',
              ),
            ),
          ),
        ),
        'quote_source' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'quote_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link',
            ),
          ),
        ),
        'tx_bootstrappackage_tab_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_tab_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon',
          'displayCond' => 'FIELD:icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
        ),
        'icon_file' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_file',
          'displayCond' => 'FIELD:icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,png,svg',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'minitems' => 1,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
              'tablenames' => 'tt_content',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'icon_position' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.left',
                'value' => 'left',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.right',
                'value' => 'right',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.top',
                'value' => 'top',
              ),
            ),
          ),
        ),
        'icon_type' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 'default',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.square',
                'value' => 'square',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.circle',
                'value' => 'circle',
              ),
            ),
          ),
        ),
        'icon_size' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_size',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                'value' => 'medium',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                'value' => 'large',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.awesome',
                'value' => 'awesome',
              ),
            ),
          ),
        ),
        'icon_color' => 
        array (
          'displayCond' => 'FIELD:icon_type:!=:default',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_color',
          'config' => 
          array (
            'type' => 'color',
            'default' => '#FFFFFF',
          ),
        ),
        'icon_background' => 
        array (
          'displayCond' => 'FIELD:icon_type:!=:default',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_background',
          'config' => 
          array (
            'type' => 'color',
            'default' => '#333333',
          ),
        ),
        'tx_bootstrappackage_timeline_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_timeline_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'frame_layout' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'embedded',
                'value' => 'embedded',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'frame_options' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_options.ruler_before',
                'value' => 'ruler-before',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_options.ruler_after',
                'value' => 'ruler-after',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_options.indent_left',
                'value' => 'indent-left',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_options.indent_right',
                'value' => 'indent-right',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_color_class' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_color_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'none',
                'value' => 'none',
              ),
              1 => 
              array (
                'label' => 'primary',
                'value' => 'primary',
              ),
              2 => 
              array (
                'label' => 'secondary',
                'value' => 'secondary',
              ),
              3 => 
              array (
                'label' => 'tertiary',
                'value' => 'tertiary',
              ),
              4 => 
              array (
                'label' => 'quaternary',
                'value' => 'quaternary',
              ),
              5 => 
              array (
                'label' => 'light',
                'value' => 'light',
              ),
              6 => 
              array (
                'label' => 'dark',
                'value' => 'dark',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                1 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                2 => 
                array (
                  'showitem' => '
                            crop,
                            --palette--;;filePalette
                        ',
                ),
                3 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                4 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                5 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
              ),
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'xlarge' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'background_image',
              'tablenames' => 'tt_content',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image_options' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image_options',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => 
            array (
              'default' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/BackgroundImage.xml',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'readmore_label' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.readmore_label',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'teaser' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.teaser',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'text',
            'softref' => 'typolink_tag',
            'cols' => '40',
            'rows' => '3',
          ),
        ),
        'tx_bootstrappackage_carousel_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_carousel_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'file_folder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.file_folder',
          'config' => 
          array (
            'type' => 'folder',
          ),
        ),
        'aspect_ratio' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.aspect_ratio',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                'value' => '1.3333333333333',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                'value' => '1.7777777777778',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                'value' => '1',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'items_per_page' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.items_per_page',
          'config' => 
          array (
            'type' => 'number',
            'size' => 2,
            'range' => 
            array (
              'lower' => 1,
              'upper' => 50,
            ),
            'default' => 10,
          ),
          'l10n_mode' => 'exclude',
        ),
        'tx_yoastseo_linking_suggestions' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/BackendModule.xlf:tx_yoastseo_linking_suggestions',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'internalLinkingSuggestion',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'CType',
        ),
        'bullets' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bullets_type,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'div' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
        ),
        'header' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'text' => 
        array (
          'previewRenderer' => 'Netresearch\\RteCKEditorImage\\Backend\\Preview\\RteImagePreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,tx_yoastseo_linking_suggestions,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'textpic' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\TextpicPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,tx_yoastseo_linking_suggestions,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image, file_folder, filelink_sorting,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'textmedia' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\TextmediaPreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,tx_yoastseo_linking_suggestions,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                    assets,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
            'assets' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'image' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\ImagePreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image, file_folder, filelink_sorting,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'html' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
        ),
        'list' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
                    list_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type_formlabel,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.list_formlabel,
                    recursive,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'subtype_value_field' => 'list_type',
        ),
        'menu_categorized_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    selected_categories,
                    category_field,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'pages',
                ),
              ),
            ),
          ),
        ),
        'menu_categorized_content' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    selected_categories,
                    category_field,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'tt_content',
                ),
              ),
            ),
          ),
        ),
        'menu_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_subpages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_sitemap' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_section' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_abstract' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_recently_updated' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_related_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_section_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_sitemap_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'shortcut' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,
                    records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
        ),
        'table' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.table.bodytext,
                    --palette--;;tableconfiguration,
                    table_caption,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;tablelayout,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'textTable',
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'uploads' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    --palette--;;uploads,
                    --palette--;;uploadslayout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'form_formframework' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin, pi_flexform,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'previewRenderer' => 'TYPO3\\CMS\\Form\\Hooks\\FormPagePreviewRenderer',
        ),
        'news_pi1' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newsliststicky' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newsdetail' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newsdatemenu' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newssearchform' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newssearchresult' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_newsselectedlist' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_categorylist' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'news_taglist' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            --palette--;;headers,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
            pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
          'previewRenderer' => 'GeorgRinger\\News\\Hooks\\PluginPreviewRenderer',
        ),
        'accordion' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_accordion_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'audio' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                assets,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'assets' => 
            array (
              'config' => 
              array (
                'allowed' => 'mp3',
                'disallowed' => '',
              ),
            ),
          ),
        ),
        'card_group' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            tx_bootstrappackage_card_group_item,
        --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.card_group.options,
            pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'carousel' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_carousel_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'carousel_small' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_carousel_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'carousel_fullscreen' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_carousel_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'csv' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,
                --palette--;;tableconfiguration,
                --palette--;;tablelayout,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'allowed' => 'csv',
                'disallowed' => '',
              ),
            ),
          ),
        ),
        'external_media' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.palette.external_media;external_media,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'icon_group' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_icon_group_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.icon_group.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'listgroup' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                bodytext,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel',
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'media' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                assets,
                file_folder,
                filelink_sorting,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'assets' => 
            array (
              'config' => 
              array (
                'allowed' => 'youtube,vimeo',
                'disallowed' => '',
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'menu_card_list' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                readmore_label,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'menu_card_dir' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                readmore_label,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'menu_thumbnail_list' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'menu_thumbnail_dir' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'panel' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header_minimal,
                bodytext,
                panel_class,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'quote' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
                quote_link;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link,
                quote_source;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.source,
                bodytext;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.text,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'social_links' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'tab' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_tab_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'textcolumn' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                bodytext,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'texticon' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                bodytext,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.icon,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon;bootstrap_package_icons,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'textteaser' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                teaser,
                bodytext,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'timeline' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_timeline_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'gallery' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
                --palette--;;headers,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                image,
                file_folder,
                filelink_sorting,
                --palette--;;mediaAdjustments,
                --palette--;;gallerySettings, aspect_ratio, items_per_page,
                --palette--;;imagelinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;;frames,
                --palette--;;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general',
          'showitem' => '
                CType;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                colPos;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos_formlabel,
            ',
        ),
        'header' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header',
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel
            ',
        ),
        'headers' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers',
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
                --linebreak--,
                subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel
            ',
        ),
        'gallerySettings' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings',
          'showitem' => '
                imageorient;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient_formlabel,
                imagecols;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols_formlabel
            ',
        ),
        'mediaAdjustments' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments',
          'showitem' => '
                imagewidth;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imagewidth,
                imageheight;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageheight,
                imageborder;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageborder
            ',
        ),
        'imagelinks' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks',
          'showitem' => '
                image_zoom;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom_formlabel
            ',
        ),
        'uploads' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'showitem' => '
                media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,
                --linebreak--,
                file_collections;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections.ALT.uploads_formlabel,
                --linebreak--,
                filelink_sorting,
                filelink_sorting_direction,
                target
            ',
        ),
        'menu_accessibility' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility',
          'showitem' => '
                accessibility_title;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_title_formlabel,
                --linebreak--,
                accessibility_bypass;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_formlabel,
                accessibility_bypass_text;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_text_formlabel
            ',
        ),
        'hidden' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden
            ',
        ),
        'language' => 
        array (
          'showitem' => '
                sys_language_uid,l18n_parent
            ',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                --linebreak--,editlock
            ',
        ),
        'uploadslayout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.uploads_layout',
          'showitem' => '
                filelink_size;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size_formlabel,
                uploads_description,
                uploads_type
            ',
        ),
        'appearanceLinks' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks',
          'showitem' => '
                sectionIndex;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex_formlabel,
                linkToTop;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop_formlabel
            ',
        ),
        'frames' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames',
          'showitem' => '
                layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
                frame_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class_formlabel,
                space_before_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class_formlabel,
                space_after_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class_formlabel,
            
    --linebreak--,
    frame_layout,
    frame_options,
    --linebreak--,
    background_color_class,
    --linebreak--,
    background_image,
    background_image_options,
',
        ),
        'tableconfiguration' => 
        array (
          'showitem' => '
                table_delimiter,
                table_enclosure
            ',
        ),
        'tablelayout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.table_layout',
          'showitem' => '
                cols,
                table_class,
                table_header_position,
                table_tfoot
            ',
        ),
        'external_media' => 
        array (
          'showitem' => '
        external_media_source, --linebreak--,
        external_media_ratio
    ',
        ),
        'bootstrap_package_icons' => 
        array (
          'showitem' => '
        icon_position, icon_type, icon_size, --linebreak--,
        icon_color, icon_background, --linebreak--,
        icon_set, --linebreak--,
        icon, icon_file
    ',
        ),
        'header_minimal' => 
        array (
          'showitem' => '
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
        --linebreak--,
        header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
    ',
        ),
      ),
    ),
    'be_dashboards' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:be_dashboard',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'content-dashboard',
        ),
        'searchFields' => 'identifier,title',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'cruser_id' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:identifier',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'required' => true,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    identifier,title,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden, --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tx_impexp_presets' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:tx_impexp_presets',
        'label' => 'title',
        'default_sortby' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'typeicon_classes' => 
        array (
          'default' => 'actions-cog',
        ),
        'hideTable' => true,
        'rootLevel' => -1,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'public' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:public',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'user_uid' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:user_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'item_uid' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:item_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'preset_data' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:preset_data',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, public, user_uid, item_uid, preset_data',
        ),
      ),
    ),
    'sys_redirect' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect',
        'descriptionColumn' => 'description',
        'label' => 'source_host',
        'label_alt' => 'source_path',
        'label_alt_force' => true,
        'crdate' => 'createdon',
        'tstamp' => 'updatedon',
        'versioningWS' => false,
        'groupName' => 'system',
        'default_sortby' => 'source_host, source_path',
        'rootLevel' => -1,
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disabled',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_redirect',
        ),
        'searchFields' => 'source_host,source_path,target,target_statuscode',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general, --palette--;;source, --palette--;;targetdetails, protected, creation_type,
                --div--;LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:tabs.redirectCount, disable_hitcount, hitcount, lasthiton, createdon,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, --palette--;;visibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes, description',
        ),
      ),
      'palettes' => 
      array (
        'visibility' => 
        array (
          'showitem' => 'disabled, --linebreak--, starttime, endtime',
        ),
        'source' => 
        array (
          'showitem' => 'source_host, --linebreak--, source_path, respect_query_parameters, is_regexp',
        ),
        'targetdetails' => 
        array (
          'showitem' => 'target, target_statuscode, --linebreak--, force_https, keep_query_parameters',
        ),
      ),
      'columns' => 
      array (
        'disabled' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
        ),
        'source_host' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_host',
          'config' => 
          array (
            'type' => 'input',
            'required' => true,
            'eval' => 'trim,TYPO3\\CMS\\Redirects\\Evaluation\\SourceHost',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_host_global_text',
                  1 => '*',
                ),
              ),
            ),
            'default' => '*',
          ),
        ),
        'source_path' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.source_path',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
            'eval' => 'trim',
            'placeholder' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_module_redirect.xlf:source_path.placeholder',
            'max' => 2048,
          ),
        ),
        'force_https' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.force_https.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'keep_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.keep_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'respect_query_parameters' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.respect_query_parameters.0',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target',
          'config' => 
          array (
            'type' => 'link',
            'required' => true,
            'allowedTypes' => 
            array (
              0 => 'page',
              1 => 'file',
              2 => 'url',
              3 => 'record',
            ),
            'appearance' => 
            array (
              'allowedOptions' => 
              array (
                0 => 'params',
                1 => 'rel',
              ),
            ),
          ),
        ),
        'target_statuscode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.301',
                'value' => 301,
                'group' => 'change',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.302',
                'value' => 302,
                'group' => 'change',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.303',
                'value' => 303,
                'group' => 'change',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.307',
                'value' => 307,
                'group' => 'keep',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.308',
                'value' => 308,
                'group' => 'keep',
              ),
            ),
            'itemGroups' => 
            array (
              'keep' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.keep',
              'change' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.target_statuscode.change',
            ),
            'default' => 307,
          ),
        ),
        'hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcount',
          'config' => 
          array (
            'type' => 'input',
            'size' => 5,
            'default' => 0,
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'lasthiton' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.lasthiton',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'createdon' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.creationDate',
          'config' => 
          array (
            'type' => 'datetime',
            'readOnly' => true,
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'disable_hitcount' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.hitcountState',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'labelChecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
                'labelUnchecked' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.disabled',
                'invertStateDisplay' => true,
              ),
            ),
          ),
          'displayCond' => 'USER:TYPO3\\CMS\\Redirects\\UserFunctions\\HitCountDisplayCondition->isEnabled',
        ),
        'is_regexp' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.is_regexp',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'protected' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.protected',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.protected.description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'creation_type' => 
        array (
          'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type',
          'description' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type.description',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type.0',
                'value' => 0,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:redirects/Resources/Private/Language/locallang_db.xlf:sys_redirect.creation_type.1',
                'value' => 1,
              ),
            ),
            'default' => 1,
            'readOnly' => true,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 40,
          ),
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_extension' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => 1,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'columns' => 
      array (
        'extension_key' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.extensionkey',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.version',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'alldownloadcounter' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'integer_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.integerversion',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.state',
          'config' => 
          array (
            'type' => 'number',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.category',
          'config' => 
          array (
            'type' => 'number',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
          ),
        ),
        'last_updated' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.lastupdated',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'update_comment' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.updatecomment',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'author_name' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authorname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'author_email' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authoremail',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'current_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.currentversion',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'review_state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.reviewstate',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'md5hash' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.md5hash',
          'config' => 
          array (
            'type' => 'input',
            'size' => 1,
          ),
        ),
        'serialized_dependencies' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.serializedDependencies',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'documentation_link' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.documentation_link',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'distribution_image' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.distribution_image',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'distribution_welcome_image' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.distribution_welcome_image',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'remote' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.remote',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'extensionkey, version, integer_version, title, description, state, category, last_updated, update_comment, author_name, author_email, review_state, md5hash, serialized_dependencies, documentation_link, distribution_image, distribution_welcome_image',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'tx_news_domain_model_link' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'label_alt' => 'uri',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-link',
        ),
        'hideTable' => true,
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_news_domain_model_link',
            'foreign_table_where' => 'AND tx_news_domain_model_link.pid=###CURRENT_PID### AND tx_news_domain_model_link.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'uri' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.uri',
          'config' => 
          array (
            'type' => 'link',
            'placeholder' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_link.uri.placeholder',
            'required' => true,
            'softref' => 'typolink',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'eval' => '',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'uri, --palette--;;paletteCore,title, --palette--;;paletteDescription',
        ),
      ),
      'palettes' => 
      array (
        'paletteCore' => 
        array (
          'showitem' => 'hidden,sys_language_uid,l10n_parent, l10n_diffsource,',
        ),
        'paletteDescription' => 
        array (
          'showitem' => 'description',
        ),
      ),
    ),
    'tx_news_domain_model_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news',
        'descriptionColumn' => 'notes',
        'label' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'hideAtCopy' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'editlock' => 'editlock',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-type-default',
          1 => 'ext-news-type-internal',
          2 => 'ext-news-type-external',
        ),
        'useColumnsForDefaultValues' => 'type',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'default_sortby' => 'datetime DESC',
        'sortby' => '',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'iconfile' => 'EXT:news/Resources/Public/Icons/news_domain_model_news.svg',
        'searchFields' => 'uid,title',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'tx_news_domain_model_news',
            'size' => 1,
            'maxitems' => 1,
            'minitems' => 0,
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
            ),
          ),
        ),
        'cruser_id' => 
        array (
          'label' => 'cruser_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'sorting' => 
        array (
          'label' => 'sorting',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                'value' => -1,
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                'value' => -2,
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                'value' => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'ORDER BY fe_groups.title',
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 60,
            'max' => 255,
            'eval' => '',
            'required' => true,
          ),
        ),
        'alternative_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.alternative_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'teaser' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.teaser',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 60,
            'rows' => 5,
            'enableRichtext' => false,
          ),
        ),
        'bodytext' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'datetime' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.datetime',
          'config' => 
          array (
            'type' => 'datetime',
            'required' => true,
          ),
        ),
        'archive' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'copy',
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.archive',
          'config' => 
          array (
            'type' => 'datetime',
            'format' => 'date',
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'showHeader' => true,
                'expandAll' => true,
                'maxLevels' => 99,
              ),
            ),
            'MM' => 'sys_category_record_mm',
            'MM_match_fields' => 
            array (
              'fieldname' => 'categories',
              'tablenames' => 'tx_news_domain_model_news',
            ),
            'MM_opposite_field' => 'items',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND (sys_category.sys_language_uid = 0 OR sys_category.l10n_parent = 0) ORDER BY sys_category.sorting',
            'size' => 30,
            'minitems' => 0,
            'maxitems' => 99,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'related' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'tx_news_domain_model_news',
            'foreign_table' => 'tx_news_domain_model_news',
            'MM_opposite_field' => 'related_from',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 100,
            'MM' => 'tx_news_domain_model_news_related_mm',
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'suggestOptions' => true,
                'addWhere' => ' AND tx_news_domain_model_news.uid != ###THIS_UID###',
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'related_from' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related_from',
          'config' => 
          array (
            'type' => 'group',
            'foreign_table' => 'tx_news_domain_model_news',
            'allowed' => 'tx_news_domain_model_news',
            'size' => 5,
            'maxitems' => 100,
            'MM' => 'tx_news_domain_model_news_related_mm',
            'readOnly' => 1,
          ),
        ),
        'related_links' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.related_links',
          'config' => 
          array (
            'type' => 'inline',
            'allowed' => 'tx_news_domain_model_link',
            'foreign_table' => 'tx_news_domain_model_link',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'parent',
            'size' => 5,
            'minitems' => 0,
            'maxitems' => 100,
            'appearance' => 
            array (
              'collapseAll' => true,
              'expandSingle' => true,
              'levelLinksPosition' => 'bottom',
              'useSortable' => true,
              'showPossibleLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
              'enabledControls' => 
              array (
                'info' => false,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'type' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.0',
                'value' => 0,
                'icon' => 'ext-news-type-default',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.1',
                'value' => 1,
                'icon' => 'ext-news-type-internal',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.2',
                'value' => 2,
                'icon' => 'ext-news-type-external',
              ),
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'placeholder' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.keywords.placeholder',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'internalurl' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.type.I.1',
          'config' => 
          array (
            'type' => 'link',
            'required' => true,
          ),
        ),
        'externalurl' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => '',
            'softref' => 'typolink',
            'required' => true,
          ),
        ),
        'istopnews' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.istopnews',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
            ),
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'content_elements' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.content_elements',
          'config' => 
          array (
            'type' => 'inline',
            'allowed' => 'tt_content',
            'foreign_table' => 'tt_content',
            'foreign_sortby' => 'sorting',
            'foreign_field' => 'tx_news_related_news',
            'minitems' => 0,
            'maxitems' => 99,
            'appearance' => 
            array (
              'collapseAll' => true,
              'expandSingle' => true,
              'levelLinksPosition' => 'bottom',
              'useSortable' => true,
              'showPossibleLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
              'enabledControls' => 
              array (
                'info' => false,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'tags' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tags',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'MM' => 'tx_news_domain_model_news_tag_mm',
            'foreign_table' => 'tx_news_domain_model_tag',
            'foreign_table_where' => ' AND (tx_news_domain_model_tag.sys_language_uid IN (-1,0) OR tx_news_domain_model_tag.l10n_parent = 0) ORDER BY tx_news_domain_model_tag.title',
            'size' => 10,
            'maxitems' => 99,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'minimumCharacters' => 2,
                'searchWholePhrase' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'path_segment' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.path_segment',
          'displayCond' => 'VERSION:IS:false',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'replacements' => 
              array (
                '/' => '-',
              ),
            ),
            'fallbackCharacter' => '-',
            'eval' => 'unique',
            'default' => '',
            'appearance' => 
            array (
              'prefix' => 'GeorgRinger\\News\\Backend\\FormEngine\\SlugPrefix->getPrefix',
            ),
          ),
        ),
        'import_id' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_id',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'import_source' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.import_source',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'fal_media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_media',
          'config' => 
          array (
            'type' => 'file',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_media.add',
              'showPossibleLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;newsPalette,
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'allowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'fal_media',
              'tablenames' => 'tx_news_domain_model_news',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'fal_related_files' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_related_files',
          'config' => 
          array (
            'type' => 'file',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.fal_related_files.add',
              'showPossibleLocalizationRecords' => true,
              'showAllLocalizationLink' => true,
              'showSynchronizationLink' => true,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
            'inline' => 
            array (
              'inlineOnlineMediaAddButtonStyle' => 'display:none',
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'fal_related_files',
              'tablenames' => 'tx_news_domain_model_news',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'notes' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
          ),
        ),
        'sitemap_changefreq' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.none',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.always',
                'value' => 'always',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.hourly',
                'value' => 'hourly',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.daily',
                'value' => 'daily',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.weekly',
                'value' => 'weekly',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.monthly',
                'value' => 'monthly',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.yearly',
                'value' => 'yearly',
              ),
              7 => 
              array (
                'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.never',
                'value' => 'never',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
          ),
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq',
        ),
        'sitemap_priority' => 
        array (
          'config' => 
          array (
            'items' => 
            array (
              0 => 
              array (
                'label' => '0.0',
                'value' => '0.0',
              ),
              1 => 
              array (
                'label' => '0.1',
                'value' => '0.1',
              ),
              2 => 
              array (
                'label' => '0.2',
                'value' => '0.2',
              ),
              3 => 
              array (
                'label' => '0.3',
                'value' => '0.3',
              ),
              4 => 
              array (
                'label' => '0.4',
                'value' => '0.4',
              ),
              5 => 
              array (
                'label' => '0.5',
                'value' => '0.5',
              ),
              6 => 
              array (
                'label' => '0.6',
                'value' => '0.6',
              ),
              7 => 
              array (
                'label' => '0.7',
                'value' => '0.7',
              ),
              8 => 
              array (
                'label' => '0.8',
                'value' => '0.8',
              ),
              9 => 
              array (
                'label' => '0.9',
                'value' => '0.9',
              ),
              10 => 
              array (
                'label' => '1.0',
                'value' => '1.0',
              ),
            ),
            'renderType' => 'selectSingle',
            'type' => 'select',
            'default' => '0.5',
          ),
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_priority',
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,
                    --palette--;;paletteDate,
                    bodytext,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.content_elements,
                    content_elements,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                    fal_media,fal_related_files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,
                    related,related_from,
                    related_links,tags,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,
                    --palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles, --palette--;;sitemap,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;paletteLanguage,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;paletteHidden,
                    --palette--;;paletteAccess,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,
                    notes,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
        1 => 
        array (
          'showitem' => '--palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,
                    internalurl,
                    --palette--;;paletteDate,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                    fal_media,fal_related_files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,
                    related,related_from,
                    related_links,tags,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,
                    --palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles, --palette--;;sitemap,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;paletteLanguage,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;paletteHidden,
                    --palette--;;paletteAccess,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,
                    notes,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
        2 => 
        array (
          'showitem' => '--palette--;;paletteCore,title,--palette--;;paletteSlug,teaser,
                    externalurl,
                    --palette--;;paletteDate,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                    fal_media,fal_related_files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.tabs.relations,
                    related,related_from,
                    related_links,tags,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;paletteAuthor,
                    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags;metatags,
                    --palette--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.alternativeTitles;alternativeTitles, --palette--;;sitemap,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;paletteLanguage,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;paletteHidden,
                    --palette--;;paletteAccess,
                --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,
                    notes,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended',
        ),
      ),
      'palettes' => 
      array (
        'paletteAuthor' => 
        array (
          'showitem' => 'author,author_email,',
        ),
        'paletteDate' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_news.palettes.dates',
          'showitem' => 'datetime,archive,',
        ),
        'paletteCore' => 
        array (
          'showitem' => 'type,istopnews,',
        ),
        'metatags' => 
        array (
          'showitem' => 'keywords,description,',
        ),
        'alternativeTitles' => 
        array (
          'showitem' => 'alternative_title',
        ),
        'paletteHidden' => 
        array (
          'showitem' => '
                hidden
            ',
        ),
        'paletteAccess' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                --linebreak--,editlock
            ',
        ),
        'paletteLanguage' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l10n_parent, l10n_diffsource,
            ',
        ),
        'paletteSlug' => 
        array (
          'showitem' => '
                path_segment
            ',
        ),
        'sitemap' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.sitemap',
          'showitem' => 'sitemap_changefreq,sitemap_priority',
        ),
      ),
    ),
    'tx_news_domain_model_tag' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag',
        'descriptionColumn' => 'notes',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'default_sortby' => 'title',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'ext-news-tag',
        ),
        'searchFields' => 'uid,title',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => '',
              ),
            ),
            'foreign_table' => 'tx_news_domain_model_tag',
            'foreign_table_where' => 'AND tx_news_domain_model_tag.pid=###CURRENT_PID### AND tx_news_domain_model_tag.sys_language_uid IN (-1,0)',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => true,
              ),
            ),
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'pid' => 
        array (
          'label' => 'pid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'crdate',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'datetime',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => false,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => ',unique,trim',
            'required' => true,
          ),
        ),
        'slug' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.slug',
          'displayCond' => 'VERSION:IS:false',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'replacements' => 
              array (
                '/' => '-',
              ),
            ),
            'fallbackCharacter' => '-',
            'eval' => 'unique',
            'default' => '',
          ),
        ),
        'seo_headline' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_headline',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_title',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'seo_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_description',
          'config' => 
          array (
            'type' => 'text',
          ),
        ),
        'seo_text' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.seo.seo_text',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
          ),
        ),
        'notes' => 
        array (
          'label' => 'LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 10,
            'cols' => 48,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, slug, --palette--;;paletteCore,
            --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:tx_news_domain_model_tag.tabs.seo, seo_title, seo_description, seo_headline, seo_text,
            --div--;LLL:EXT:news/Resources/Private/Language/locallang_db.xlf:notes,
                    notes,
			--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.extended,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;paletteLanguage,',
        ),
      ),
      'palettes' => 
      array (
        'paletteCore' => 
        array (
          'showitem' => 'hidden,',
        ),
        'paletteLanguage' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l10n_parent, l10n_diffsource,
            ',
        ),
      ),
    ),
    'tx_bootstrappackage_accordion_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'bodytext',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-accordion-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header,
                bodytext,
                media,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaposition;mediaposition,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'mediaposition' => 
        array (
          'showitem' => '
                mediaorient,
                imagecols,
                image_zoom,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'accordion\'',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_accordion_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_accordion_item.pid=###CURRENT_PID### AND tx_bootstrappackage_accordion_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.media',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
              'tablenames' => 'tx_bootstrappackage_accordion_item',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'mediaorient' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.left',
                'value' => 'left',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.top',
                'value' => 'top',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.right',
                'value' => 'right',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.bottom',
                'value' => 'bottom',
              ),
            ),
            'default' => 'left',
          ),
          'l10n_mode' => 'exclude',
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '1',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => '2',
                'value' => 2,
              ),
              2 => 
              array (
                'label' => '3',
                'value' => 3,
              ),
              3 => 
              array (
                'label' => '4',
                'value' => 4,
              ),
              4 => 
              array (
                'label' => '5',
                'value' => 5,
              ),
              5 => 
              array (
                'label' => '6',
                'value' => 6,
              ),
            ),
            'default' => 2,
          ),
          'l10n_mode' => 'exclude',
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_card_group_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-card-group-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.header;header,
                image,
                bodytext,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link;link,
                icon_file,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                header,
                --linebreak--,
                subheader,
            ',
        ),
        'link' => 
        array (
          'showitem' => '
                link,
                link_title,
                --linebreak--,
                link_class,
                --linebreak--,
                link_icon_set,
                --linebreak--,
                link_icon_identifier,
                link_icon,
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'card_group\'',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_card_group_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_card_group_item.pid=###CURRENT_PID### AND tx_bootstrappackage_card_group_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tx_bootstrappackage_card_group_item',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.bodytext',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'link' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link',
            ),
          ),
        ),
        'link_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'link_icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
        ),
        'link_icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_icon_identifier',
          'displayCond' => 'FIELD:link_icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'link_icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
        ),
        'link_icon' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_icon',
          'displayCond' => 'FIELD:link_icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,png,svg',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'link_icon',
              'tablenames' => 'tx_bootstrappackage_card_group_item',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'link_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'default',
                'value' => 'default',
              ),
              1 => 
              array (
                'label' => 'primary',
                'value' => 'primary',
              ),
              2 => 
              array (
                'label' => 'secondary',
                'value' => 'secondary',
              ),
              3 => 
              array (
                'label' => 'tertiary',
                'value' => 'tertiary',
              ),
              4 => 
              array (
                'label' => 'quaternary',
                'value' => 'quaternary',
              ),
              5 => 
              array (
                'label' => 'success',
                'value' => 'success',
              ),
              6 => 
              array (
                'label' => 'info',
                'value' => 'info',
              ),
              7 => 
              array (
                'label' => 'warning',
                'value' => 'warning',
              ),
              8 => 
              array (
                'label' => 'danger',
                'value' => 'danger',
              ),
              9 => 
              array (
                'label' => 'outline-default',
                'value' => 'outline-default',
              ),
              10 => 
              array (
                'label' => 'outline-primary',
                'value' => 'outline-primary',
              ),
              11 => 
              array (
                'label' => 'outline-secondary',
                'value' => 'outline-secondary',
              ),
              12 => 
              array (
                'label' => 'outline-tertiary',
                'value' => 'outline-tertiary',
              ),
              13 => 
              array (
                'label' => 'outline-quaternary',
                'value' => 'outline-quaternary',
              ),
              14 => 
              array (
                'label' => 'outline-success',
                'value' => 'outline-success',
              ),
              15 => 
              array (
                'label' => 'outline-info',
                'value' => 'outline-info',
              ),
              16 => 
              array (
                'label' => 'outline-warning',
                'value' => 'outline-warning',
              ),
              17 => 
              array (
                'label' => 'outline-danger',
                'value' => 'outline-danger',
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_carousel_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item',
        'type' => 'item_type',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'item_type',
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-carousel-item',
          'header' => 'content-bootstrappackage-carousel-item-header',
          'call_to_action' => 'content-bootstrappackage-carousel-item-calltoaction',
          'image' => 'content-bootstrappackage-carousel-item-image',
          'text' => 'content-bootstrappackage-carousel-item-text',
          'text_and_image' => 'content-bootstrappackage-carousel-item-textandimage',
          'background_image' => 'content-bootstrappackage-carousel-item-backgroundimage',
          'html' => 'content-bootstrappackage-carousel-item-html',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                text_color,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'text' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                text_color,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'call_to_action' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                button_text,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'image' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                image,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'text_and_image' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                text_color,
                image,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'background_image' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                background_color,
                background_image,
                background_image_options,
                link,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'html' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => false,
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                header,
                header_layout,
                header_class,
                --linebreak--,
                subheader,
                subheader_layout,
                subheader_class,
                --linebreak--,
                header_position,
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content,
                item_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                --linebreak--,
                layout,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType} IN (\'carousel\',\'carousel_small\',\'carousel_fullscreen\')',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'item_type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.header',
                'value' => 'header',
                'icon' => 'content-bootstrappackage-carousel-item-header',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.text',
                'value' => 'text',
                'icon' => 'content-bootstrappackage-carousel-item-text',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.calltoaction',
                'value' => 'call_to_action',
                'icon' => 'content-bootstrappackage-carousel-item-calltoaction',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.image',
                'value' => 'image',
                'icon' => 'content-bootstrappackage-carousel-item-image',
              ),
              4 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.textandimage',
                'value' => 'text_and_image',
                'icon' => 'content-bootstrappackage-carousel-item-textandimage',
              ),
              5 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.backgroundimage',
                'value' => 'background_image',
                'icon' => 'content-bootstrappackage-carousel-item-backgroundimage',
              ),
              6 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.html',
                'value' => 'html',
                'icon' => 'content-bootstrappackage-carousel-item-html',
              ),
            ),
            'default' => 'header',
            'authMode' => 'explicitAllow',
          ),
          'l10n_mode' => 'exclude',
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_carousel_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_carousel_item.pid=###CURRENT_PID### AND tx_bootstrappackage_carousel_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.layout',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'custom',
                'value' => 'custom',
              ),
              1 => 
              array (
                'label' => 'primary',
                'value' => 'primary',
              ),
              2 => 
              array (
                'label' => 'secondary',
                'value' => 'secondary',
              ),
              3 => 
              array (
                'label' => 'tertiary',
                'value' => 'tertiary',
              ),
              4 => 
              array (
                'label' => 'quaternary',
                'value' => 'quaternary',
              ),
              5 => 
              array (
                'label' => 'light',
                'value' => 'light',
              ),
              6 => 
              array (
                'label' => 'dark',
                'value' => 'dark',
              ),
            ),
            'default' => 'secondary',
          ),
          'l10n_mode' => 'exclude',
        ),
        'link' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.link',
            ),
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'H1',
                'value' => '1',
              ),
              1 => 
              array (
                'label' => 'H2',
                'value' => '2',
              ),
              2 => 
              array (
                'label' => 'H3',
                'value' => '3',
              ),
              3 => 
              array (
                'label' => 'H4',
                'value' => '4',
              ),
            ),
            'default' => '1',
          ),
          'l10n_mode' => 'exclude',
        ),
        'header_position' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.default',
                'value' => '',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.center',
                'value' => 'center',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.right',
                'value' => 'right',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.left',
                'value' => 'left',
              ),
            ),
            'default' => '',
          ),
        ),
        'header_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 'none',
              ),
              1 => 
              array (
                'label' => 'h1',
                'value' => 'h1',
              ),
              2 => 
              array (
                'label' => 'h2',
                'value' => 'h2',
              ),
              3 => 
              array (
                'label' => 'h3',
                'value' => 'h3',
              ),
              4 => 
              array (
                'label' => 'h4',
                'value' => 'h4',
              ),
              5 => 
              array (
                'label' => 'h5',
                'value' => 'h5',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'subheader_layout' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'H2',
                'value' => '2',
              ),
              1 => 
              array (
                'label' => 'H3',
                'value' => '3',
              ),
              2 => 
              array (
                'label' => 'H4',
                'value' => '4',
              ),
            ),
            'default' => '2',
          ),
          'l10n_mode' => 'exclude',
        ),
        'subheader_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 'none',
              ),
              1 => 
              array (
                'label' => 'h1',
                'value' => 'h1',
              ),
              2 => 
              array (
                'label' => 'h2',
                'value' => 'h2',
              ),
              3 => 
              array (
                'label' => 'h3',
                'value' => 'h3',
              ),
              4 => 
              array (
                'label' => 'h4',
                'value' => 'h4',
              ),
              5 => 
              array (
                'label' => 'h5',
                'value' => 'h5',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '5',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'button_text' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.button_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'xlarge' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tx_bootstrappackage_carousel_item',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'text_color' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.text_color',
          'displayCond' => 'FIELD:layout:=:custom',
          'config' => 
          array (
            'type' => 'color',
            'default' => '#FFFFFF',
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_color' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.background_color',
          'displayCond' => 'FIELD:layout:=:custom',
          'config' => 
          array (
            'type' => 'color',
            'default' => '#333333',
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.background_image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
              'columns' => 
              array (
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'xlarge' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'background_image',
              'tablenames' => 'tx_bootstrappackage_carousel_item',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image_options' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image_options',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => 
            array (
              'default' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/BackgroundImage.xml',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_icon_group_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-icon-group-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header,
                subheader,
                bodytext,
                link,
                icon_set,
                icon_identifier,
                icon_file,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'icon_group\'',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_icon_group_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_icon_group_item.pid=###CURRENT_PID### AND tx_bootstrappackage_icon_group_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'subheader' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'link' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.link',
          'config' => 
          array (
            'type' => 'link',
            'size' => 50,
            'appearance' => 
            array (
              'browserTitle' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.link',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
        ),
        'icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.icon_identifier',
          'displayCond' => 'FIELD:icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
        ),
        'icon_file' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.icon_file',
          'displayCond' => 'FIELD:icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,png,svg',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
              'tablenames' => 'tx_bootstrappackage_icon_group_item',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_tab_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'bodytext',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-tab-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header,
                bodytext,
                media,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaposition;mediaposition,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'mediaposition' => 
        array (
          'showitem' => '
                mediaorient,
                imagecols,
                image_zoom,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'tab\'',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_tab_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_tab_item.pid=###CURRENT_PID### AND tx_bootstrappackage_tab_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.media',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
              'tablenames' => 'tx_bootstrappackage_tab_item',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'mediaorient' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.left',
                'value' => 'left',
              ),
              1 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.top',
                'value' => 'top',
              ),
              2 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.right',
                'value' => 'right',
              ),
              3 => 
              array (
                'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.bottom',
                'value' => 'bottom',
              ),
            ),
            'default' => 'left',
          ),
          'l10n_mode' => 'exclude',
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '1',
                'value' => 1,
              ),
              1 => 
              array (
                'label' => '2',
                'value' => 2,
              ),
              2 => 
              array (
                'label' => '3',
                'value' => 3,
              ),
              3 => 
              array (
                'label' => '4',
                'value' => 4,
              ),
              4 => 
              array (
                'label' => '5',
                'value' => 5,
              ),
              5 => 
              array (
                'label' => '6',
                'value' => 6,
              ),
            ),
            'default' => 2,
          ),
          'l10n_mode' => 'exclude',
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                1 => '',
                'label' => '',
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_timeline_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_userFunc' => 'BK2K\\BootstrapPackage\\Userfuncs\\Tca->timelineItemLabel',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'default_sortby' => 'date',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-timeline-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                date,
                header,
                bodytext,
                icon_set,
                icon_identifier,
                icon_file,
                image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'timeline\'',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              1 => 
              array (
                'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145931200,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_timeline_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_timeline_item.pid=###CURRENT_PID### AND tx_bootstrappackage_timeline_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.date',
          'config' => 
          array (
            'type' => 'datetime',
            'dbType' => 'datetime',
            'required' => true,
          ),
          'l10n_mode' => 'exclude',
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'required' => true,
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
        ),
        'icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.icon_identifier',
          'displayCond' => 'FIELD:icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
        ),
        'icon_file' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.icon_file',
          'displayCond' => 'FIELD:icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,png,svg',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
              'tablenames' => 'tx_bootstrappackage_timeline_item',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.image',
          'config' => 
          array (
            'type' => 'file',
            'allowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
            'disallowed' => '',
            'appearance' => 
            array (
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'overrideChildTca' => 
            array (
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    description,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tx_bootstrappackage_timeline_item',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_yoastseo_prominent_word' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_prominent_word.title',
        'label' => 'stem',
        'languageField' => 'sys_language_uid',
        'iconfile' => 'EXT:yoast_seo/Resources/Public/Icons/Extension.svg',
        'hideTable' => true,
      ),
      'columns' => 
      array (
        'stem' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_prominent_word.fields.stem',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'table' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_prominent_word.fields.table',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'weight' => 
        array (
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_prominent_word.fields.weight',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'sys_language_uid' => 
        array (
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
      ),
      'palettes' => 
      array (
        'yoast-prominentword' => 
        array (
          'showitem' => '
                --linebreak--, stem,
                --linebreak--, table,
                --linebreak--, weight',
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;General, --palette--;;yoast-prominentword,
                --div--;Visibility, sys_language_uid
            ',
        ),
      ),
    ),
    'tx_yoastseo_related_focuskeyword' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_related_focuskeyword.title',
        'label' => 'keyword',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'sortby' => 'sorting',
        'iconfile' => 'EXT:yoast_seo/Resources/Public/Icons/Extension.svg',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'security' => 
        array (
          'ignorePageTypeRestriction' => true,
        ),
      ),
      'columns' => 
      array (
        'keyword' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_related_focuskeyword.fields.keyword',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'required' => true,
          ),
        ),
        'synonyms' => 
        array (
          'exclude' => 1,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_related_focuskeyword.fields.synonyms',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'analysis' => 
        array (
          'exclude' => 1,
          'displayCond' => 'FIELD:keyword:REQ:TRUE',
          'label' => 'LLL:EXT:yoast_seo/Resources/Private/Language/TCA.xlf:tx_yoastseo_related_focuskeyword.fields.analysis',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'focusKeywordAnalysis',
          ),
        ),
        'uid_foreign' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tablenames' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'value' => 0,
              ),
            ),
            'foreign_table' => 'tx_yoastseo_related_focuskeyword',
            'foreign_table_where' => 'AND tx_yoastseo_related_focuskeyword.pid=###CURRENT_PID### AND tx_yoastseo_related_focuskeyword.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                'label' => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'palettes' => 
      array (
        'yoast-focuskeyword' => 
        array (
          'showitem' => '
                --linebreak--, keyword,
                --linebreak--, synonyms,
                --linebreak--, analysis',
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;General, --palette--;;yoast-focuskeyword,
                --div--;Visibility, sys_language_uid, l10n_parent,l10n_diffsource, uid_foreign, tablenames, hidden
            ',
        ),
      ),
    ),
  ),
);
#