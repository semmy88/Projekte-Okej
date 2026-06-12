<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {
        $cart = session('cart', []);
        $total = 0;
        foreach ($cart as $item) {
            $price = floatval(str_replace(',', '.', preg_replace('/[^0-9,\.]/', '', $item['price'])));
            $total += $price * $item['quantity'];
        }
        return view('cart', compact('cart', 'total'));
    }

    public function add(Request $request) {
        $data = $request->json()->all();

        // Basic validation
        if (empty($data['id']) || empty($data['name']) || empty($data['price'])) {
            return response()->json(['success' => false, 'message' => 'Invalid data'], 400);
        }

        $id = $data['id'];
        $name = $data['name'];
        $price = $data['price'];
        $image = $data['image'] ?? null;

        $cart = session()->get('cart', []);

        if (isset($cart[$id]) && ($cart[$id]['name'] !== $name || $cart[$id]['image'] !== $image)) {
            $id = md5($name . $image);
        }

        $cart[$id] = [
            'name' => $name,
            'price' => $price,
            'image' => $image,
            'quantity' => ($cart[$id]['quantity'] ?? 0) + 1,
        ];

        session(['cart' => $cart]);

        return response()->json(['success' => true, 'cart' => $cart]);
    }

    public function update(Request $request) {
        $data = $request->json()->all();
        $id = $data['id'] ?? null;
        $quantity = $data['quantity'] ?? null;

        if (!$id || !is_numeric($quantity) || $quantity < 1) {
            return response()->json(['error' => 'Invalid data'], 400);
        }

        $cart = session()->get('cart', []);

        if (!isset($cart[$id])) {
            return response()->json(['error' => 'Item not found'], 404);
        }

        $cart[$id]['quantity'] = (int) $quantity;
        session(['cart' => $cart]);

        return response()->json(['success' => true, 'cart' => $cart]);
    }

    public function remove(Request $request) {
        $data = $request->json()->all();
        $id = $data['id'] ?? null;

        if (!$id) {
            return response()->json(['error' => 'Invalid ID'], 400);
        }

        $cart = session()->get('cart', []);

        if (!isset($cart[$id])) {
            return response()->json(['error' => 'Item not found'], 404);
        }

        unset($cart[$id]);
        session(['cart' => $cart]);

        return response()->json(['success' => true, 'cart' => $cart]);
    }
}

