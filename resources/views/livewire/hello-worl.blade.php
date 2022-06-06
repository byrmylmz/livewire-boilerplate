<div>

    <input type="text" wire:model='name'>
    <input wire:model="loud" type="checkbox">
    <select wire:model="greetings" multiple>
        <option>Hello</option>
        <option>Goodby</option>
        <option>Adios</option>
    </select>
    Hello {{$name}} @if($loud) ! @endif
    {{implode(',', $greetings)}}
</div>
