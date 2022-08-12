<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (!empty($item)) : ?>
                    <p class="text-center text-success border border-success rounded p-1">
                        <i class="bi bi-check-circle-fill"></i>
                        <span class="ps-2"><?= esc($item) ?></span>
                    </p>
                <?php endif ?>
            </div>
        </div>
    </div>
</section>