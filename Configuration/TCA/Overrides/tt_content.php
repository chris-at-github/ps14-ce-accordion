<?php

// ---------------------------------------------------------------------------------------------------------------------
// Icon Text Module von TT-Content
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array(
		'LLL:EXT:ps14_accordion/Resources/Private/Language/locallang_tca.xlf:accordion.title',
		'ps14_accordion',
		'ps14-content-accordion'
	),
	'CType',
	'ps14_accordion'
);

$GLOBALS['TCA']['tt_content']['types']['ps14_accordion'] = [
	'showitem' => '
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.header;xoHeader, bodytext, tx_xo_elements,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
			--palette--;;xoPrint,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
			--palette--;;hidden,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
			--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
		--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
	',
];

$GLOBALS['TCA']['tt_content']['types']['ps14_accordion']['columnsOverrides']['bodytext']['config'] = [
	'enableRichtext' => true,
	'richtextConfiguration' => 'xoDefault',
];

$GLOBALS['TCA']['tt_content']['types']['ps14_accordion']['columnsOverrides']['tx_xo_elements']['config']['overrideChildTca'] = [
	'columns' => [
		'record_type' => [
			'config' => [
				'items' => [
					['LLL:EXT:ps14_accordion/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.record_type.default', 'ps14_accordion_default'],
					['LLL:EXT:ps14_accordion/Resources/Private/Language/locallang_tca.xlf:tx_xo_domain_model_elements.record_type.records', 'ps14_accordion_records'],
				],
				'default' => 'ps14_accordion_default'
			]
		],
		'description' => [
			'config' => [
				'richtextConfiguration' => 'xoDefault'
			]
		]
	],
	'types' => [
		'ps14_accordion_default' => [
			'showitem' => '
					l10n_diffsource, record_type, --palette--;;header, tx_ps14_accordion_active, description,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
					--palette--;;visibility,
					--palette--;;access,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
					--palette--;;print,',
		],
		'ps14_accordion_records' => [
			'showitem' => '
					l10n_diffsource, record_type, --palette--;;header, tx_ps14_accordion_active, content,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
					--palette--;;visibility,
					--palette--;;access,
				--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
					--palette--;;print,',
		],
	]
];