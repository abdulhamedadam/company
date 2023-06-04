<?php

namespace App\Http\Controllers\Admin\AcountSettings;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUsersRequest;
use App\Models\AdminUsers;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function index()
    {
        return view ('admin.adduser');
    }
    public function store(AdminUsersRequest  $request)
    {

    dd('hello');
    // Validation passed, retrieve the validated form data
    $validatedData = $request->validated();

    // Handle the image upload
    if ($request->hasFile('img')) {
        $image = $request->file('img');
        $storedImage = $image->store('uploads', 'public');
    }

    // Create a new admin user record
    $adminUser = new AdminUsers();
    $adminUser->firstname = $validatedData['firstname'];
    $adminUser->lastname = $validatedData['lastname'];
    $adminUser->email = $validatedData['email'];
    $adminUser->city = $validatedData['city'];
    $adminUser->phone = $validatedData['phone'];
    $adminUser->gender = $validatedData['maleGender'] ? 'Male' : 'Female';
    $adminUser->status = $validatedData['active'] ? 'Active' : 'Not Active';

    // Assign the stored image
    if (isset($storedImage)) {
        $adminUser->image = $storedImage;
    }

    // Save the admin user record
    $adminUser->save();




    }
}
