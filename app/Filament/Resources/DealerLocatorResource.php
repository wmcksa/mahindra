<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\DealerLocator;
use Filament\Resources\Resource;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DealerLocatorResource\Pages;
use App\Filament\Resources\DealerLocatorResource\RelationManagers;

class DealerLocatorResource extends Resource
{
    protected static ?string $model = DealerLocator::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Cars';
    protected static ?int $navigationSort = 10;

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
                Fieldset::make('Create New User')
                    ->schema([
                        TextInput::make('country')
                            ->required()
                            ->maxLength(255)->columnSpan(1),

                        TextInput::make('city')
                            ->required()
                            ->maxLength(255)->columnSpan(1),

                        TextInput::make('location')
                            ->required()
                            ->maxLength(255)->columnSpan(1),


                        TextInput::make('beginning_working_day')
                            ->required()
                            ->maxLength(255)->columnSpan(1),


                        TextInput::make('end_working_day')
                            ->required()
                            ->maxLength(255)->columnSpan(1),


                        TextInput::make('beginning_working_hours')
                            ->required()
                            ->maxLength(255)->columnSpan(1),


                        TextInput::make('end_working_hours')
                            ->required()
                            ->maxLength(255)->columnSpan(1),

                        TextInput::make('mobile')
                            ->required()
                            ->maxLength(255)->columnSpan(1),


                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('country')
                    ->searchable(),

                TextColumn::make('city')
                    ->searchable(),

                TextColumn::make('location')
                    ->searchable(),

                TextColumn::make('beginning_working_day')
                    ->searchable(),

                TextColumn::make('end_working_day')
                    ->searchable(),

                TextColumn::make('beginning_working_hours')
                    ->searchable(),

                TextColumn::make('end_working_hours')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('mobile')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),


                TextColumn::make('created_at')
                    ->label('Date')
                    ->date('d-m-Y')
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
            'index' => Pages\ListDealerLocators::route('/'),
            'create' => Pages\CreateDealerLocator::route('/create'),
            'edit' => Pages\EditDealerLocator::route('/{record}/edit'),
        ];
    }
}
