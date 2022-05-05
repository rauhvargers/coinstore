<div {{ $attributes }}>
    <span>
        {{ $title }}
    </span>
    <span>
        {{ $productitem->production_year }}
    </span>

    <span>
        {{ $isItEuroCoin ? 'Euro' : 'Latvian lats' }} coin.
    </span>

    <span>
        {{ $slot }}
    </span>
</div>
