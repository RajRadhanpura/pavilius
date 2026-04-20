<!DOCTYPE html>
<html data-wf-page="67409478e7d06cee556594d1" data-wf-site="67409478e7d06cee556594cb" lang="en">

<head>
    <meta charset="utf-8" />

    <!-- meta title and description -->
    <?php
    include 'page-meta.php';
    $page = isset($page) ? $page : "index";
    if (isset($page_meta[$page])) {
        $meta_title = $page_meta[$page]['title'];
        $meta_description = $page_meta[$page]['description'];
    } else {
        $meta_title = $default_meta['title'];
        $meta_description = $default_meta['description'];
    }
    ?>

    <title><?= htmlspecialchars($meta_title); ?></title>
    <meta name="description" content="<?= htmlspecialchars($meta_description); ?>">

    <meta content="<?= htmlspecialchars($meta_title); ?>" property="og:title" />
    <meta content="<?= htmlspecialchars($meta_description); ?>" property="og:description" />

    <meta content="img/favicon.png" property="og:image" />
    <meta content="<?= htmlspecialchars($meta_title); ?>" property="twitter:title" />
    <meta content="<?= htmlspecialchars($meta_description); ?>" property="twitter:description" />

    <!-- others & seo -->
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="robots" content="index, follow">
    <meta name="author" content="Pavilius Consulting Pvt. Ltd.">
    <link rel="canonical" href="#">

    <!-- favicon -->
    <link href="img/favicon.png" rel="shortcut icon" type="image/x-icon" />
    <link href="img/favicon.png" rel="apple-touch-icon" />
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <!-- css -->
    <link href="css/pavilius.css?abc=<?php echo rand(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/extra.css" rel="stylesheet" type="text/css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Poppins:100,200,regular,italic,500,600,700", "Inter:regular,500,italic,500italic"]
            }
        });
    </script>

</head>

<body class="body">
    <div class="header">
        <div class="container container-header-inner">
            <div class="content-horizontal-flex-left header-content">
                <a href="index.php" aria-label="logo-link" aria-current="page" class="header-logo-black w-inline-block w--current">
                    <div class="logo-white w-embed">
                        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" width="16mm" height="16mm" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                            viewBox="0 0 102.99 117.32"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                            <defs>
                                <style type="text/css">
                                    <![CDATA[
                                    .fil0 {
                                        fill: white
                                    }
                                    ]]>
                                </style>
                            </defs>
                            <g id="Layer_x0020_1">
                                <metadata id="CorelCorpID_0Corel-Layer" />
                                <path class="fil0" d="M0.03 68l-0.02 49.31 16.09 -0.03 -0.01 -65.19 0 -4.56 35.09 -27.05 20.56 16.72 25.5 0 -45.79 -37.21 -51.46 39.66 0.03 28.34zm70.62 -14.72l-28.75 22.16 0.01 41.8 61.08 0.08 -0.05 -16.07 -44.96 0 0 -17.9 39 -30.06 -26.33 0z" />
                            </g>
                        </svg>
                    </div>
                </a>
                <nav class="header-navigation">
                    <ul role="list" class="header-list-black w-list-unstyled">
                        <li class="header-item-black">
                            <a href="about.php" aria-label="about-us" data-w-id="60dd773c-fc5c-402b-0d9f-51416baaab5c" class="nav-link w-inline-block">
                                <div class="navigation-link">
                                    <div class="nav-link-text mobile-menu-size">About</div>
                                    <div class="nav-link-text upper">About</div>
                                    <div class="nav-link-text lower">About</div>
                                </div>
                            </a>
                        </li>
                        <li class="header-item-black">
                            <a href="services.php" aria-label="services" data-w-id="60dd773c-fc5c-402b-0d9f-51416baaab63" class="nav-link w-inline-block">
                                <div class="navigation-link">
                                    <div class="nav-link-text mobile-menu-size">Services</div>
                                    <div class="nav-link-text upper">Services</div>
                                    <div class="nav-link-text lower">Services</div>
                                </div>
                            </a>
                        </li>
                        <li class="header-item-black">
                            <a href="projects.php" aria-label="projects" data-w-id="60dd773c-fc5c-402b-0d9f-51416baaab6a" class="nav-link w-inline-block">
                                <div class="navigation-link">
                                    <div class="nav-link-text mobile-menu-size">Projects</div>
                                    <div class="nav-link-text upper">Projects</div>
                                    <div class="nav-link-text lower">Projects</div>
                                </div>
                            </a>
                        </li>
                        <li class="header-item-black">
                            <a href="blog.php" aria-label="blog" data-w-id="60dd773c-fc5c-402b-0d9f-51416baaab71" class="nav-link w-inline-block">
                                <div class="navigation-link">
                                    <div class="nav-link-text mobile-menu-size">Blog</div>
                                    <div class="nav-link-text upper">Blog</div>
                                    <div class="nav-link-text lower">Blog</div>
                                </div>
                            </a>
                        </li>
                        <li class="header-item-black header-button-wrapper desktop-hidden">
                            <a aria-label="contact" data-w-id="60dd773c-fc5c-402b-0d9f-51416baaab78" href="contact.php" class="button-white button-white-with-top-margin w-inline-block">
                                <div class="button-text-wrapper">
                                    <div class="btn-text upper">Contact</div>
                                    <div class="btn-text lower">Contact</div>
                                </div>
                            </a>
                        </li>
                        <!-- <li class="header-item-black header-button-wrapper desktop-hidden">
                            <a aria-label="contact" data-w-id="60dd773c-fc5c-402b-0d9f-51416baaab78" href="policies.php" class="button-white button-white-with-top-margin w-inline-block">
                                <div class="button-text-wrapper">
                                    <div class="btn-text upper">Policies</div>
                                    <div class="btn-text lower">Policies</div>
                                </div>
                            </a>
                        </li> -->

                    </ul>
                </nav>
                <div class="burger-wrapper tablet-visible">
                    <button data-w-id="60dd773c-fc5c-402b-0d9f-51416baaab80" type="button" aria-label="open menu" class="burger"><span class="burger-line burger-line-top"></span><span class="burger-line burger-line-middle"></span><span class="burger-line burger-line-bottom"></span></button><button type="button" aria-label="close menu" class="burger-close"></button>
                </div>
                <div class="header-blur-background hidden"></div>
                <a aria-label="contact" data-w-id="60dd773c-fc5c-402b-0d9f-51416baaab86" href="contact.php" class="button-transparent mobile-hidden w-inline-block">
                    <div class="button-text-wrapper">
                        <div class="btn-text upper">Contact</div>
                        <div class="btn-text lower">Contact</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="main">