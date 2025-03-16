<x-master>
    <x-base.panel class="my-4">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic illum error, quas odio enim vitae
            necessitatibus sequi esse dignissimos, tempore at et rem ut soluta sapiente culpa minima beatae deserunt?
        </p>
    </x-base.panel>

    <x-base.panel>
        <div class="grid grid-cols-4 gap-8 my-4">
            @foreach ([1, 2, 3, 4, 5, 6, 7, 8] as $item)
                <x-base.card />
            @endforeach
        </div>
    </x-base.panel>

</x-master>
