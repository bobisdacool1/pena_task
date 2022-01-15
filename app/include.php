<?php
define('SITE_DIR', $_SERVER["DOCUMENT_ROOT"]);

include_once SITE_DIR . '/app/Location/Location.php';
include_once SITE_DIR . '/app/Location/Route.php';

include_once SITE_DIR . '/app/Delivery/Weight.php';
include_once SITE_DIR . '/app/Delivery/Delivery.php';
include_once SITE_DIR . '/app/Delivery/IDeliveryService.php';
include_once SITE_DIR . '/app/Delivery/Services/DHL.php';
include_once SITE_DIR . '/app/Delivery/Services/RussianPost.php';