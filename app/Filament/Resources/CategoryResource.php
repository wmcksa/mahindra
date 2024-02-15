<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CategoryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CategoryResource\RelationManagers;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationIcon = 'heroicon-m-tag';

    protected static ?string $navigationLabel = 'Category';

    protected static ?string $navigationGroup = 'Categories';
    protected static ?int $navigationSort = 15;

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
                Fieldset::make('Create New Category')
                    ->schema([
                        Group::make()->schema([

                            TextInput::make('name')
                                ->required()
                                ->label('Category Name')
                                ->maxLength(255)->columnSpan(1),
                        ]),

                        Group::make()->schema([

                            Select::make('car_id')
                                ->label('Car')
                                ->relationship('car', 'name')
                                ->searchable()
                                ->required()
                                ->preload()
                                ->columnSpan(1),



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
                Tables\Columns\TextColumn::make('id')
                    ->sortable()
                    ->label('ID')
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->label('Category Name'),

                Tables\Columns\TextColumn::make('language.language_code')
                    ->sortable()
                    ->label('Language'),

                Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
