<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait ImageUploadTrait
{
    /**
     * Handle image upload.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $fieldName
     * @param string $directory
     * @return string|null
     */
    public function uploadImage(Request $request, string $fieldName, string $directory)
    {
        // Check if the request has the image file
        if ($request->hasFile($fieldName) && $request->file($fieldName)->isValid()) {
            // Get the original file name
            $image = $request->file($fieldName);
            $filename = Str::random(10) . '_' . time() . '.' . $image->getClientOriginalExtension();

            // Store the image
            $path = $image->storeAs($directory, $filename, 'public');

            return $path; // Return the stored image path
        }

        return null;
    }

    /**
     * Delete an old image if exists
     *
     * @param string|null $imagePath
     * @return void
     */
    public function deleteOldImage(?string $imagePath)
    {
        if ($imagePath && Storage::disk('public')->exists($imagePath)) {
            Storage::disk('public')->delete($imagePath);
        }
    }

    /**
     * Prepare a standard JSON response after the image upload
     *
     * @param bool $success
     * @param string|null $imagePath
     * @return \Illuminate\Http\JsonResponse
     */
    public function imageUploadResponse(bool $success, ?string $imagePath = null)
    {
        if ($success && $imagePath) {
            return response()->json([
                'success' => true,
                'message' => 'Image uploaded successfully!',
                'image_url' => Storage::disk('public')->url($imagePath)
            ], 200);
        }

        return response()->json([
            'success' => false,
            'message' => 'Image upload failed!'
        ], 400);
    }
}
