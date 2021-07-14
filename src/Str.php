<?php

namespace Rahmet\TestCoverageTask;

// check code coverage
// docker-compose exec php-fpm composer test

class Str
{
    /**
     * @param string $name
     * @param string $gender
     * @return string
     */
    public static function setTitle(string $name, string $gender): string
    {
        if ($gender === 'man') {
            $prefix = 'Mr. ';
        } else {
            $prefix = 'Mrs. ';
        }

        return $prefix . $name;
    }


}