<div>
    {{ $brand }} <br><br><br>
    {{ $home }} <br><br>
    {{ $branches }}
    <input wire:model="branchname" type="text"> 
    <select wire:model="branchname">
        <option>Tabata</option>
        <option>Posta</option>
        <option>Tegeta</option>
        <option>Fire</option>
    </select> 
    <form action="#" wire:submit.prevent="addBranch()">
        <button>ADD</button> 
    </form>
    <input wire:model="added" type="checkbox"> @if ($added) {{ $branchname }} branch was added @endif<br><br>
    {{ $users }} <br>
</div>
