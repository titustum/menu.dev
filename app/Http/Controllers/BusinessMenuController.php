<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\BusinessMenu;
use Illuminate\Http\Request;
use App\Mail\MenuCreatedMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class BusinessMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'user_email' => 'required|email',
            'business_name' => 'required|string|max:255',
            'business_category' => 'required|exists:business_categories,id',
            'mpesa_paybill' => 'nullable|digits_between:5,10',
            'mpesa_account' => 'nullable|string|max:50',
        ]);

        // Create or get existing user by email
        $password = Str::random(12);
        $user = User::firstOrCreate(
            ['email' => $validated['user_email']],
            [
                'name' => explode('@', $validated['user_email'])[0],
                'password' => Hash::make($password),
            ]
        );

        // If user is new, send login credentials via email
        if ($user->wasRecentlyCreated) {
            Mail::to($user->email)->send(new MenuCreatedMail($user, $password, $validated['business_name'] ?? 'Business'));
        }

        // Log the user in
        Auth::login($user);

        // Save the menu data, associating it with the user
        $menu = new BusinessMenu();
        $menu->user_id = $user->id;
        $menu->business_name = $validated['business_name'];
        $menu->business_category_id = $validated['business_category'];
        $menu->mpesa_paybill = $validated['mpesa_paybill'] ?? null;
        $menu->mpesa_account = $validated['mpesa_account'] ?? null;
        $menu->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Menu created and user logged in successfully! Login credentials sent to your email.');

    }

    /**
     * Display the specified resource.
     */
    public function show(BusinessMenu $businessMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BusinessMenu $businessMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BusinessMenu $businessMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessMenu $businessMenu)
    {
        //
    }
}
