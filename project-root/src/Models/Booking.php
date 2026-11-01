<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Booking
{
    public function create(array $data): bool
    {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("
            INSERT INTO bookings (customer_name, phone, email, booking_date, booking_time, guests_count, comments) 
            VALUES (:name, :phone, :email, :date, :time, :guests, :comments)
        ");

        return $stmt->execute([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'] ?? null,
            'date' => $data['date'],
            'time' => $data['time'],
            'guests' => $data['cnt'],
            'comments' => $data['comments'] ?? null
        ]);
    }
}
