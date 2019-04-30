<?php
namespace Demo\CustomCatalog\Model;
use Demo\CustomCatalog\Api\DemoInterface;
 
class CustomCatalogAPI implements DemoInterface
{
    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return string Greeting message with users name.
     */
    public function getByVPN($vpn) {
        return "Hello, " . $vpn;
    }
}