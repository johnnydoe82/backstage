<div class="add-wrapper" v-show="songForm">
    Bitte gib den Songnamen ein:
    <form action="{{$baseurl}}/songs" method="post">
        {{csrf_field()}}
        <input name="name" type="text">
        <button type="submit">Speichern</button>
    </form>
    <button class="cancel" v-on:click="songForm = false">
        Abbrechen
    </button>
</div>