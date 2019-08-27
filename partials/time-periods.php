<?php
$theme_uri = make_path_relative_no_pre_path(get_stylesheet_directory_uri());
$data = array (
    array (
        "title" => "Medieval<br>974 - 1485",
        "image" => $theme_uri."/img/era-medieval.jpg",
        "url" => "https://www.nationalarchives.gov.uk/education/sessions-and-resources/?time-period=medieval"
    ),
    array (
        "title" => "Early modern<br>1485 - 1750",
        "image" => $theme_uri."/img/era-earlymodern.jpg",
        "url" => "https://www.nationalarchives.gov.uk/education/sessions-and-resources/?time-period=early-modern"
    ),
    array (
        "title" => "Empire and industry<br>1750 - 1850",
        "image" => $theme_uri."/img/era-imperial.jpg",
        "url" => "https://www.nationalarchives.gov.uk/education/sessions-and-resources/?time-period=empire-and-industry"
    ),
    array (
        "title" => "Victorians<br>1850 - 1901",
        "image" => $theme_uri."/img/era-victorian.jpg",
        "url" => "https://www.nationalarchives.gov.uk/education/sessions-and-resources/?time-period=victorians"
    ),array (
        "title" => "Early 20th Century<br>1901 - 1918",
        "image" => $theme_uri."/img/era-early20th.jpg",
        "url" => "https://www.nationalarchives.gov.uk/education/sessions-and-resources/?time-period=early-20th-century"
    ),
    array (
        "title" => "Interwar<br>1918 - 1939",
        "image" => $theme_uri."/img/era-interwar.jpg",
        "url" => "https://www.nationalarchives.gov.uk/education/sessions-and-resources/?time-period=interwar"
    ),
    array (
        "title" => "Second World War<br>1939 - 1945",
        "image" => $theme_uri."/img/era-secondworldwar.jpg",
        "url" => "https://www.nationalarchives.gov.uk/education/sessions-and-resources/?time-period=second-world-war"
    ),
    array (
        "title" => "Postwar<br>1945 - present",
        "image" => $theme_uri."/img/era-postwar.jpg",
        "url" => "https://www.nationalarchives.gov.uk/education/sessions-and-resources/?time-period=postwar"
    )
)
?>
<div class="cards">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Time Periods</h2>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data as $item) { ?>
            <div class="col-md-3">
                <div class="card">
                    <a href="<?php echo $item["url"]; ?>">
                        <div class="entry-image" style="background-image: url(<?php echo $item["image"]; ?>);"></div>
                        <div class="entry-content">
                            <h3><?php echo $item["title"]; ?></h3>
                        </div>
                    </a>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
