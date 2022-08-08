<section class="bg-warning">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-2 col-12"></div>
            <div class="col-lg-4 col-md-8 col-12">
                <div class="card bg-warning border-0 my-5">
                    <div class="card-body">
                        <h1 class="text-center h2 py-5">CRUD Application<br /> | <br /> Edit Data</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-2 col-12"></div>
        </div>
    </div>
</section>
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-2 col-12"></div>
            <div class="col-lg-4 col-md-8 col-12">
                <div class="card text-dark border-0 my-2">
                    <div class="card-body">
                        <form action="<?php echo base_url('/update_person'); ?>" method="POST">
                            <?php foreach ($person as $person_data) : ?>
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input name="serial_no" type="hidden" value="<?= esc($person_data['serial_no']) ?>">
                                    <input name="p_name" type="text" class="form-control shadow-none" value="<?= esc($person_data['p_name']) ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email_id" type="email" class="form-control shadow-none" value="<?= esc($person_data['email_id']) ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mobile</label>
                                    <input name="cell_no" type="tel" class="form-control shadow-none" value="<?= esc($person_data['cell_no']) ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <select name="p_sex" class="form-select shadow-none" aria-label="Default select example">
                                        <?php if (($person_data['p_sex']) === 'Male') : ?>
                                            <option value="<?= esc($person_data['p_sex']) ?>" selected><?= esc($person_data['p_sex']) ?></option>
                                            <option value="Female">Female</option>
                                        <?php else : ?>
                                            <option value="Male">Male</option>
                                            <option value="<?= esc($person_data['p_sex']) ?>" selected><?= esc($person_data['p_sex']) ?></option>
                                        <?php endif ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Age</label>
                                    <input name="p_age" type="number" min="1" max="100" class="form-control shadow-none" value="<?= esc($person_data['p_age']) ?>">
                                </div>
                            <?php endforeach ?>
                            <div class="mb-3 d-grid gap-2">
                                <button type="submit" class="btn btn-primary shadow-none">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-2 col-12"></div>
        </div>
    </div>
</section>