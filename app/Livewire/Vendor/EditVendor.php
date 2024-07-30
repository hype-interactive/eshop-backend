<?php

namespace App\Livewire\Vendor;

use App\Models\User;
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class EditVendor extends Component
{
    use WithFileUploads;

    public $image_url;
    public $photo;
    public $role_id;
    public $last_name;
    public $middle_name;
    public $first_name;
    public $email;
    public $phone_number;
    public $user_id;
    public $status;


    function closeEditVendorPage(){
        $this->dispatch('closeEditVendorPage',1);
    }

  public  function boot(){
        $user = User::findOrFail(session()->get('vendor_id'));
        $this->user_id = session()->get('vendor_id');
        $this->first_name = $user->first_name;
        $this->middle_name = $user->middle_name;
        $this->last_name = $user->last_name;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
        $this->role_id = $user->role_id;
        $this->image_url = $user->image_url;
        $this->status=$user->status;

    }
    public function update()
{
    // Validate input fields
    $this->validate([
        'first_name' => 'required|string|max:255',
        'middle_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $this->user_id,
        'phone_number' => 'required|string|max:15',
        'role_id' => 'required|integer',
        'photo' => 'nullable|image|max:1024',
    ]);



    // Find the user by ID
    $user = User::findOrFail($this->user_id);

    // Update user fields
    $user->update([
        'first_name' => $this->first_name,
        'middle_name' => $this->middle_name,
        'last_name' => $this->last_name,
        'email' => $this->email,
        'phone_number' => $this->phone_number,
        'role_id' => $this->role_id,
    ]);

    // Check if a new photo is uploaded
    if ($this->photo) {
        // Delete the old photo if it exists
        if ($user->image_url) {
            Storage::delete($user->image_url);
        }

        // Store the new photo and update the user's image_url
        $imagePath = $this->photo->store('photos/vendor', 'public');
        $user->image_url= Storage::url($imagePath);
        $user->save();
    }

    // Flash a success message
    session()->flash('message', 'User successfully updated.');

}

private function resetInputFields()
{
    $this->first_name = '';
    $this->middle_name = '';
    $this->last_name = '';
    $this->email = '';
    $this->phone_number = '';
    $this->role_id = '';
    $this->photo = null;
    $this->user_id = null;
    $this->image_url = '';
}




    public function render()
    {
        return view('livewire.vendor.edit-vendor');
    }
}
