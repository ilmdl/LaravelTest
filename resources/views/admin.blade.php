<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <h1>Add category</h1>
    <form method="post" action="{{ route('addCategory') }}">
        @csrf
        <div style="padding: 5px;">
            <label for="cat">food categoryb</label>
            <input type="text" name="cat" style="color : black;">
            <input type="submit" label="Add category">
        </div>
    </form>

    <h1>Add to menue item</h1>
    <form method="post" action="{{ route('addToMenue') }}" >
        @csrf
        <div style="padding: 5px;">
            <label for="item">Item</label>
            <input type="text" name="item" style="color : black;">
        </div>
        <div style="padding: 5px;">
            <label for="price">Price</label>
            <input type="int" name="price" style="color : black;">
        </div>
        <div style="padding: 5px;">
            <label for="description">description</label>
            <input type="text" name="description" style="color : black;">
        </div>
        <div style="padding: 5px;">
            <label for="allergens">allergens</label>
            <input type="text" name="allergens" style="color : black;">
        </div>
        <div style="padding: 5px;">
            <label for="offers">offers</label>
            <input type="text" name="offers" style="color : black;">
        </div>
        <div style="padding: 5px;">
            <label for="category_id">category_id</label>
            <input type="text" name="category_id" style="color : black;">
        </div>
        <div style="padding: 5px;">
            <label for="avail">Available</label>
            <input type="checkbox" name="avail" style="color : black;">
        </div>
        
        <button type="submit">Add to menue</button>
    </form>
</div>
