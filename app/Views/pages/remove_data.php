<section class="bg-warning">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-2 col-12"></div>
            <div class="col-lg-4 col-md-8 col-12">
                <div class="card bg-warning border-0 my-5">
                    <div class="card-body">
                        <h1 class="text-center h2 py-5">CRUD Application<br /> | <br /> Remove Data</h1>
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
                        <?php foreach ($person as $person_data) : ?>
                            <div class="card shadow border-0 rounded-0">
                                <div class="card-header bg-dark text-white border-0 rounded-0">
                                    <p class="display-1 text-center">
                                        <i class="bi bi-person-video3"></i>
                                    </p>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <strong>Name : </strong>
                                            <span class="float-end">
                                                <?= esc($person_data['p_name']) ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Email : </strong>
                                            <span class="float-end">
                                                <?= esc($person_data['email_id']) ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Mobile : </strong>
                                            <span class="float-end">
                                                <?= esc($person_data['cell_no']) ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Gender : </strong>
                                            <span class="float-end">
                                                <?= esc($person_data['p_sex']) ?>
                                            </span>
                                        </li>
                                        <li class="list-group-item">
                                            <strong>Age : </strong>
                                            <span class="float-end">
                                                <?= esc($person_data['p_age']) ?>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <a class="btn btn-danger btn-lg shadow-none rounded-0" href="<?= base_url('/delete_data/' . esc($person_data['serial_no'])) ?>">
                                    <i class="bi bi-trash3"></i>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-2 col-12"></div>
        </div>
    </div>
</section>