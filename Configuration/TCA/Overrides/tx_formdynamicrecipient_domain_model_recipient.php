<?php

// label got moved to core extension
if (version_compare(TYPO3_branch, '9.5', '>=')) {
    $GLOBALS['TCA']['tx_formdynamicrecipient_domain_model_recipient']['columns']['sys_language_uid']['label'] = 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language';
    $GLOBALS['TCA']['tx_formdynamicrecipient_domain_model_recipient']['columns']['sys_language_uid']['config'] = [
        'type' => 'select',
        'renderType' => 'selectSingle',
        'special' => 'languages',
        'items' => [
            [
                'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                -1,
                'flags-multiple'
            ],
        ],
        'default' => 0,
    ];



    $GLOBALS['TCA']['tx_formdynamicrecipient_domain_model_recipient']['columns']['l10n_parent']['label'] = 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent';
    $GLOBALS['TCA']['tx_formdynamicrecipient_domain_model_recipient']['columns']['hidden']['label'] = 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden';
    $GLOBALS['TCA']['tx_formdynamicrecipient_domain_model_recipient']['columns']['starttime']['label'] = 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime';
    $GLOBALS['TCA']['tx_formdynamicrecipient_domain_model_recipient']['columns']['endtime']['label'] = 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime';
}
