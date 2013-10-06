<?php
/**
 * PHPoole plugin TwBootstrap
 */
Class TwBootstrap extends PHPoole_Plugin
{
    const DEBUG = false;

    public function postInit($e)
    {
        $event  = $e->getName();
        $params = $e->getParams();
        $this->trace(self::DEBUG, $event, $params, 'IN');
        //
        RecursiveCopy(__DIR__ . '/assets', $e->getTarget()->getWebsitePath() . '/' . PHPoole::PHPOOLE_DIRNAME . '/assets');
        RecursiveCopy(__DIR__ . '/layouts', $e->getTarget()->getWebsitePath() . '/' . PHPoole::PHPOOLE_DIRNAME . '/layouts');
        $params['messages'][] = 'Twitter Boostrap layouts ans assets copied';
        //
        $this->trace(self::DEBUG, $event, $params, 'OUT');
        return $params;
    }
}