<div>
    <input type="text" wire:model="searchTerm"/>

    <ul>
        @foreach($users as $user)
            <li>
                <p>
                    {{ $user['name'] }}
                </p>
                <div>
                    {{ $user['content'] }}
                </div>
            </li>
        @endforeach
    </ul>
</div>
