<?php
$theme_uri = make_path_relative_no_pre_path(get_stylesheet_directory_uri());
$data = array (
    array (
        "title" => "Teachers",
        "excerpt" => "Resources and Workshops",
        "image" => $theme_uri."/img/section-banner-education-teachers.jpg",
        "url" => "https://www.nationalarchives.gov.uk/education/teachers/"
    ),
    array (
        "title" => "Students",
        "excerpt" => "Explore and Learn",
        "image" => $theme_uri."/img/section-banner-education-02.jpeg",
        "url" => "https://www.nationalarchives.gov.uk/education/students/"
    ),
    array (
        "title" => "Outreach",
        "excerpt" => "Projects and Exhibitions",
        "image" => $theme_uri."/img/section-banner-education-03.jpeg",
        "url" => "https://www.nationalarchives.gov.uk/education/outreach/"
    ),
    array (
        "title" => "Families",
        "excerpt" => "Events and Activities",
        "image" => $theme_uri."/img/section-banner-education-01.jpeg",
        "url" => "https://www.nationalarchives.gov.uk/education/families/"
    )
)
?>
<h2 class="sr-only">Audience group</h2>
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
