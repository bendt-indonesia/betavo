<?php

namespace App\Enums;

class Commands extends EnumClass
{
    const
        MOVE = 'move',
        COPY = 'copy',
        REMOVE = 'remove';

    public static $COMMANDS = [
        self::MOVE => self::MOVE,
        self::COPY => self::COPY,
        self::REMOVE => self::REMOVE,
    ];

    public static $WINDOWS = [
        self::MOVE => 'move',
        self::COPY => 'copy',
        self::REMOVE => 'del',
    ];

    public static $BASH = [
        self::MOVE => 'mv',
        self::COPY => 'cp',
        self::REMOVE => 'rm',
    ];
}
