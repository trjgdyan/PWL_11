<?php

namespace App\Traits;

/**
 * mekanisme yang memungkinkan pengembang untuk menggunakan kembali kode dalam berbagai kelas yang berbeda, tanpa harus mengulangi implementasi kode yang sama.
 * Dengan menggunakan traits, Anda dapat menghindari duplikasi kode dan meningkatkan struktur dan fleksibilitas aplikasi
 */
trait ApiResponse
{
    protected function apiSuccess($data, $code = 200, $message = null)
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
        ], $code);
    }

    protected function apiError($errors, $code, $message = null)
    {
        return response()->json([
            'errors' => $errors,
            'message' => $message,
        ], $code);
    }
}
