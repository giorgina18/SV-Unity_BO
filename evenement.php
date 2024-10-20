<?php
require_once 'template-parts/header.php';


// Create a new instance of the Database class
$db = new Database();

// Set the table name
$db->setTable('evenementen'); // Assuming your table is named 'events'

// Get the event ID (in this example, we assume you already have the ID from somewhere)
$id = $_GET['id'];  // Example of getting the ID from a query parameter (like a URL)

// Fetch the event by ID
$event = $db->fetchRowById($id);
if ($event):

    $id = $event['id'];
    $title = $event['title'];
    $short_desc = $event['short_desc'];
    $long_desc = $event['long_desc'];
    $image = $event['image'];
    $date = $event['date'];
    // var_dump($title)
?>
    <section class="evenement-single">
        <div class="evenement-single__container">
            <h1 class="evenement-single__title"><?= $title ?></h1>
            <img class="evenement-single__img" src="<?php echo $image; ?>" alt="<?= $row['title']; ?>">
            <p class="evenement-single__longdesc"> <?= $long_desc ?></p>
            <a class="evenement-single__date"> <?= $date ?></a>
        </div>
    </section>
<?php
endif;
require_once 'template-parts/footer.php';
?>