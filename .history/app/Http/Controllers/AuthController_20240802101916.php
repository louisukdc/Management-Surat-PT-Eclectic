public function loginAction(Request $request)
{
    Validator::make($request->all(), [
        'email' => 'required|email',
        'password' => 'required'
    ])->validate();

    if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        throw ValidationException::withMessages([
            'email' => trans('auth.failed')
        ]);
    }

    $request->session()->regenerate();

    $user = auth()->user();
    if ($user->type == 'admin') {
        return redirect()->route('admin.home');
    } else {
        return redirect()->route('dashboard');
    }
}
