<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'profile' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'contact' => ['required', 'string', 'max:15', 'regex:/^\+?[0-9]{8,15}$/u', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];

        // Messages de validation personnalisés en français
        $messages = [
            'name.required' => 'Le champ nom est requis.',
            'name.string' => 'Le champ nom doit être une chaîne de caractères.',
            'name.max' => 'Le champ nom ne doit pas dépasser :max caractères.',
            'email.required' => 'Le champ adresse email est requis.',
            'email.string' => 'Le champ adresse email doit être une chaîne de caractères.',
            'email.email' => 'Le champ adresse email doit être une adresse email valide.',
            'email.max' => 'Le champ adresse email ne doit pas dépasser :max caractères.',
            'email.unique' => 'L\'adresse email est déjà utilisée.',
            'contact.required' => 'Le champ contact est requis.',
            'contact.string' => 'Le champ contact doit être une chaîne de caractères.',
            'contact.max' => 'Le champ contact ne doit pas dépasser :max caractères.',
            'contact.regex' => 'Le format du champ contact est invalide.',
            'contact.unique' => 'Le contact est déjà utilisé.',
            'profile.required' => 'Le champ image de profil est requis.',
            'profile.image' => 'Le fichier doit être une image.',
            'profile.mimes' => 'Le fichier doit être de type :values.',
            'profile.max' => 'Le fichier ne doit pas dépasser :max kilo-octets.',
            'password.required' => 'Le champ mot de passe est requis.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'role' => 3,
            'password' => Hash::make($request->password),
        ]);

        if ($request->profile) {
            $profile = $request->profile;
            $profileName = $profile->getClientOriginalName();
            if (!File::exists('images/' . $profileName)) {
                $request->profile->move('images', $profileName);
            }

            $user->update([
                'profile' => $profileName,
            ]);
        }

        Alert::success('Bienvenue'.$request->name);
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
