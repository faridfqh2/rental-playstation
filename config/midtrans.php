<?php

return [
    "midtrans_id"=> env ('MIDTRANS_MERCHANT_ID'),
    'client_key'=> env ('MIDTRANS_CLIENT_KEY'),
    'server_key'=> env ('MIDTRANS_SERVER_KEY'),
     'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'snap_url' => env('MIDTRANS_SNAP_URL', 'https://app.sandbox.midtrans.com/snap/snap.js'),
];