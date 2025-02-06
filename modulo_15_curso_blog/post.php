<?php 
    include_once("templates/header.php");
    if(isset($_GET["id"])){
        $postId = $_GET["id"];
        $currentPost;


        foreach($posts as $post){
            if($post["id"] == $postId){
                $currentPost = $post;
            }
        }    

    }
?>
    <main id = "post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title']?></h1>
            <p id="post-description"><?= $currentPost['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title']?>">
            </div>

            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae beatae libero molestias. Magnam ipsum odit quam temporibus voluptas, autem ratione cupiditate ex unde repellendus error! Fuga quos provident labore hic.
            Explicabo, porro laboriosam corrupti deserunt debitis dolore, laudantium saepe doloremque exercitationem molestiae assumenda sint quasi totam itaque modi eos, minus quibusdam! Doloremque fuga eveniet repellat impedit, deleniti ratione alias cum?
            Suscipit cumque sequi, sapiente corporis molestias quis sed repudiandae, quidem in, maxime sint quasi quam modi. Ab iste nostrum sequi hic quae, cum officiis vero dolores soluta repellat eum fugit.
            Est odio fugiat aperiam facilis reiciendis corrupti cumque laboriosam recusandae a vero nulla maxime itaque, amet, voluptates dolor sint eos voluptatibus tempore voluptatum aut, magnam laborum dignissimos sequi. Odit, repellendus!
            Explicabo velit est vero voluptates suscipit quibusdam magni sed nulla nesciunt, voluptate illum libero veniam, dignissimos sint a fugiat eaque non veritatis! Incidunt distinctio quae omnis veniam provident earum laboriosam?</p>
            
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae beatae libero molestias. Magnam ipsum odit quam temporibus voluptas, autem ratione cupiditate ex unde repellendus error! Fuga quos provident labore hic.
            Explicabo, porro laboriosam corrupti deserunt debitis dolore, laudantium saepe doloremque exercitationem molestiae assumenda sint quasi totam itaque modi eos, minus quibusdam! Doloremque fuga eveniet repellat impedit, deleniti ratione alias cum?
            Suscipit cumque sequi, sapiente corporis molestias quis sed repudiandae, quidem in, maxime sint quasi quam modi. Ab iste nostrum sequi hic quae, cum officiis vero dolores soluta repellat eum fugit.
            Est odio fugiat aperiam facilis reiciendis corrupti cumque laboriosam recusandae a vero nulla maxime itaque, amet, voluptates dolor sint eos voluptatibus tempore voluptatum aut, magnam laborum dignissimos sequi. Odit, repellendus!
            Explicabo velit est vero voluptates suscipit quibusdam magni sed nulla nesciunt, voluptate illum libero veniam, dignissimos sint a fugiat eaque non veritatis! Incidunt distinctio quae omnis veniam provident earum laboriosam?</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>

<?php 
    include_once("templates/footer.php");
?>
