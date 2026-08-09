<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClassesResource;
use App\Models\classes;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    // GET classes
    public function getAllClasses()
    {
        $classes = classes::with('teacher')->get();

        return response()->json([
            'message' => 'Classes retrieved successfully',
            'classes' => ClassesResource::collection($classes)
        ], 200);
    }


    // GET /classes/{id}
    public function getClass($id)
    {
        $class = classes::with('teacher')->find($id);

        if (!$class) {
            return response()->json([
                'message' => 'Class not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Class retrieved successfully',
            'class' => $class
        ], 200);
    }


    // POST /classes
    public function createClass(Request $request)
    {
        $validated = $request->validate([
            'class_teacher' => 'nullable|exists:teachers,id',
            'class_name' => 'required|string|max:255',
            'section' => 'required|string|max:255',
            'room_no' => 'required|string|max:255',
        ]);

        $class = classes::create($validated);

        return response()->json([
            'message' => 'Class created successfully',
            'class' => $class
        ], 201);
    }


    // PUT /classes/{id}
    public function updateClass(Request $request, $id)
    {
        $class = classes::find($id);

        if (!$class) {
            return response()->json([
                'message' => 'Class not found'
            ], 404);
        }

        $validated = $request->validate([
            'class_teacher' => 'nullable|exists:teachers,id',
            'class_name' => 'sometimes|string|max:255',
            'section' => 'sometimes|string|max:255',
            'room_no' => 'sometimes|string|max:255',
        ]);

        $class->update($validated);

        return response()->json([
            'message' => 'Class updated successfully',
            'class' => $class
        ], 200);
    }


    // DELETE /classes/{id}
    public function deleteClass($id)
    {
        $class = classes::find($id);

        if (!$class) {
            return response()->json([
                'message' => 'Class not found'
            ], 404);
        }

        $class->delete();

        return response()->json([
            'message' => 'Class deleted successfully'
        ], 200);
    }
}