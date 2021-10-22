<header>
    <div class="header__logo">
            <img src="img/spotify-logo.png" alt="spotify_logo">
        </div>
    </div>
    <form class="header__filter">
        <label for="genre">Filter by genre</label>
        <select name="genre" onchange="this.form.submit()">
            <option value="">Choose genre</option>
            <option value="Rock">Rock</option>
            <option value="Metal">Metal</option>
            <option value="Jazz">Jazz</option>
            <option value="Pop">Pop</option>
        </select>
        <!-- <input type="submit" name="submit" value="Filter"> -->
    </form>
</header>
