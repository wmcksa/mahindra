<?php

namespace App\Filament\Resources;

use App\Models\Car;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CarResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CarResource\RelationManagers;

class CarResource extends Resource
{
    protected static ?string $model = Car::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Cars';
    protected static ?int $navigationSort = 9;

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

                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                // Select::make('category_id')
                //     ->label('Category')
                //     ->relationship('category', 'name')
                //     ->searchable()
                //     ->preload(),

                Select::make('language_id')
                    ->label('Language')
                    ->relationship('language', 'language_code')
                    ->searchable()
                    ->preload(),




                // image
                //اختر نوع السيارة
                Select::make('model_car_id')
                    ->label('Model Car')
                    ->relationship('modelcar', 'name')
                    ->searchable()
                    ->preload(),

                //اختر الفرع
                Select::make('dealer_locator_id')
                    ->label('Dealer Locator')
                    ->relationship('dealerlocator', 'location')
                    ->searchable()
                    ->preload(),

                //اختر سنةالتصنيع
                Select::make('year_of_model_id')
                    ->label('Year Of Model ')
                    ->relationship('Year_ofModel', 'year_of_model')
                    ->searchable()
                    ->preload(),

                //اختر ناقل الحركة
                Select::make('motion_vactor_id')
                    ->label('Motion Vactor ')
                    ->relationship('motionVactor', 'name')
                    ->searchable()
                    ->preload(),

                //اختر المحرك
                Select::make('engine_id')
                    ->label('Engine Type  ')
                    ->relationship('engine', 'type')
                    ->searchable()
                    ->preload(),

                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('CarHomeImage')
                    // ->preserveFilenames()
                    // ->multiple()
                    ->label('Images')
                    ->required()->columnSpanFull(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Car Name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('language.language_code')
                    ->sortable()
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                // TextColumn::make('category.name')
                //     ->searchable()
                //     ->sortable(),

                TextColumn::make('modelcar.name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('dealerlocator.location')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('Year_ofModel.year_of_model')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('motionVactor.name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('engine.type')
                    ->searchable()
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
            'index' => Pages\ListCars::route('/'),
            'create' => Pages\CreateCar::route('/create'),
            'edit' => Pages\EditCar::route('/{record}/edit'),
        ];
    }
}
