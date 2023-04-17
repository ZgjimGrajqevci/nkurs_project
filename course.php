<?php

    include('includes/config.php');

    include('header.php');

    ?>
<div id="courseBackgroundN">
    <?php

    include('navbar.php');

    $courseId = $_GET['id'];
    $sql = "SELECT * ,
            TIME_FORMAT(courses.courseScheduleOpen1, '%H:%i') AS courseScheduleOpen1,
           TIME_FORMAT(courses.courseScheduleOpen2, '%H:%i') AS courseScheduleOpen2,
           TIME_FORMAT(courses.courseScheduleOpen3, '%H:%i') AS courseScheduleOpen3,
           TIME_FORMAT(courses.courseScheduleOpen4, '%H:%i') AS courseScheduleOpen4,
           TIME_FORMAT(courses.courseScheduleOpen5, '%H:%i') AS courseScheduleOpen5,
           TIME_FORMAT(courses.courseScheduleOpen6, '%H:%i') AS courseScheduleOpen6,
           TIME_FORMAT(courses.courseScheduleClose1, '%H:%i') AS courseScheduleClose1,
           TIME_FORMAT(courses.courseScheduleClose2, '%H:%i') AS courseScheduleClose2,
           TIME_FORMAT(courses.courseScheduleClose3, '%H:%i') AS courseScheduleClose3,
           TIME_FORMAT(courses.courseScheduleClose4, '%H:%i') AS courseScheduleClose4,
           TIME_FORMAT(courses.courseScheduleClose5, '%H:%i') AS courseScheduleClose5,
           TIME_FORMAT(courses.courseScheduleClose6, '%H:%i') AS courseScheduleClose6 
            FROM courses LEFT OUTER JOIN coursesimage ON courses.courseId = coursesimage.theCourseId WHERE courseId=$courseId";

    $result = $conn->query($sql) or die($conn->error);
    while ($row=$result->fetch_assoc()) {
    ?>

    <main>
        <div id="courseMain" class="container">
            <div id="courseMainHead" class="row">
                <div id="titleSide" class="col-lg-7 col-sm-12">
                    <div id="courseName">
                        <p><?= $row['courseName'];?></p>
                    </div>
                    <div id="coursePrice">
                        <span>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="euro-sign" class="svg-inline--fa fa-euro-sign fa-w-10" role="img"
                                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path fill="currentColor" d="M310.706 413.765c-1.314-6.63-7.835-10.872-14.424-9.369-10.692
                                      2.439-27.422 5.413-45.426 5.413-56.763 0-101.929-34.79-121.461-85.449h113.689a12 12 0 0 0
                                      11.708-9.369l6.373-28.36c1.686-7.502-4.019-14.631-11.708-14.631H115.22c-1.21-14.328-1.414-28.287.137-42.245H261.95a12 12 0 0 0
                                      11.723-9.434l6.512-29.755c1.638-7.484-4.061-14.566-11.723-14.566H130.184c20.633-44.991 62.69-75.03 117.619-75.03 14.486 0 28.564
                                      2.25 37.851 4.145 6.216 1.268 12.347-2.498 14.002-8.623l11.991-44.368c1.822-6.741-2.465-13.616-9.326-14.917C290.217 34.912 270.71
                                      32 249.635 32 152.451 32 74.03 92.252 45.075 176H12c-6.627 0-12 5.373-12 12v29.755c0 6.627 5.373 12 12 12h21.569c-1.009 13.607-1.181
                                      29.287-.181 42.245H12c-6.627 0-12 5.373-12 12v28.36c0 6.627 5.373 12 12 12h30.114C67.139 414.692 145.264 480 249.635 480c26.301 0
                                      48.562-4.544 61.101-7.788 6.167-1.595 10.027-7.708 8.788-13.957l-8.818-44.49z"></path>
                            </svg>
                        </span>
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
                </div>
                <div id="imgSide" class="col-lg-5 col-sm-12">
                    <?php
                    if (!empty($row["imageName"])){
                        ?>
                        <div id="courseImage">
                            <?php
                            $imageURL = 'courseImages/'.$row["imageName"];
                            echo '<img src="' . $imageURL . '" alt="">';
                            ?>
                        </div>
                        <?php
                    }else{
                        ?>
                        <div id="courseDefaultImage">
                            <img src="assets/images/courses/defaultPurpleBg.png" alt="">
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <div id="courseMainBody" class="row">
                <div id="courseMainAbout" class="col-lg-5 col-md-6 col-sm-12">
                    <div id="courseMainAboutFirstContainer">
                        <div id="courseMainAboutSecondContainer">
                            <div id="courseCity">
                                <?php
                                if(!$row['courseLocationsAmount'] == null){
                                    echo '
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img"
                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961
                                                       85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817
                                                       80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                    </svg>
                                    <p> ' .  $row['courseCity'] . ' - ' . $row['courseLocationsAmount'] .'</p>';
                                }elseif(!$row['courseCity'] == null){
                                    echo'
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                            <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961
                                                           85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817
                                                           80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                        </svg>
                                        <p>' . $row['courseCity'] .'</p>';
                                }
                                ?>
                            </div>
                            <?php

                            if (!$row['courseCity'] == null){
                                if (!$row['courseLocation1'] == null){
                                ?>
                            <div id="courseLocation">
                                <div id="courseLocationContainer">
                                    <div id="courseLocationContainerBox">
                                        <?php
                                        if (!$row['courseLocation1'] == null){
                                            echo '
                                                <div>
                                                    <a href="' . $row["courseLocationLink1"] .'" target="_blank">
                                                        <span>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img"
                                                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961
                                                                       85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817
                                                                       80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                                            </svg>
                                                        </span>
                                                        <p>' . $row["courseLocation1"] . '</p>
                                                    </a>
                                                </div>
                                                ';
                                        }
                                        if (!$row['courseLocation2'] == null){
                                            echo '
                                                <div>
                                                    <a href="' . $row["courseLocationLink2"] .'" target="_blank">
                                                        <span>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img"
                                                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961
                                                                       85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817
                                                                       80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                                            </svg>
                                                        </span>
                                                        <p>' . $row["courseLocation2"] . '</p>
                                                    </a>
                                                </div>
                                                ';
                                        }
                                        if (!$row['courseLocation3'] == null){
                                            echo '
                                                <div>
                                                    <a href="' . $row["courseLocationLink3"] .'" target="_blank">
                                                        <span>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img"
                                                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961
                                                                       85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817
                                                                       80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                                            </svg>
                                                        </span>
                                                        <p>' . $row["courseLocation3"] . '</p>
                                                    </a>
                                                </div>
                                                ';
                                        }
                                        if (!$row['courseLocation4'] == null){
                                            echo '
                                                <div>
                                                    <a href="' . $row["courseLocationLink4"] .'" target="_blank">
                                                        <span>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img"
                                                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961
                                                                       85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817
                                                                       80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                                            </svg>
                                                        </span>
                                                        <p>' . $row["courseLocation4"] . '</p>
                                                    </a>
                                                </div>
                                                ';
                                        }
                                        if (!$row['courseLocation5'] == null){
                                            echo '
                                                <div>
                                                    <a href="' . $row["courseLocationLink5"] .'" target="_blank">
                                                        <span>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img"
                                                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961
                                                                       85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817
                                                                       80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                                            </svg>
                                                        </span>
                                                        <p>' . $row["courseLocation5"] . '</p>
                                                    </a>
                                                </div>
                                                ';
                                        }
                                        if (!$row['courseLocation6'] == null){
                                            echo '
                                                <div>
                                                    <a href="' . $row["courseLocationLink6"] .'" target="_blank">
                                                        <span>
                                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marker-alt" class="svg-inline--fa fa-map-marker-alt fa-w-12" role="img"
                                                                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                                                <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961
                                                                       85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817
                                                                       80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                                                            </svg>
                                                        </span>
                                                        <p>' . $row["courseLocation6"] . '</p>
                                                    </a>
                                                </div>
                                                ';
                                        }
                                            ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            }
                            if (!$row['courseNumber1'] == null){ ?>
                                <div id="courseNumber">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" class="svg-inline--fa fa-phone-alt fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z"></path></svg>
                                    <div id="courseNumbers" class="btn-group">
                                        <div id="numbersDropdownTrigger" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div id="numberContainer">
                                                <?php
                                                if (!$row['courseNumberLocation1'] == null){
                                                    ?>
                                                    <div id="numberLocation">
                                                        <p><?= $row['courseNumberLocation1'];?></p>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                                <div id="number">
                                                    <p><?= '+' . $row['courseNumber1'];?></p>
                                                </div>
                                            </div>
                                            <?php
                                            if  (!$row['courseNumber2'] == 0){
                                                ?>
                                                <div id="dropdownNumbersBtn">
                                                    <svg version="1.1" id="Layer_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                                    <g>
                                                        <path fill="currentColor" d="M256,393.1c-19.1,0-38.2-7.3-52.7-21.8L19.9,187.9c-15.8-15.8-15.8-41.4,0-57.2c15.8-15.8,41.4-15.8,57.2,0L256,309.6
                                                              l178.9-178.9c15.8-15.8,41.4-15.8,57.2,0c15.8,15.8,15.8,41.4,0,57.2L308.7,371.4C294.2,385.9,275.1,393.1,256,393.1z"/>
                                                    </g>
                                                </svg>
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                        <?php
                                        if  (!$row['courseNumber2'] == 0){
                                            ?>
                                        <div id="numbersDropdownMenu" class="dropdown-menu">
                                            <div id="numbersDropdownMenuContainer">
                                                <?php

                                                if (!$row['courseNumberLocation1'] == 0){
                                                    echo "<p id='numberLocation'>" . $row['courseNumberLocation1'] . ":</p>";
                                                }
                                                if (!$row['courseNumber1'] == 0){
                                                    echo "<p  id='number'>" . '+' . $row['courseNumber1'] . "</p>";
                                                }
                                                if (!$row['courseNumberLocation2'] == 0){
                                                    echo "<p id='numberLocation'>" . $row['courseNumberLocation2'] . ":</p>";
                                                }
                                                if (!$row['courseNumber2'] == 0){
                                                    echo "<p id='number'>" . '+' . $row['courseNumber2'] . "</p>";
                                                }
                                                if (!$row['courseNumberLocation3'] == 0){
                                                    echo "<p id='numberLocation'>" . $row['courseNumberLocation3'] . ":</p>";
                                                }
                                                if (!$row['courseNumber3'] == 0){
                                                    echo "<p id='number'>" . '+' . $row['courseNumber3'] . "</p>";
                                                }
                                                if (!$row['courseNumberLocation4'] == 0){
                                                    echo "<p id='numberLocation'>" . $row['courseNumberLocation4'] . ":</p>";
                                                }
                                                if (!$row['courseNumber4'] == 0){
                                                    echo "<p id='number'>" . '+' . $row['courseNumber4'] . "</p>";
                                                }
                                                if (!$row['courseNumberLocation5'] == 0){
                                                    echo "<p id='numberLocation'>" . $row['courseNumberLocation5'] . ":</p>";
                                                }
                                                if (!$row['courseNumber5'] == 0){
                                                    echo "<p id='number''>" . '+' . $row['courseNumber5'] . "</p>";
                                                }
                                                if (!$row['courseNumberLocation6'] == 0){
                                                    echo "<p id='numberLocation'>" . $row['courseNumberLocation6'] . ":</p>";
                                                }
                                                if (!$row['courseNumber6'] == 0){
                                                    echo "<p id='number'>" . '+' . $row['courseNumber6'] . "</p>";
                                                }
                                                else{
                                                    echo "";
                                                }

                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                            if (!$row['courseCity'] == null){
                                 if(!$row["courseScheduleOpen1"] == null or !$row["courseScheduleOpen2"] == null or !$row["courseScheduleOpen3"] == null or !$row["courseScheduleOpen4"] == null or !$row["courseScheduleOpen5"] == null or !$row["courseScheduleOpen6"] == null or !$row["courseScheduleOpen7"] == null){
                            ?>
                                <div id="courseSchedule">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path></svg>
                                    <div id="courseSchedules">
                                        <div id="scheduleDropdownTrigger" data-bs-toggle="dropdown" aria-expanded="false">
                                            <div>
                                                <?php

                                                date_default_timezone_set('Europe/Tirane');

                                                $day = date("l");

                                                if ($day == "Monday") {
                                                    if (!$row["courseScheduleOpen1"] == null){
                                                        echo '<p>' . $row["courseScheduleOpen1"] . " - " . $row["courseScheduleClose1"] . '</p>';
                                                    }else{
                                                        echo '<p>Mbyllur</p>';
                                                    }
                                                } elseif ($day == "Tuesday") {
                                                    if (!$row["courseScheduleOpen2"] == null){
                                                        echo '<p>' . $row["courseScheduleOpen2"] . " - " . $row["courseScheduleClose2"] . '</p>';
                                                    }else{
                                                        echo '<p>Mbyllur</p>';
                                                    }
                                                } elseif ($day == "Wednesday") {
                                                    if (!$row["courseScheduleOpen3"] == null){
                                                        echo '<p>' . $row["courseScheduleOpen3"] . " - " . $row["courseScheduleClose3"] . '</p>';
                                                    }else{
                                                        echo '<p>Mbyllur</p>';
                                                    }
                                                } elseif ($day == "Thursday") {
                                                    if (!$row["courseScheduleOpen4"] == null){
                                                        echo '<p>' . $row["courseScheduleOpen4"] . " - " . $row["courseScheduleClose4"] . '</p>';
                                                    }else{
                                                        echo '<p>Mbyllur</p>';
                                                    }
                                                } elseif ($day == "Friday") {
                                                    if (!$row["courseScheduleOpen5"] == null){
                                                        echo '<p>' . $row["courseScheduleOpen5"] . " - " . $row["courseScheduleClose5"] . '</p>';
                                                    }else{
                                                        echo '<p>Mbyllur</p>';
                                                    }
                                                } elseif ($day == "Saturday") {
                                                    if (!$row["courseScheduleOpen6"] == null){
                                                        echo '<p>' . $row["courseScheduleOpen6"] . " - " . $row["courseScheduleClose6"] . '</p>';
                                                    }else{
                                                        echo '<p>Mbyllur</p>';
                                                    }
                                                } elseif ($day == "Sunday") {
                                                    if (!$row["courseScheduleOpen7"] == null){
                                                        echo '<p>' . $row["courseScheduleOpen7"] . " - " . $row["courseScheduleClose7"] . '</p>';
                                                    }else{
                                                        echo '<p>Mbyllur</p>';
                                                    }
                                                }
                                                ?>
                                            </div>
                                            <span>
                                                <svg version="1.1" id="Layer_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                                    <g>
                                                        <path fill="currentColor" d="M256,393.1c-19.1,0-38.2-7.3-52.7-21.8L19.9,187.9c-15.8-15.8-15.8-41.4,0-57.2c15.8-15.8,41.4-15.8,57.2,0L256,309.6
                                                                l178.9-178.9c15.8-15.8,41.4-15.8,57.2,0c15.8,15.8,15.8,41.4,0,57.2L308.7,371.4C294.2,385.9,275.1,393.1,256,393.1z"/>
                                                    </g>
                                                </svg>
                                            </span>
                                        </div>
                                        <div id="schedulesDropdownMenu" class="dropdown-menu">
                                            <div id="schedulesDropdownMenuContainer">
                                                <div id="days">
                                                    <p>Hënë:</p>
                                                    <p>Martë:</p>
                                                    <p>Mërkurë:</p>
                                                    <p>Enjte:</p>
                                                    <p>Premte:</p>
                                                    <p>Shtunë:</p>
                                                    <p>Diel:</p>
                                                </div>
                                                <div id="schedules">
                                                    <?php
                                                    if ($row["courseScheduleOpen1"] == null ){
                                                        echo '<p>Mbyllur</p>';
                                                    }else{
                                                        echo '<p>' . $row["courseScheduleOpen1"] . " - " . $row["courseScheduleClose1"] . '</p>';
                                                    }

                                                    if ($row["courseScheduleOpen2"] == null ){
                                                        echo '<p>Mbyllur</p>';
                                                    }else{
                                                        echo '<p>' . $row["courseScheduleOpen2"] . " - " . $row["courseScheduleClose2"] . '</p>';
                                                    }

                                                    if ($row["courseScheduleOpen3"] == null){
                                                        echo '<p>Mbyllur</p>';
                                                    }else{
                                                        echo '<p>' . $row["courseScheduleOpen3"] . " - " . $row["courseScheduleClose3"] . '</p>';
                                                    }

                                                    if ($row["courseScheduleOpen4"] == null){
                                                        echo '<p>Mbyllur</p>';
                                                    }else{
                                                        echo '<p>' . $row["courseScheduleOpen4"] . " - " . $row["courseScheduleClose4"] . '</p>';
                                                    }

                                                    if ($row["courseScheduleOpen5"] == null){
                                                        echo '<p>Mbyllur</p>';
                                                    }else{
                                                        echo '<p>' . $row["courseScheduleOpen5"] . " - " . $row["courseScheduleClose5"] . '</p>';
                                                    }

                                                    if ($row["courseScheduleOpen6"] == null){
                                                        echo '<p>Mbyllur</p>';
                                                    }else{
                                                        echo '<p>' . $row["courseScheduleOpen6"] . " - " . $row["courseScheduleClose6"] . '</p>';
                                                    }

                                                    if ($row["courseScheduleOpen7"] == null){
                                                        echo '<p>Mbyllur</p>';
                                                    }else{
                                                        echo '<p>' . $row["courseScheduleOpen7"] . " - " . $row["courseScheduleClose7"] . '</p>';
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                 }
                            }
                            if(!$row['courseEmail'] == null){
                                echo '    
                                    <div id="courseEmail">
                                        <div>
                                            <svg version="1.1" id="Layer_1" focusable="false" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 x="0px" y="0px" viewBox="0 0 512 396.8"  xml:space="preserve">
                                                <path fill="currentColor" d="M464,0H48C21.5,0,0,21.5,0,48v300.8c0,26.5,21.5,48,48,48h416c26.5,0,48-21.5,48-48V48C512,21.5,490.5,0,464,0z
                                                     M453.6,131.6c-15.2,11.2-34.7,25.5-60.7,44.4c-8.4,6.1-17.4,12.7-27.2,19.8c-5.6,4-11.4,8.3-17.4,12.7
                                                    C328,223.2,291.7,256.2,256,256c-35.7,0.2-72-32.8-92.3-47.6c-6-4.4-11.8-8.6-17.4-12.7c-9.8-7.1-18.8-13.7-27.2-19.8
                                                    c-26-18.9-45.5-33.2-60.7-44.4c-3.5-2.6-4.3-7.4-1.8-11l9.1-13.2c2.6-3.7,7.7-4.6,11.3-1.9c16.8,12.4,38.9,28.6,69.3,50.7
                                                    c8.4,6.1,17.5,12.7,27.2,19.8c3,2.2,6,4.3,9,6.6c16.8,12.3,50.2,41.8,73.4,41.4c23.2,0.3,56.6-29.2,73.4-41.4c3.1-2.2,6.1-4.4,9-6.6
                                                    c9.8-7.1,18.8-13.7,27.2-19.8c30.4-22.2,52.5-38.3,69.3-50.7c3.6-2.7,8.8-1.8,11.3,1.9l9.1,13.2C457.8,124.1,457,129,453.6,131.6z"/>
                                            </svg>
                                        </div>
                                        <p> ' .  $row['courseEmail'] . '</p>
                                    </div>';
                            }

                            if(!$row['courseWebsite'] == null){
                                echo '    
                                    <div id="courseWebsite">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="globe" class="svg-inline--fa fa-globe fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path fill="currentColor" d="M336.5 160C322 70.7 287.8 8 248 8s-74 62.7-88.5 152h177zM152 256c0 22.2 1.2 43.5 3.3 64h185.3c2.1-20.5 3.3-41.8 3.3-64s-1.2-43.5-3.3-64H155.3c-2.1 20.5-3.3 41.8-3.3 64zm324.7-96c-28.6-67.9-86.5-120.4-158-141.6 24.4 33.8 41.2 84.7 50 141.6h108zM177.2 18.4C105.8 39.6 47.8 92.1 19.3 160h108c8.7-56.9 25.5-107.8 49.9-141.6zM487.4 192H372.7c2.1 21 3.3 42.5 3.3 64s-1.2 43-3.3 64h114.6c5.5-20.5 8.6-41.8 8.6-64s-3.1-43.5-8.5-64zM120 256c0-21.5 1.2-43 3.3-64H8.6C3.2 212.5 0 233.8 0 256s3.2 43.5 8.6 64h114.6c-2-21-3.2-42.5-3.2-64zm39.5 96c14.5 89.3 48.7 152 88.5 152s74-62.7 88.5-152h-177zm159.3 141.6c71.4-21.2 129.4-73.7 158-141.6h-108c-8.8 56.9-25.6 107.8-50 141.6zM19.3 352c28.6 67.9 86.5 120.4 158 141.6-24.4-33.8-41.2-84.7-50-141.6h-108z"></path></svg>
                                        <p><a href=" ' . $row['courseWebsiteLink'] . ' " target="_blank"> ' . $row['courseWebsite'] . ' </a></p>
                                    </div>';
                            }

                            if(!$row['courseFb'] == null){
                                echo '    
                                    <div id="courseFacebook">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-square" class="svg-inline--fa fa-facebook-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z"></path></svg>
                                        <p><a href=" ' . $row['courseFbLink'] . ' " target="_blank"> ' . $row['courseFb'] . ' </a></p>
                                    </div> ';
                            }

                            if(!$row['courseInsta'] == null){
                                echo '    
                                    <div id="courseInstagram">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
                                        <p><a href=" ' . $row['courseInstaLink'] . ' " target="_blank"> ' . $row['courseInsta'] .'</a></p>
                                    </div> ';
                            }

                            if(!$row['courseInfo'] == null){
                                echo '    
                                    <div id="courseInfo">
                                        <div>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="info-circle" class="svg-inline--fa fa-info-circle fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M256 8C119.043 8 8 119.083 8 256c0 136.997 111.043 248 248 248s248-111.003 248-248C504 119.083 392.957 8 256 8zm0 110c23.196 0 42 18.804 42 42s-18.804 42-42 42-42-18.804-42-42 18.804-42 42-42zm56 254c0 6.627-5.373 12-12 12h-88c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h12v-64h-12c-6.627 0-12-5.373-12-12v-24c0-6.627 5.373-12 12-12h64c6.627 0 12 5.373 12 12v100h12c6.627 0 12 5.373 12 12v24z"></path></svg>
                                        </div>
                                        <div>
                                            <p class="readmore"> ' . $row['courseInfo'] . '</p>                                                
                                        </div>
                                    </div>
                                    ';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div id="courseMainContent" class="col-lg-7 col-md-6 col-sm-12">
                    <div id="contentTitle">
                        <div id="contentTitleContainer">
                            <p>Kategoritë:</p>
                        </div>
                    </div>
                    <div id="contentBody" >
                        <?php

                        if (!$row['courseService1'] == null){
                            echo '    
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService1'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }

                        if (!$row['courseService2'] == null){
                            echo '
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService2'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }

                        if (!$row['courseService3'] == null){
                            echo '    
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService3'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }

                        if (!$row['courseService4'] == null){
                            echo '
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService4'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }

                        if (!$row['courseService5'] == null){
                            echo '    
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService5'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }

                        if (!$row['courseService6'] == null){
                            echo '
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService6'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }

                        if (!$row['courseService7'] == null){
                            echo '    
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService7'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }

                        if (!$row['courseService8'] == null){
                            echo '
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService8'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }

                        if (!$row['courseService9'] == null){
                            echo '    
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService9'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }

                        if (!$row['courseService10'] == null){
                            echo '
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService10'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }

                        if (!$row['courseService11'] == null){
                            echo '    
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                              role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService11'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }

                        if (!$row['courseService12'] == null){
                            echo '
                                <div id="courseService">
                                    <div id="courseServiceContainer">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" class="svg-inline--fa fa-circle fa-w-16"
                                             role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path>
                                        </svg>
                                        <p>' . $row['courseService12'] . '</p>
                                    </div>
                                </div>
                            ';
                        }else{
                            echo '';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php } ?>

<?php

    include('scripts.php');

    include('footer.php');

    ?>

