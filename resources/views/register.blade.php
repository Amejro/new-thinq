<!-- @filamentStyles -->
@vite('resources/css/app.css')

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 gap-5">
         <!-- Form to input the index number -->
         <form method="POST" action="{{ route('register') }}">
           @csrf
                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="text" id="name" wire:model="name"
                        Placeholder='name' required />
                </x-filament::input.wrapper>

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="email" id="email" wire:model="email"
                        Placeholder='email' required />
                </x-filament::input.wrapper>

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="password" id="password" wire:model="password"
                        Placeholder='password' required />
                </x-filament::input.wrapper>


                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="text" id="company_name" wire:model="company_name"
                        Placeholder='company_name' required />
                </x-filament::input.wrapper>

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="text" id="fax_number" wire:model="fax_number"
                        Placeholder='fax_number' required />
                </x-filament::input.wrapper>

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="text" id="business_number" wire:model="business_number"
                        Placeholder='business_number' required />
                </x-filament::input.wrapper>

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <!-- <x-filament::input type="text" id="industry_id" wire:model="industry_id"
                        Placeholder='industry_id' required /> -->
                        <x-filament::input.select wire:model="industry_id">
        <option value="draft">Draft</option>
        <option value="reviewing">Reviewing</option>
        <option value="published">Published</option>
    </x-filament::input.select>
                </x-filament::input.wrapper>

              <p>product industry</p>

                <label>
                   <x-filament::input.checkbox wire:model="isAdmin" />
                 <span>Is Admin</span>
                </label>

                <label>
                   <x-filament::input.checkbox wire:model="isAdmin" />
                 <span>Is Admin</span>
                </label>

                <label>
                   <x-filament::input.checkbox wire:model="isAdmin" />
                 <span>Is Admin</span>
                </label>

                <x-filament::input.wrapper style='margin-bottom: 20px '>
                    <x-filament::input type="file" id="profile_image" wire:model="profile_image"
                        Placeholder='profile_image'  />
                </x-filament::input.wrapper>

                <x-filament::button type="submit"  class="!text-black">
                    Submit
                </x-filament::button>
            </form>
    </div>
</div>
