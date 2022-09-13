<?php

namespace AlwaysOpen\OnlineMigrator;

trait InnodbOnlineDdl
{
    /** @var string containing the desired strategy for the migration */
    public $onlineStrategy = 'innodb-online-ddl';
}
