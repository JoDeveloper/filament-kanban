<?php

namespace Jodeveloper\FilamentKanban\Tests\Pages;

use Jodeveloper\FilamentKanban\Pages\KanbanBoard;
use Jodeveloper\FilamentKanban\Tests\Enums\TaskStatus;
use Jodeveloper\FilamentKanban\Tests\Models\UlidTask;

class TestBoardWithUlidTask extends KanbanBoard
{
    protected static string $model = UlidTask::class;

    protected static string $statusEnum = TaskStatus::class;
}
