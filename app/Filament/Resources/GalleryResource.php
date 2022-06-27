<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\MultiSelect;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Filters\Filter;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photograph';

    public static function form(Form $form): Form
    {
        // return $form

        // ->schema(static::getFormSchema(Forms\Components\Grid::class))
        // ->columns([
        //     'lg' => 3,
        //     'lg' => null,
        // ]);

        return $form
            ->schema([

                Grid::make([
                    'default' => 1,
                    'sm' => 3,
                    'xl' => 6,
                    '2xl' => 8,
                ])
                    ->schema([
                        // ...
                        SpatieMediaLibraryFileUpload::make('avatar')
                            ->collection('avatar')
                            ->columnSpan(8)
                            ->required(),
                        Select::make('for')
                            ->options([
                                'room' => 'Room',
                                'gym' => 'Gym',
                                'swimming' => 'Swimming',
                                'loopy' => 'Lobby',
                                'restaurant' => 'Restaurant',
                            ])->required()
                            ->columnSpan(3),
                    ])
            ]);
    }

    // protected function getFormSchema(string $layout = Forms\Components\Grid::class): array
    // {
    //     return [
    //         Grid::make(3)
    //             ->schema([
    //                 SpatieMediaLibraryFileUpload::make('avatar')->collection('gallery'),
    //                 Forms\Components\TextInput::make('for')
    //                     ->required()
    //                     ->maxLength(255)
    //                     ->columnSpan(2),
    //                 // ...
    //             ])
    //     ];
    // }

    public static function table(Table $table): Table
    {

        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('avatar')
                ->collection('avatar')
                ->size(76),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
            ])
            ->filters([
                Filter::make('Gym')
                    ->query(fn (Builder $query): Builder => $query->where('for', 'gym')),

                Filter::make('Rooms')
                    ->query(fn (Builder $query): Builder => $query->where('for', 'room')),

                Filter::make('Swimming Pool')
                    ->query(fn (Builder $query): Builder => $query->where('for', 'swimming')),

                Filter::make('Lobby')
                    ->query(fn (Builder $query): Builder => $query->where('for', 'loopy')),

                Filter::make('Restaurant')
                    ->query(fn (Builder $query): Builder => $query->where('for', 'restaurant')),

            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                ])
                ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
