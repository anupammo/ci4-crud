<section class="bg-warning">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-2 col-12"></div>
            <div class="col-lg-4 col-md-8 col-12">
                <div class="card bg-warning border-0 my-5">
                    <div class="card-body">
                        <h1 class="text-center h2 py-5">CRUD Application<br /> | <br /> Display Data</h1>
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
            <div class="col-12">
                <div class="card shadow border-0 rounded-0 my-2 pt-5">
                    <div class="card-body">
                        <?php if (isset($_SESSION['session_msg'])) : ?>
                            <p class="text-center text-primary p-1">
                                <i class="bi bi-check-circle-fill"></i>
                                <span class="ps-2"><?= $_SESSION['session_msg']; ?></span>
                            </p>
                        <?php endif ?>
                        <div class="table-responsive-md">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Age</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($person as $person_data) : ?>
                                        <tr>
                                            <th scope="row"><?= esc($person_data['serial_no']) ?></th>
                                            <td><?= esc($person_data['p_name']) ?></td>
                                            <td><?= esc($person_data['email_id']) ?></td>
                                            <td><?= esc($person_data['cell_no']) ?></td>
                                            <td><?= esc($person_data['p_sex']) ?></td>
                                            <td><?= esc($person_data['p_age']) ?></td>
                                            <td class="fs-5 py-1">
                                                <a href="<?= base_url('/edit_data/' . esc($person_data['serial_no'])) ?>" class="btn btn-primary rounded-circle shadow-none px-2 py-1">
                                                    <i class="bi bi-pencil-fill"></i>
                                                </a>
                                                <a href="<?= base_url('/remove_data/' . esc($person_data['serial_no'])) ?>" class="btn btn-danger rounded-circle shadow-none px-2 py-1">
                                                    <i class="bi bi-trash-fill"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>