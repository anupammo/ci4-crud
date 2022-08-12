<?php

namespace App\Controllers;

class CIcrud extends BaseController
{
    public function index()
    {
        return view('templates/header')
            . view('templates/topnav')
            . view('pages/homepage')
            . view('templates/footer');
    }

    public function view_data()
    {
        $model = model(CrudModel::class);

        $session = \Config\Services::session();

        $data['person'] = $model->orderBy('serial_no')->findAll();

        return view('templates/header')
            . view('templates/topnav')
            . view('pages/display_data', $data)
            . view('templates/footer');
    }

    public function add_data()
    {
        $model = model(CrudModel::class);

        $data['person'] = $model->orderBy('serial_no')->findAll();

        return view('templates/header')
            . view('templates/topnav')
            . view('pages/add_data')
            . view('templates/footer');
    }

    public function save_data()
    {
        $model = model(CrudModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'p_name'    => 'required',
            'p_age'     => 'required',
            'p_sex'     => 'required',
            'cell_no'   => 'required',
            'email_id'  => 'required',
        ])) {
            $model->save([
                'p_name'    => $this->request->getPost('p_name'),
                'p_age'     => $this->request->getPost('p_age'),
                'p_sex'     => $this->request->getPost('p_sex'),
                'cell_no'   => $this->request->getPost('cell_no'),
                'email_id'  => $this->request->getPost('email_id'),
            ]);

            $data['person'] = $model->orderBy('serial_no')->findAll();

            // $session = \Config\Services::session();

            $session = session();

            $session->set('session_msg', 'Record added successfully');

            return $this->response->redirect(base_url('/view_data'));
        }
    }

    public function edit_data($serial_no = null)
    {
        $model = model(CrudModel::class);

        $data['person'] = $model->where('serial_no', $serial_no)->find();

        return view('templates/header')
            . view('templates/topnav')
            . view('pages/edit_data', $data)
            . view('templates/footer');
    }

    public function update_person($serial_no = null)
    {
        $model = model(CrudModel::class);

        $data = [
            'serial_no' => $serial_no,
            'p_name'    => $this->request->getPost('p_name'),
            'p_age'     => $this->request->getPost('p_age'),
            'p_sex'     => $this->request->getPost('p_sex'),
            'cell_no'   => $this->request->getPost('cell_no'),
            'email_id'  => $this->request->getPost('email_id'),
        ];

        $model->update($serial_no, $data);

        // $session = \Config\Services::session();

        $session = session();

        $session->set('session_msg', 'Record updated successfully');

        $data['person'] = $model->orderBy('serial_no')->findAll();

        return $this->response->redirect(base_url('/view_data'));
    }

    public function remove_data($serial_no = null)
    {
        $model = model(CrudModel::class);

        $data['person'] = $model->where('serial_no', $serial_no)->find();

        return view('templates/header')
            . view('templates/topnav')
            . view('pages/remove_data', $data)
            . view('templates/footer');
    }

    public function delete_data($serial_no = null)
    {
        $model = model(CrudModel::class);

        $data['person'] = $model->where('serial_no', $serial_no)->delete();

        $data['person'] = $model->orderBy('serial_no')->findAll();

        // $session = \Config\Services::session();

        $session = session();

        $session->set('session_msg', 'Record deleted successfully');

        return $this->response->redirect(base_url('/view_data'));
    }
}
