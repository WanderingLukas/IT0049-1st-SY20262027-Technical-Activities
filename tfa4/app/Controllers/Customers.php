<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();
        $data['customers'] = $customerModel->findAll();
        return view('customers', $data);
    }

public function edit($id)
{
    $customerModel = new CustomerModel();

    $customer = $customerModel->find($id);

    if (!$customer) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    return view('customers/edit', [
        'customer' => $customer
    ]);
}

public function update($id)
{
    $customerModel = new CustomerModel();

    if (!$customerModel->find($id)) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    $rules = [
        'full_name' => 'required',
        'email'     => 'required|valid_email'
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()
            ->withInput()
            ->with('errors', $this->validator->getErrors());
    }

    $customerModel->update($id, [
        'full_name' => $this->request->getPost('full_name'),
        'email'     => $this->request->getPost('email'),
        'phone'     => $this->request->getPost('phone')
    ]);

    return redirect()->to(site_url('customers'))
        ->with('success', 'Customer updated successfully!');
}

    public function new()
{
    return view('customers/new');
}

public function create()
{
    $rules = [
        'full_name' => 'required',
        'email'     => 'required|valid_email'
    ];

    if (! $this->validate($rules)) {
        return redirect()->back()
            ->withInput()
            ->with('errors', $this->validator->getErrors());
    }

    $customerModel = new CustomerModel();

    $customerModel->insert([
        'full_name' => $this->request->getPost('full_name'),
        'email'     => $this->request->getPost('email'),
        'phone'     => $this->request->getPost('phone')
    ]);

    return redirect()->to(site_url('customers'))
        ->with('success', 'Customer added successfully!');
}

}