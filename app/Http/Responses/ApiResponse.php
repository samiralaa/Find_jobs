<?php

namespace App\Http\Responses;

class ApiResponse
{
    protected $data;
    protected $status;
    protected $message;

    public function __construct($data, $status, $message)
    {
        $this->data = $data;
        $this->status = $status;
        $this->message = $message;
    }

    public function toResponse()
    {
        return response()->json([
            'data' => $this->data,
            'status' => $this->status === 200 ? 'Success' : 'Error',
            'message' => $this->message
        ], $this->status);
    }
}
