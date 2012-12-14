<?php

/**
 * Plugin definition.
 */
class SystemPlugin_UserFunctions_Plugin extends Zikula_AbstractPlugin implements Zikula_Plugin_AlwaysOnInterface
{
    /**
     * Get plugin meta data.
     *
     * @return array Meta data.
     */
    protected function getMeta()
    {
        return array('displayname' => $this->__('UserFunctions'),
                     'description' => $this->__('Provides user defined functions, classes and/or actions, available all the time, and loaded at Zikula boot.'),
                     'version'     => '1.0.0'
                      );
    }

    /**
     * Initialise.
     *
     * Runs at plugin init time.
     *
     * @return void
     */
    public function initialize()
    {
        if (file_exists(dirname(__FILE__) . '/functions.php')) {
            include_once dirname(__FILE__) . '/functions.php';
        }
    }
}
