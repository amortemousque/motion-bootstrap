<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <base href="/">
    <title>Components</title>
    <link href="/assets/styles/vendor/bootstrap.min.css" rel="stylesheet">
    <link href="public/style.css" rel="stylesheet">
</head>
<body>

    <?php
        include("components/navbar.php");
        include("components/scrolling.php");
    ?>
    <div id="barba-wrapper">
    <div class="barba-container">

    <div class="container">




            <br />

            <h1>Block break</h1>
            <div class="row">
                <div class="col">
                    <?php
                    include("components/block-break.php");
                    ?>
                </div>
            </div>
            <pre class="code-sheet highlight">
                <code data-lang="html">
                </code>
            </pre>

            <br />
            <h1>Block img</h1>
            <div class="row" style="margin-top:140px;">
                <div class="col-6">
                    <?php
                        include("components/block-img.php");
                    ?>
                </div>
            </div>
            <pre class="code-sheet highlight">
                <code data-lang="html">
                </code>
            </pre>

            <br />
            <h1>Block shift</h1>
            <div class="row">
                <div class="col-6 text-right">
                    <?php
                        include("components/block-shift.php");
                    ?>
                </div>
            </div>
            <pre class="code-sheet highlight">
                <code data-lang="html">
                </code>
            </pre>



            <h1>Blockquote</h1>
            <div class="row">
                <div class="col-6">
                    <?php
                        include("components/blockquote.php");
                    ?>
                </div>
            </div>
            <pre class="code-sheet highlight">
                <code data-lang="html">
                </code>
            </pre>


            <br />

            <h1>Panel</h1>
            <div class="row">
                <div class="col-6">
                    <?php
                        include("components/panel-editorial.php");
                    ?>
                </div>
            </div>
            <pre class="code-sheet highlight">
                <code data-lang="html">
                </code>
            </pre>




    </div>
    

    </div>
    </div>

    <?php
        include("components/footer.php");
    ?>

</body>
</html>
