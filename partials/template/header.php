<header>
    <div class="header__logo">
            <img src="img/spotify-logo.png" alt="spotify_logo">
        </div>
    </div>
    <form class="header__filter">
        <label for="genre">Filter by genre</label>
        <select name="genre" onchange="this.form.submit()">
            <option selected disabled>Select the genre</option>
            <option value="all">All</option>
            <?php foreach($genres as $genre):?>
                <option value="<?= $genre?>"><?= $genre?></option>
            <?php endforeach; ?>
            <!-- <option value="Rock">Rock</option>
            <option value="Metal">Metal</option>
            <option value="Jazz">Jazz</option>
            <option value="Pop">Pop</option> -->
        </select>
        <!-- <input type="submit" name="submit" value="Filter"> -->
    </form>
</header>
