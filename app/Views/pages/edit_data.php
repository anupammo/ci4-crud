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
            <div class="col-lg-3 col-md-2 col-12"></div>
            <div class="col-lg-6 col-md-8 col-12">
                <div class="card shadow border-0 rounded-0 my-2 py-3">
                    <div class="card-body">
                        <?php foreach ($person as $person_data) : ?>
                            <form action="<?= base_url('/update_person/' . esc($person_data['serial_no'])) ?>" method="POST">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input name="p_name" type="text" class="form-control shadow-none rounded-0" value="<?= esc($person_data['p_name']) ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input name="email_id" type="email" class="form-control shadow-none rounded-0" value="<?= esc($person_data['email_id']) ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Mobile</label>
                                            <input name="cell_no" type="tel" class="form-control shadow-none rounded-0" value="<?= esc($person_data['cell_no']) ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Age</label>
                                            <input name="p_age" type="number" min="1" max="100" class="form-control shadow-none rounded-0" value="<?= esc($person_data['p_age']) ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mt-2 mb-3">
                                            <label class="form-label">Gender</label>
                                            <br>
                                            <?php if (($person_data['p_sex']) === 'Male') : ?>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input shadow-none" type="radio" name="p_sex" value="Male" checked>
                                                    <label class="form-check-label">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input shadow-none" type="radio" name="p_sex" value="Female">
                                                    <label class="form-check-label">Female</label>
                                                </div>
                                            <?php else : ?>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input shadow-none" type="radio" name="p_sex" value="Male">
                                                    <label class="form-check-label">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input shadow-none" type="radio" name="p_sex" value="Female" checked>
                                                    <label class="form-check-label">Female</label>
                                                </div>
                                            <?php endif ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="mb-3 d-grid gap-2">
                                        <label class="form-label mb-0">.</label>
                                            <button type="submit" class="btn btn-primary shadow-none rounded-0">Update Data</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-12"></div>
        </div>
    </div>
</section>