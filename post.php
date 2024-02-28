<?php

include_once("templates/header.php");

if (isset($_GET['id'])) {

    $postId = $_GET['id'];

    $currentPost;

    foreach($posts as $post) {

        if($post['id'] == $postId) {

            $currentPost = $post;
      }
     }
    }
    
?>

    <main id="post-container">

        <div class="content-container">
            
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>

            <p id="post-description"><?= $currentPost['description'] ?></p>

                <div class="img-container">

                <img src="<?=$BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">

        </div>
        
                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam officiis quisquam aspernatur quae nesciunt eum fugiat, mollitia neque commodi porro culpa optio cumque odit praesentium dignissimos veritatis ipsum rem nihil.</p>


                <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam officiis quisquam aspernatur quae nesciunt eum fugiat, mollitia neque commodi porro culpa optio cumque odit praesentium dignissimos veritatis ipsum rem nihil.</p>



         </div>

    </main>

    <aside id="nav-container">
        <h3> id="tags-title">Tags</h3>
        <ul id="tag-list">

        <?php foreach($currentPost['tags'] as $tag): ?>

         <li>

            <a href="#######"><?= $tag ?></a>

        </li>

        <?php endforeach; ?>

        </ul>

        <h3 id="categories-list">Categorias</h3>

        <ul id="categories-list">

        <?php foreach($categories as $category): ?>

            <li>

            <a href="#######"><?= $category ?></a>

            </li>

    <?php endforeach; ?>

        </aside>

        </ul>

<?php
 
include_once("templates/footer.php");

?>