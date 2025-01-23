<?php get_header(); ?>

<main>

    <h2 class="page-heading">About me</h2>
    <div id="post-container">
        <section id="blogpost">
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                </div>
                <div class="card-description">
                    <h3>Introduction about myself</h3>
                    <p>Hello there! My name is Xuanyi Qiu, 20 years old, currently studying Software Engineering in
                        "Facultat d'informàtica de Bacelona, UPC"</p>
                    <p>Personally, I enjoy exploring new experiences and always searching for new challenges to find the
                        best version of myself, that is why I consider myself someone who is plenty of curiosity and
                        desire to learn. </p>

                </div>
            </div>

        </section>
        <aside id="sidebar">
            <h3>More about me</h3>
            <p>Some of my hobbies are playing: pool, chess or videogames. I also like to interact with other
                colleagues at work or university and feel at ease with them because you always discover
                something new whether about culture, profesional or academic knowledge or just to talk about
                anything funny!</p>
            <br>
            <hr>
            <h3>Target</h3>
            <p>I would like to carry out all the knowledge that I learnt by myself or by University (web development,
                programming languages, frameworks) in a real situation and see how in reality works, extending even more
                my understadings during the process.
            </p>
            <br>
            <hr>

        </aside>
    </div>

    <?php get_footer(); ?>