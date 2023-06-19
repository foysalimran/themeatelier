<?php get_header(); ?>

<!--====== Page title start ======-->
<section class="h-[380px] bg-secondary">
    <div class="container text-center">
        <h1 class="text-3xl sm:text-4xl font-bold pt-44 mb-0"><?php the_title(); ?></h1>
        <p class="text-lg mt-5">
            <?php the_excerpt(); ?>
        </p>
    </div>
</section>
<!--====== Page title end ======-->


<!--====== Plugin description start ======-->
<section class="py-16 sm:py-20">
    <div class="container">
        <div class="md:grid md:grid-cols-12 gap-8 mb-12">
            <div class="rounded-lg  md:col-span-6 lg:col-span-7 mb-8 md:mb-0">
                <?php the_post_thumbnail('medium'); ?>
            </div>
            <div class="md:col-span-6 lg:col-span-5">
                <p class="mb-6 text-xl leading-8">
                    <?php the_content(); ?>
                </p>
                <h3 class="text-xl mb-2">Our Contribution</h3>
                <ul class="mb-6">
                    <li class="flex items-center gap-4 mb-1"><svg class="fill-font-color-light" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg> User research</li>
                    <li class="flex items-center gap-4 mb-1"><svg class="fill-font-color-light" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg> UI design</li>
                    <li class="flex items-center gap-4 mb-1"><svg class="fill-font-color-light" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg> Interaction design</li>
                    <li class="flex items-center gap-4 mb-1"><svg class="fill-font-color-light" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                        </svg> Prototyping</li>
                </ul>
                <p class="mb-2">Start On: February 20, 2022</p>
                <p class="mb-2">Published On: July 29, 2022</p>
                <p class="mb-2">
                    By <a class="text-primary" href="#">Themeatelier</a>
                </p>
                <p class="mb-2">
                    Category: <a class="text-primary" href="#">Web Design</a>
                </p>
                <a class="ta-btn-primary my-5" href="#">Live demo</a>
            </div>
        </div>
        <div class="border-t border-secondary py-12">
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <h3 class="font-medium text-xl">Objective</h3>
                </div>
                <div class="col-span-2">
                    <p class="text-lg">
                        Our objective was to create a funnel that would make a smooth
                        journey for our users, from analyzing skin to purchasing the
                        required products. Our users will be able to compare all the
                        suggestions and select what’s best for them.
                    </p>
                </div>
            </div>
        </div>
        <div class="border-t border-secondary py-12">
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <h3 class="font-medium text-xl">Problems</h3>
                </div>
                <div class="col-span-2">
                    <p class="text-lg mb-5">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore
                        recusandae, distinctio voluptatibus pariatur porro aliquam
                        minima atque fugiat non esse! Vel unde molestiae architecto
                        excepturi nemo sit debitis, voluptate totam a, praesentium
                        facere deleniti iusto, accusamus voluptas alias et neque!
                    </p>
                    <p class="text-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Adipisci consequatur nesciunt eius dicta accusamus
                        exercitationem nihil, esse quas amet ipsum.
                    </p>
                </div>
            </div>
        </div>
        <div class="border-t border-secondary py-12">
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <h3 class="font-medium text-xl">Challenges</h3>
                </div>
                <div class="col-span-2">
                    <p class="text-lg mb-5">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Eveniet, dolores!
                    </p>
                    <p class="text-lg mb-5">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Explicabo id quibusdam impedit similique iure! Alias?
                    </p>
                    <p class="text-lg mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid
                        officia consectetur animi molestiae, velit incidunt quae non.
                        Accusamus, consectetur labore?
                    </p>
                    <p class="text-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                        blanditiis labore autem corrupti eos cupiditate molestias
                        tempore consequuntur odit inventore, vel nesciunt facilis eaque
                        reiciendis qui? Hic corrupti iste eligendi illum ipsum. Minima
                        nam molestiae eius dolores laborum fuga magnam.
                    </p>
                </div>
            </div>
        </div>
        <div class="border-t border-secondary py-12">
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <h3 class="font-medium text-xl">Our Solutions</h3>
                </div>
                <div class="col-span-2">
                    <p class="text-lg mb-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Accusamus maxime in sapiente ad deserunt laudantium quisquam
                        voluptates mollitia, beatae, nisi ut veniam quis illo pariatur
                        voluptatum odio. Veritatis, possimus necessitatibus?
                    </p>
                    <p class="text-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                        blanditiis labore autem corrupti eos cupiditate molestias
                        tempore consequuntur odit inventore, vel nesciunt facilis eaque
                        reiciendis qui? Hic corrupti iste eligendi illum ipsum. Minima
                        nam molestiae eius dolores laborum fuga magnam.
                    </p>
                </div>
            </div>
        </div>
        <div class="border-t border-secondary py-12">
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <h3 class="font-medium text-xl">Approach</h3>
                </div>
                <div class="col-span-2">
                    <p class="text-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia
                        blanditiis labore autem corrupti eos cupiditate molestias
                        tempore consequuntur odit inventore, vel nesciunt facilis eaque
                        reiciendis qui? Hic corrupti iste eligendi illum ipsum. Minima
                        nam molestiae eius dolores laborum fuga magnam.
                    </p>
                </div>
            </div>
        </div>
        <div class="border-t border-secondary py-12">
            <div class="grid grid-cols-3 gap-5">
                <div class="col-span-1">
                    <h3 class="font-medium text-xl">Sketching</h3>
                </div>
                <div class="col-span-2">
                    <p class="text-lg">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa
                        officiis, voluptatem incidunt voluptates deserunt animi! In
                        nostrum similique, ducimus, debitis aperiam ipsa voluptas
                        accusamus saepe necessitatibus error eum. Quidem, nulla.
                    </p>
                </div>
            </div>
        </div>
        <div class="bg-secondary px-10 py-8">
            <div class="flex justify-between items-center">
                <a class="flex items-center gap-2" href="case-study.html">
                    <svg width="16" height="16" class="fill-font-color-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.2 288 416 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-306.7 0L214.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
                    </svg>
                    <span class="uppercase">PREV PROJECT</span>
                </a>
                <a href="case-study.html"><svg width="32" height="32" class="fill-font-color-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M384 96V224H256V96H384zm0 192V416H256V288H384zM192 224H64V96H192V224zM64 288H192V416H64V288zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                    </svg>
                </a>
                <a class="flex items-center gap-2" href="case-study.html">
                    <span class="uppercase">NEXT PROJECT</span>
                    <svg width="16" height="16" class="fill-font-color-light" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<!--====== Plugin description end ======-->
<?php get_footer(); ?>