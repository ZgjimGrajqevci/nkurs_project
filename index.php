<?php

    $page = 'Home';

    include('includes/config.php');

    include('header.php');

    ?>
<div id="homeBackgroundN">
    <?php

    include('navbar.php');

?>

    <main>
        <div id="homeMain"  class="container">

            <div id="homeMainUp">
                <div id="homeMainUpContainer">
                    <div id="carouselExampleIndicators" class="carousel slide" data-interval="10000" data-ride="carousel">
                        <div id="homeMainUpContent" class="carousel-inner" >
                            <div id="homeMainUpContentCarousel" class="carousel-item active">
                                <div id="homeMainUpFirst">
                                    <div id="imgSide">
                                        <img src="assets/images/homePage/information.png">
                                    </div>
                                    <div id="txtSide">
                                        <div id="homeIntroTitle">
                                            <h1>Gjeje kursin që të duhet shpejt dhe lehtë.</h1>
                                            <p>Vendi ku mund të gjeni informacion rreth kurseve.</p>
                                        </div>
                                        <div id="homeIntroServices">
                                            <div>
                                                <span>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12"
                                                         role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                        <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0
                                                        77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80
                                                        35.817-80 80 35.817 80 80 80z"></path>
                                                    </svg>
                                                </span>
                                                <p>Lokacionin</p>
                                            </div>
                                            <div>
                                                <span>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="euro-sign" class="svg-inline--fa fa-euro-sign fa-w-10" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                                        <path fill="currentColor" d="M310.706 413.765c-1.314-6.63-7.835-10.872-14.424-9.369-10.692 2.439-27.422 5.413-45.426 5.413-56.763
                                                        0-101.929-34.79-121.461-85.449h113.689a12 12 0 0 0
                                                        11.708-9.369l6.373-28.36c1.686-7.502-4.019-14.631-11.708-14.631H115.22c-1.21-14.328-1.414-28.287.137-42.245H261.95a12 12 0 0 0
                                                        11.723-9.434l6.512-29.755c1.638-7.484-4.061-14.566-11.723-14.566H130.184c20.633-44.991 62.69-75.03 117.619-75.03 14.486 0 28.564 2.25
                                                        37.851 4.145 6.216 1.268 12.347-2.498 14.002-8.623l11.991-44.368c1.822-6.741-2.465-13.616-9.326-14.917C290.217 34.912 270.71 32 249.635
                                                        32 152.451 32 74.03 92.252 45.075 176H12c-6.627 0-12 5.373-12 12v29.755c0 6.627 5.373 12 12 12h21.569c-1.009 13.607-1.181 29.287-.181
                                                        42.245H12c-6.627 0-12 5.373-12 12v28.36c0 6.627 5.373 12 12 12h30.114C67.139 414.692 145.264 480 249.635 480c26.301 0 48.562-4.544
                                                        61.101-7.788 6.167-1.595 10.027-7.708 8.788-13.957l-8.818-44.49z"></path>
                                                    </svg>
                                                </span>
                                                <p>Çmimin</p>
                                            </div>
                                            <div>
                                                <span>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                        <path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,
                                                        0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path>
                                                    </svg>
                                                </span>
                                                <p>Oraret</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="homeMainUpContentCarousel" class="carousel-item">
                                <div id="homeMainUpSecond">
                                    <div id="imgSide">
                                        <img src="assets/images/homePage/vision.png">
                                    </div>
                                    <div id="txtSide">
                                        <p>Vizioni ynë është të jemi vendi ku janë të shfaqura të gjitha kurset dhe i gjithë informacioni rreth tyre, sepse dëshirojmë që kërkimin për kurse
                                            ta bëjmë sa më të lehtë dhe të mundshëm për të gjithë.</p>
                                    </div>
                                </div>
                            </div>
                            <div id="homeMainUpContentCarousel" class="carousel-item">
                                <div id="homeMainUpThird">
                                    <div id="imgSide">
                                        <img src="assets/images/homePage/contactUs.png">
                                    </div>
                                    <div id="txtSide">
                                        <p>Nëse keni ndonjë paqartësi ose dëshironi që kursi juaj të shfaqet në platformën tonë, na kontaktoni.</p>
                                        <a href="contact.php">
                                            <p>Kontakto</p>
                                            <span>
                                                <svg version="1.1" id="Layer_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                                    <g>
                                                        <path fill="currentColor" d="M256,393.1c-19.1,0-38.2-7.3-52.7-21.8L19.9,187.9c-15.8-15.8-15.8-41.4,0-57.2c15.8-15.8,41.4-15.8,57.2,0L256,309.6
                                                               l178.9-178.9c15.8-15.8,41.4-15.8,57.2,0c15.8,15.8,15.8,41.4,0,57.2L308.7,371.4C294.2,385.9,275.1,393.1,256,393.1z"/>
                                                    </g>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <ol id="homeMainUpIndicators" class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                        </div>
                        <div id="homeMainUpTrigger">
                            <span>
                                <svg id="ball" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-circle-up" class="svg-inline--fa fa-arrow-circle-up fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M8 256C8 119 119 8 256 8s248 111 248 248-111 248-248 248S8 393 8 256zm143.6 28.9l72.4-75.5V392c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V209.4l72.4 75.5c9.3 9.7 24.8 9.9 34.3.4l10.9-11c9.4-9.4 9.4-24.6 0-33.9L273 107.7c-9.4-9.4-24.6-9.4-33.9 0L106.3 240.4c-9.4 9.4-9.4 24.6 0 33.9l10.9 11c9.6 9.5 25.1 9.3 34.4-.4z"></path></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="homeMainMiddle">
                <div id="homeMainMiddleContainer">
                    <div id="titleSide">
                        <h1>Kurset</h1>
                        <hr>
                    </div>
                    <div id="coursesSide">
                        <?php
                        $sql = "SELECT * FROM courses LEFT OUTER JOIN coursesimage ON courses.courseId = coursesimage.theCourseId GROUP BY courses.courseName ORDER BY RAND()";
                        $result=$conn->query($sql);
                        $courseId = '';
                        while ($row=$result->fetch_assoc()) {
                            ?>
                        <div id="courseCard">
                            <a href="course.php?id=<?= $row['courseId'];?>">
                                <div id="courseCardContainer">
                                    <div id="courseCardHead">
                                        <?php
                                        if (!empty($row["imageName"])){
                                            ?>
                                            <div id="courseCardImage">
                                                <?php
                                                    $imageURL = 'courseImages/'.$row["imageName"];
                                                    echo '<img src="' . $imageURL . '" alt="">';
                                                    ?>
                                            </div>
                                        <?php
                                        }else{
                                            ?>
                                            <div id="courseCardDefaultImage">
                                                <img src="assets/images/courses/default.png" alt="">
                                            </div>
                                        <?php
                                        }
                                            ?>
                                        <div id="courseCardLocation">
                                            <?php
                                            if(!$row['courseLocationsAmount'] == null){
                                                echo '
                                                <span>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" c>
                                                        <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961
                                                             85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817
                                                             80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                                    </svg>
                                                </span>
                                                <p> ' .  $row['courseCity'] . ' - ' . $row['courseLocationsAmount'] .'</p>';
                                            }elseif(!$row['courseCity'] == null){
                                                echo'
                                                <span>
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img"
                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" c>
                                                        <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961
                                                             85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817
                                                             80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                                    </svg>
                                                </span>
                                                <p>' . $row['courseCity'] .'</p>';
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div id="courseCardBody">
                                        <div id="courseCardTitle">
                                            <p id="courseName"><?= $row['courseName'];?></p>
                                        </div>
                                        <div id="courseCardServices">
                                            <div>
                                                <?php
                                                    if (!$row['courseService1'] == null){?>
                                                        <p><?= $row['courseService1'];?></p>
                                                        <?php
                                                    }
                                                    if (!$row['courseService2'] == null){?>
                                                        <p><?= $row['courseService2'];?></p>
                                                        <?php
                                                    }
                                                    if (!$row['courseService3'] == null){?>
                                                        <p><?= $row['courseService3'];?></p>
                                                        <?php
                                                    }
                                                    if (!$row['courseService4'] == null){?>
                                                        <p><?= $row['courseService4'];?></p>
                                                        <?php
                                                    }
                                                    if (!$row['courseService5'] == null){?>
                                                        <p><?= $row['courseService5'];?></p>
                                                        <?php
                                                    }
                                                    if (!$row['courseService6'] == null){?>
                                                        <p><?= $row['courseService6'];?></p>
                                                        <?php
                                                    }
                                                    if (!$row['courseService7'] == null){?>
                                                        <p><?= $row['courseService7'];?></p>
                                                        <?php
                                                    }
                                                    if (!$row['courseService8'] == null){?>
                                                        <p><?= $row['courseService8'];?></p>
                                                        <?php
                                                    }
                                                    if (!$row['courseService9'] == null){?>
                                                        <p><?= $row['courseService9'];?></p>
                                                        <?php
                                                    }
                                                    if (!$row['courseService10'] == null){?>
                                                        <p><?= $row['courseService10'];?></p>
                                                        <?php
                                                    }
                                                    if (!$row['courseService11'] == null){?>
                                                        <p><?= $row['courseService11'];?></p>
                                                        <?php
                                                    }
                                                    if (!$row['courseService12'] == null){?>
                                                        <p><?= $row['courseService12'];?></p>
                                                        <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="courseCardFooter">
                                        <div id="courseCardPrice">
                                            <?php

                                            if ($row['coursePriceFrom'] === '1' and $row['coursePriceTo'] === '1'){
                                                echo '<p style="letter-spacing: 1px;">sipas ofertës</p>';
                                            }elseif (!empty($row['coursePriceTo'])){
                                                echo '<p> ' . $row['coursePriceFrom'] . ' - ' . $row['coursePriceTo'] .  '€' .'</p>';
                                            }elseif (empty($row['coursePriceFrom'])){
                                                echo '<p>i pacaktuar</p>';
                                            }else{
                                                echo '<p ">' . $row['coursePriceFrom'] . '€' .'</p>';
                                            }

                                            ?>
                                        </div>
                                        <div id="courseCardBtn">
                                            <svg version="1.1" id="Layer_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 x="0px" y="0px" viewBox="0 0 448 512" style="enable-background:new 0 0 448 512;" xml:space="preserve">
                                                <style type="text/css">
                                                    .st0{fill:url(#SVGID_1_);}
                                                </style>
                                                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="0" y1="256" x2="448.05" y2="256">
                                                    <stop  offset="5.025126e-03" style="stop-color:#72CFFF"/>
                                                    <stop  offset="0.3606" style="stop-color:#90AFFF"/>
                                                    <stop  offset="0.7229" style="stop-color:#A996FF"/>
                                                    <stop  offset="0.9397" style="stop-color:#B28CFF"/>
                                                </linearGradient>
                                                <path class="st0" d="M190.5,66.9l22.2-22.2c9.4-9.4,24.6-9.4,33.9,0L441,239c9.4,9.4,9.4,24.6,0,33.9L246.6,467.3
                                                      c-9.4,9.4-24.6,9.4-33.9,0l-22.2-22.2c-9.5-9.5-9.3-25,0.4-34.3L311.4,296H24c-13.3,0-24-10.7-24-24v-32c0-13.3,10.7-24,24-24h287.4
                                                      L190.9,101.2C181.1,91.9,180.9,76.4,190.5,66.9z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </main>
</div>
<?php

include('scripts.php');

include('footer.php');

?>