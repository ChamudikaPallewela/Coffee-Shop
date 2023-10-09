<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function register(AuthRequest $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');
        $user->usertype = $request->input('usertype', '0'); // Default to '0' if not provided
        $user->password = Hash::make($request->password);
        $user->save();

        $token=$user->createToken('testing')->plainTextToken;
        return response()->json([
            'user'=>$user,
            'token'=>$token,
        ]);

    }
    public function login(LoginRequest $request){
        $user=User::where('email',$request->email)->first();

        if(!$user || !Hash::check($request->password,$user->password)){
                return response()->json(['message'=>'wrong User name or password']);
        }else{
            $token=$user->createToken('testing')->plainTextToken;
            return response()->json($token, 200);
        }

    }
  
public function destroy(User $user)
{
    // Delete the user
    $user->delete();

    return response()->json(['message' => 'User deleted successfully']);
}
public function viewUsers()
{
    // Retrieve all users from the database
    $users = User::all();

    return response()->json(['users' => $users], 200);
}
public function update(Request $request, $id){
    // Find the user by ID
    $user = User::findOrFail($id);

    // Update user data
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->phone = $request->input('phone');
    $user->address = $request->input('address');
    $user->usertype = $request->input('usertype', '0'); // Default to '0' if not provided

    // If a new password is provided, hash and save it
    if ($request->has('password')) {
        $user->password = Hash::make($request->password);
    }

    // Save the updated user
    $user->save();

    // Return the updated user as a JSON response
    return response()->json([
        'user' => $user,
        'message' => 'User updated successfully',
    ]);
}

}
