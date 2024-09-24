<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Category;
use App\Models\Project;
use App\Models\Skill;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->placeholder('Laravel')
                    ->required(),
                Select::make('category_id')
                    ->label('Category')
                    ->placeholder('Select a category')
                    ->options(
                        Category::all()->pluck('name', 'id')
                    )
                    ->searchable(),
                TextInput::make('url')
                    ->label('URL')
                    ->placeholder('https://laravel.com')
                    ->required(),
                Select::make('skills')
                    ->label('Skill')
                    ->placeholder('Select a skill')
                    ->multiple()
                    ->options(
                        Skill::all()->pluck('name', 'id')
                    )
                    ->searchable(),
                FileUpload::make('icon')
                    ->label('Icon')
                    ->image()
                    ->required(),
                FileUpload::make('images')
                    ->label('Images')
                    ->image()
                    ->multiple()
                    ->required(),
                Grid::make()
                    ->columns(1)
                    ->schema([
                        RichEditor::make('description')
                            ->label('Description')
                            ->placeholder('Description')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('icon')
                    ->square()
                    ->stacked(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('url')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category.name')
                    ->label('Category')
                    ->badge()
                    ->color('primary'),
                ImageColumn::make('images')
                    ->circular()
                    ->stacked(),
                ToggleColumn::make('is_active')
                    ->label('Active')
                    ->afterStateUpdated(function (Project $project, $state) {
                        $project->update(['is_active' => $state]);
                    })
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
