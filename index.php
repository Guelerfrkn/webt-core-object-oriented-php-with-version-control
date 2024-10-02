<?php
require_once("video.php");
$videos = [
    new YouTube("gUi2N5vV-3g", " SUPERMOTO FREEDOM - querly 2024 "),
    new Youtube("63FwKbNHkpI", " RIDE ON THE LIMIT - querly 2024 "),
    new YouTube("eRP26jfdv20", " BANSHEE DREAMBUILD - querly 2024 "),
    new YouTube("YnGDANArstQ&t", " FEAR OF SUPERMOTO - querly 2024 "),
    new YouTube("XzcxpmDcJCw", " BAD DAY - querly 2024 "),
    new Vimeo("172917343", "Drachenlord meddlt"),
    new Vimeo("179890005", "Drachenlord rastet aus"),
    new Vimeo("246507951", "Drachenlord streamt, 08.12.2017"),
    new Vimeo("247127625", "Drachenlord streamt, 12.12.2017"),
    new Vimeo("246858822", "Drachenlord zockt, worst of 10./11.12.2017")
];
?>
<html>

<head>
    <title>Oop</title>
    <link href="styles.css" rel="stylesheet">
    <style>
        body,
        * {
            box-sizing: border-box;
            font-family: arial;
        }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 100%;
            flex-wrap: wrap;
            gap: 40px;
        }

        header {
            text-align: center;
        }

        .item {
            padding: 10px;
            border-radius: 5px;
            background-color: #e0e0e0;
        }

        h2 {
            text-align: center;
            margin: 0 10px 10px 0;
        }

        .caption {
            font-size: 0.9rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>Object oriented programming</h1>
    </header>
    <div class="wrapper">
        <?php
        foreach ($videos as $video) {
            echo '<div class="item">';
            echo '<h2>' . $video->getName() . '</h2>';
            echo $video->getEmbedCode();
            echo '<p class="caption">Quelle: ' . $video->getSource() . '</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>