<?php

namespace App\Livewire\Auth;

use Filament\Forms;
use App\Models\User;
use Livewire\Component;
use App\Models\Industry;
use Filament\Forms\Form;
use Filament\Actions\Action;
use App\Models\ProductIndustry;
use Illuminate\Contracts\View\View;
use Filament\Forms\Components\Select;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Actions\Concerns\InteractsWithActions;

class Signup extends Component implements HasForms, HasActions
{
    use InteractsWithForms;
    use InteractsWithActions;



    public ?array $data = [];
    public User $user;
    public function mount(): void
    {
        
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
               TextInput::make('name')
                    ->required(),
               TextInput::make('email')
                    ->email()
                    ->required(),
                // Forms\Components\DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->revealable()
                    ->required(),
                    TextInput::make('company_name')
                    ->required(),
                    TextInput::make('fax_number'),
                    TextInput::make('business_number')
                    ->required(),
                    Select::make('industry_id')
                    ->options(Industry::all()->pluck('name','id'))
                    ->required(),
                    // Select::make('product_industry')
                    // ->required(),
                    CheckboxList::make('product_industry')
                    ->options(ProductIndustry::all()->pluck('name','id'))
                    ->columns(2),

                    FileUpload::make('profile_image'),

            ])
            ->statePath('data')
            ->model(User::class);
    }

//     public function create(): void
//     {
//         $data = $this->form->getState();
// dd($data);
//         $record = User::create($data);

//         $this->form->model($record)->saveRelationships();
//     }

public function publishAction(): Action
{
    // dd($this->form->getState());
    return Action::make('publish')
        ->label('Submite')
        ->action(function () {
            $data = $this->form->getState();
            dd($data);
            // $st = Student::create($this->form->getState());

          

            $this->form->fill();

        })
        ;




}

    public function render(): View
    {
        return view('livewire.auth.signup');
    }
}