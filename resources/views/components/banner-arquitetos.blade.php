@foreach ($Banner as $Bann)
    <section class="ArquitetosBanner">
        <div class="container">
            <div class="info">
                <h3>{{$Bann->title}}</h3>
                <p>{{$Bann->description}}</p>
                <x-button-component  variant="Outlined">
                    <span>
                        {{$Bann->buttonLabel}}
                    </span>
                </x-button-component>
            </div>
            <div class="image">
                <img src="https://placehold.co/1200x356" label="Placeholder">
            </div>
            <h3>{{$Bann->title}}</h3>
        </div>
    </section>
@endforeach
