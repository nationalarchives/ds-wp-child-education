<?php
$theme_uri = make_path_relative_no_pre_path(get_stylesheet_directory_uri());
$data = array (
    array (
        "title" => "Teachers",
        "excerpt" => "Resources and Workshop",
        "image" => $theme_uri."/img/",
        "url" => ""
    ),
    array (
        "title" => "Students",
        "excerpt" => "Explore and Learn",
        "image" => $theme_uri."/img/",
        "url" => ""
    ),
    array (
        "title" => "Outreach",
        "excerpt" => "Projects and Exhibitions",
        "image" => $theme_uri."/img/",
        "url" => ""
    ),
    array (
        "title" => "Families",
        "excerpt" => "Events and Activities",
        "image" => $theme_uri."/img/",
        "url" => ""
    )
)
?>
<div class="cards">
    <div class="container">
        <div class="row">
            <?php foreach ($data as $item) { ?>
                <div class="col-md-3">
                    <div class="card">
                        <a href="<?php echo $item["url"]; ?>">
                            <div class="entry-image" style="background-image: url(<?php echo $item["image"]; ?>);"></div>
                            <div class="entry-content">
                                <h3><?php echo $item["title"]; ?></h3>
                                <p><?php echo $item["excerpt"]; ?></p>
                            </div>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
