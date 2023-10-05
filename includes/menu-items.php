<?php
$categories = get_terms([
    'taxonomy' => 'menu-item-category',
    'hide_empty' => true
]);
$category = null;
if (isset(get_queried_object()->taxonomy)) {
    $category = get_queried_object();
}

$args = [];
$args['post_type'] = 'menu-item';
$args['posts_per_page'] = -1;
if ($category) {
    $args['tax_query'] = [[
        'taxonomy' => 'menu-item-category',
        'field' => 'slug',
        'terms' => $category->slug
    ]];
}

$query = new WP_Query($args);
$items = $query->posts;

?>

<main id="menu-page" class="menu-page">
    <section id="section-1" class="section-1 mt-7">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-3">
                    <div class="menu-item-categories">
                        <ul>
                            <?php if ($categories) : ?>
                                <?php foreach ($categories as $key => $cat) : ?>
                                    <li><a class="white-color d-block px-2 py-2 mb-2 rounded-3 <?= $category && $category->term_id == $cat->term_id ? "active" : ""; ?>" href="<?= get_term_link($cat->term_id); ?>"><?= $cat->name ?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="menu-items">
                        <?php if ($items) : ?>
                            <?php $break = ceil(count($items) / 2); ?>
                            <?php foreach ($items as $key => $item) : ?>
                                <li class="menu-item mb-6">
                                    <?php $img = get_the_post_thumbnail($item->ID, 'lg-resize', ['class' => 'w-100']); ?>
                                    <?php if ($img) echo $img; ?>
                                    <div class="name-price primary-color flex-lg-row flex-column d-flex align-items-lg-center justify-content-lg-between mt-3">
                                        <h4><?= $item->post_title; ?></h4>
                                        <h4>$12.50</h4>
                                    </div>
                                    <div class="description white-color mt-1">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum illum deleniti, alias culpa odit sed rerum. Amet laudantium consequatur, unde quia quis placeat totam, rerum optio deserunt sint aspernatur et!</p>
                                    </div>
                                </li>
                                <?php unset($items[$key]); ?>
                                <?php
                                if (($key + 1) == $break) break;
                                ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>

                </div>
                <div class="col-lg-3">
                    <ul class="menu-items">
                        <?php if ($items) : ?>
                            <?php foreach ($items as $key => $item) : ?>
                                <li class="menu-item mb-6">
                                    <?php $img = get_the_post_thumbnail($item->ID, 'lg-resize', ['class' => 'w-100']); ?>
                                    <?php if ($img) echo $img; ?>
                                    <div class="name-price primary-color flex-lg-row flex-column d-flex align-items-lg-center justify-content-lg-between mt-3">
                                        <h4><?= $item->post_title; ?></h4>
                                        <h4>$12.50</h4>
                                    </div>
                                    <div class="description white-color mt-1">
                                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laborum illum deleniti, alias culpa odit sed rerum. Amet laudantium consequatur, unde quia quis placeat totam, rerum optio deserunt sint aspernatur et!</p>
                                    </div>
                                </li>
                                <?php unset($items[$key]); ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>