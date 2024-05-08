namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controllers
{
    public function show($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.show', compact('profile'));
    }

    public function edit ($id)
    {
        $profile = Profile::findOrFail($id);
        return view('profile.edit', compact('profile'));
        
    }

    public function update(Request $request, $id)
    {
        $profile = UserProfile::findOrFail($id);
        $profile->update($request->all());
        return redirect()->route('profile.show', $id);
    }
}