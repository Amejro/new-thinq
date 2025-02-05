
<style>
    .fi-select-input{
    background-image:none !important;
}
</style>
<div class=" ">
<div clas="grid grid-cols-2 gap-4 my-10">
    <form wire:submit="create" class='col-span-1'>
       <div >
           <h1>Sign Up</h1>
       {{ $this->form }}
       {{ $this->publishAction }}

       </div>
        <!-- <button type="submit">
            Submit
        </button> -->
    </form>
    <x-filament-actions::modals />
    </div>
    
    
</div>
