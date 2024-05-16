<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{   
    public function run()
    {
        $products = [
            [
                'name' => 'Smartphone',
                'description' => 'A powerful smartphone with a high-resolution display and advanced camera features.',
                'mrp' => 44999,
                'price' => 39999,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Laptop',
                'description' => 'A sleek and powerful laptop with a fast processor and long-lasting battery life.',
                'mrp' => 230000,
                'price' => 220000,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Headphones',
                'description' => 'High-quality headphones with noise-canceling technology for immersive audio experience.',
                'mrp' => 1500,
                'price' => 1400,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Smartwatch',
                'description' => 'A stylish smartwatch with fitness tracking, notifications, and customizable watch faces.',
                'mrp' => 5999,
                'price' => 4999,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Wireless Speaker',
                'description' => 'Portable wireless speaker with crisp sound and long-lasting battery, perfect for outdoor adventures.',
                'mrp' => 3500,
                'price' => 2900,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Tablet',
                'description' => 'A lightweight tablet with a high-definition display, ideal for reading, gaming, and streaming.',
                'mrp' => 120000,
                'price' => 100000,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Camera',
                'description' => 'A professional-grade camera with advanced features for capturing stunning photos and videos.',
                'mrp' => 500000,
                'price' => 490000,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Gaming Console',
                'description' => 'State-of-the-art gaming console with immersive graphics and a vast library of games.',
                'mrp' => 400,
                'price' => 350,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Fitness Tracker',
                'description' => 'An activity tracker that monitors your daily steps, calories burned, and sleep patterns.',
                'mrp' => 100,
                'price' => 80,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Bluetooth Earbuds',
                'description' => 'Wireless earbuds with Bluetooth connectivity and sweat-resistant design, perfect for workouts.',
                'mrp' => 70,
                'price' => 50,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'External Hard Drive',
                'description' => 'High-capacity external hard drive for storing photos, videos, music, and documents.',
                'mrp' => 120,
                'price' => 100,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Power Bank',
                'description' => 'Portable power bank with fast-charging technology to keep your devices powered on the go.',
                'mrp' => 40,
                'price' => 30,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with precise tracking and customizable buttons for productivity.',
                'mrp' => 20,
                'price' => 15,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Printer',
                'description' => 'A multifunction printer that prints, scans, and copies documents with ease.',
                'mrp' => 150,
                'price' => 120,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Bluetooth Speaker',
                'description' => 'Compact Bluetooth speaker with 360-degree sound and built-in microphone for hands-free calls.',
                'mrp' => 60,
                'price' => 45,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'USB Flash Drive',
                'description' => 'A reliable USB flash drive for storing and transferring files between devices.',
                'mrp' => 10,
                'price' => 8,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Smart Bulb',
                'description' => 'Smart LED bulb that can be controlled remotely via smartphone app, with adjustable brightness and color options.',
                'mrp' => 25,
                'price' => 20,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Wireless Keyboard',
                'description' => 'Slim and lightweight wireless keyboard with responsive keys for comfortable typing.',
                'mrp' => 30,
                'price' => 25,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'Security Camera',
                'description' => 'Outdoor security camera with motion detection and night vision capabilities for home surveillance.',
                'mrp' => 100,
                'price' => 90,
                'image' => '1710759567.png'
            ],
            [
                'name' => 'VR Headset',
                'description' => 'Virtual reality headset for immersive gaming and multimedia experiences.',
                'mrp' => 150,
                'price' => 130,
                'image' => '1710759567.png'
            ],
            // Add more products as needed
        ];

        foreach ($products as $productData) {
            Product::create($productData);
        }
    }
}
