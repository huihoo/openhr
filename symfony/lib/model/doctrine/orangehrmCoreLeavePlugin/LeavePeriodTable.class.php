<?php

/**
 * LeavePeriodTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class LeavePeriodTable extends PluginLeavePeriodTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object LeavePeriodTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('LeavePeriod');
    }
}