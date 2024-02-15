<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Feature;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\FeatureResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FeatureResource\RelationManagers;

class FeatureResource extends Resource
{
    protected static ?string $model = Feature::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationLabel = 'Feature';

    protected static ?string $navigationGroup = 'Categories';
    protected static ?int $navigationSort = 16;

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
                Tabs::make('Create New Feature')
                    ->tabs([
                        Tab::make('Category & Images ')
                            ->schema([

                                Select::make('category_id')
                                    ->label('Category')
                                    ->relationship('category', 'name')
                                    ->searchable()
                                    ->preload(),

                                Select::make('language_id')
                                    ->label('Language')
                                    ->relationship('language', 'language_code')
                                    ->searchable()
                                    ->required()
                                    ->preload()
                                    ->columnSpan(1),

                                //صور الاكسسسوارات
                                FileUpload::make('accessories')
                                    ->image()
                                    ->disk('public')
                                    ->directory('accessoriesImage')
                                    ->multiple()
                                    ->label('Accessories Image')
                                    ->required()
                                    ->columnSpan(1),

                                FileUpload::make('car_images')
                                    ->image()
                                    ->disk('public')
                                    ->directory('CarImages')
                                    ->multiple()
                                    ->label('Car Images')
                                    ->required()
                                    ->columnSpan(1),
                            ]),

                        //المواصفات التقنية
                        Tab::make('TECHINICAL SPECIFICATIONS')
                            ->schema([

                                TextInput::make('traction')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('tyres')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('engine')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('power')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('torque')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('transmission')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('gears')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('wheels')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('dismension_LXWXH')
                                    ->required()
                                    ->maxLength(255),


                                TextInput::make('cargo_box_dimension_LXWXH')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('angle')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('ground_clearance')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('GVW')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('kerb')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('pay_load')
                                    ->required()
                                    ->maxLength(255),

                            ])->columns(2),


                        //موصفات الراحة
                        Tab::make('SAFETY')
                            ->schema([

                                TextInput::make('dual_front_AIR_bags')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('collapsible_steering_column')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('fire_retardant_upholstery')
                                    ->required()
                                    ->maxLength(255),
                            ]),

                        //موصفات الراحة
                        Tab::make('COMFORT')
                            ->schema([
                                TextInput::make('AIR_conditoning')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('steering_control')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('rear_view_mirror')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('one_touch_window_control_driver_codriver_antipinch')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('follow_me_homw_headlamps')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('ARM_rest_on_front_seats')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('alloy_wheels')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('optional')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('touch_screen_intregated_infotainment_satellite_navigation')
                                    ->required()
                                    ->maxLength(255),

                            ])->columns(2),

                        //موصفات اخرى
                        Tab::make('OTHER FEATURE')
                            ->schema([
                                TextInput::make('headlamp')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('hydraulic_bonnet_struts')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('rear_demister')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('rich_black')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('projector_with_EYR_brow_lamps')
                                    ->required()
                                    ->maxLength(255),
                            ]),
                        //موصفات الشكل
                        Tab::make('STYLE')
                            ->schema([
                                TextInput::make('painted_door_handles')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('painted_front_bumber')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('claddings')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('painted')
                                    ->required()
                                    ->maxLength(255),

                            ]),

                    ])->columnSpanFull(),










            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.name')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('traction')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tyres')
                    ->searchable(),
                Tables\Columns\TextColumn::make('engine')
                    ->searchable(),
                Tables\Columns\TextColumn::make('power')
                    ->searchable(),
                Tables\Columns\TextColumn::make('torque')
                    ->searchable(),
                Tables\Columns\TextColumn::make('transmission')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gears')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wheels')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dismension_LXWXH')
                    ->searchable(),
                Tables\Columns\TextColumn::make('cargo_box_dimension_LXWXH')
                    ->searchable(),
                Tables\Columns\TextColumn::make('angle')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ground_clearance')
                    ->searchable(),
                Tables\Columns\TextColumn::make('GVW')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kerb')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pay_load')
                    ->searchable(),
                Tables\Columns\TextColumn::make('dual_front_AIR_bags')
                    ->searchable(),
                Tables\Columns\TextColumn::make('collapsible_steering_column')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fire_retardant_upholstery')
                    ->searchable(),
                Tables\Columns\TextColumn::make('AIR_conditoning')
                    ->searchable(),
                Tables\Columns\TextColumn::make('steering_control')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rear_view_mirror')
                    ->searchable(),
                Tables\Columns\TextColumn::make('one_touch_window_control_driver_codriver_antipinch')
                    ->searchable(),
                Tables\Columns\TextColumn::make('follow_me_homw_headlamps')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ARM_rest_on_front_seats')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alloy_wheels')
                    ->searchable(),
                Tables\Columns\TextColumn::make('optional')
                    ->searchable(),
                Tables\Columns\TextColumn::make('touch_screen_intregated_infotainment_satellite_navigation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('headlamp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('hydraulic_bonnet_struts')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rear_demister')
                    ->searchable(),
                Tables\Columns\TextColumn::make('rich_black')
                    ->searchable(),
                Tables\Columns\TextColumn::make('projector_with_EYR_brow_lamps')
                    ->searchable(),
                Tables\Columns\TextColumn::make('painted_door_handles')
                    ->searchable(),
                Tables\Columns\TextColumn::make('painted_front_bumber')
                    ->searchable(),
                Tables\Columns\TextColumn::make('claddings')
                    ->searchable(),
                Tables\Columns\TextColumn::make('painted')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
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
            'index' => Pages\ListFeatures::route('/'),
            'create' => Pages\CreateFeature::route('/create'),
            'edit' => Pages\EditFeature::route('/{record}/edit'),
        ];
    }
}
