<?php

namespace App\Filament\Pages;

use App\Models\WebsiteContent;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Radio;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Support\Exceptions\Halt;
use Filament\Forms\Components\MarkdownEditor;




use Filament\Pages\Page;

class website_content extends Page implements HasForms
{
    use InteractsWithForms;
    public ?array $data = []; 
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?int $navigationSort = 20;


    protected static string $view = 'filament.pages.website_content';

    public function mount(): void 
    {
        $setting=WebsiteContent::first();
        if($setting){
            $this->form->fill(WebsiteContent::first()->attributesToArray()); 
        }
        else{
            $this->form->fill();
        }
    }
 
    public function form(Form $form): Form
    {
        
        return $form
        
        
            ->schema([
                MarkdownEditor::make('home_section')->translateLabel(),
                MarkdownEditor::make('about_section_content')->translateLabel(),
                MarkdownEditor::make('about_point1')->translateLabel(),
                MarkdownEditor::make('desc1')->translateLabel(),
                MarkdownEditor::make('about_point2')->translateLabel(),
                MarkdownEditor::make('desc2')->translateLabel(),
                MarkdownEditor::make('about_point3')->translateLabel(),
                MarkdownEditor::make('desc3')->translateLabel(),
                MarkdownEditor::make('home_section_en')->translateLabel(),
                 MarkdownEditor::make('about_section_content_en')->translateLabel(),
                MarkdownEditor::make('about_point1_en')->translateLabel(),
                MarkdownEditor::make('desc1_en')->translateLabel(),
                MarkdownEditor::make('about_point2_en')->translateLabel(),
                MarkdownEditor::make('desc2_en')->translateLabel(),
                MarkdownEditor::make('about_point3_en')->translateLabel(),
                MarkdownEditor::make('desc3_en')->translateLabel(),
                TextInput::make('link')->translateLabel(),
                

            ])
            ->statePath('data');
    }
    
    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }


    public function save(): void
    {
        try {
            $data = $this->form->getState();

            $setting =WebsiteContent::first();
            if($setting){
                 $setting->update($data);
            }else{
                WebsiteContent::create($data);
            }

            
        } catch (Halt $exception) {
            dd($exception);
        }

        Notification::make() 
        ->success()
        ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
        ->send();
    }

    public  static function getNavigationLabel(): string
        {
            return __('WebsiteContent');
        }

        public static function getModelLabel(): string
            {
                return __('WebsiteContent');
            }

}
