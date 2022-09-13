<?php

namespace AlwaysOpen\OnlineMigrator;

// CONSIDER: Renaming "OnlineCannotMigrateUp"
trait OnlineIncompatibleWithUp
{
    /** @var array containing migrate methods incompatible w/OnlineMigrator */
    public $onlineIncompatibleMethods = ['up'];
}
