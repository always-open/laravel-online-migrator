<?php

namespace AlwaysOpen\OnlineMigrator;

// CONSIDER: Renaming "OnlineCannotMigrate"
trait OnlineIncompatible
{
    /** @var array containing migrate methods incompatible w/OnlineMigrator */
    public $onlineIncompatibleMethods = ['down', 'up'];
}
