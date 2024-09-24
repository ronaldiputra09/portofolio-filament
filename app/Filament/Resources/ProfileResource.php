<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hidden::make('user_id')
                    ->default(Auth::id()),
                TextInput::make('fullname')
                    ->label('Nama Lengkap')
                    ->placeholder('John Doe')
                    ->required(),
                DatePicker::make('date')
                    ->label('Tanggal Lahir')
                    ->placeholder('MM/DD/YYYY')
                    ->required(),
                TextInput::make('phone')
                    ->label('Phone')
                    ->placeholder('1234567890')
                    ->tel()
                    ->required(),
                Textarea::make('address')
                    ->label('Address')
                    ->rows(1)
                    ->autosize()
                    ->required(),
                RichEditor::make('bio')
                    ->label('Bio')
                    ->placeholder('Ceritakan tentang diri Anda')
                    ->required(),
                FileUpload::make('avatar')
                    ->label('Avatar')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('fullname')
                    ->label('Nama Lengkap')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('phone')
                    ->label('Phone')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('address')
                    ->label('Address')
                    ->sortable(),
                ImageColumn::make('avatar')
                    ->label('Avatar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProfiles::route('/'),
        ];
    }
}
