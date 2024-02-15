<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Engine;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EngineResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EngineResource\RelationManagers;

class EngineResource extends Resource
{
    protected static ?string $model = Engine::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Cars';
    protected static ?int $navigationSort = 11;

    //دالة ترجع عدد السجلات الموجودة داخل الجدول وتعرضها بجانب اسم الresource
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    //دالة تغير لون مربع عدد السجلات اذا كان العدد أقل من خمسة
    public static function getNavigationBadgeColor(): string|array|null
    {
        return static::getModel()::count() < 5 ? 'warning' : 'success';
    }



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Create New Engine')
                    ->schema([
                        Group::make()->schema([

                            TextInput::make('type')
                                ->required()
                                ->label('Engine Type')
                                ->maxLength(255)->columnSpan(1),
                        ]),

                        Group::make()->schema([

                            Select::make('language_id')
                                ->label('Language')
                                ->relationship('language', 'language_code')
                                ->searchable()
                                ->required()
                                ->preload()
                                ->columnSpan(1),
                        ]),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->label('ID')
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('type')
                    ->searchable(),

                TextColumn::make('language.language_code')
                    ->sortable()
                    ->label('Language'),

                TextColumn::make('created_at')
                    ->date()->label('Created at')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),


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
            'index' => Pages\ListEngines::route('/'),
            'create' => Pages\CreateEngine::route('/create'),
            'edit' => Pages\EditEngine::route('/{record}/edit'),
        ];
    }
}
