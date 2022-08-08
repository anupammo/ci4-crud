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
                <div class="card text-primary border-0 my-2">
                    <div class="card-body">
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
                                        <td class="fs-5">
                                            <a href="edit_data/<?= esc($person_data['serial_no']) ?>" class="text-primary btn shadow-none border-0 rounded-0 mx-2 p-0">
                                                <i class="bi bi-pencil-fill"></i>
                                            </a>
                                            <a href="edit_data/<?= esc($person_data['serial_no']) ?>" class="text-danger btn shadow-none border-0 rounded-0 mx-2 p-0">
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
</section>