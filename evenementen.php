<?php
require_once 'template-parts/header.php';

// Create an instance of the Database class
$db = new Database();

// Set the table you want to query
$db->setTable('evenementen');

// Fetch all rows from the 'evenementen' table
$rows = $db->fetchAllRows();

if (!empty($rows)):
?>
    <section class="evenementen">
        <div class="evenementen-swiper__container">

            <!-- Slider main container -->
            <div class="swiper evenementen-swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php
                    foreach ($rows as $row):
                        $id = $row['id'];
                        $title = $row['title'];
                        $short_desc = $row['short_desc'];
                        $long_desc = $row['long_desc'];
                        $image = $row['image'];
                        $date = $row['date'];
                    ?>
                        <div class="swiper-slide">
                            <div class="evenementen-swiper__item">
                                <h2 class="evenementen-swiper__title"><?= $row['title']; ?></h2>
                                <img src="<?php echo $image; ?>" alt="<?= $row['title']; ?>" class="evenementen-swiper__img">
                                <p class="evenementen-swiper__shortDesc"> <?= $short_desc ?></p>
                                <a href="evenement.php?id=<?= $id; ?>" class="evenementen-swiper__cta">Bekijk evenement</a>
                            </div>
                          
                        </div>
                    <?php endforeach; ?>

                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>


<?php
endif;
require_once 'template-parts/footer.php';
?>