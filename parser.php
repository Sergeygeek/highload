<?php

$link = htmlspecialchars(trim($_POST['link']));
var_dump($_POST);

/**
 * POST Запрос для получения инфы от беру вида: https://beru.ru/api/resolve/?r=skuCard/oneClick:resolveIsOneClickAvailable&r=notifications/resolveNotificationStatuses:resolveNotificationStatuses&r=perks:resolvePerkStatus&r=perks:resolvePerkStatus&r=cataloger/resolveNavigationMenu:resolveNavigationMenu&r=secretSale/resolveSecretSale:resolveSecretSale&r=bonus/resolveActiveBonusesCount:resolveActiveBonusesCount&r=whiteMarket:resolveReferenceOffersByMarketSku&r=skuCard/skuWithDefaultOffer:resolveSkuInfo
 * В body запроса передается json вида:
 * {"params":[{"skuId":"649703010","offerId":"RkWl2VikFNdXItzoMYb_OA"},null,{"types":["BERU_PLUS","YANDEX_PLUS"]},{"types":["SBER_PRIME"]},{"regionId":195},null,null,{"skuId":"649703010"},{"skuId":"649703010","visibleEntityId":"gfgr3smkzq"}],"path":"/product/konstruktor-lego-duplo-10929-modulnyi-igrushechnyi-dom/649703010?show-uid=15893625834848227939306030&offerid=RkWl2VikFNdXItzoMYb_OA"}
 */

// Вытащить артикул (skuId) из строки запроса

// Вытащить offerId из строки запроса

// Вытащить visibleEntityId из строки, которая прилетает по запросу GET
// https://beru.ru/product/konstruktor-lego-duplo-10929-modulnyi-igrushechnyi-dom/649703010?show-uid=15893625834848227939306030&offerid=RkWl2VikFNdXItzoMYb_OA

