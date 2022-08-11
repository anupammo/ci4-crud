<section class="bg-warning">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-2 col-12"></div>
            <div class="col-lg-4 col-md-8 col-12">
                <div class="card bg-warning border-0 my-5">
                    <div class="card-body">
                        <h1 class="text-center h2 py-5">CRUD Application<br /> | <br /> Add Data</h1>
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
                        <?php if (!empty($succes_msg)) : ?>
                            <p class="text-center text-success border border-success rounded p-1">
                                <i class="bi bi-check-circle-fill"></i>
                                <span class="ps-2"><?= esc($succes_msg) ?></span>
                            </p>
                        <?php endif ?>
                        <?= session()->getFlashdata('error') ?>
                        <?= service('validation')->listErrors() ?>
                        <form action="add_data" method="post">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="p_name" class="form-control shadow-none rounded-0">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email_id" class="form-control shadow-none rounded-0">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Mobile</label>
                                        <input type="tel" name="cell_no" class="form-control shadow-none rounded-0">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Age</label>
                                        <input type="number" name="p_age" min="1" max="100" class="form-control shadow-none rounded-0">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mt-2 mb-3">
                                        <label class="form-label">Gender</label>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input shadow-none" type="radio" name="p_sex" value="Male">
                                            <label class="form-check-label">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input shadow-none" type="radio" name="p_sex" value="Female">
                                            <label class="form-check-label">Female</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="mb-3 d-grid gap-2">
                                        <label class="form-label mb-0">.</label>
                                        <input class="btn btn-primary shadow-none rounded-0" type="submit" name="" value="Add Data">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-12"></div>
        </div>
    </div>
</section>