<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {   
        $userModel = new UserModel();
        $data['users'] = $userModel->findAll();
        return view('users', $data);
    }

    public function new()
{
    return view('users/new');
}

public function create()
{
    $rules = [
        'username'  => 'required|is_unique[users.username]',
        'full_name' => 'required'
    ];

    if (! $this->validate($rules)) {
        return redirect()->back()
            ->withInput()
            ->with('errors', $this->validator->getErrors());
    }

    $userModel = new UserModel();

    $userModel->insert([
        'username'  => $this->request->getPost('username'),
        'full_name' => $this->request->getPost('full_name')
    ]);

    return redirect()->to(site_url('users'))
        ->with('success', 'User added successfully!');
}

public function edit($id)
{
    $userModel = new UserModel();

    $user = $userModel->find($id);

    if (!$user) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    return view('users/edit', [
        'user' => $user
    ]);
}

public function update($id)
{
    $userModel = new UserModel();
    $user = $userModel->find($id);

    if (!$user) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    // Validate username and full name
    $rules = [
        'username'  => "required|is_unique[users.username,id,{$id}]",
        'full_name' => 'required',
        'avatar'    => 'max_size[avatar,2048]|is_image[avatar]|mime_in[avatar,image/jpeg,image/png]'
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()
            ->withInput()
            ->with('errors', $this->validator->getErrors());
    }

    // Prepare user information
    $data = [
        'username'  => $this->request->getPost('username'),
        'full_name' => $this->request->getPost('full_name')
    ];

    // Check whether a picture was uploaded
    $avatar = $this->request->getFile('avatar');

    if ($avatar && $avatar->isValid() && !$avatar->hasMoved()) {

        $uploadPath = FCPATH . 'uploads/avatars/';

        // Create the folder if it does not exist
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0755, true);
        }

        // Generate a unique filename
        $newName = $avatar->getRandomName();

        // Move the uploaded file
        $avatar->move($uploadPath, $newName);

        // Resize the image into a display-ready thumbnail
        service('image')
            ->withFile($uploadPath . $newName)
            ->fit(200, 200, 'center')
            ->save($uploadPath . $newName);

        // Save only the filename in MySQL
        $data['avatar'] = $newName;
    }

    // Update the user record
    $userModel->update($id, $data);

    return redirect()->to(site_url('users'))
        ->with('success', 'User updated successfully!');
}

}