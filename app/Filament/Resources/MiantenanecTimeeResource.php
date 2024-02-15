<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\MiantenanecTimee;
use Filament\Resources\Resource;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\Fieldset;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MiantenanecTimeeResource\Pages;
use App\Filament\Resources\MiantenanecTimeeResource\RelationManagers;



class MiantenanecTimeeResource extends Resource
{
    protected static ?string $model = MiantenanecTimee::class;


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    protected static ?string $navigationGroup = 'Contact';
    protected static ?int $navigationSort = 6;

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
                Fieldset::make('Create New Miantenanec Time')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255)->columnSpan(1),

                        TextInput::make('email')
                            ->email()
                            ->required()
                            ->maxLength(255)->columnSpan(1),


                        TextInput::make('phone')
                            ->tel()
                            ->required()
                            ->columnSpan(1),

                        DateTimePicker::make('date')
                            ->required()
                            ->columnSpan(1),

                        TextInput::make('type')
                            ->required()
                            ->maxLength(255)
                            ->columnSpan(1),

                        MarkdownEditor::make('message')
                            ->required()
                            ->label('Message')
                            ->columnSpan(3),

                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID')
                    ->searchable(),

                TextColumn::make('name')
                    ->searchable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('phone')
                    ->searchable(),

                TextColumn::make('type')
                    ->searchable(),

                TextColumn::make('date')
                    ->dateTime()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Date')
                    ->date('d-m-Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([


                Filter::make('date')
                    ->form([
                        DatePicker::make('from_date'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['from_date'],
                                fn (Builder $query, $date): Builder => $query->whereDate('date', '=', $date),
                            );
                    }),

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
            'index' => Pages\ListMiantenanecTimees::route('/'),
            'create' => Pages\CreateMiantenanecTimee::route('/create'),
            'edit' => Pages\EditMiantenanecTimee::route('/{record}/edit'),
        ];
    }



   
}
