<?php
namespace App\Models;

use App\Core\Database;
use PDO;

class Order
{
    public function create(array $data, array $items): bool
    {
        $pdo = Database::getConnection();
        
        try {
            $pdo->beginTransaction();

            // 1. Создаем сам заказ
            $stmt = $pdo->prepare("
                INSERT INTO orders (customer_name, phone, address, delivery_time, status) 
                VALUES (:name, :phone, :address, :time, 'new')
            ");
            $stmt->execute([
                'name' => $data['name'] ?? 'Клиент',
                'phone' => $data['phone'],
                'address' => $data['address'],
                'time' => $data['delivery_time'] ?: null
            ]);
            
            $orderId = $pdo->lastInsertId();
            $totalPrice = 0;

            // 2. Добавляем товары в заказ (если массив с блюдами передан)
            if (!empty($items)) {
                $stmtItem = $pdo->prepare("
                    INSERT INTO order_items (order_id, product_id, quantity, price_at_purchase) 
                    VALUES (:order_id, :product_id, 1, :price)
                ");
                $stmtProduct = $pdo->prepare("SELECT price FROM products WHERE id = :id");
                
                foreach ($items as $productId) {
                    $stmtProduct->execute(['id' => $productId]);
                    $product = $stmtProduct->fetch();
                    
                    if ($product) {
                        $stmtItem->execute([
                            'order_id' => $orderId,
                            'product_id' => $productId,
                            'price' => $product['price']
                        ]);
                        $totalPrice += $product['price'];
                    }
                }
            }

            // 3. Обновляем итоговую сумму заказа
            $pdo->prepare("UPDATE orders SET total_price = :total WHERE id = :id")
                ->execute(['total' => $totalPrice, 'id' => $orderId]);

            $pdo->commit();
            return true;

        } catch (\Exception $e) {
            $pdo->rollBack();
            error_log("Ошибка при создании заказа: " . $e->getMessage());
            return false;
        }
    }
}