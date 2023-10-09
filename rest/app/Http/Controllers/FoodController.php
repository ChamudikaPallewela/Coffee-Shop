<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Branch;
use App\Models\FoodBranch;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foodtitle' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|string',
        ]);
    
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('food'), $imageName);
    
        // Create the food item
        $food = new Food;
        $food->foodtitle = $validatedData['foodtitle'];
        $food->description = $validatedData['description'];
        $food->image = $imageName;
        $food->category = $validatedData['category'];
        $food->save();
    
        // Create an array to hold the attributes
        $attributeData = [];
    
        // Check if sizes, prices, and quantities are arrays before iterating
        if (is_array($request->input('sizes')) && is_array($request->input('prices')) && is_array($request->input('quty'))) {
            $sizes = $request->input('sizes');
            $prices = $request->input('prices');
            $quantities = $request->input('quty');
    
            foreach ($sizes as $index => $size) {
                $attributeData[] = [
                    'size' => $size,
                    'price' => isset($prices[$index]) ? $prices[$index] : null,
                    'quty' => isset($quantities[$index]) ? $quantities[$index] : null,
                ];
            }
        }
    
        // Create and attach attributes to the food item
        $food->attributes()->createMany($attributeData);
    
        // Check if branches and branch_quantities are arrays before iterating
        if (is_array($request->input('branches')) && is_array($request->input('branch_quantities'))) {
            $branches = $request->input('branches');
            $branchQuantities = $request->input('branch_quantities');
    
            foreach ($branches as $branchId) {
                $foodBranch = new FoodBranch;
                $foodBranch->food_id = $food->id;
                $foodBranch->branch_id = $branchId;
    
                // Get the quantity for this branch from the input
                $quantity = isset($branchQuantities[$branchId]) ? $branchQuantities[$branchId] : 0;
    
                // Store the quantity in the database
                $foodBranch->quantity = $quantity;
    
                $foodBranch->save();
            }
        }
    
        return response()->json(['message' => 'Food item added successfully'], 200);
    }
    public function destroy($id)
{
    // Find the food item by ID
    $food = Food::find($id);

    // Check if the food item exists
    if (!$food) {
        return response()->json(['message' => 'Food item not found'], 404);
    }

    // Delete the food item
    $food->delete();

    return response()->json(['message' => 'Food item deleted successfully'], 200);
}
public function index()
{
    // Retrieve a list of food items
    $foodItems = Food::all();

    // Return the list as a JSON response
    return response()->json($foodItems, 200);
}
public function update(Request $request, $id)
{
    // Find the food item you want to update
    $food = Food::findOrFail($id);

    // Validate the updated data
    $validatedData = $request->validate([
        'foodtitle' => 'required|string',
        'description' => 'required|string',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'category' => 'required|string',
    ]);

    // Update the food item's fields
    $food->foodtitle = $validatedData['foodtitle'];
    $food->description = $validatedData['description'];
    $food->category = $validatedData['category'];

    // Check if a new image is provided
    if ($request->hasFile('image')) {
        // Delete the old image
        $oldImage = public_path('food') . '/' . $food->image;
        if (file_exists($oldImage)) {
            unlink($oldImage);
        }

        // Upload and save the new image
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('food'), $imageName);
        $food->image = $imageName;
    }

    // Save the updated food item
    $food->save();

    // Handle attributes and branches updates as needed (similar to the store method)

    // Return a response indicating success
    return response()->json(['message' => 'Food item updated successfully'], 200);
}

}
