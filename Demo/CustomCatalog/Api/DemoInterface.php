<?php
namespace Demo\CustomCatalog\Api;
 
interface DemoInterface
{
    /**
     * Returns greeting message to user
     *
     * @api
     * @param string $name Users name.
     * @return string Greeting message with users name.
     */
    public function getByVPN($vpn);
}