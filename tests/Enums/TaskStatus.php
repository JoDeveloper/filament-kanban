<?php

namespace Jodeveloper\FilamentKanban\Tests\Enums;

use Jodeveloper\FilamentKanban\Concerns\IsKanbanStatus;

enum TaskStatus: string
{
    use IsKanbanStatus;

    case Todo = 'Todo';
    case Doing = 'Doing';
    case Done = 'Done';
}
