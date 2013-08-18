<h1>Create new outfit</h1>

{{ Form::open( ['url' => URL::route('outfit.index')] ) }}

    <div class="background">

        <div class="garment" style="background-image:url(http://placekitten.com/150); width: 150px; height: 125px;">
            <input class="id" type="text" name="garments[0][id]" value="3">
            <input class="x" type="text"  name="garments[0][x]"  value="30">
            <input class="y" type="text"  name="garments[0][y]"  value="30">
        </div>

    </div>

    <button type="submit">Save</button>
{{ Form::close() }}
