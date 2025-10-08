<?php

namespace Jodeveloper\FilamentKanban\Tests\Pages;

use Filament\Forms\Components\TextInput;
use Jodeveloper\FilamentKanban\Pages\KanbanBoard;
use Jodeveloper\FilamentKanban\Tests\Enums\TaskStatus;
use Jodeveloper\FilamentKanban\Tests\Models\Task;

class TestBoardWithCustomViews extends KanbanBoard
{
    protected static string $model = Task::class;

    protected static string $statusEnum = TaskStatus::class;

    protected static string $recordView = 'kanban-record';

    protected function getEditModalFormSchema(null | int | string $recordId): array
    {
        return [
            TextInput::make('title'),
        ];
    }
}
