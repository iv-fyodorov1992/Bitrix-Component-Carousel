<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if ($this->StartResultCache(3600))
{
    $APPLICATION->AddHeadScript('/bitrix/components/smartmax/carousel/js/jcarousellite_1.0.1.min.js');
    $APPLICATION->SetAdditionalCSS('/bitrix/components/smartmax/carousel/css/jcarousellite.css');

    $arFilter       = array(
                            'IBLOCK_ID'                 =>  $arParams['IBLOCK_ID'],
                            'ACTIVE'                    =>  'Y',
                            'PROPERTY_GOOD_VIEW_VALUE'  =>  $arParams['SHOW_TYPE']
                           );

    $db_list        = CIBlockElement::GetList(array(), $arFilter, false, array(), array('ID','NAME','DETAIL_PICTURE'));

    while($row = $db_list->GetNext())
    {
        $arResult[] =  array
        (
            'ID'                =>  $row['ID'],
            'NAME'              =>  $row['NAME'],
            'DETAIL_PICTURE'    =>  CFile::GetPath($row['DETAIL_PICTURE']),
        );
    }

    $this->IncludeComponentTemplate();
}
?>

