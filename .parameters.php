<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array
(
    'PARAMETERS' => array
    (
        'IBLOCK_ID' => array
        (
            'NAME'      =>  GetMessage('PARAMETERS_IBLOCK_ID_NAME'),
            'TYPE'      => 'INTEGER',
            'MULTIPLE'  => 'N',
            'PARENT'    => 'BASE',
        ),
        'CAROUSEL_ID' => array
        (
            'NAME'      =>  GetMessage('PARAMETERS_CAROUSEL_ID_NAME'),
            'TYPE'      => 'INTEGER',
            'MULTIPLE'  => 'N',
            'PARENT'    => 'BASE',
        ),
        'SHOW_TYPE' => array
        (
            'NAME'              =>  GetMessage('PARAMETERS_SHOW_TYPE_NAME'),
            'TYPE'              =>  'LIST',
            'MULTIPLE'          =>  'N',
            'PARENT'            =>  'BASE',
            'ADDITIONAL_VALUES' =>  'Y',
        ),
        'SHOW_COUNT' => array
        (
            'NAME'      =>  GetMessage('PARAMETERS_SHOW_COUNT_NAME'),
            'TYPE'      =>  'INTEGER',
            'MULTIPLE'  =>  'N',
            'PARENT'    =>  'BASE',
        ),
        'SCROLL_COUNT' => array
        (
            'NAME'      =>  GetMessage('PARAMETERS_SCROLL_COUNT_NAME'),
            'TYPE'      =>  'INTEGER',
            'MULTIPLE'  =>  'N',
            'DEFAULT'   =>  '1',
            'PARENT'    =>  'BASE',
        ),
        'SCROLL_SPEED' => array
        (
            'NAME'      =>  GetMessage('PARAMETERS_SCROLL_SPEED_NAME'),
            'TYPE'      =>  'INTEGER',
            'MULTIPLE'  =>  'N',
            'DEFAULT'   =>  '800',
            'PARENT'    =>  'BASE',
        ),
        'SCROLL_TIME' => array
        (
            'NAME'      =>  GetMessage('PARAMETERS_SCROLL_TIME_NAME'),
            'TYPE'      =>  'INTEGER',
            'MULTIPLE'  =>  'N',
            'DEFAULT'   =>  '2000',
            'PARENT'    =>  'BASE',
        ),
        'CACHE_TIME'  =>  array('DEFAULT'=>3600),
    ),
);
?>
