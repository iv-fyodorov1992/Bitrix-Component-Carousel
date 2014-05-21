<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<? if(count($arResult) && count($arResult)>=$arParams['SHOW_COUNT']): ?>

<div id="jCarousel-<?=$arParams['CAROUSEL_ID']?>" class="carouselMain">
    <a class="prev"><</a>
    <div class="jCarouselLite">
        <ul>
            <? foreach($arResult as $result): ?>
                <li>
                    <div class="item">
                        <div class="image">
                            <img src="<?=$result['DETAIL_PICTURE']?>" title="<?=$result['NAME']?>" />
                        </div>
                        <div class="title">
                            <?=$result['NAME']?>
                        </div>
                    </div>
                </li>
            <? endforeach; ?>
        </ul>
    </div>
    <a class="next">></a>
</div>

<script>
        $("#jCarousel-<?=$arParams['CAROUSEL_ID']?> .jCarouselLite").jCarouselLite({
            btnNext: "#jCarousel-<?=$arParams['CAROUSEL_ID']?> .next",
            btnPrev: "#jCarousel-<?=$arParams['CAROUSEL_ID']?> .prev",
            scroll:  <?=$arParams['SCROLL_COUNT']?>,
            visible: <?=$arParams['SHOW_COUNT']?>,
            speed:   <?=$arParams['SCROLL_SPEED']?>,
            auto:    <?=$arParams['SCROLL_TIME']?>
        });
</script>

<? endif; ?>